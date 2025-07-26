<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\FeeModel;
use App\Models\Admin\AdmissionModel; // Ensure this exists
use CodeIgniter\Database\BaseBuilder;

class Fees extends BaseController
{


 public function index()
{
    $db = \Config\Database::connect();
    $request = \Config\Services::request();

    $course = $request->getGet('course');
    $year = $request->getGet('year'); // Admission date से year निकालना होगा

    $builder = $db->table('fees');
    $builder->select('fees.*, admissions.name as student_name, admissions.course, admissions.admission_date');
    $builder->join('admissions', 'admissions.id = fees.student_id');

    // Filters
    if ($course) {
        $builder->where('admissions.course', $course);
    }

    if ($year) {
        $builder->where('YEAR(admissions.admission_date)', $year);
    }

    $query = $builder->get();
    $data['fees'] = $query->getResultArray();

    // Unique course/year filters
    $admissionModel = new AdmissionModel();
    $data['courses'] = $admissionModel->distinct()->select('course')->findAll();
    $data['years'] = $admissionModel->select('YEAR(admission_date) as year')->groupBy('year')->orderBy('year', 'desc')->findAll();

    $data['selectedCourse'] = $course;
    $data['selectedYear'] = $year;

    return view('admin/fees/index', $data);
}





   public function create()
{
    $admissionModel = new \App\Models\Admin\AdmissionModel();

    // GET params
    $course = $this->request->getGet('course');
    $year = $this->request->getGet('year');

    // Dropdown के लिए unique courses
    $courses = $admissionModel->distinct()->select('course')->findAll();

    // Unique years from admission_date
    $years = $admissionModel->select('YEAR(admission_date) as year')
                ->distinct()
                ->orderBy('year', 'DESC')
                ->findAll();

    // Filter query
    $query = $admissionModel;

    if ($course) {
        $query = $query->where('course', $course);
    }

    if ($year) {
        $query = $query->where('YEAR(admission_date)', $year);
    }

    $students = $query->orderBy('name')->findAll();

    return view('admin/fees/create', [
        'students' => $students,
        'courses' => $courses,
        'years' => $years,
        'selectedCourse' => $course,
        'selectedYear' => $year
    ]);
}


    public function store()
    {
        $feeModel = new FeeModel();
        $feeModel->save([
            'student_id' => $this->request->getPost('student_id'),
            'installment_number' => $this->request->getPost('installment_number'),
            'amount' => $this->request->getPost('amount'),
            'payment_date' => $this->request->getPost('payment_date'),
            'receipt_number' => $this->request->getPost('receipt_number')
        ]);

        return redirect()->to('/admin/fees')->with('success', 'Fee recorded successfully.');
    }

    public function edit($id)
{
    $feeModel = new \App\Models\Admin\FeeModel();
    $admissionModel = new \App\Models\Admin\AdmissionModel();

    $fee = $feeModel->find($id);
    $students = $admissionModel->findAll();

    if (!$fee) {
        return redirect()->to('/admin/fees')->with('error', 'Fee record not found.');
    }

    return view('admin/fees/edit', [
        'fee' => $fee,
        'students' => $students
    ]);
}

public function update($id)
{
    $feeModel = new \App\Models\Admin\FeeModel();

    $data = [
        'student_id' => $this->request->getPost('student_id'),
        'installment_number' => $this->request->getPost('installment_number'),
        'amount' => $this->request->getPost('amount'),
        'payment_date' => $this->request->getPost('payment_date'),
        'receipt_number' => $this->request->getPost('receipt_number'),
    ];

    $feeModel->update($id, $data);

    return redirect()->to('/admin/fees')->with('success', 'Fee record updated successfully.');
}

    public function delete($id)
{
    $feeModel = new \App\Models\Admin\FeeModel();

    // Check if record exists
    $fee = $feeModel->find($id);
    if (!$fee) {
        return redirect()->back()->with('error', 'Fee record not found.');
    }

    // Delete
    $feeModel->delete($id);

    return redirect()->to(site_url('admin/fees'))->with('success', 'Fee record deleted successfully.');
}

public function view($student_id)
{
    $studentModel = new \App\Models\Admin\AdmissionModel();
    $feeModel = new \App\Models\Admin\FeeModel();

    // Fetch student
    $student = $studentModel->find($student_id);
    if (!$student) {
        return redirect()->to('/admin/fees')->with('error', 'Student not found.');
    }

    // Fetch fees paid by student
    $fees = $feeModel->where('student_id', $student_id)->findAll();

    // Calculate total paid
    $totalPaid = 0;
    foreach ($fees as $fee) {
        $totalPaid += $fee['amount'];
    }

    // Fetch dynamic values from admission table
    $courseFee = $student['course_fee'] ?? 0;
    $discount = $student['discount'] ?? 0;

    // Calculate pending
    $pendingAmount = $courseFee - ($totalPaid + $discount);

    return view('admin/fees/view', [
        'student' => $student,
        'fees' => $fees,
        'totalPaid' => $totalPaid,
        'pendingAmount' => $pendingAmount,
        'courseFee' => $courseFee,
        'discount' => $discount
    ]);
}


public function receipt($id)
{
    $feeModel = new \App\Models\Admin\FeeModel();
    $admissionModel = new \App\Models\Admin\AdmissionModel();

    $fee = $feeModel->find($id);
    if (!$fee) {
        return redirect()->back()->with('error', 'Installment not found.');
    }

    $student = $admissionModel->find($fee['student_id']);
    $allFees = $feeModel->where('student_id', $fee['student_id'])->findAll();

    $totalPaid = 0;
    foreach ($allFees as $f) {
        $totalPaid += $f['amount'];
    }

    $courseFee = $student['course_fee'] ?? 0;
    $discount = $student['discount'] ?? 0;
    $due = $courseFee - ($totalPaid + $discount);

    return view('admin/fees/receipt', [
        'fee' => $fee,
        'student' => $student,
        'totalPaid' => $totalPaid,
        'courseFee' => $courseFee,
        'discount' => $discount,
        'due' => $due
    ]);
}

       public function feesTotalReport()
{
    $admissionModel = new \App\Models\Admin\AdmissionModel();
    $feeModel = new \App\Models\Admin\FeeModel();

    $courseFilter = $this->request->getGet('course');
    $sessionFilter = $this->request->getGet('session');

    // Filtered students
    $query = $admissionModel;
    if ($courseFilter) {
        $query = $query->where('course', $courseFilter);
    }
    if ($sessionFilter) {
        $query = $query->where('YEAR(admission_date)', $sessionFilter);
    }

    $students = $query->findAll();

    // Total Paid + Pending
    foreach ($students as &$student) {
        $paidFees = $feeModel->where('student_id', $student['id'])->selectSum('amount')->first();
        $student['total_paid'] = $paidFees['amount'] ?? 0;
        $student['pending'] = ($student['course_fee'] - $student['discount']) - $student['total_paid'];
    }

    // Dropdown data
    $courses = $admissionModel->distinct()->select('course')->findAll();
    $sessions = $admissionModel->select("YEAR(admission_date) AS session")->distinct()->findAll();

    return view('admin/fees/fees_total_report', [
        'students' => $students,
        'courses' => $courses,
        'sessions' => $sessions,
        'courseFilter' => $courseFilter,
        'sessionFilter' => $sessionFilter,
    ]);
}







}

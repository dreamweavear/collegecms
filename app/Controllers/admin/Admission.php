<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\Admin\AdmissionModel;




class Admission extends BaseController
{
    public function index()
    {
        $model = new AdmissionModel();
        $data['students'] = $model->findAll();
        return view('admission/list', $data);
    }

    public function create()
    {
        return view('admission/form');
    }

    public function store()
    {
        helper(['form', 'url']);
         // ✅ STEP 1: Define model पहले
        $admissionModel = new \App\Models\Admin\AdmissionModel();
        $feesModel = new \App\Models\Admin\FeeModel();

        $rules = [
            'name' => 'required',
            'father_name' => 'required',
            'dob' => 'required',
            'course' => 'required',
            'phone' => 'required',
            'email' => 'required|valid_email',
            'photo' => 'uploaded[photo]|max_size[photo,2048]|is_image[photo]'
        ];

        if (!$this->validate($rules)) {
            return view('admission/form', [
                'validation' => $this->validator
            ]);
        }

        $photoFile = $this->request->getFile('photo');
        $newName = $photoFile->getRandomName();
        $photoFile->move('uploads/', $newName);

 

        $data = [
            'admission_date' => $this->request->getPost('admission_date'),

            'admission_amount' => $this->request->getPost('admission_amount'),
            'receipt_number'   => $this->request->getPost('receipt_number'),

            'course' => $this->request->getPost('course'),
            'name' => $this->request->getPost('name'),
            'father_name' => $this->request->getPost('father_name'),
            'dob' => $this->request->getPost('dob'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'course_fee' => $this->request->getPost('course_fee'),
            'discount' => $this->request->getPost('discount'),
        
            'photo' => $newName,
        ];



        $admissionModel->insert($data); // 👈 यही model object use करें
        $studentId = $admissionModel->getInsertID(); // ✅ now correct ID


        // Step 3: Save first installment as admission fee
        $admissionFee = $this->request->getPost('admission_fee');
        if ($admissionFee > 0) {
        $feesModel->save([
            'student_id' => $studentId,
            'installment_number' => 1,
            'amount' => $admissionFee,
            'payment_date' => $this->request->getPost('admission_date'),
            //'receipt_number' => rand(1000, 9999)

            'receipt_number' => $this->request->getPost('receipt_number')


        ]);
    }
        //return redirect()->to('/admin/admission')->with('success', 'Admission created successfully');
            return redirect()->to('/admin/fees/view/' . $studentId);
    }

    public function edit($id)
    {
        $model = new AdmissionModel();
        $data['student'] = $model->find($id);

        if (!$data['student']) {
            return redirect()->to('/admin/admission')->with('error', 'Student not found');
        }

        return view('admission/edit', $data);  // अगर आपने view/admission/edit.php रखा है
    

    }

    public function delete($id)
    {
        $model = new AdmissionModel();
        $model->delete($id);
        return redirect()->to('/admin/admission')->with('success', 'Deleted successfully');
    }
    public function update($id)
{
    helper(['form', 'url']);

    $model = new AdmissionModel();
    $student = $model->find($id);

    if (!$student) {
        return redirect()->to('/admin/admission')->with('error', 'Student not found');
    }

    $rules = [
        'name' => 'required',
        'father_name' => 'required',
        'dob' => 'required',
        'course' => 'required',
        'phone' => 'required',
        'email' => 'required|valid_email',
    ];

    if (!$this->validate($rules)) {
        return view('admission/edit', [
            'validation' => $this->validator,
            'student' => $student
        ]);
    }

    $data = [
        'name' => $this->request->getPost('name'),
        'father_name' => $this->request->getPost('father_name'),
        'dob' => $this->request->getPost('dob'),
        'course' => $this->request->getPost('course'),
        'phone' => $this->request->getPost('phone'),
        'email' => $this->request->getPost('email'),
    ];

    // If new photo uploaded, replace
    $photoFile = $this->request->getFile('photo');
    if ($photoFile && $photoFile->isValid()) {
        $newName = $photoFile->getRandomName();
        $photoFile->move('uploads/', $newName);
        $data['photo'] = $newName;
    }

    $model->update($id, $data);

    return redirect()->to('/admin/admission')->with('success', 'Admission updated successfully');
}




}

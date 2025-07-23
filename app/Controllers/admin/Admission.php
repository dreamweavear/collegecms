<?php
namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\AdmissionModel;

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

        $model = new AdmissionModel();

        $data = [
            'name' => $this->request->getPost('name'),
            'father_name' => $this->request->getPost('father_name'),
            'dob' => $this->request->getPost('dob'),
            'course' => $this->request->getPost('course'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'photo' => $newName,
        ];

        $model->insert($data);
        return redirect()->to('/admin/admission')->with('success', 'Admission created successfully');
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

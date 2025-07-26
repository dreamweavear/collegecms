<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdmissionModel;

class AdmissionPage extends BaseController
{
    public function index()
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

        $model = new \App\Models\AdmissionModel();

        $data = [
            'course' => $this->request->getPost('course'),
            'name' => $this->request->getPost('name'),
            'father_name' => $this->request->getPost('father_name'),
            'dob' => $this->request->getPost('dob'),
            'course' => $this->request->getPost('course'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
             'course_fee' => $this->request->getPost('course_fee'),
            'discount' => $this->request->getPost('discount'),
            'admission_date' => $this->request->getPost('admission_date'),

            'photo' => $newName,
        ];

        $id = $model->insert($data);
        $student = $model->find($id);

        return view('admission/thankyou', ['student' => $student]);
    }
}

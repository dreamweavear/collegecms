<?php
namespace App\Controllers;
use App\Models\AdmissionModel;
use CodeIgniter\HTTP\Files\UploadedFile;

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

        $model = new AdmissionModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'father_name' => $this->request->getPost('father_name'),
            'dob' => $this->request->getPost('dob'),
            'course' => $this->request->getPost('course'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'),
            'photo' => ''
        ];

        $img = $this->request->getFile('photo');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $imgName = $img->getRandomName();
            $img->move('uploads/', $imgName);
            $data['photo'] = $imgName;
        }

        $model->save($data);
        return redirect()->to('/admission');
    }

    public function delete($id)
    {
        $model = new AdmissionModel();
        $model->delete($id);
        return redirect()->to('/admission');
    }

    public function edit($id)
    {
        $model = new AdmissionModel();
        $data['student'] = $model->find($id);
        return view('admission/edit', $data);
    }

    public function update($id)
    {
        $model = new AdmissionModel();
        $data = [
            'name' => $this->request->getPost('name'),
            'father_name' => $this->request->getPost('father_name'),
            'dob' => $this->request->getPost('dob'),
            'course' => $this->request->getPost('course'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email')
        ];

        $img = $this->request->getFile('photo');
        if ($img && $img->isValid() && !$img->hasMoved()) {
            $imgName = $img->getRandomName();
            $img->move('uploads/', $imgName);
            $data['photo'] = $imgName;
        }

        $model->update($id, $data);
        return redirect()->to('/admission');
    }
}

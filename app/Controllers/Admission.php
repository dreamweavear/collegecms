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

// new modified store() for pdf print
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
        return view('admission/create', [
            'validation' => $this->validator
        ]);
    }

    // File upload
    $photoFile = $this->request->getFile('photo');
    $newName = $photoFile->getRandomName();
    $photoFile->move('uploads/', $newName);

    $model = new \App\Models\AdmissionModel();

    $data = [
        'name' => $this->request->getPost('name'),
        'father_name' => $this->request->getPost('father_name'),
        'dob' => $this->request->getPost('dob'),
        'course' => $this->request->getPost('course'),
        'phone' => $this->request->getPost('phone'),
        'email' => $this->request->getPost('email'),
        'photo' => $newName,
    ];

    $id = $model->insert($data);

    // PDF Receipt Generation
    $student = $model->find($id);
    $html = view('admission/receipt', ['student' => $student]);

    // DOMPDF use
    $dompdf = new \Dompdf\Dompdf();
    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Admission_Receipt_{$student['name']}.pdf", ["Attachment" => false]);

    // Note: No return view() after stream()
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
        // below is added code for validation starts
        helper(['form', 'url']);
    $validation = \Config\Services::validation();
    $rules = [
        'name'        => 'required|min_length[3]',
        'father_name' => 'required|min_length[3]',
        'dob'         => 'required|valid_date',
        'course'      => 'required',
        'phone'       => 'required|numeric|min_length[10]',
        'email'       => 'required|valid_email',
        'photo'       => 'if_exist|is_image'
    ];
    if (!$this->validate($rules)) {
        // Agar validation fail ho jaye toh edit form dubaara show karo
        $model = new AdmissionModel();
        $data['student'] = $model->find($id);
        $data['validation'] = $validation;
        return view('admission/edit', $data);  // edit form again with old values
    }
    // above validation code ends here
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
        return redirect()->to('/admission')->with('success', 'Student updated successfully');
    }


    // code for dompdf for receipt printout


    
}



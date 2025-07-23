<?php namespace App\Controllers\Academic;

use App\Models\Academic\CourseModel;
use CodeIgniter\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $model = new CourseModel();
        $data['courses'] = $model->findAll();
        return view('courses/index', $data);
    }
    

 public function create()
{
    $courseModel = new \App\Models\Academic\CourseModel();

    $data = [
        'courses' => $courseModel->findAll() // form + list
    ];

    //echo view('templates/headeradmin');
    echo view('courses/create', $data);
    //echo view('templates/footerdash');
}

//------------------
    public function store()
    {
        $model = new CourseModel();
        $slug = url_title($this->request->getPost('name'), '-', true);


        $model->save([
            'name' => $this->request->getPost('name'),
            'slug' => $slug,
         ]);
          return redirect()->to('/admin/courses');
       }

    public function edit($id)
    {
        $model = new CourseModel();
        $data['course'] = $model->find($id);
        return view('courses/edit', $data);
    }

    public function update($id)
    {
        $model = new CourseModel();
        $slug = url_title($this->request->getPost('name'), '-', true);
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'slug' => $slug,
        ]);
        return redirect()->to('/admin/courses');
    }

    public function delete($id)
    {
        $model = new CourseModel();
        $model->delete($id);
        return redirect()->to('/admin/courses');
    }
}

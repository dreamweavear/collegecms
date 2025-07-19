<?php namespace App\Controllers;

use App\Models\CourseModel;
use CodeIgniter\Controller;

class CourseController extends Controller
{
    public function index()
    {
        $model = new CourseModel();
        $data['courses'] = $model->findAll();
        return view('courses/index', $data);
    }

    //public function create()
   // {
        //return view('courses/create');
   // }

//  course dubara na add ho jaye iske liye code 
    

 public function create()
{
    $courseModel = new \App\Models\CourseModel();

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

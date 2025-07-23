<?php namespace App\Controllers\Academic;

use App\Models\Academic\PaperModel;
use App\Models\Academic\courseModel;
use CodeIgniter\Controller;

class PaperController extends Controller
{
    public function index()
    {
        $model = new PaperModel();
        $data['papers'] = $model->select('papers.*, courses.name as course_name')
                                ->join('courses', 'courses.id = papers.course_id')
                                ->findAll();
        return view('papers/index', $data);
    }

public function create()
{
    $courseModel = new \App\Models\Academic\CourseModel();
    $paperModel  = new \App\Models\Academic\PaperModel();

    $data = [
        'courses' => $courseModel->findAll(),
        'papers'  => $paperModel->findAll(), // 👈 Add existing paper list
    ];

    //echo view('templates/headeradmin');
    echo view('papers/create', $data);
    //echo view('templates/footerdash');
}

    public function store()
    {
        $model = new PaperModel();
        $slug = url_title($this->request->getPost('name'), '-', true);
        $model->save([
            'name' => $this->request->getPost('name'),
            'course_id' => $this->request->getPost('course_id'),
            'slug' => $slug,
        ]);
        return redirect()->to('/admin/papers');
    }

    public function edit($id)
    {
        $model = new PaperModel();
        $courseModel = new courseModel();
        $data['paper'] = $model->find($id);
        $data['courses'] = $courseModel->findAll();
        return view('papers/edit', $data);
    }

    public function update($id)
    {
        $model = new PaperModel();
        $slug = url_title($this->request->getPost('name'), '-', true);
        $model->update($id, [
            'name' => $this->request->getPost('name'),
            'course_id' => $this->request->getPost('course_id'),
            'slug' => $slug,
        ]);
        return redirect()->to('/admin/papers');
    }

    public function delete($id)
    {
        $model = new PaperModel();
        $model->delete($id);
        return redirect()->to('/admin/papers');
    }



    // new function for adding paper list accourding do course 

    



}

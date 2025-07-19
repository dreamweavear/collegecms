<?php namespace App\Controllers;

use App\Models\UnitModel;
use App\Models\PaperModel;
use CodeIgniter\Controller;

class UnitController extends Controller
{
    public function index()
    {
        $model = new UnitModel();
        $data['units'] = $model->select('units.*, papers.name as paper_name')
                               ->join('papers', 'papers.id = units.paper_id')
                               ->findAll();
        return view('units/index', $data);
    }

public function create()
{
    $unitModel  = new \App\Models\UnitModel();
    $paperModel = new \App\Models\PaperModel();

    $data = [
        'papers' => $paperModel->findAll(),
        'units'  => $unitModel->findAll() // ✅ required for list display
    ];

    //echo view('templates/headeradmin');
    echo view('units/create', $data);
    //echo view('templates/footerdash');
}





    public function store()
    {
        $model = new UnitModel();
        $model->save([
            'paper_id' => $this->request->getPost('paper_id'),
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('/admin/units');
    }

    public function edit($id)
    {
        $model = new UnitModel();
        $paperModel = new PaperModel();
        $data['unit'] = $model->find($id);
        $data['papers'] = $paperModel->findAll();
        return view('units/edit', $data);
    }

    public function update($id)
    {
        $model = new UnitModel();
        $model->update($id, [
            'paper_id' => $this->request->getPost('paper_id'),
            'name' => $this->request->getPost('name'),
        ]);
        return redirect()->to('/admin/units');
    }

    public function delete($id)
    {
        $model = new UnitModel();
        $model->delete($id);
        return redirect()->to('/admin/units');
    }
}

<?php
namespace App\Controllers;
use App\Models\AdmissionModel;

class AdminDashboard extends BaseController
{
    public function index()
    {
        $session = session();
        if (! $session->get('isLoggedIn')) {
            return redirect()->to('/login');
        }

        $model = new AdmissionModel();
        $data['students'] = $model->findAll();

        return view('admin/dashboard', $data);
    }
}
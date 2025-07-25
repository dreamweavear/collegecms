<?php
namespace App\Controllers\Admin;
use App\Models\AdmissionModel;

use App\Controllers\BaseController;


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
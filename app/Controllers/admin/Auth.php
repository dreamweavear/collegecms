<?php
namespace App\Controllers\Admin;
use App\Controllers\BaseController; // ✅ सही

use App\Models\Admin\AdminModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('admin/login');
    }

    public function check()
    {
        $session = session();
        $model = new AdminModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $admin = $model->where('username', $username)->first();


        if ($admin && password_verify($password, $admin['password'])) {
            $session->set([
                'isLoggedIn' => true,
                'adminName' => $admin['username']
            ]);
            return redirect()->to('/admin/dashboard');
        } else {
            $session->setFlashdata('error', 'Invalid Username or Password');
            return redirect()->to('/login');
        }
    }


public function logout()
{
    session()->destroy();
    return redirect()->to('/home'); // ✅ अब home page पर भेजेगा+

    //return redirect()->to(base_url()); // अगर आपने base_url को अपनी site का home बनाया है

}

}
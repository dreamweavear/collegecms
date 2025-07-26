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

public function changePassword()
{
    $session = session();
    $model   = new \App\Models\AdminModel();

    // 1) Not logged-in → kick out
    if (! $session->get('isLoggedIn')) {
        return redirect()->to('/login');
    }

    // 2) Show the blank form on GET
    if ($this->request->getMethod() !== 'post') {
        return view('admin/change_password');
    }

    // 3) Validate the POST
    $rules = [
        'old_password'     => 'required',
        'new_password'     => 'required|min_length[8]',
        'confirm_password' => 'required|matches[new_password]'
    ];

    if (! $this->validate($rules)) {
        return redirect()->back()
                         ->withInput()
                         ->with('errors', $this->validator->getErrors());
    }

    // 4) Fetch user
    $admin = $model->where('username', $session->get('adminName'))->first();
    if (! $admin) {
        return redirect()->back()->with('error', 'User record not found');
    }

    // 5) Verify old password
    if (! password_verify($this->request->getPost('old_password'), $admin->password)) {
        return redirect()->back()->with('error', 'Old password is wrong');
    }

    // 6) Save new password
    $model->update($admin->id, [
        'password' => password_hash($this->request->getPost('new_password'), PASSWORD_DEFAULT)
    ]);

    return redirect()->back()->with('success', 'Password changed successfully');
}


}
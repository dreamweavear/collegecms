<?php namespace App\Controllers;
use App\Models\ContactModel;

class Contact extends BaseController
{
    // फॉर्म दिखाने के लिए
    public function index()
    {
         
        return view('templates/headerdash1')
            . view('templates/headerdash2')
            . view('pages/contact')
            . view('templates/footerdash');
    }

    
    // फॉर्म सबमिट होने पर
    public function submit()
    {
        // डेटा लें
        helper(['form', 'url']);
          $model = new ContactModel();
          
        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'phone' => $this->request->getPost('phone'),
            'message' => $this->request->getPost('message')
        ];
        
         $model->save($data);

    return redirect()->to('/contact')->with('success', 'Your Message has been submitted  successfully.');
    }
}




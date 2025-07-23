<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index1(): string
    {
        return view('welcome_message');
    }

    public function index($page = 'home')
    {
        if (! is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        return view('templates/headerdash1', $data)
            . view('pages/' . $page)
           . view('templates/footerdash');
    }
}

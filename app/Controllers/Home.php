<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Inicio';

        return view('Home', $data);
    }

    public function luminaria() //: string
    {
        echo "luminaria";
    }
}

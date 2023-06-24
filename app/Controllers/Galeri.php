<?php

namespace App\Controllers;

class Galeri extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Galeri | Wilayah 3',
        ];
        return view('galeri/index', $data);
    }
}

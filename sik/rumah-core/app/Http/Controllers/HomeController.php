<?php

namespace App\Http\Controllers;

use App\Models\Innovation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHome()
    {
        $data_inovasi = Innovation::whereNotNull('photo')->latest('id')->limit(3)->get();

        return view('home/home', [
            'innovations' => $data_inovasi,
        ]);
    }
}

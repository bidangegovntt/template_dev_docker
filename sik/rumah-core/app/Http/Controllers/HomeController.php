<?php

namespace App\Http\Controllers;

use App\Models\Innovation;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	protected $innovationLimit = 3;
	protected $trainingLimit = 2;

    public function showHome()
    {
        $data_inovasi = Innovation::whereNotNull('photo')->latest('id')->limit($this->innovationLimit)->get();
		$infoTerbaru = Training::orderBy('created_at', 'desc')->limit($this->trainingLimit)->get();

        return view('home/home', [
            'innovations' => $data_inovasi,
			'infoTerbaru' => $infoTerbaru,
        ]);
    }
}

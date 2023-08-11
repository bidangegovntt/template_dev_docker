<?php

namespace App\Http\Controllers;

use App\Models\Innovation;
use App\Models\Training;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	protected $innovationLimit = 3;
	protected $trainingLimit = 3;

    public function showHome()
    {
        $data_inovasi = Innovation::whereNotNull('photo')->latest('id')->limit($this->innovationLimit)->get();
		$trainings = Training::orderBy('created_at', 'desc')->limit($this->trainingLimit)->get();

        return view('home/home', [
            'innovations' => $data_inovasi,
			'trainings' => $trainings,
        ]);
    }
}

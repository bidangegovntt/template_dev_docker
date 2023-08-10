<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function showTraining(Request $request, Training $training)
    {
        return view('home.training-show', [
            'training' => $training,
        ]);
    }
}

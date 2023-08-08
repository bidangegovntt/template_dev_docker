<?php

namespace App\Http\Controllers;

use App\Models\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function showTraining(Request $request)
    {
        $training_id = $request->training_id;

        $data_training = Training::find($training_id);

        return view('home.training-show', [
            'training' => $data_training,
        ]);
    }
}

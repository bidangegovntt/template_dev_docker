<?php

namespace App\Http\Controllers;

use App\Models\Training;
use App\Models\TrainingCategory;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function showTraining(Request $request, Training $training)
    {
        return view('home.training-show', [
            'training' => $training,
        ]);
    }

	public function showCategoryTraining(TrainingCategory $trainingCategory)
	{
		$training = $trainingCategory->training()->paginate();

        return view('home.training', [
            'training_list' => $training,
        ]);
	}
}

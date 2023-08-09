<?php

namespace App\Http\Controllers;

use App\Models\LearningMaterial;
use App\Models\LearningMaterialAttachment;
use Illuminate\Http\Request;

class KlinikInovasiController extends Controller
{
    public function showLearningMaterial(Request $request)
    {
        $learning_id = $request->id;

        $learning_material = LearningMaterial::find($learning_id);
        $learning_material_attachments = LearningMaterialAttachment::where('learning_material_id', $learning_id)->get();

        return view('home/klinik-inovasi-detail', compact('learning_material', 'learning_material_attachments'));
    }
}

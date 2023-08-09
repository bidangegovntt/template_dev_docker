<?php

namespace App\Http\Controllers;

use App\Helpers\Queries;
use App\Models\AttachmentType;
use App\Models\Innovation;
use App\Models\InnovationFile;
use Illuminate\Http\Request;

class InnovationsController extends Controller
{
    public function showInnovation(Request $request)
    {
        $id = $request->id;

        $innovation = Queries::showInnovation($id);
        $innovation_files = $this->getFiles($id);


        if (empty($innovation)) {
            return abort('404');
        }

        return view('home.profil-inovasi-show', [
            'innovation' => $innovation,
            'innovation_files' => $innovation_files,
        ]);
    }

    private function getFiles($id)
    {
        $fileType = AttachmentType::all();

        $file_list = array();

        foreach ($fileType as $key => $value) {
            $files = InnovationFile::where("innovations_id", $id)
                ->where("attachment_type_id", $value['id'])
                ->get();

            $value['files'] = sizeof($files) > 0 ? $files : array();

            $file_list[] = $value;
        }

        return $file_list;
        // return InnovationFile::where('innovations_id', '=', $id)->get();
    }
}

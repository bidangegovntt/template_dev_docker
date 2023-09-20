<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProposalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
    public function authorize()
    {
        return false;
    }
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
//            'name' => 'bail|required|string|max:255',
            // 'judul_proposal' => 'bail|required|string|max:255',
            // 'tanggal_mulai' => 'bail|required|string|max:255',
            // 'kelompok' => 'bail|required|string|max:255',
            // 'pernah_finalis99' => 'bail|required|string|max:255',
            // 'tahun_finalis99' => 'bail|required|string|max:255',
            // 'judul_finalis99' => 'bail|required|string|max:255',
            // 'link_youtube' => 'bail|required|string|max:255',
            // 'id_kategori' => 'bail|required|string|max:255',
            // 'sdgs' => 'bail|required|string|max:255',
            // 'up_implementasi' => 'bail|required|string|max:255',
            // 'path_up_implementasi' => 'bail|required|string|max:255',
            // 'up_identitas' => 'bail|required|string|max:255',
            // 'path_up_identitas' => 'bail|required|string|max:255',
            // 'up_replikasi' => 'bail|required|string|max:255',
            // 'path_up_replikasi' => 'bail|required|string|max:255',
            // 'created_by' => 'bail|required|string|max:255',
            // 'spbe' => 'bail|required|string|max:255',
            // 'ringkasan' => 'bail|required|string|max:255',
            // 'u_ringkasan' => 'bail|required|string|max:255',
            // 'path_u_ringkasan' => 'bail|required|string|max:255',
            // 'latar_belakang' => 'bail|required|string|max:255',
            // 'u_latar_belakang' => 'bail|required|string|max:255',
            // 'path_u_latar_belakang' => 'bail|required|string|max:255',
            // 'kebaharuan' => 'bail|required|string|max:255',
            // 'u_kebaharuan' => 'bail|required|string|max:255',
            // 'path_u_kebaharuan' => 'bail|required|string|max:255',
            // 'implementasi_inovasi' => 'bail|required|string|max:255',
            // 'u_implementasi_inovasi' => 'bail|required|string|max:255',
            // 'path_u_implementasi_inovasi' => 'bail|required|string|max:255',
            // 'signifikansi' => 'bail|required|string|max:255',
            // 'u_signifikansi' => 'bail|required|string|max:255',
            // 'path_u_signifikansi' => 'bail|required|string|max:255',
            // 'adaptabilitas_1' => 'bail|required|string|max:255',
            // 'u_adaptabilitas_1' => 'bail|required|string|max:255',
            // 'path_u_adaptabilitas_1' => 'bail|required|string|max:255',
            // 'adaptabilitas_2' => 'bail|required|string|max:255',
            // 'u_adaptabilitas_2' => 'bail|required|string|max:255',
            // 'path_u_adaptabilitas_2' => 'bail|required|string|max:255',
            // 'sumber_daya' => 'bail|required|string|max:255',
            // 'u_sumber_daya' => 'bail|required|string|max:255',
            // 'path_u_sumber_daya' => 'bail|required|string|max:255',
            // 'keberlanjutan' => 'bail|required|string|max:255',
            // 'u_keberlanjutan' => 'bail|required|string|max:255',
            // 'path_u_keberlanjutan' => 'bail|required|string|max:255'
        ];
    }
}

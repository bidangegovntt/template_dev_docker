<?php 
namespace App\Exports;
 
use App\Models\Proposal;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
 
class ProposalExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */ 
    public function headings():array{
        return[
            'Id',
            'judul_proposal',
            'tanggal_mulai',
            'kelompok',
            'pernah_finalis99',
            'tahun_finalis99',
            'judul_finalis99',
            'link_youtube',
            'id_kategori',
            'sdgs',
            'up_implementasi',
            'path_up_implementasi',
            'up_identitas',
            'path_up_identitas',
            'up_replikasi',
            'path_up_replikasi',
            'created_by',
            'spbe',
            'ringkasan',
            'u_ringkasan',
            'path_u_ringkasan',
            'latar_belakang',
            'u_latar_belakang',
            'path_u_latar_belakang',
            'kebaharuan',
            'u_kebaharuan',
            'path_u_kebaharuan',
            'implementasi_inovasi',
            'u_implementasi_inovasi',
            'path_u_implementasi_inovasi',
            'signifikansi',
            'u_signifikansi',
            'path_u_signifikansi',
            'adaptabilitas_1',
            'u_adaptabilitas_1',
            'path_u_adaptabilitas_1',
            'adaptabilitas_2',
            'u_adaptabilitas_2',
            'path_u_adaptabilitas_2',
            'sumber_daya',
            'u_sumber_daya',
            'path_u_sumber_daya',
            'keberlanjutan',
            'u_keberlanjutan',
            'path_u_keberlanjutan',
            'Created_at',
            'Updated_at', 
            'Created_by'
        ];
    } 
    public function collection()
    {
        return Proposal::all();
    }
}
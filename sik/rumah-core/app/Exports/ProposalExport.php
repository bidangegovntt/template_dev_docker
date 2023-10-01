<?php 
namespace App\Exports;
 
use App\Models\Proposal;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use DB; //import fungsi query builder
 
class ProposalExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */ 
    public function headings():array{
        // return[
        //     'Id',
        //     'judul_proposal',
        //     'tanggal_mulai',
        //     'kelompok',
        //     'pernah_finalis99',
        //     'tahun_finalis99',
        //     'judul_finalis99',
        //     'link_youtube',
        //     'id_kategori',
        //     'sdgs',
        //     'up_implementasi',
        //     'path_up_implementasi',
        //     'up_identitas',
        //     'path_up_identitas',
        //     'up_replikasi',
        //     'path_up_replikasi',
        //     'created_by',
        //     'spbe',
        //     'ringkasan',
        //     'u_ringkasan',
        //     'path_u_ringkasan',
        //     'latar_belakang',
        //     'u_latar_belakang',
        //     'path_u_latar_belakang',
        //     'kebaharuan',
        //     'u_kebaharuan',
        //     'path_u_kebaharuan',
        //     'implementasi_inovasi',
        //     'u_implementasi_inovasi',
        //     'path_u_implementasi_inovasi',
        //     'signifikansi',
        //     'u_signifikansi',
        //     'path_u_signifikansi',
        //     'adaptabilitas_1',
        //     'u_adaptabilitas_1',
        //     'path_u_adaptabilitas_1',
        //     'adaptabilitas_2',
        //     'u_adaptabilitas_2',
        //     'path_u_adaptabilitas_2',
        //     'sumber_daya',
        //     'u_sumber_daya',
        //     'path_u_sumber_daya',
        //     'keberlanjutan',
        //     'u_keberlanjutan',
        //     'path_u_keberlanjutan',
        //     'Created_at',
        //     'Updated_at', 
        //     'Created_by'
        // ];

        // return[
        //     'judul_proposal',
        //     'tanggal_mulai',
        //     'kelompok',
        //     'pernah_finalis99',
        //     'tahun_finalis99',
        //     'judul_finalis99',
        //     'link_youtube',
        //     'id_kategori',
        //     'sdgs',
        //     'path_up_implementasi',
        //     'path_up_identitas',
        //     'path_up_replikasi',
        //     'spbe',
        //     'ringkasan',
        //     'path_u_ringkasan',
        //     'latar_belakang',
        //     'path_u_latar_belakang',
        //     'kebaharuan',
        //     'path_u_kebaharuan',
        //     'implementasi_inovasi',
        //     'path_u_implementasi_inovasi',
        //     'signifikansi',
        //     'path_u_signifikansi',
        //     'adaptabilitas_1',
        //     'path_u_adaptabilitas_1',
        //     'adaptabilitas_2',
        //     'path_u_adaptabilitas_2',
        //     'sumber_daya',
        //     'path_u_sumber_daya',
        //     'keberlanjutan',
        //     'path_u_keberlanjutan',
        //     'Created_at',
        //     'Updated_at', 
        //     'Created_by'
        // ];

        return[
            'Judul Proposal',
            'Tanggal Mulai',
            'Kelompok',
            'Pernah Finalis99',
            'Tahun Finalis99',
            'Judul Finalis99',
            'Link Youtube',
            'Id Kategori',
            'SDGS',
            'File Implementasi',
            'File Identitas',
            'File Replikasi',
            'SPBE',
            'Ringkasan',
            'File Ringkasan',
            'Latar Belakang',
            'File Latar Belakang',
            'Kebaharuan',
            'File Kebaharuan',
            'Implementasi Inovasi',
            'File Implementasi Inovasi',
            'Signifikansi',
            'File Signifikansi',
            'Adaptabilitas 1',
            'File Adaptabilitas 1',
            'Adaptabilitas 2',
            'File Adaptabilitas 2',
            'Sumber Daya',
            'File Sumber Daya',
            'Keberlanjutan',
            'File Keberlanjutan',
            'Created At',
            'Updated At', 
            'Created By'
        ];
    } 

    public function collection()
    {
        return Proposal::all()->map(function($row){
            $data = clone $row;

            unset($data->id);
            unset($data->up_implementasi);
            unset($data->up_identitas);
            unset($data->up_replikasi);
            unset($data->u_ringkasan);
            unset($data->u_latar_belakang);
            unset($data->u_kebaharuan);
            unset($data->u_implementasi_inovasi);
            unset($data->u_signifikansi);
            unset($data->u_adaptabilitas_1);
            unset($data->u_adaptabilitas_2);
            unset($data->u_sumber_daya);
            unset($data->u_keberlanjutan);

            $propo = DB::table('kategories') 
				->where('id',$row->id_kategori)
				->get()->first();            

            $nm_user = DB::table('users') 
				->where('id',$row->created_by)
				->get()->first();            

            $data->judul_proposal = $data->judul_proposal;
            $data->tanggal_mulai = $data->tanggal_mulai;
            $data->kelompok = $data->kelompok;
            $data->pernah_finalis99 = $data->pernah_finalis99;
            $data->tahun_finalis99 = $data->tahun_finalis99;
            $data->judul_finalis99 = $data->judul_finalis99;
            $data->link_youtube = $data->link_youtube;
            $data->id_kategori = $propo->cat_name;
            $data->sdgs = $data->sdgs;
            $data->path_up_implementasi = $data->path_up_implementasi ? asset($data->path_up_implementasi):'';
            $data->path_up_identitas = $data->path_up_identitas ? asset($data->path_up_identitas):'';
            $data->path_up_replikasi = $data->path_up_replikasi ? asset($data->path_up_replikasi):'';
            $data->spbe = $data->spbe;
            $data->ringkasan = $data->ringkasan;
            $data->path_u_ringkasan = $data->path_u_ringkasan ? asset($data->path_u_ringkasan):'';
            $data->latar_belakang = $data->latar_belakang;
            $data->path_u_latar_belakang = $data->path_u_latar_belakang ? asset($data->path_u_latar_belakang):'';
            $data->kebaharuan = $data->kebaharuan;
            $data->path_u_kebaharuan = $data->path_u_kebaharuan ? asset($data->path_u_kebaharuan):'';
            $data->implementasi_inovasi = $data->implementasi_inovasi;
            $data->path_u_implementasi_inovasi = $data->path_u_implementasi_inovasi ? asset($data->path_u_implementasi_inovasi):'';
            $data->signifikansi = $data->signifikansi;
            $data->path_u_signifikansi = $data->path_u_signifikansi ? asset($data->path_u_signifikansi):'';
            $data->adaptabilitas_1 = $data->adaptabilitas_1;
            $data->path_u_adaptabilitas_1 = $data->path_u_adaptabilitas_1 ? asset($data->path_u_adaptabilitas_1):'';
            $data->adaptabilitas_2 = $data->adaptabilitas_2;
            $data->path_u_adaptabilitas_2 = $data->path_u_adaptabilitas_2 ? asset($data->path_u_adaptabilitas_2):'';
            $data->sumber_daya = $data->sumber_daya;
            $data->path_u_sumber_daya = $data->path_u_sumber_daya ? asset($data->path_u_sumber_daya):'';
            $data->keberlanjutan = $data->keberlanjutan;
            $data->path_u_keberlanjutan = $data->path_u_keberlanjutan ? asset($data->path_u_keberlanjutan):'';
            $data->created_at = $data->created_at;
            $data->updated_at = $data->updated_at;
            $data->created_by = $nm_user ? $nm_user->name : '';
        
            return $data;
		});
    }
}

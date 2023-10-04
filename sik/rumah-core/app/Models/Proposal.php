<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
/*	
    protected $primaryKey = 'id';
*/
    protected $table = 'proposals';
    protected $fillable = [
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
        'path_u_keberlanjutan'
    ];

	public function creator()
	{
		return $this->belongsTo(User::class, 'created_by',  'id');
	}

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori',  'id');
	}

    public function setSdgsAttribute($value)
    {
        $this->attributes['sdgs'] = json_encode($value);
//        $this->attributes['id_sdgs'] = json_encode($value);
    }

    public function getSdgsAttribute($value)
    {
        return $this->attributes['sdgs'] = json_decode($value);
//        return $this->attributes['id_sdgs'] = json_decode($value);
    }
/*
    public function setSdgsyAttribute($value)
    {
        $this->attributes['sdgs'] = json_encode($value);
    }

    public function getSdgsAttribute($value)
    {
        return $this->attributes['sdgs'] = json_decode($value);
    }
*/    
//        'NIS','NamaSiswa','Alamat'
//'judul_proposal','tanggal_mulai','kelompok','pernah_finalis99','tahun_finalis99','judul_finalis99','link_youtube','id_kategori','id_sdgs','up_implementasi','up_identitas','up_replikasi','spbe','rinkasan','u_ringkasan','latar_belakang','u_latar_belakang','kebaharuan','u_kebaruan','implementasi_inovasi','u_implementasi_inovasi','signifikansi','u_signifikansi','adaptabilitas_1','u_adaptabilitas_1','adaptabilitas_2','u_adaptabilitas_2','sumber_daya','u_sumber_daya','keberlanjutan','u_keberlanjutan',
	
}

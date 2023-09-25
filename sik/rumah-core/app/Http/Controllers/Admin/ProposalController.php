<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Proposal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB; //import fungsi query builder

use App\Exports\ProposalExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreProposalRequest;

class ProposalController extends Controller
{
	protected $defaultPagination = 25;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$this->authorize('super admin');

		$q = $request->input('q');
		$propo = Proposal::latest();

		if ($q) {
			$propo->where('judul_proposal', 'like', '%' . $q . '%');
		}
			
		$propo = $propo->paginate($this->defaultPagination);
/*
        return view ('propo.index',compact('propo'))->with('i', (request()->input('page', 1) -1) * 5);
*/
        // mengambil dari tabel kategori
		// $propo = DB::table('kategori') 
		// 		->join('proposals', 'proposals.id_kategori', '=', 'kategori.id')
		// 		->paginate();

		//tampilkan view barang dan kirim datanya ke view tersebut
		return view('/proposal/index')->with('propo', $propo);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proposal.daftarproposal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function ambil_kategori(){
//		$ambil_kat = Kategori::get();
//		return view('propo',['kategori' => $ambil_kat]);
	
        $ambil_kat = Kategori::all();
        return view('proposal.ambil_kategori', compact('cat_name'));
    }

//    public function store(Request $request)
    public function store(StoreProposalRequest $request)
    {
		/*
        $request->validate([
            'uid' => 'required',
            'judul' => 'required',
            'created_at' => 'required',
            'is_status' => 'required',
            'uniq_id' => 'required',
            'kelompok' => 'required',
            'pernah_finalis99' => 'required',
            'tahun_finalis99' => 'required',
            'judul_finalis99' => 'required',
            'link_youtube' => 'required',
            'cat_id' => 'required',
            'sdgs_id' => 'required',
            'unggah_pernyt_implementasi' => 'required',
            'unggah_pernyt_identitas' => 'required',
            'unggah_pernyt_replikasi' => 'required',
            'form_spbe' => 'required',
            'ringkasan' => 'required',
            'latar_belakang' => 'required',
            'kebaharuan' => 'required',
            'signifikansi' => 'required',
            'adaptabilitas_1' => 'required',
            'adaptabilitas_2' => 'required',
            'sumberdaya' => 'required',
            'keberlanjutan' => 'required',
        ]);
*/
/*
        $request->validate([
            'judul_proposal' => 'required',
            'tanggal_mulai' => 'required',
            'kelompok' => 'required',
            'pernah_finalis99' => 'required',
            'tahun_finalis99' => 'required',
            'judul_finalis99' => 'required',
            'link_youtube' => 'required',
            'id_kategori' => 'required',
            'id_sdgs' => 'required',
            'up_implementasi' => 'required',
            'up_identitas' => 'required',
            'up_replikasi' => 'required',
            'spbe' => 'required',
            'rinkasan' => 'required',
            'u_ringkasan' => 'required',
            'latar_belakang' => 'required',
            'u_latar_belakang' => 'required',
            'kebaharuan' => 'required',
            'u_kebaruan' => 'required',
            'implementasi_inovasi' => 'required',
            'u_implementasi_inovasi' => 'required',
            'signifikansi' => 'required',
            'u_signifikansi' => 'required',
            'adaptabilitas_1' => 'required',
            'u_adaptabilitas_1' => 'required',
            'adaptabilitas_2' => 'required',
            'u_adaptabilitas_2' => 'required',
            'sumber_daya' => 'required',
            'u_sumber_daya' => 'required',
            'keberlanjutan' => 'required',
            'u_keberlanjutan' => 'required',
        ]);
*/
        
/*        
        $request->validate([
            'judul_proposal' => 'required',
            'tanggal_mulai' => 'required',
            'kelompok' => 'required',
            'pernah_finalis99' => 'required',
            'tahun_finalis99' => 'required',
            'judul_finalis99' => 'required',
            'link_youtube' => 'required',
            'id_kategori' => 'required',
            'sdgs' => 'required|min:2',
            
        ]);
        Proposal::create($request->all());

        return redirect()->route('propo.index')->with('succes','Data Berhasil di Input');

$input['judul_proposal'] = $request->input('judul_proposal');
$input['tanggal_mulai'] = $request->input('tanggal_mulai');
$input['kelompok'] = $request->input('kelompok');
$input['pernah_finalis99'] = $request->input('pernah_finalis99');
$input['tahun_finalis99'] = $request->input('tahun_finalis99');
$input['judul_finalis99'] = $request->input('judul_finalis99');
$input['link_youtube'] = $request->input('link_youtube');
$input['id_kategori'] = $request->input('id_kategori');
*/		
//    $request->validate();

    $input = $request->all();

// SIMPAN UPLOAD up_implementasi
    // menyimpan data file yang diupload ke variabel $file
    $up_implementasi = $request->file('up_implementasi');
    if ($up_implementasi != "") {
        //dd($up_implementasi); 
        $nama_up_implementasi = time()."_".$up_implementasi->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'storage';
        $up_implementasi->move($tujuan_upload,$nama_up_implementasi);
        $input['path_up_implementasi'] = "$nama_up_implementasi";
    }

// SIMPAN UPLOAD up_identitas
    // menyimpan data file yang diupload ke variabel $file
    $up_identitas = $request->file('up_identitas');
    if ($up_identitas != "") {
        //dd($up_identitas); 
        $nama_up_identitas = time()."_".$up_identitas->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_up_identitas = 'storage';
        $up_identitas->move($tuj_up_up_identitas,$nama_up_identitas);
        $input['path_up_identitas'] = "$nama_up_identitas";
    }

// SIMPAN UPLOAD up_replikasi
    // menyimpan data file yang diupload ke variabel $file
    $up_replikasi = $request->file('up_replikasi');
    if ($up_replikasi != "") {
        //dd($up_replikasi); 
        $nama_up_replikasi = time()."_".$up_replikasi->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_up_replikasi = 'storage';
        $up_replikasi->move($tuj_up_up_replikasi,$nama_up_replikasi);
        $input['path_up_replikasi'] = "$nama_up_replikasi";
    }

// SIMPAN UPLOAD u_ringkasan
    // menyimpan data file yang diupload ke variabel $file
    $u_ringkasan = $request->file('u_ringkasan');
    if ($u_ringkasan != "") {
        //dd($u_ringkasan); 
        $nama_u_ringkasan = time()."_".$u_ringkasan->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_ringkasan = 'storage';
        $u_ringkasan->move($tuj_up_u_ringkasan,$nama_u_ringkasan);
        $input['path_u_ringkasan'] = "$nama_u_ringkasan";
    }

// SIMPAN UPLOAD u_latar_belakang
    // menyimpan data file yang diupload ke variabel $file
    $u_latar_belakang = $request->file('u_latar_belakang');
    if ($u_latar_belakang != "") {
        //dd($u_latar_belakang); 
        $nama_u_latar_belakang = time()."_".$u_latar_belakang->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_latar_belakang = 'storage';
        $u_latar_belakang->move($tuj_up_u_latar_belakang,$nama_u_latar_belakang);
        $input['path_u_latar_belakang'] = "$nama_u_latar_belakang";
    }

// SIMPAN UPLOAD u_kebaharuan
    // menyimpan data file yang diupload ke variabel $file
    $u_kebaharuan = $request->file('u_kebaharuan');
    if ($u_kebaharuan != "") {
        //dd($u_kebaharuan); 
        $nama_u_kebaharuan = time()."_".$u_kebaharuan->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_kebaharuan = 'storage';
        $u_kebaharuan->move($tuj_up_u_kebaharuan,$nama_u_kebaharuan);
        $input['path_u_kebaharuan'] = "$nama_u_kebaharuan";
    }

// SIMPAN UPLOAD u_implementasi_inovasi
    // menyimpan data file yang diupload ke variabel $file
    $u_implementasi_inovasi = $request->file('u_implementasi_inovasi');
    if ($u_implementasi_inovasi != "") {
        //dd($u_implementasi_inovasi); 
        $nama_u_implementasi_inovasi = time()."_".$u_implementasi_inovasi->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_implementasi_inovasi = 'storage';
        $u_implementasi_inovasi->move($tuj_up_u_implementasi_inovasi,$nama_u_implementasi_inovasi);
        $input['path_u_implementasi_inovasi'] = "$nama_u_implementasi_inovasi";
    }

// SIMPAN UPLOAD u_signifikansi
    // menyimpan data file yang diupload ke variabel $file
    $u_signifikansi = $request->file('u_signifikansi');
    if ($u_signifikansi != "") {
        //dd($u_signifikansi); 
        $nama_u_signifikansi = time()."_".$u_signifikansi->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_signifikansi = 'storage';
        $u_signifikansi->move($tuj_up_u_signifikansi,$nama_u_signifikansi);
        $input['path_u_signifikansi'] = "$nama_u_signifikansi";
    }

// SIMPAN UPLOAD u_adaptabilitas_1
    // menyimpan data file yang diupload ke variabel $file
    $u_adaptabilitas_1 = $request->file('u_adaptabilitas_1');
    if ($u_adaptabilitas_1 != "") {
        //dd($u_adaptabilitas_1); 
        $nama_u_adaptabilitas_1 = time()."_".$u_adaptabilitas_1->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_adaptabilitas_1 = 'storage';
        $u_adaptabilitas_1->move($tuj_up_u_adaptabilitas_1,$nama_u_adaptabilitas_1);
        $input['path_u_adaptabilitas_1'] = "$nama_u_adaptabilitas_1";
    }

// SIMPAN UPLOAD u_adaptabilitas_2
    // menyimpan data file yang diupload ke variabel $file
    $u_adaptabilitas_2 = $request->file('u_adaptabilitas_2');
    if ($u_adaptabilitas_2 != "") {
        //dd($u_adaptabilitas_2); 
        $nama_u_adaptabilitas_2 = time()."_".$u_adaptabilitas_2->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_adaptabilitas_2 = 'storage';
        $u_adaptabilitas_2->move($tuj_up_u_adaptabilitas_2,$nama_u_adaptabilitas_2);
        $input['path_u_adaptabilitas_2'] = "$nama_u_adaptabilitas_2";
    }

// SIMPAN UPLOAD u_sumber_daya
    // menyimpan data file yang diupload ke variabel $file
    $u_sumber_daya = $request->file('u_sumber_daya');
    if ($u_sumber_daya != "") {
        //dd($u_sumber_daya); 
        $nama_u_sumber_daya = time()."_".$u_sumber_daya->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_sumber_daya = 'storage';
        $u_sumber_daya->move($tuj_up_u_sumber_daya,$nama_u_sumber_daya);
        $input['path_u_sumber_daya'] = "$nama_u_sumber_daya";
    }

// SIMPAN UPLOAD u_keberlanjutan
    // menyimpan data file yang diupload ke variabel $file
    $u_keberlanjutan = $request->file('u_keberlanjutan');
    if ($u_keberlanjutan != "") {
        //dd($u_keberlanjutan); 
        $nama_u_keberlanjutan = time()."_".$u_keberlanjutan->getClientOriginalName();
        // isi dengan nama folder tempat kemana file diupload
        $tuj_up_u_keberlanjutan = 'storage';
        $u_keberlanjutan->move($tuj_up_u_keberlanjutan,$nama_u_keberlanjutan);
        $input['path_u_keberlanjutan'] = "$nama_u_keberlanjutan";
    }
// SIMPAN ARRAY Sdgs 
    $input['sdgs'] = $request->input('sdgs');
//dd($input);

    $result=Proposal::create(
        $input
    );
//    dd($result);

//Proposal::create($input);
/*
$this->validate($request, [
    'judul_proposal' => 'required',
    'tanggal_mulai' => 'required',
    'kelompok' => 'required',
    'pernah_finalis99' => 'required',
    'tahun_finalis99' => 'required',
    'judul_finalis99' => 'required',
    'link_youtube' => 'required',
    'id_kategori' => 'required',
    'up_implementasi' => 'required',
//    'up_implementasi.*' => 'mimes:doc,pdf,docx,pptx,zip'
]);

$files = $request->file('up_implementasi');
foreach($files as $file){
    $fileUpload = new Proposal;
    $fileUpload->up_implementasi = $file->getClientOriginalName();
    $fileUpload->path_up_implementasi = $file->store('up_implementasi');
//    $fileUpload->type= $file->getClientOriginalExtension();
$input['sdgs'] = $request->input('sdgs');
    $fileUpload->save();
    Proposal::create($input);
}   
*/


return redirect()->route('proposal.index');

//        return redirect()->route('propo.index')->with('succes','Data Berhasil di Input');
//$proposal->name = $request->name;

$proposal = new Proposal;
$proposal->judul_proposal = $request->judul_proposal;
$proposal->tanggal_mulai = $request->tanggal_mulai;
$proposal->kelompok = $request->kelompok;
$proposal->pernah_finalis99 = $request->pernah_finalis99;
$proposal->tahun_finalis99 = $request->tahun_finalis99;
$proposal->judul_finalis99 = $request->judul_finalis99;
$proposal->link_youtube = $request->link_youtube;
$proposal->id_kategori = $request->id_kategori;
$proposal->sdgs = $request->sdgs;
$proposal->up_implementasi = $request->up_implementasi;
$proposal->path_up_implementasi = $request->path_up_implementasi;
$proposal->up_identitas = $request->up_identitas;
$proposal->path_up_identitas = $request->path_up_identitas;
$proposal->up_replikasi = $request->up_replikasi;
$proposal->path_up_replikasi = $request->path_up_replikasi;
$proposal->created_by = $request->created_by;
$proposal->spbe = $request->spbe;
$proposal->ringkasan = $request->ringkasan;
$proposal->u_ringkasan = $request->u_ringkasan;
$proposal->path_u_ringkasan = $request->path_u_ringkasan;
$proposal->latar_belakang = $request->latar_belakang;
$proposal->u_latar_belakang = $request->u_latar_belakang;
$proposal->path_u_latar_belakang = $request->path_u_latar_belakang;
$proposal->kebaharuan = $request->kebaharuan;
$proposal->u_kebaharuan = $request->u_kebaharuan;
$proposal->path_u_kebaharuan = $request->path_u_kebaharuan;
$proposal->implementasi_inovasi = $request->implementasi_inovasi;
$proposal->u_implementasi_inovasi = $request->u_implementasi_inovasi;
$proposal->path_u_implementasi_inovasi = $request->path_u_implementasi_inovasi;
$proposal->signifikansi = $request->signifikansi;
$proposal->u_signifikansi = $request->u_signifikansi;
$proposal->path_u_signifikansi = $request->path_u_signifikansi;
$proposal->adaptabilitas_1 = $request->adaptabilitas_1;
$proposal->u_adaptabilitas_1 = $request->u_adaptabilitas_1;
$proposal->path_u_adaptabilitas_1 = $request->path_u_adaptabilitas_1;
$proposal->adaptabilitas_2 = $request->adaptabilitas_2;
$proposal->u_adaptabilitas_2 = $request->u_adaptabilitas_2;
$proposal->path_u_adaptabilitas_2 = $request->path_u_adaptabilitas_2;
$proposal->sumber_daya = $request->sumber_daya;
$proposal->u_sumber_daya = $request->u_sumber_daya;
$proposal->path_u_sumber_daya = $request->path_u_sumber_daya;
$proposal->keberlanjutan = $request->keberlanjutan;
$proposal->u_keberlanjutan = $request->u_keberlanjutan;
$proposal->path_u_keberlanjutan = $request->path_u_keberlanjutan;
$proposal->save();
return redirect(route('proposal.index'))->with('success','Data submited successfully!');

    }

    public function exportExcel()
    {
		$this->authorize('super admin');

        return Excel::download(new ProposalExport, 'proposal.xlsx');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Proposal $propo)
    {
        //
		return view('proposal.show', compact('propo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		return view('proposal.edit', compact('propo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proposal $propo)
    {
        //
        $request->validate([
            'judul_proposal' => 'required',
            'tanggal_mulai' => 'required',
            'kelompok' => 'required',
            'pernah_finalis99' => 'required',
            'tahun_finalis99' => 'required',
            'judul_finalis99' => 'required',
            'link_youtube' => 'required',
            'id_kategori' => 'required',
            'id_sdgs' => 'required',
            'up_implementasi' => 'required',
            'up_identitas' => 'required',
            'up_replikasi' => 'required',
            'spbe' => 'required',
            'rinkasan' => 'required',
            'u_ringkasan' => 'required',
            'latar_belakang' => 'required',
            'u_latar_belakang' => 'required',
            'kebaharuan' => 'required',
            'u_kebaruan' => 'required',
            'implementasi_inovasi' => 'required',
            'u_implementasi_inovasi' => 'required',
            'signifikansi' => 'required',
            'u_signifikansi' => 'required',
            'adaptabilitas_1' => 'required',
            'u_adaptabilitas_1' => 'required',
            'adaptabilitas_2' => 'required',
            'u_adaptabilitas_2' => 'required',
            'sumber_daya' => 'required',
            'u_sumber_daya' => 'required',
            'keberlanjutan' => 'required',
            'u_keberlanjutan' => 'required',
        ]);

        $propo->update($request->all());

        return redirect()->route('proposal.index')->with('succes','Proposal Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $propo->delete();

        return redirect()->route('proposal.index')->with('succes','Proposal Berhasil di Hapus');
    }
}

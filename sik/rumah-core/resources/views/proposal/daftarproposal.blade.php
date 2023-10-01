@extends('home.layout')
@include('home.style.accordion-home')

@push('plugin-js-top');
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
@endpush

@section('content')

{{--
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
--}}

  <section id="content" class="blog mt-5">
  <div class="container">
    <div class="card shadow">
      <div class="card-body">
        <div class="section-title">
          <h2><strong>Formulir Pendaftaran Proposal KOIN-YANLIK Provinsi NTT</strong></h2>
            </div>
              <div class="row">
                <div class="col-12">
                  <form method="post" action="{{ route('proposal.store') }}" enctype="multipart/form-data">
    @csrf
                    <fieldset>

                    <fieldset>
                      <legend>Pilih Kategori Kelompok Inovasi</legend>
<!--                      <input type="hidden" name="uid" value="<? //= $uid ?>">
                      <input type="hidden" name="<? //= $this->security->get_csrf_token_name(); ?>" value="<? //= $this->security->get_csrf_hash(); ?>">
-->
                      <div class="form-row row">
                        <div class="form-group col-md-12">
{{--                        <input type="hidden" name="created_by" value="{{ Auth::user()->id }}"> 
                        <input type="hidden" name="created_by" value="{{ user()->id }}">--}}
                          <small>Kolom dengan tanda <span class="required" style="color:#FF0000;">*</span> wajib diisi.</small>
                        </div>
                     </div>

                      <div class="form-row row">
                        <div class="form-group col-md-12">
                          <label for="judul" class="required"><strong>Judul Proposal</strong><span class="required" style="color:#FF0000;">*</span></label>
                          <input type="text" class="form-control" id="judul_proposal" name="judul_proposal" placeholder="Judul Inovasi" required>
                           @error('judul_proposal')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                           @enderror
                        </div>

                        <div class="col-md-12">
                          <label><strong>Tanggal dimulai implementasi Inovasi</strong></label>
                          <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="date form-control" required>
                          @error('tanggal_mulai')
							<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>

                      </div><br>

                      <div class="form-row row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label><strong>Kelompok</strong></label>
                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="kelompok1" value="umum" required>
                              <label class="form-check-label" for="radio1">
                                Kelompok Umum
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="kelompok2" value="khusus" required>
                              <label class="form-check-label" for="radio3">
                                Kelompok Khusus
                              </label>
                            </div>
                            <div class="kelompok-error"></div>
							@error('kelompok')
								<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
							@enderror
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label><strong>Apakah pernah menjadi finalis TOP KOIN YANLIK?</strong></label>
                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="pernah_finalis99" id="pernah_finalis991" value="Ya" required>
                              <label class="form-check-label" for="radio1">
                                Ya
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="pernah_finalis99" id="pernah_finalis992" value="Tidak" required>
                              <label class="form-check-label" for="radio1">
                                Tidak
                              </label>
                            </div>
							@error('pernah_finalis99')
								<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
							@enderror
 

                        </div>
                      </div>
                    </div>
                    <div class="form-row row">
                      <div class="col-md-4">
                          <div class="form-group">
                          </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <select class="form-control" id="tahun_finalis99" name="tahun_finalis99">
                            <option value="">-- Tahun --</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                          </select>
						@error('tahun_finalis99')
							<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="judul_finalis99" name="judul_finalis99" placeholder="Judul Finalis 99">
							@error('judul_finalis99')
								<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
							@enderror
                        </div>
                      </div>
                    </div>
                  </div>

                    <!-- Formulir Pendukung -->
                    <fieldset>
                      <div class="form-row row">
                        <div class="form-group col-md-12">
                          <label for="judul" class="required"><strong>Link Youtube menggambarkan Inovasi</strong><span class="required" style="color:#FF0000;">*</span></label>
                          <input type="text" class="form-control" id="link_youtube" name="link_youtube" placeholder="Link Youtube" required>
							@error('link_youtube')
								<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
							@enderror
                        </div>
                      </div>

                      <div class="form-row row">
						<label class="col-12"><strong>Kategori</strong></label>
                        <div class="form-group col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori1" value="1" required>
                            <label class="form-check-label" for="id_kategori1">
                              Kesehatan
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori2" value="2" required>
                            <label class="form-check-label" for="id_kategori2">
                              Petumbuhan Ekonomi dan Kesempatan Kerja
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori3" value="3" required>
                            <label class="form-check-label" for="id_kategori3">
                              Ketahanan Pangan
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori4" value="4" required>
                            <label class="form-check-label" for="id_kategori4">
                              Inklusi Sosial
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori5" value="5" required>
                            <label class="form-check-label" for="id_kategori5">
                              Tata Kelola Pemerintahan
                            </label>
                          </div>                        

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori6" value="6" required>
                            <label class="form-check-label" for="id_kategori6">
                              Ketahanan Bencana
                            </label>
                          </div>                        
                        </div>

                        <div class="form-group col-md-6">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori7" value="7" required>
                            <label class="form-check-label" for="id_kategori7">
                              Pendidikan
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori8" value="8" required>
                            <label class="form-check-label" for="id_kategori8">
                              Pengentasan Kemiskinan
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori9" value="9" required>
                            <label class="form-check-label" for="id_kategori9">
                              Pemberdayaan Masyarakat
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori10" value="10" required>
                            <label class="form-check-label" for="id_kategori10">
                              Energi dan Lingkungan Hidup
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="id_kategori" id="id_kategori11" value="11" required>
                            <label class="form-check-label" for="id_kategori11">
                              Penegakan Hukum
                            </label>
                          </div>                        
                        </div>
						@error('id_kategori')
							<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
						@enderror
                      </div>
<!--                                <label><input type="checkbox" name="category[]" value="Red"> Red</label> -->
                      <div class="form-row row">
                        <div class="form-group col-md-6">
                          <label><strong>SDGS</strong></label>
                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="tanpa kemiskinan"/>&nbsp;&nbsp;tanpa kemiskinan</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="kehidupan sehat dan sejahtera"/>&nbsp;&nbsp;kehidupan sehat dan sejahtera</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="kesetaraan gender"/>&nbsp;&nbsp;kesetaraan gender</label>
                          </div>
                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="energi bersih dan terjangkau"/>&nbsp;&nbsp;energi bersih dan terjangkau</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="industri, inovasi dan infrastruktur"/>&nbsp;&nbsp;industri, inovasi dan infrastruktur</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="kota dan pemukiman yang berkelanjutan"/>&nbsp;&nbsp;kota dan pemukiman yang berkelanjutan</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="penanganan dan perubahan iklim"/>&nbsp;&nbsp;penanganan dan perubahan iklim</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="ekosistem daratan"/>&nbsp;&nbsp;ekosistem daratan</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="kemitraan untuk mencapai tujuan"/>&nbsp;&nbsp;kemitraan untuk mencapai tujuan</label>
                          </div>
                        </div>

                        <div class="form-group col-md-6">
                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="Tanpa Kelaparan"/>&nbsp;&nbsp;Tanpa Kelaparan</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="Pendidikan Berkualitas"/>&nbsp;&nbsp;Pendidikan Berkualitas</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="Air Bersih dan Sanitasi Layak"/>&nbsp;&nbsp;Air Bersih dan Sanitasi Layak</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="Pekerjaan Layak dan Pertumbuhan Ekonomi"/>&nbsp;&nbsp;Pekerjaan Layak dan Pertumbuhan Ekonomi</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="Berkurangnya Kesenjangan"/>&nbsp;&nbsp;Berkurangnya Kesenjangan</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="Konsumsi dan Produksi yang Bertanggung Jawab"/>&nbsp;&nbsp;Konsumsi dan Produksi yang Bertanggung Jawab</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="Ekonomi Lautan"/>&nbsp;&nbsp;Ekonomi Lautan</label>
                          </div>

                          <div>
                            <label><input type="checkbox" name="sdgs[]" value="Perdamaian, Keadilan dan Kelembagaan yang Tangguh"/>&nbsp;&nbsp;Perdamaian, Keadilan dan Kelembagaan yang Tangguh</label>
                          </div>

                        </div>
							@error('sdgs')
								<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
							@enderror
                      </div>

                      <div class="form-row row">
                        <div class="col-md-12">
                            <label><strong>Unggah Surat Pernyataan Implementasi</strong></label><br>
                            <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="{{ asset('storage/Surat Pernyataan Implementasi Inovasi.pdf') }}" target="_blank">&nbsp;Unduh Template</a></i></label>
                            <div class="form-group">
                                <input type="file" name="up_implementasi" placeholder="Choose files" multiple required><br>
<!--                                <textarea class="form-control" name="path_up_implementasi"></textarea>-->
                                <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                            </div>
                            @error('up_implementasi')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      
                      <div class="form-row row">
                        <div class="col-md-12">
                            <label><strong>Unggah Surat Pernyataan Identitas Perorangan atau Tim</strong></label><br>
                            <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="{{ asset('storage/Surat Pernyataan Identitas Inovator.pdf') }}" target="_blank">&nbsp;Unduh Template</a></i></label>
                            <div class="form-group">
                                <input type="file" name="up_identitas" id="up_identitas" placeholder="Choose files" multiple required><br>
                                <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                            </div>
                            @error('up_identitas')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      
                      <div class="form-row row">
                        <div class="col-md-12">
                          <label><strong>Unggah Surat Pernyataan Kesediaan Replikasi</strong></label><br>
                          <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="{{ asset('storage/Surat Pernyataan Kesediaan Replikasi Inovasi.pdf') }}" target="_blank">&nbsp;Unduh Template</a></i></label>
                          <div class="form-group">
                              <input type="file" name="up_replikasi" id="up_replikasi" placeholder="Choose files" multiple required><br>
                              <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                          </div>
                          @error('up_replikasi')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      
                      <div class="form-row row">
                        <div class="col-md-12">
                          <label>Apakah inovasi yang diusulkan berkaitan dengan aplikasi?, Jika ya anda diharuskan mengisi formulir SPBE</label>
                          <div class="form-check">
                            <input class="form-check-input kelompok-radio" type="radio" name="spbe" id="spbe1" value="Ya" required>
                            <label class="form-check-label" for="Ya">
                              Ya, inovasi yang didaftarkan berupa aplikasi berbasis web atau mobile
                            </label>
                          </div>
                            
                          <div class="form-check">
                            <input class="form-check-input kelompok-radio" type="radio" name="spbe" id="spbe2" value="Tidak" required>
                            <label class="form-check-label" for="Tidak">
                              Tidak
                            </label>
                          </div>

                          @error('spbe')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>

                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Ringkasan</label><br>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Jelaskan secara ringkas mengenai inovasi yang diusulkan meliputi seluruh aspek pertanyaan.
                            </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">200 kata</strong></i></label>
                          <textarea class="form-control" id="ringkasan" name="ringkasan" rows="3" required></textarea>
<!--                          "halo ini kalima yang panjang".trim().split(' ').length -->

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_ringkasan" id="u_ringkasan" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_ringkasan')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Latar Belakang dan Tujuan</label><br>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Uraikan latar belakang dan tujuan yang memuat:<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Rumusan masalah yang menggambarkan kondisi awal sebelum implementasi inovasi<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Kelompok sasaran masyarakat yang terdampak permasalahan<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Tujuan Inovasi dilengkapi dengan target yang terukur<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lampirkan uraian tersebut di atas dengan melampirkan data pendukung yang relevan.
                            </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">300 kata</strong></i></label>
                          <textarea class="form-control" id="latar_belakang" name="latar_belakang" rows="3" required></textarea>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_latar_belakang" id="u_latar_belakang" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_latar_belakang')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                        </div>
                      </div>
                      
                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Kebaruan/Nilai Tambah</label><br>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                            Jelaskan ide/gagasan dan keunggulan (keunikan/nilai tambah/kebaruan) dari inovasi ini.
                            </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">200 kata</strong></i></label>
                          <textarea class="form-control" id="kebaharuan" name="kebaharuan" rows="3" required></textarea>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_kebaharuan" id="u_kebaharuan" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_kebaharuan')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Implementasi Inovasi</label><br>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                            Uraikan implementasi inovasi dalam mengatasi permasalahan yang dihadapi.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.
                            </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">200 kata</strong></i></label>
                          <textarea class="form-control" id="implementasi_inovasi" name="implementasi_inovasi" rows="3" required></textarea>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_implementasi_inovasi" id="u_implementasi_inovasi" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_implementasi_inovasi')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                        </div>
                      </div>
                      
                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Signifikansi</label><br>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                            • Uraikan dampak inovasi (bandingkan kondisi sebelum dan sesudah inovasi diimplementasikan)<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Jelaskan metode yang digunakan untuk mengukur dampak inovasi.<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lengkapi uraian tersebut dengan melampirkan data dukung berupa laporan hasil evaluasi inovasi baik dari eksternal maupun internal yang memuat<br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data sebelum dan sesudah implementasi inovasi (kualitatif dan kuantitatif).
                            </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">600 kata</strong></i></label>
                          <textarea class="form-control" id="signifikansi" name="signifikansi" rows="3" required></textarea>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_signifikansi" id="u_signifikansi" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_signifikansi')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Adaptabilitas</label><br>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Apakah inovasi ini sudah direplikasi?<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Sudah<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• Belum<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika sudah, sebutkan UPP dan/atau Instansi yang mereplikasi inovasi.
                            </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">100 kata</strong></i></label>
                          <textarea class="form-control" id="adaptabilitas_1" name="adaptabilitas_1" rows="3" required></textarea>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_adaptabilitas_1" id="u_adaptabilitas_1" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_adaptabilitas_1')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                          <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Jelaskan potensi inovasi untuk direplikasi dengan menggambarkan luasan populasi dan kesamaan karakter masalah yang dialami atau ada pada daerah 
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lain.</label>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">200 kata</strong></i></label>
                          <textarea class="form-control" id="adaptabilitas_2" name="adaptabilitas_2" rows="3" required></textarea>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_adaptabilitas_2" id="u_adaptabilitas_2" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_adaptabilitas_2')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Sumber Daya</label><br>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Jelaskan sumber daya yang digunakan, yang terdiri dari:<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• sumber daya keuangan;<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• sumber dayamanusia;<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• metode;<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• peralatan atau material.<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.<br>
                            </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">200 kata</strong></i></label>
                          <textarea class="form-control" id="sumber_daya" name="sumber_daya" rows="3" required></textarea>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_sumber_daya" id="u_sumber_daya" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_sumber_data')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Strategi Keberlanjutan</label><br>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Jelaskan strategi keberlanjutan inovasi, yang terdiri dari:<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• strategi institusional berupa regulasi atau dasar hukum implementasi dan/atau pemberlakuan Inovasi;<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• strategi manajerial berupa peningkatan kapasitas SDM, kinerja organisasi, penjaminan kualitas dan/atau pemberlakuan SOP;<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;• strategi sosial berupa partisipasi/kolaborasi pemangku kepentingan yang terlibat dan peran masing-masing pihak<br>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.<br>
                            </label><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">500 kata</strong></i></label>
                          <textarea class="form-control" id="keberlanjutan" name="keberlanjutan" rows="3" required></textarea>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
                              <div class="form-group">
                                  <input type="file" name="u_keberlanjutan" id="u_keberlanjutan" placeholder="Choose files" multiple required><br>
                                  <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 2 MB dengan Tipe PDF</label><br>
                              </div>
                              @error('u_keberlanjutan')
                                  <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                              @enderror
                            </div>
                          </div>

                        </div>
                      </div>

                    </fieldset>
                    <p><center>
                      <!--<button id="SaveAccount" name="btn" class="btn btn-<? //= ($user_detail->kuota == 0) ? 'danger' : 'primary'; ?> submit" <? //= ($user_detail->kuota == 0) ? 'disabled' : ''; ?>><i class="fa fa-save"></i> <? //= ($user_detail->kuota == 0) ? 'Kuota Habis' : 'Simpan'; ?></button>
	
                      <a href="#" class="btn btn-primary mt-2"><i class="fa fa-save"> Simpan</i></a>
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>-->
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>

                                </center></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  
</script> 

<script>
    $(document).ready(function() {
		$('.datepick2').datetimepicker({
			timepicker: false,
			format: 'd-m-Y',
			formatDate: 'Y-m-d'
		});
	})

</script>
<script src="rumahinovasi/js/bootstrap-datepicker.js"></script>
<script src="rumahinovasi/js/jquery.timepicker.js"></script>
<script src="rumahinovasi/js/jquery.datetimepicker.js"></script>
<script src="rumahinovasi/js/jquery.blockUI.js"></script>
@endsection

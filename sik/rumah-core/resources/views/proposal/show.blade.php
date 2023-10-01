@extends('home.layout')

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
          <h2><strong>Data Pendaftaran Proposal KOIN-YANLIK Provinsi NTT</strong></h2>
            </div>
              <div class="row">
                <div class="col-12">
                    <fieldset>

                    <fieldset>
                      <div class="form-row row">
                        <div class="form-group col-md-12">
                          <small>Kolom dengan tanda <span class="required" style="color:#FF0000;">*</span> wajib diisi.</small>
                        </div>
                     </div>

                      <div class="form-row row">
                        <div class="form-group col-md-12">
                          <label for="judul" class="required"><strong>Judul Proposal</strong><span class="required" style="color:#FF0000;">*</span></label>
						  <p>{{ $proposal->judul_proposal }}</p>
                        </div>

                        <div class="col-md-12">
                          <label><strong>Tanggal dimulai implementasi Inovasi</strong></label>
						  <p>{{ $proposal->tanggal_mulai  }}</p>
                        </div>

                      </div><br>

                      <div class="form-row row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label><strong>Kelompok</strong></label>
							@if ($proposal->kelompok == 'umum')
								<p>Kelompok Umum</p>
							@elseif($proposal->kelompok == 'khusu')
								<p>Kelompok Khusus</p>
							@else
								<p>{{ $proposal->kelompok }}</p>
							@endif
                          </div>
                        </div>

                        <div class="col-lg-4">
                          <div class="form-group">
                            <label><strong>Apakah pernah menjadi finalis TOP KOIN YANLIK?</strong></label>
							<p>{{ $proposal->pernah_finalis99  }}</p>
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
							<label><strong>Tahun</strong></label>
							<p>{{ $proposal->tahun_finalis99 }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
							<label><strong>Judul</strong></label>
							<p>{{ $proposal->judul_finalis99 }}</p>
                        </div>
                      </div>
                    </div>
                  </div>

                    <!-- Formulir Pendukung -->
                    <fieldset>
                      <div class="form-row row">
                        <div class="form-group col-md-12">
                          <label for="judul" class="required"><strong>Link Youtube menggambarkan Inovasi</strong><span class="required" style="color:#FF0000;">*</span></label>
							<p>
							@if(! empty($proposal->link_youtube))
								<a href="{{ $proposal->link_youtube }}">{{ $proposal->link_youtube }}</a>
							@endif
							</p>
                        </div>
                      </div>

                      <div class="form-row row">
						<label class="col-12"><strong>Kategori</strong></label>
                        <div class="form-group">
							<p>{{ $proposal->kategori->cat_name ?? ''  }}</p>
						</div>
                      </div>
<!--                                <label><input type="checkbox" name="category[]" value="Red"> Red</label> -->
                      <div class="form-row row">
                        <div class="form-group col-md-6">
                          <label><strong>SDGS</strong></label>
							<div>
							<ul>
							@foreach($proposal->sdgs as $sdgs)
								<li>{{ $sdgs }}</li>
							@endforeach
							</ul>
							</div>
						</div>
                      </div>

                      <div class="form-row row">
                        <div class="col-md-12">
                            <label><strong>Unggah Surat Pernyataan Implementasi</strong></label><br>
							<div class="col-12">
							@if(! empty($proposal->path_up_implementasi))
								<a href="{{ asset('storage/' . $proposal->path_up_implementasi) }}">{{ $proposal->path_up_implementasi }}</a>
							@endif
							</div>
                        </div>
                      </div>
                      
                      <div class="form-row row">
                        <div class="col-md-12">
                            <label><strong>Unggah Surat Pernyataan Identitas Perorangan atau Tim</strong></label><br>
							<div class="col-12">
							@if(! empty($proposal->path_up_identitas))
								<a href="{{ asset('storage/' . $proposal->path_up_identitas) }}">{{ $proposal->path_up_identitas }}</a>
							@endif
							</div>
                        </div>
                      </div>
                      
                      <div class="form-row row">
                        <div class="col-md-12">
                          <label><strong>Unggah Surat Pernyataan Kesediaan Replikasi</strong></label><br>
							<div class="col-12">
							@if(! empty($proposal->path_up_replikasi))
								<a href="{{ asset('storage/' . $proposal->path_up_replikasi) }}">{{ $proposal->path_up_replikasi }}</a>
							@endif
							</div>
                        </div>
                      </div>
                      
                      <div class="form-row row">
                        <div class="col-md-12">
                          <label>Apakah inovasi yang diusulkan berkaitan dengan aplikasi?, Jika ya anda diharuskan mengisi formulir SPBE</label>
							<p>{{ $proposal->spbe  }}
								@if(strtoupper($proposal->spbe) == 'YA')
									, inovasi yang didaftarkan berupa aplikasi berbasis web atau mobile
								@endif
							</p>
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
							<p>{{ $proposal->ringkasan  }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
								<div>
									@if($proposal->path_u_ringkasan)
									<a href="{{  asset('storage/' . $proposal->path_u_ringkasan) }}">
										{{ $proposal->path_u_ringkasan }}
									</a>
									@endif
								</div>
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
							<p>{{ $proposal->latar_belakang }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->

								<div>
									@if($proposal->path_u_latar_belakang)
									<a href="{{  asset('storage/' . $proposal->path_u_latar_belakang) }}">
										{{ $proposal->path_u_latar_belakang }}
									</a>
									@endif
								</div>
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
							<p>{{ $proposal->kebaharuan }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
								<div>
									@if($proposal->path_u_kebaharuan)
									<a href="{{  asset('storage/' . $proposal->path_u_kebaharuan) }}">
										{{ $proposal->path_u_kebaharuan }}
									</a>
									@endif
								</div>
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
								<p>{{ $proposal->implementasi_inovasi }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->

								<div>
									@if($proposal->path_u_implementasi_inovasi)
									<a href="{{  asset('storage/' . $proposal->path_u_implementasi_inovasi) }}">
										{{ $proposal->path_u_implementasi_inovasi }}
									</a>
									@endif
								</div>
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
							<p>{{ $proposal->signifikansi }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
								<div>
									@if($proposal->path_u_signifikansi)
									<a href="{{  asset('storage/' . $proposal->path_u_signifikansi) }}">
										{{ $proposal->path_u_signifikansi }}
									</a>
									@endif
								</div>

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
							<p>{{ $proposal->adaptabilitas_1 }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
								<div>
									@if($proposal->path_u_adaptabilitas_1)
									<a href="{{  asset('storage/' . $proposal->path_u_adaptabilitas_1) }}">
										{{ $proposal->path_u_adaptabilitas_1 }}
									</a>
									@endif
								</div>
                            </div>
                          </div>

                          <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Jelaskan potensi inovasi untuk direplikasi dengan menggambarkan luasan populasi dan kesamaan karakter masalah yang dialami atau ada pada daerah 
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lain.</label>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">200 kata</strong></i></label>
							<p>{{ $proposal->adaptabilitas_2 }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
								<div>
									@if($proposal->path_u_adaptabilitas_2)
									<a href="{{  asset('storage/' . $proposal->path_u_adaptabilitas_2) }}">
										{{ $proposal->path_u_adaptabilitas_2 }}
									</a>
									@endif
								</div>
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
							<p>{{ $proposal->sumber_daya  }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
								<div>
									@if($proposal->path_u_sumber_daya)
									<a href="{{  asset('storage/' . $proposal->path_u_sumber_daya) }}">
										{{ $proposal->path_u_sumber_daya }}
									</a>
									@endif
								</div>

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
							<p>{{ $proposal->keberlanjutan }}</p>

                          <div class="form-row row">
                            <div class="col-md-12">
                              <label style="font-size:12px; color:#6699FF"><strong>Lampiran Pendukung</strong></label><br>
<!--                              <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>-->
								<div>
									@if($proposal->path_u_keberlanjutan)
									<a href="{{  asset('storage/' . $proposal->path_u_keberlanjutan) }}">
										{{ $proposal->path_u_keberlanjutan }}
									</a>
									@endif
								</div>
                            </div>
                          </div>

                        </div>
                      </div>

                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label class="font-weight-bold text-uppercase mt-3">Pembuat</label><br>
							<p>{{ $proposal->creator ? $proposal->creator->name : '-' }},
								{{ $proposal->creator ? $proposal->creator->instance_name : '' }},
								{{ $proposal->creator && $proposal->creator->city ? $proposal->creator->city->name : '' }}
							</p>
						</div>
					</div>

                    </fieldset>
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

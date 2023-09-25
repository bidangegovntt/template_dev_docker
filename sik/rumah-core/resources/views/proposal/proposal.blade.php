@extends('home.layout')
@include('home.style.accordion-home')


@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

  <section id="content" class="blog mt-5">
  <div class="container">
    <div class="card shadow">
      <div class="card-body">
        <div class="section-title">
          <h2><strong>Formulir Pendaftaran Proposal KOIN-YANLIK Provinsi NTT</strong></h2>
            </div>
              <div class="row">
                <div class="col-12">
                  <form id="SignupForm" method="POST" action="">
                  <!--
                    <fieldset>
                      <legend>Syarat & Ketentuan yang berlaku</legend>
                      <div class="overflow-sk">

                        <h3>Pendahuluan</h3>
                        Inovasi Pelayanan Publik adalah terobosan jenis pelayanan publik baik yang merupakan gagasan/ide kreatif orisinal dan/atau adaptasi/modifikasi yang memberikan manfaat bagi masyarakat, baik secara langsung maupun tidak langsung
                        <br><br>
                        <h3>Tema</h3>
                        Tema Kompetisi Inovasi Pelayanan publik di Lingkungan Kementerian/Lembaga, Pemerintah Daerah, Badan Usaha Milik Negara, dan Badan Usaha Milik Daerah Tahun 2021 adalah “Inovasi Pelayanan Publik Untuk Percepatan Pencapaian Sasaran Strategis Pembangunan Daerah sebagai perwujudan Nawa Bhakti Satya Provinsi Jawa Timur melalui Budaya CETTAR dan Semangat Optimis NTT Bangkit".
                        <br><br>
                        <h3>Kelompok Inovasi Koin Yaklik Tahun 2023</h3>
                        Sesuai dengan Pedoman Menteri Pendayagunaan Aparatur Negara Dan Reformasi Birokrasi Republik Indonesia tahun 2023 Tentang Petunjuk Pelaksanaan Kompetisi Inovasi Pelayanan Publik Di Lingkungan Kementerian/Lembaga, Pemda BUMN Dan BUMD, yang terdiri dari:<br>
                        <ol style="padding-left: 18px">
                          <li>
                            <strong>Kelompok Umum</strong>, yaitu kelompok Inovasi:
                            <ol type="a" style="padding-left: 18px">
                              <li>1. Belum pernah mengikuti KOIN YANLIK periode sebelumnya;</li>
                              <li>2. Sudah pernah mengikuti KOIN YANLIK periode sebelumnya namun belum pernah mendapat penghargaan;</li>
                              <li>3. Belum pernah menerima penghargaan sebagai Top 99 Sebanyak 2 (Dua) Kali;</li>
                              <li>4. Bukan merupakan Top Terpuji periode sebelumnya.</li>
                            </ol>
                          </li>
                          <li>
                            <strong>Kelompok Khusus</strong>, yaitu kelompok Inovasi:
                            <ul class="term">
                              <li>1. Merupakan <strong>Top Terpuji KOIN YANLIK 2014 sampai dengan 2021</strong> Kelompok Umum; dan</li>
                              <li>2. Belum pernah mendapatkan penghargaan Sebagai <strong>Top 15 Kelompok Khusus</strong> Sebanyak <strong>2 (dua) kali; atau</strong> pada KOIN YANLIK/SINOVIK.</li>
                              <li>3. <strong>Bukan</strong> merupakan <strong>5 Pemenang Outstanding Achievement of Public Service Innovation 2020</strong> sampai dengan <strong>2022.</strong></li>
                            </ul>
                          </li>
                        </ol>

                        <h3>Persyaratan Inovasi Pelayanan Publik</h3>
                        <ul class="term">
                          <li>memenuhi seluruh kriteria Inovasi;</li>
                          <li>memenuhi informasi mengenai aktualisasi dalam rangka merespons pandemi COVID-19;</li>
                          <li>relevan dengan salah satu kategori KOVABLIK;</li>
                          <li>diajukan secara online dalam bentuk proposal melalui JIPP NTT dan wajib disertai dokumen pendukung yang relevan;</li>
                          <li>menggunakan judul yang menggambarkan Inovasi dengan memperhatikan norma dan kepantasan; </li>
                          <li>relevan dengan salah satu kelompok Inovasi; dan</li>
                          <li>telah diimplementasikan paling singkat 1 (satu) tahun untuk semua kelompok. Usia implementasi dihitung mundur dari waktu penutupan pendaftaran KOVABLIK 2022 sampai dengan waktu dimulainya implementasi Inovasi, dengan melampirkan bukti valid yang menunjukkan informasi tersebut.</li>
                        </ul>
                        <br>

                        <h3>Ketentuan Lain</h3>
                        <ul class="term">
                          <li>
                            Bagi Kelompok Umum:
                            <ol type="a" style="padding-left: 18px">
                              <li>setiap Peserta agar melakukan seleksi awal di lingkup instansi perangkat daerah Provinsi/Kabupaten/Kota/BUMD; dan</li>
                              <li>jumlah Inovasi yang dapat diajukan oleh tiap Peserta secara keseluruhan adalah maksimal 5 (lima) yang terdiri dari 5 (lima) Inovasi OPD Provinsi untuk Kelompok Umum.</li>
                              <li>jumlah Inovasi yang dapat diajukan oleh tiap Peserta secara keseluruhan adalah maksimal 3 (tiga) yang terdiri dari 3 (tiga) Inovasi Kab/Kota untuk Kelompok Umum.</li>
                              <li>jumlah Inovasi yang dapat diajukan oleh tiap Peserta secara keseluruhan adalah maksimal 3 (tiga) yang terdiri dari 3 (tiga) Inovasi BUMD untuk Kelompok Umum.</li>
                            </ol>
                          </li>
                          <li>Kelompok Khusus tidak termasuk dalam ketentuan tersebut karena keikutsertaannya berdasarkan undangan khusus dari Biro Organisasi Sekretariat Daerah Provinsi Jawa Timur.</li>
                        </ul>
                        <br>

                        <h3>Kriteria Inovasi Pelayanan Publik</h3>
                        Inovasi yang diikutsertakan dalam KOVABLIK wajib memenuhi seluruh kriteria sebagai berikut:
                        <ul class="term">
                          <li>Memiliki kebaruan, yaitu memperkenalkan gagasan yang unik, pendekatan yang baru dalam penyelesaian masalah, atau kebijakan dan desain pelaksanaan yang unik, atau modifikasi dari inovasi pelayanan publik yang telah ada, untuk penyelenggaraan pelayanan publik;</li>
                          <li>Efektif, yaitu memperlihatkan capaian yang nyata dan memberikan solusi dalam penyelesaian permasalahan;</li>
                          <li>Bermanfaat, yaitu menyelesaikan permasalahan yang menjadi kepentingan dan perhatian publik;</li>
                          <li>Dapat ditransfer/direplikasi, yaitu dapat dan/atau telah dicontoh dan/atau menjadi rujukan dan/atau diterapkan oleh penyelenggara pelayanan publik lainnya;</li>
                          <li>Berkelanjutan, yaitu mendapat jaminan terus dipertahankan yang diperlihatkan dalam bentuk dukungan program dan anggaran, tugas dan fungsi organisasi, serta hukum dan perundang-undangan.</li>
                        </ul>
                        <br>
                        <h3>Kategori Inovasi Pelayanan Publik</h3>
                        <ul class="term">
                          <li>Inovasi pelayanan Pelayanan Publik yang Inklusif dan Berkeadilan;</li>
                          <li>Efektivitas Institusi Publik untuk Mencapai TPB.</li>
                        </ul>
                        <br>
                        <h3>Peserta Kompetisi</h3>
                        <ul class="term">
                          <li>Peserta adalah Perangkat Daerah Provinsi, Kab/Kota , dan BUMD Provinsi Jawa Timur;</li>
                          <li>maksimal 5(lima) untuk perangkat daerah provinsi, 3(tiga) untuk Kab/Kota dan BUMD Provinsi Jawa Timur;</li>
                          <li>Peserta wajib menjamin kebenaran dan keakuratan seluruh data dan informasi yang disampaikan dalam KOVABLIK. Penyelenggara KOVABLIK berhak mendiskualifikasi Peserta dan/atau membatalkan dan mencabut kembali penghargaan yang telah diberikan apabila di kemudian hari ditemukan bahwa terdapat data dan informasi yang disampaikan Peserta yang tidak akurat, salah, dan/atau palsu.</li>
                        </ul>
                        <br>

                        <h3>Pengajuan proposal inovasi pelayanan publik hanya dapat diajukan secara online melalui situs resmi kompetisi yaitu http://jipp-test.duckdns.org/</h3>

                      </div>
                      <div class="d-flex justify-content-center">
                        <div class="form-group mt-3">
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="setuju" required>
                            <label class="custom-control-label" for="customCheck1">Saya menyetujui dan menyatakan bahwa proposal inovasi pelayanan publik yang disampaikan adalah benar, jika suatu saat terbukti tidak benar maka saya bersedia didikualifikasi dari kompetisi dan/atau dibatalkan dan dicabut kembali penghargaan yang telah diberikan.</label>
                            <div class="setuju-error"></div>
                          </div>
                        </div>
                      </div>
                      <hr>
                    </fieldset>
-->
                    <fieldset>
<!--                      
                      <legend>Kelompok Inovasi</legend>
                      <div class="alert alert-primary" role="alert">
                        <p>Pilihan Kelompok:<br />
                        <ol>
                          <li><strong>Kelompok Umum</strong>, yaitu kelompok Inovasi:</li>
                          <ol type="a">
                              <li>1. Belum pernah mengikuti KOIN YANLIK periode sebelumnya;</li>
                              <li>2. Sudah pernah mengikuti KOIN YANLIK periode sebelumnya namun belum pernah mendapat penghargaan;</li>
                              <li>3. Belum pernah menerima penghargaan sebagai Top 99 Sebanyak 2 (Dua) Kali;</li>
                              <li>4. Bukan merupakan Top Terpuji periode sebelumnya.</li>
                          </ol>
                          <li><strong>Kelompok Khusus</strong>, yaitu kelompok Inovasi:</li>
                          <ul>
                              <li>1. Merupakan <strong>Top Terpuji KOIN YANLIK 2014 sampai dengan 2021</strong> Kelompok Umum; dan</li>
                              <li>2. Belum pernah mendapatkan penghargaan Sebagai <strong>Top 15 Kelompok Khusus</strong> Sebanyak <strong>2 (dua) kali; atau</strong> pada KOIN YANLIK/SINOVIK.</li>
                              <li>3. <strong>Bukan</strong> merupakan <strong>5 Pemenang Outstanding Achievement of Public Service Innovation 2020</strong> sampai dengan <strong>2022.</strong></li>
                          </ul>
                          </p>
                      </div>
                    </fieldset>
-->

                    <fieldset>
                      <legend>Pilih Kategori Kelompok Inovasi</legend>
                      <input type="hidden" name="uid" value="<? //= $uid ?>">
                      <input type="hidden" name="kuota" value="<? //= $kuota ?>">
                      <input type="hidden" name="<? //= $this->security->get_csrf_token_name(); ?>" value="<? //= $this->security->get_csrf_hash(); ?>">

                      <div class="form-row">
                        <div class="form-group col-md-12">
<!--                          <small>Kolom dengan tanda (<span class="required"></span>) wajib diisi.</small> -->
                          <small>Kolom dengan tanda <span class="required" style="color:#FF0000;">*</span> wajib diisi.</small>
                        </div>

                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="judul" class="required"><strong>Judul Proposal</strong><span class="required" style="color:#FF0000;">*</span></label>
                          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Inovasi" required>
                        </div>

                      <div class="col-md-12">
                        <label><strong>Tanggal dimulai implementasi Inovasi</strong></label>
                        <input type="text" name="tanggal_mulai" class="date form-control">
                      </div>

<!--
                        <div class="form-group col-md-6">
                          <label for="instansi" class="required">Instansi</label>
                          <input type="text" class="form-control" id="instansi" name="instansi" placeholder="Instansi" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="tgl_inovasi_dt" class="required">Tanggal Inovasi dimulai</label>
                          <div class="input-group">
                            <div class="input-group">
                              <select class="form-control" id="tgl_inovasi_dt" name="tgl_inovasi_dt" required>
                                <option value="">-- Tanggal --</option>
                                <?php
                                for ($x = 1; $x <= 31; $x++) {
                                  echo '<option value="' . str_pad($x, 2, '0', STR_PAD_LEFT) . '">' . $x . '</option>';
                                }
                                ?>
                              </select>

                              <select class="form-control" id="tgl_inovasi_mt" name="tgl_inovasi_mt" required>
                                <option value="">-- Bulan --</option>
                                <option value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juni</option>
                                <option value="07">Juli</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                              </select>

                              <select class="form-control" id="tgl_inovasi_yr" name="tgl_inovasi_yr" required>
                                <option value="">-- Tahun --</option>
                                <?php
                                /*
                                for ($x2 = 2010; $x2 <= date("Y"); $x2++) {
                                  echo '<option value="' . $x2 . '">' . $x2 . '</option>';
                                }
                                */
                                ?>
                              </select>
 
                              <input class="date form-control" type="text">
                            </div>
                          </div>
                          <div class="tgl_inovasi-error"></div>
                        </div>
-->                     
                      </div><br>

                      <div class="form-row">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label><strong>Kelompok</strong></label>
                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="radio1" value="umum" required>
                              <label class="form-check-label" for="radio1">
                                Kelompok Umum
                              </label>
                            </div>
<!--
                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="radio2" value="replikasi">
                              <label class="form-check-label" for="radio2">
                                Kelompok Replikasi
                              </label>
                            </div>
-->                            
                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="radio2" value="khusus" required>
                              <label class="form-check-label" for="radio3">
                                Kelompok Khusus
                              </label>
                            </div>
                            <div class="kelompok-error"></div>
                          </div>
                        </div>

                        <div class="col-md-4">
                          <div class="form-group">
                            <label><strong>apakah pernah menjadi finalis 99?</strong></label>
                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="finalis99" id="radio991" value="umum" required>
                              <label class="form-check-label" for="radio1">
                                Ya
                              </label>
                            </div>

                            <div class="form-check">
                              <input class="form-check-input kelompok-radio" type="radio" name="finalis99" id="radio992" value="umum" required>
                              <label class="form-check-label" for="radio1">
                                Tidak
                              </label>
                            </div>

                        </div>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-4">
                          <div class="form-group">
                          </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <select class="form-control" id="thn_finalis99" name="thn_finalis99">
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
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Inovasi" required>
                        </div>
                      </div>
                    </div>
                  </div>

                    <!-- Formulir Pendukung -->
                    <fieldset>
<!--
                      <legend>Formulir Pendukung</legend>
                      <div class="alert alert-primary" role="alert">
                        Tutorial unggah berkas pendukung pada penyimpanan data online (<a href="https://drive.google.com/" class="alert-link" target="_blank">Google Drive</a>) dan salin URL link berkas tersebut pada kolom formulir di bawah.
                        <hr>Tutorial pengisian Indeks Inovasi Daerah dapat dilihat <a href="https://indeks.inovasi.litbang.kemendagri.go.id/dokumen" class="alert-link" target="_blank">di sini</a>
                      </div>
                              -->
                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="judul" class="required"><strong>Link Youtube menggambarkan Inovasi</strong><span class="required" style="color:#FF0000;">*</span></label>
                          <input type="text" class="form-control" id="link_youtube" name="link_youtube" placeholder="Link Youtube" required>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label><strong>Kategori</strong></label>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat1" value="Kesehatan">
                            <label class="form-check-label" for="Kesehatan">
                              Kesehatan
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat12" value="Petumbuhan Ekonomi dan Kesempatan Kerja">
                            <label class="form-check-label" for="Petumbuhan Ekonomi dan Kesempatan Kerja">
                              Petumbuhan Ekonomi dan Kesempatan Kerja
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat13" value="Ketahanan Pangan">
                            <label class="form-check-label" for="Ketahanan Pangan">
                              Ketahanan Pangan
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat14" value="Inklusi Sosial">
                            <label class="form-check-label" for="Inklusi Sosial">
                              Inklusi Sosial
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat5" value="Tata Kelola Pemerintahan">
                            <label class="form-check-label" for="Tata Kelola Pemerintahan">
                              Tata Kelola Pemerintahan
                            </label>
                          </div>                        

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat6" value="Ketahanan Bencana">
                            <label class="form-check-label" for="Ketahanan Bencana">
                              Ketahanan Bencana
                            </label>
                          </div>                        
                        </div>

                        <div class="form-group col-md-6">
                          <p>&nbsp;</p>        
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat7" value="Pendidikan">
                            <label class="form-check-label" for="Pendidikan">
                              Pendidikan
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat8" value="Pengentasan Kemiskinan">
                            <label class="form-check-label" for="Pengentasan Kemiskinan">
                              Pengentasan Kemiskinan
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat9" value="Pemberdayaan Masyarakat">
                            <label class="form-check-label" for="Pemberdayaan Masyarakat">
                              Pemberdayaan Masyarakat
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat10" value="Energi dan Lingkungan Hidup">
                            <label class="form-check-label" for="Energi dan Lingkungan Hidup">
                              Energi dan Lingkungan Hidup
                            </label>
                          </div>

                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="kategori" id="kat11" value="Penegakan Hukum">
                            <label class="form-check-label" for="Penegakan Hukum">
                              Penegakan Hukum
                            </label>
                          </div>                        
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label><strong>SDGS</strong></label>
                          <div>
                            <input type="checkbox" name="sdgs" value="Tanpa Kemiskinan"/>&nbsp;&nbsp;Tanpa Kemiskinan
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Kehidupan Sehat dan Sejahtera"/>&nbsp;&nbsp;Kehidupan Sehat dan Sejahtera
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Kesetaraan Gender"/>&nbsp;&nbsp;Kesetaraan Gender
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Energi Bersih dan Terjangkau"/>&nbsp;&nbsp;Energi Bersih dan Terjangkau
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Industri, Inovasi dan Infrastruktur"/>&nbsp;&nbsp;Industri, Inovasi dan Infrastruktur
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Kota dan Pemukiman yang Berkelanjutan"/>&nbsp;&nbsp;Kota dan Pemukiman yang Berkelanjutan
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Penanganan dan Perubahan Iklim"/>&nbsp;&nbsp;Penanganan dan Perubahan Iklim
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Ekosistem Daratan"/>&nbsp;&nbsp;Ekosistem Daratan
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Kemitraan Untuk Mencapai Tujuan"/>&nbsp;&nbsp;Kemitraan Untuk Mencapai Tujuan
                          </div>

                        </div>

                        <div class="form-group col-md-6">
                          <p>&nbsp;</p>        
                          <div>
                            <input type="checkbox" name="sdgs" value="Tanpa Kelaparan"/>&nbsp;&nbsp;Tanpa Kelaparan
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Pendidikan Berkualitas"/>&nbsp;&nbsp;Pendidikan Berkualitas
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Air Bersih dan Sanitasi Layak"/>&nbsp;&nbsp;Air Bersih dan Sanitasi Layak
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Pekerjaan Layak dan Pertumbuhan Ekonomi"/>&nbsp;&nbsp;Pekerjaan Layak dan Pertumbuhan Ekonomi
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Berkurangnya Kesenjangan"/>&nbsp;&nbsp;Berkurangnya Kesenjangan
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Konsumsi dan Produksi yang Bertanggung Jawab"/>&nbsp;&nbsp;Konsumsi dan Produksi yang Bertanggung Jawab
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Ekonomi Lautan"/>&nbsp;&nbsp;Ekonomi Lautan
                          </div>

                          <div>
                            <input type="checkbox" name="sdgs" value="Perdamaian, Keadilan dan Kelembagaan yang Tangguh"/>&nbsp;&nbsp;Perdamaian, Keadilan dan Kelembagaan yang Tangguh
                          </div>

                        </div>
                      </div>

                      <div class="form-row">
                        <div class="col-md-12">
                            <label><strong>Unggah Surat Pernyataan Implementasi</strong></label><br>
                            <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>
                            <div class="form-group">
                                <input type="file" name="files[]" placeholder="Choose files" multiple ><br>
                                <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 1 MB dengan Tipe PDF</label><br>
                            </div>
                            @error('files')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      
                      <div class="form-row">
                        <div class="col-md-12">
                            <label><strong>Unggah Surat Pernyataan Identitas Perorangan atau Tim</strong></label><br>
                            <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>
                            <div class="form-group">
                                <input type="file" name="files[]" placeholder="Choose files" multiple ><br>
                                <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 1 MB dengan Tipe PDF</label><br>
                            </div>
                            @error('files')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      
                      <div class="form-row">
                        <div class="col-md-12">
                          <label><strong>Unggah Surat Pernyataan Kesediaan Replikasi</strong></label><br>
                          <label style="font-size:14px; color:#6699FF"><i class="fa fa-link"><a href="#">&nbsp;Unduh Template</a></i></label>
                          <div class="form-group">
                              <input type="file" name="files[]" placeholder="Choose files" multiple ><br>
                              <label style="font-size:10px; color:#FF0000">Ketentuan Mengunggah File 1 MB dengan Tipe PDF</label><br>
                          </div>
                          @error('files')
                              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      
                      <div class="form-row">
                        <div class="col-md-12">
                          <label>Apakah inovasi yang diusulkan berkaitan dengan aplikasi?, Jika ya anda diharuskan mengisi formulir SPBE</label>
                          <div class="form-check">
                            <input class="form-check-input kelompok-radio" type="radio" name="pernyataan_inovasi" id="pi1" value="Ya, inovasi yang didaftarkan berupa aplikasi berbasis web atau mobile" required>
                            <label class="form-check-label" for="Ya, inovasi yang didaftarkan berupa aplikasi berbasis web atau mobile">
                              Ya, inovasi yang didaftarkan berupa aplikasi berbasis web atau mobile
                            </label>
                          </div>
                            
                          <div class="form-check">
                            <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="radio2" value="Tidak" required>
                            <label class="form-check-label" for="Tidak">
                              Tidak
                            </label>
                          </div>
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
                          <textarea class="form-control" id="tx_ringkasan" name="tx_ringkasan" rows="3"></textarea>
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
                          <textarea class="form-control" id="tx_latar_belakang" name="tx_latar_belakang" rows="3"></textarea>
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
                          <textarea class="form-control" id="tx_kebaruan" name="tx_kebaruan" rows="3"></textarea>
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
                          <textarea class="form-control" id="tx_implementasi" name="tx_implementasi" rows="3"></textarea>
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
                          <textarea class="form-control" id="tx_signifikasi" name="tx_signifikasi" rows="3"></textarea>
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
                          <textarea class="form-control" id="tx_adaptabilitas_1" name="tx_adaptabilitas_1" rows="3"></textarea>

                          <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Jelaskan potensi inovasi untuk direplikasi dengan menggambarkan luasan populasi dan kesamaan karakter masalah yang dialami atau ada pada daerah 
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lain.</label>
                              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label class="mbr-section-lead text-justify" style="font-size:12px; color:#FF0000">
                            <i class="fa fa-list" aria-hidden="true">
                              Maksimal <strong style="color: #56a197;">200 kata</strong></i></label>
                          <textarea class="form-control" id="tx_adaptabilitas_2" name="tx_adaptabilitas_2" rows="3"></textarea>

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
                          <textarea class="form-control" id="tx_sumberdaya" name="tx_sumberdaya" rows="3"></textarea>
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
                          <textarea class="form-control" id="tx_sumberdaya" name="tx_sumberdaya" rows="3"></textarea>
                        </div>
                      </div>

<!--
                      <div class="form-group">
                        <label>Link URL file Standart Pelayanan dalam bentuk PDF</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sp" id="sp1" value="1" required>
                          <label class="form-check-label" for="sp1">
                            Share
                          </label>
                        </div>

                        <div class="sp-error"></div>
                      </div>
                      <div class="form-group" id="hint_sp" style="display: none">
                        <input type="text" class="form-control" id="link_sp" name="link_sp" placeholder="Link Bukti Standar Pelayanan">
                      </div>

                      <div class="form-group">
                        <label>Link URL file Bukti Maklumat dalam bentuk PDF (max 2 MB)</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="mp" id="mp1" value="1" required>
                          <label class="form-check-label" for="mp1">
                            Share
                          </label>
                        </div>

                        <div class="mp-error"></div>
                      </div>
                      <div class="form-group" id="hint_mp" style="display: none">
                        <input type="text" class="form-control" id="link_maklumat" name="link_maklumat" placeholder="Link Bukti Maklumat Pelayanan">
                      </div>

                      <div class="form-group">
                        <label>Link URL file bukti SK pengelolahan pengaduan dalam bentuk PDF (max 2 MB)</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="spp" id="spp1" value="1" required>
                          <label class="form-check-label" for="spp1">
                            Share
                          </label>
                        </div>

                        <div class="spp-error"></div>
                      </div>
                      <div class="form-group" id="hint_spp" style="display: none">
                        <input type="text" class="form-control" id="link_pengaduan" name="link_pengaduan" placeholder="Link Bukti SK Pengelola Pengaduan">
                      </div>

                      <div class="form-group">
                        <label>Link URL Youtube Video Inovasi</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="yt" id="yt1" value="1" required>
                          <label class="form-check-label" for="yt1">
                            Share
                          </label>
                        </div>

                        <div class="yt-error"></div>
                      </div>
                      <div class="form-group" id="hint_yt" style="display: none">
                        <input type="text" class="form-control" id="link_youtube" name="link_youtube" placeholder="Link Youtube">
                      </div>


                      <div class="form-group">
                        <label>Link URL Bukti Inisiasi Inovasi</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="bii" id="bii1" value="1" required>
                          <label class="form-check-label" for="bii1">
                            Share
                          </label>
                        </div>

                        <div class="bii-error"></div>
                      </div>
                      <div class="form-group" id="hint_bii" style="display: none">
                        <input type="text" class="form-control" id="link_inisiasi" name="link_inisiasi" placeholder="Bukti Inisiasi Inovasi">
                      </div>

                      <div class="form-group">
                        <label>Link URL Unggah Surat Keputusan Pejabat yang berwenang, apakah inovasi ini digagas oleh perorangan atau tim (Max File 1 MB)</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="skp" id="skp1" value="1" required>
                          <label class="form-check-label" for="skp1">
                            Share
                          </label>
                        </div>

                        <div class="skp-error"></div>
                      </div>
                      <div class="form-group" id="hint_skp" style="display: none">
                        <input type="text" class="form-control" id="link_skpejabat" name="link_skpejabat" placeholder="Surat Keputusan Pejabat">
                      </div>


                      <div class="form-group">
                        <label>Penilaian Indeks Inovasi Daerah <a href="https://indeks.inovasi.litbang.kemendagri.go.id/login" class="btn-get-started animate__animated animate__fadeInUp" target="_blank">Daftar</a></label>
                        <p></p>
                        <label>Share link file Laporan Inovasi Daerah bentuk PDF (max 2mb)</label>
                        <label>(Selain OPD Prov NTT harap klik tombol "skip")</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="iga" id="iga1" value="1" required>
                          <label class="form-check-label" for="iga1">
                            Share
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="iga" id="iga2" value="0">
                          <label class="form-check-label" for="iga2">
                            Skip
                          </label>
                        </div>
                        <div class="iga-error"></div>
                      </div>
                      <div class="form-group" id="hint_iga" style="display: none">
                        <input type="text" class="form-control" id="link_iga" name="link_iga" placeholder="Link Laporan Inovasi Daerah belum diisi">
                      </div>
                      <hr>
                    </fieldset>

                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="inovator_nama" class="required">Nama Inovator</label>
                          <input type="text" class="form-control" id="inovator_nama" name="inovator_nama" placeholder="Nama Inovator" required>
                        </div>

                        <div class="form-group col-md-4">
                          <label for="kontak_hp" class="required">No Tlpn.</label>
                          <input type="text" class="form-control" id="kontak_hp" name="kontak_hp" placeholder="No. Telp" required>
                        </div>

                        <div class="form-group col-md-4">
                          <label for="kontak_email">Email</label>
                          <input type="text" class="form-control" id="kontak_email" name="kontak_email" placeholder="Email">
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="cat_id" class="required">Kategori</label>
                          <select class="form-control custom-select" id="cat_id" name="cat_id" required>
                            <option value="">-- Pilih Kategori --</option>
                          </select>
                          <div class="cat_id-error"></div>
                        </div>
                      </div>

                      <div class="form-row border-top">
                        <div class="form-group col-md-12">
                          <label for="ringkasan" class="font-weight-bold text-uppercase mt-3">Ringkasan</label>
                          <ul class="text-muted">
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Jelaskan secara ringkas mengenai inovasi yang diusulkan, setidaknya meliputi: implementasi, dampak, dan relevansi inovasi dengan kategori yang dipilih.
                              <p></p>
                              Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.
                            </label>
                            <p></p>
                            <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                              Maksimal <strong style="color: #56a197;">200 kata</strong></label>
                          </ul>
                          <textarea class="form-control" id="ringkasan" name="ringkasan" rows="3"></textarea>
                        </div>
                      </div>


                      <div class="replikasi-row">
                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p1" class="font-weight-bold text-uppercase mt-3">INSPIRASI</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                                Pilih satu atau lebih Top 99 Inovasi periode KOVABLIK 2014-2020 yang menjadi inspirasi dari lahirnya Inovasi ini!</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Jelaskan alasan pemilihan tersebut berdasarkan kebutuhan dan manfaatnya!</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Maksimal <strong style="color: #56a197;">100 kata</strong> Wajib mencantumkan tautan berisi surat pernyataan bahwa Inovasi ini merupakan hasil replikasi, dalam bentuk hasil pindaian (scan) format PDF.</label>
                            </ul>
                            <textarea class="form-control" id="p2_1" name="p2_1" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p1" class="font-weight-bold text-uppercase mt-3">PROSES REPLIKASI</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                                Jelaskan proses/tahapan replikasi (adaptasi/modifikasi) terhadap Top 99 tersebut!</label>
                              <p></p>

                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Maksimal <strong style="color: #56a197;">200 kata</strong>
                            </ul>
                            <textarea class="form-control" id="p2_2" name="p2_2" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p1" class="font-weight-bold text-uppercase mt-3">FAKTOR PEMBEDA</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                                Jelaskan kebaruan yang membuat Inovasi ini berbeda dari Top 99 yang menjadi inspirasi, misalnya perbedaan wilayah, target group, tingkat pemerintahan, dll!</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Maksimal <strong style="color: #56a197;">100 kata</strong>
                            </ul>
                            <textarea class="form-control" id="p2_3" name="p2_3" rows="3"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="khusus-row">
                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p1" class="font-weight-bold text-uppercase mt-3">Pembaruan/ Peningkatan Inovasi</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                                Jelaskan mengenai pembaruan/peningkatan inovasi dibandingkan dengan kondisi saat ditetapkan sebagai Top Inovasi Terpuji.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Maksimal <strong style="color: #56a197;">200 kata</strong></label>
                            </ul>
                            <textarea class="form-control" id="p1_2" name="p1_2" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p1" class="font-weight-bold text-uppercase mt-3">Adaptabilitas</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                                Jelaskan bukti bahwa inovasi telah lebih banyak diadaptasi/direplikasi/disesuaikan dan diterapkan oleh unit/instansi lain, dibandingkan dengan kondisi saat ditetapkan sebagai Top Inovasi Terpuji.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Maksimal <strong style="color: #56a197;">200 kata</strong>
                            </ul>
                            <textarea class="form-control" id="p1_3" name="p1_3" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p1" class="font-weight-bold text-uppercase mt-3">Penguatan Keberlanjutan</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                                Jelaskan strategi penguatan keberlanjutan inovasi, yang terdiri dari:</label>
                              <ul class="text-muted mt-2">
                                <li>1. strategi institusional berupa penguatan regulasi atau dasar hukum implementasi dan/atau pemberlakuan Inovasi;</li>
                                <li>2. strategi sosial berupa penguatan partisipasi/kolaborasi dengan pemangku kepentingan dan dukungan masyarakat karena adanya kebutuhan/kepentingan publik yang harus dipenuhi; dan</li>
                                <li>3. strategi manajerial berupa penguatan peningkatan kapasitas SDM, kinerja organisasi, penjaminan kualitas dan/atau pemberlakuan SOP.</li>
                              </ul>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Maksimal <strong style="color: #56a197;">300 kata</strong>
                            </ul>
                            <textarea class="form-control" id="p1_4" name="p1_4" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p1" class="font-weight-bold text-uppercase mt-3">Evaluasi</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                                Jelaskan penilaian/asesmen terbaru yang dilakukan untuk mengukur keberhasilan inovasi meliputi indikator hasil/keluaran dan dampak Inovasi serta rekomendasi perbaikan, yang dilakukan secara formal oleh internal dan/atau eksternal (antara lain Inspektorat, Perguruan Tinggi, dan lembaga asesmen lainnya).</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Maksimal <strong style="color: #56a197;">300 kata</strong>
                            </ul>
                            <textarea class="form-control" id="p1_5" name="p1_5" rows="3"></textarea>
                          </div>
                        </div>
                      </div>

                      <div class="umum-row">
                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p1" class="font-weight-bold text-uppercase mt-3">Ide Inovatif</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify"><span class="fa fa-cube"></span>
                                Uraikan latar belakang dan tujuan dari inovasi, kesesuaian permasalahan yang akan diatasi melalui Inovasi dengan kategori yang dipilih, dan sisi kebaruan atau nilai tambah dari inovasi ini dalam konteks wilayah Anda.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Maksimal <strong style="color: #56a197;">600 kata</strong></label>
                            </ul>
                            <textarea class="form-control" id="p1" name="p1" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p2" class="font-weight-bold text-uppercase mt-3">Signifikansi</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Uraikan secara singkat bagaimana inovasi ini diimplementasikan dalam mengatasi permasalahan yang dihadapi dan penilaian/ asesmen yang dilakukan untuk mengukur dampak/ keberhasilan inovasi.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span> Maksimal<strong style="color: #56a197;">600 kata</strong></label>
                            </ul>
                            <textarea class="form-control" id="p2" name="p2" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p3" class="font-weight-bold text-uppercase mt-3">Kontribusi terhadap Capaian TPB</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Jelaskan kontribusi nyata yang dapat diukur dari inovasi terhadap capaian TPB pada tingkat Kementerian/Lembaga/Pemerintah Provinsi/Pemerintah Kabupaten/Pemerintah Kota.</label>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span> Maksimal<strong style="color: #56a197;"> 200 kata</strong></label>
                              <p></p>
                              <small>
                                <em>*Untuk informasi SDG's lebih lanjut dapat mengakses laman berikut : (<a href="http://sdgs.bappenas.go.id/" target="_blank">sdgs.bappenas.go.id</a>)</em>
                              </small>
                            </ul>
                            <textarea class="form-control" id="p3" name="p3" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p4" class="font-weight-bold text-uppercase mt-3">Adaptabilitas</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Jelaskan bahwa inovasi telah diadaptasi/direplikasi/disesuaikan dan diterapkan oleh unit/instansi lain atau memiliki potensi untuk direplikasi dengan menggambarkan luasan populasi dan kesamaan karakter masalah yang dialami atau ada pada daerah lain.</label>
                              <p></p>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span> Maksimal<strong style="color: #56a197;"> 400 kata</strong></label>
                            </ul>
                            <textarea class="form-control" id="p4" name="p4" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p4" class="font-weight-bold text-uppercase mt-3">Keberlanjutan</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Jelaskan sisi kebaruan/keunikan, nilai tambah, dan keunggulan daya penyelesaian masalah dari inovasi ini dibandingkan dengan model penyelesaian masalah yang pernah ada/digunakan dalam konteks wilayah Anda dengan cara menggambarkan kecepatan penyelesaian masalah dan luasan target populasi penyelesaian masalah yang terjangkau oleh kinerja inovasi.</label>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span> Maksimal<strong style="color: #56a197;"> 600 kata</strong></label>
                            </ul>
                            <textarea class="form-control" id="p4_2" name="p4_2" rows="3"></textarea>
                          </div>
                        </div>

                        <div class="form-row border-top">
                          <div class="form-group col-md-12">
                            <label for="p5" class="font-weight-bold text-uppercase mt-3">Kolaborasi Pemangku Kepentingan</label>
                            <ul class="text-muted">
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span>
                                Jelaskan pemangku kepentingan yang terlibat dan kontribusinya dalam merancang, melaksanakan, mengevaluasi dan memastikan keberlanjutan inovasi ini.</label>
                              <label class="mbr-section-lead text-justify">
                                Lengkapi uraian tersebut di atas dengan melampirkan data pendukung yang relevan.</label>
                              <label class="mbr-section-lead text-justify">
                                <span class="fa fa-cube"></span> Maksimal<strong style="color: #56a197;">200 kata</strong></label>
                            </ul>
                            <textarea class="form-control" id="p5" name="p5" rows="3"></textarea>
                          </div>
                        </div>
                      </div>
-->

                    </fieldset>
                    <p><center>
                      <!--<button id="SaveAccount" name="btn" class="btn btn-<? //= ($user_detail->kuota == 0) ? 'danger' : 'primary'; ?> submit" <? //= ($user_detail->kuota == 0) ? 'disabled' : ''; ?>><i class="fa fa-save"></i> <? //= ($user_detail->kuota == 0) ? 'Kuota Habis' : 'Simpan'; ?></button>-->
	
                      <a href="#" class="btn btn-primary mt-2"><i class="fa fa-save"> Simpan</i></a>
                                </center></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
    $(document).ready(function() {
		// $('.datepick2').datetimepicker({
		// 	timepicker: false,
		// 	format: 'd-m-Y',
		// 	formatDate: 'Y-m-d'
		// });
		$('.date').datepicker({  
		   format: 'mm-dd-yyyy'
		 });  
	});

</script>
<script src="rumahinovasi/js/bootstrap-datepicker.js"></script>
<script src="rumahinovasi/js/jquery.timepicker.js"></script>
<script src="rumahinovasi/js/jquery.datetimepicker.js"></script>
<script src="rumahinovasi/js/jquery.blockUI.js"></script>
@endsection

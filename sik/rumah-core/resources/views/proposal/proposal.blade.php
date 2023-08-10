@extends('home.layout')
@include('home.style.accordion-home')

@section('content')
<section id="content" class="blog mt-5">
  <div class="container">
    <div class="card shadow">
      <div class="card-body">
        <div class="section-title">
          <h2>Formulir Pendaftaran Proposal Program Inovasi Provinsi NTT</h2>
            </div>
              <div class="row">
                <div class="col-12">
                  <form id="SignupForm" method="POST" action="<? //= base_url('kovablik/form/add') ?>">
                    <fieldset>
                      <legend>Syarat & Ketentuan yang berlaku</legend>
                      <div class="overflow-sk">

                        <h3>Pendahuluan</h3>
                        Inovasi Pelayanan Publik adalah terobosan jenis pelayanan publik baik yang merupakan gagasan/ide kreatif orisinal dan/atau adaptasi/modifikasi yang memberikan manfaat bagi masyarakat, baik secara langsung maupun tidak langsung
                        <br><br>
                        <h3>Tema</h3>
                        Tema Kompetisi Inovasi Pelayanan publik di Lingkungan Kementerian/Lembaga, Pemerintah Daerah, Badan Usaha Milik Negara, dan Badan Usaha Milik Daerah Tahun 2021 adalah “Inovasi Pelayanan Publik Untuk Percepatan Pencapaian Sasaran Strategis Pembangunan Daerah sebagai perwujudan Nawa Bhakti Satya Provinsi Jawa Timur melalui Budaya CETTAR dan Semangat Optimis NTT Bangkit".
                        <br><br>
                        <h3>Kelompok Inovasi</h3>
                        Sesuai dengan KOVABLIK tahun 2022, Inovasi yang dikompetisikan dibagi menjadi tiga kelompok, yang terdiri dari:<br>
                        <ol style="padding-left: 18px">
                          <li>
                            <strong>Kelompok Umum</strong>, yaitu kelompok Inovasi:
                            <ol type="a" style="padding-left: 18px">
                              <li>Belum pernah mengikuti KOVABLIK periode sebelumnya;</li>
                              <li>Sudah pernah mengikuti KOVABLIK periode sebelumnya namun belum pernah mendapat penghargaan;</li>
                              <li>Belum pernah mendaptkan penghargaan sebagai Top 30 KOVABLIK NTT;</li>
                              <li>Belum pernah mendapatkan penghargaan pada KIPP/SINOVIK.</li>
                            </ol>
                          </li>
                          <li>
                            <strong>Kelompok Replikasi</strong>, yaitu kelompok Inovasi:
                            <ul class="term">
                              <li>Inovasi yang merupakan adaptasi/modifikasi Inovasi yang termasuk dalam Top 45 periode
                                KOVABLIK 2016-2020 dan belum pernah mendapat penghargaan pada KOVABLIK periode sebelumnya;</li>
                              <li>Belum pernah mendapatkan penghargaan pada KOVABLIK dan KIPP/SINOVIK</li>
                            </ul>
                          </li>
                          <li>
                            <strong>Kelompok Khusus</strong>, yaitu kelompok Inovasi:
                            <ul class="term">
                              <li>Top Inovasi Terpuji yang paling sedikit sudah berusia 1 (satu) tahun sejak ditetapkan sebagai Top Inovasi Terpuji yaitu: Top 30/2020 Top 25/2019 Top 25/2018 Top 25/2017 Top 25/2016 (sesuai undangan Biro Organisasi);</li>
                              <li>Belum pernah mendapatkan penghargaan pada KIPP/SINOVIK.</li>
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

                    <fieldset>
                      <legend>Kelompok Inovasi</legend>
                      <div class="alert alert-primary" role="alert">
                        <p>Pilihan Kelompok:<br />
                        <ol>
                          <li><strong>Kelompok Umum</strong>, yaitu kelompok Inovasi:</li>
                          <ol type="a">
                            <li>belum pernah mengikuti KOVABLIK periode sebelumnya;</li>
                            <li>sudah pernah mengikuti KOVABLIK periode sebelumnya namun belum pernah mendapat penghargaan;</li>
                            <li>belum pernah mendapatkan penghargaan sebagai top 99 inovasi tahun 2020.</li>
                            <li>belum pernah mendapatkan penghargaan sebagai top 35 inovasi tahun 2021.</li>
                          </ol>
                          <li><strong>Kelompok Replikasi</strong>, yaitu kelompok Inovasi:</li>
                          <ul>
                            <li>Inovasi yang merupakan adaptasi/modifikasi Inovasi yang termasuk dalam Top 45 periode KOVABLIK 2016-2020 dan belum pernah mendapat penghargaan pada KOVABLIK periode sebelumnya;</li>
                            <li>Belum pernah mendapatkan penghargaan pada KOVABLIK dan KIPP/SINOVIK</li>
                          </ul>
                          <li><strong>Kelompok Khusus</strong>, yaitu kelompok Inovasi:</li>
                          <ul>
                            <li>Top Inovasi Terpuji yang paling sedikit sudah berusia 1 (satu) tahun sejak ditetapkan sebagai Top Inovasi Terpuji yaitu: Top 25/2019 Top 25/2018 Top 25/2017 Top 25/2016</li>
                            <li>Tidak pernah mendapat penghargaan pada KIPP/SINOVIK</li>
                          </ul>
                          </p>
                      </div>

                      <div class="form-group">
                        <label>Kelompok inovasi mana yang akan Instansi Anda ikuti?</label>
                        <div class="form-check">
                          <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="radio1" value="umum" required>
                          <label class="form-check-label" for="radio1">
                            Kelompok Umum
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="radio2" value="replikasi">
                          <label class="form-check-label" for="radio2">
                            Kelompok Replikasi
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input kelompok-radio" type="radio" name="kelompok" id="radio3" value="khusus" required>
                          <label class="form-check-label" for="radio3">
                            Kelompok Khusus
                          </label>
                        </div>
                        <div class="kelompok-error"></div>
                      </div>
                    </fieldset>

                    <!-- Formulir Pendukung -->
                    <fieldset>
                      <legend>Formulir Pendukung</legend>
                      <div class="alert alert-primary" role="alert">
                        Tutorial unggah berkas pendukung pada penyimpanan data online (<a href="https://drive.google.com/" class="alert-link" target="_blank">Google Drive</a>) dan salin URL link berkas tersebut pada kolom formulir di bawah.
                        <hr>Tutorial pengisian Indeks Inovasi Daerah dapat dilihat <a href="https://indeks.inovasi.litbang.kemendagri.go.id/dokumen" class="alert-link" target="_blank">di sini</a>
                      </div>

                      <div class="form-group">
                        <label>Link URL file Standart Pelayanan dalam bentuk PDF (max 2 MB)</label>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="sp" id="sp1" value="1" required>
                          <label class="form-check-label" for="sp1">
                            Share
                          </label>
                        </div>
                        <!-- <div class="form-check"> 
                        <input class="form-check-input" type="radio" name="sp" id="sp2" value="0">
                        <label class="form-check-label" for="sp2">
                          Tidak
                        </label>
                      </div>-->
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
                        <!-- <div class="form-check"> 
                        <input class="form-check-input" type="radio" name="sp" id="sp2" value="0">
                        <label class="form-check-label" for="sp2">
                          Tidak
                        </label>
                      </div>-->
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
                        <!-- <div class="form-check"> 
                        <input class="form-check-input" type="radio" name="sp" id="sp2" value="0">
                        <label class="form-check-label" for="sp2">
                          Tidak
                        </label>
                      </div>-->
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
                        <!-- <div class="form-check"> 
                        <input class="form-check-input" type="radio" name="sp" id="sp2" value="0">
                        <label class="form-check-label" for="sp2">
                          Tidak
                        </label>
                      </div>-->
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
                        <!-- <div class="form-check"> 
                        <input class="form-check-input" type="radio" name="sp" id="sp2" value="0">
                        <label class="form-check-label" for="sp2">
                          Tidak
                        </label>
                      </div>-->
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
                        <!-- <div class="form-check"> 
                        <input class="form-check-input" type="radio" name="sp" id="sp2" value="0">
                        <label class="form-check-label" for="sp2">
                          Tidak
                        </label>
                      </div>-->
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

                    <fieldset>
                      <legend>Formulir Proposal</legend>
                      <input type="hidden" name="uid" value="<? //= $uid ?>">
                      <input type="hidden" name="kuota" value="<? //= $kuota ?>">
                      <input type="hidden" name="<? //= $this->security->get_csrf_token_name(); ?>" value="<? //= $this->security->get_csrf_hash(); ?>">

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <small>Kolom dengan tanda (<span class="required"></span>) wajib diisi.</small>
                        </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-md-12">
                          <label for="judul" class="required">Judul Inovasi</label>
                          <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Inovasi" required>
                        </div>
                      </div>

                      <div class="form-row">
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
                            </div>
                          </div>
                          <div class="tgl_inovasi-error"></div>
                        </div>
                      </div>

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
                            <?php
          /*                  foreach ($kategori as $r) {
                              echo '<option value="' . $r->id . '">' . $r->cat_name . '</option>';
                            }
          */                  ?>
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

                      <!-- Form Replikasi  -->
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

                      <!-- Form Khusus -->
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

                      <!-- Umum -->
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
@endsection

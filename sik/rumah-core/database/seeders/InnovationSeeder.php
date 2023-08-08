<?php

namespace Database\Seeders;

use App\Models\Innovation;
use App\Models\User;
use Illuminate\Database\Seeder;

class InnovationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::all();

        $data_inovasi = [
            [
                'title' => 'SI-MAPAN: Berantas Penyuapan melalui Sistem Manajemen Anti-Penyuapan',
                'photo' => 'innovation_pictures/simapan.jpeg',
                'video_url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/m3CdmCi9398" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'summary' => '<p>Dugaan gratifikasi dan waktu pelayanan yang belum mudah telusur membuat PSMB-LT Jember awalnya tidak percaya diri mempromosikan pelayanan. Salah satu sebabnya karena belum ada sistem tata cara pembayaran pelayanan yang efektif dan transparan. Melalui inovasi SI-MAPAN (Sistem Manajemen Anti-Penyuapan), persoalan tersebut mampu diselesaikan. Berkat inovasi ini, transparansi layanan terwujud.<br></p>',
                'description' => '<p>Permasalahan yang dihadapi sebelum melaksanakan inovasi pelayanan publik di UPT PSMB-LT Jember, adalah : (1) Dugaan personil menerima gratifikasi dan penyuapan dari pelanggan dalam rangka memberikan pelayanan berupa pengujian di laboratorium, inspeksi&nbsp; teknis, kalibrasi peralatan dan pelayanan sertifikasi produk pengguna tanda SNI (SPPT SNI) agar dipercepat dan atau dilancarkan atau apa pun alasannya; (2) Waktu pelayanan di UPT PSMB LT Jember belum tertelusur; (3) Kurang percaya diri dalam mempromosikan pelayanan kepada masyarakat atau pelaku usaha karena belum menerapkan SNI ISO 37001:2016 (Sistem Manajemen Anti Penyuapan); (4) Belum ada sistem tata cara pembayaran pelayanan yang efektif. Analisis yang dilakukan menemukan bahwa penyebab utama permasalahan tersebut terletak pada belum adanya sistem informasi yang transparan dan mampu telusur. Ketiadaan sistem informasi tersebutlah yang menciptakan peluang terjadinya persoalan dalam pelayanan.</p><p>Menyikapi permasalahan tersebut di atas, pelayanan di UPT PSMB-LT Jember melahirkan inovasi pelayanan berstandar dan berbasis Informasi Teknologi dengan nama “SI MAPAN&nbsp; &nbsp;LAYANAN&nbsp; &nbsp;UPT. PSMB-LT JEMBER" dengan ruang lingkup pelayanan&nbsp; pengujian, kalibrasi, inspeksi teknis, pengambilan sampling dan sertifikasi produk atau jasa.</p><p>Tahapan inovasi SI - MAPAN&nbsp; Layanan UPT PSMB LT Jember yakni: (1) Pengajuan permohonan kepada Kepala Disperindag Jawa Timur untuk penerapan Sistem Manajemen Anti Penyuapan ISO 37001; (2) Melaksanakan Kaji Ulang Manajemen; (3) Melaksanakan pelatihan eksternal; (4) Menyusun dokumen persiapan sertifikasi berupa&nbsp; Panduan Mutu, Prosedur, Instruksi Kerja, dan Formulir; (5) Melaksanakan pelatihan internal sosialisasi pemahaman penerapan dokumen ISO 37001; (6) Implementasi SI MAPAN UPT PSMB LT Jember melalui website: lembagatembakaujember.disperindag.jatimprov.go.id; (7) Secara berkelanjutan memberikan pemahaman kepada seluruh personil; (8) Melaksanakan sosialisasi kepada pelanggan; (9) Mengkomunikasikan Kebijakan Mutu; (10) Melaksanakan sertifikasi SNI ISO 37001; (11) Mempertahankan penerapan SNI ISO 37001 melalui kegiatan&nbsp; survailen; dan (12) Pelaksanaan sasaran pelayanan publik melalui penilaian Indeks Kepuasan Pelanggan.</p><p>Sesudah penerapan SI MAPAN, dampak yang muncul adalah meningkatnya kepercayaan pelanggan terhadap pelayanan publik UPT PSMB-LT Jember, mencegah perilaku personil melakukan Gratifikasi dan Penyuapan di segala lini, dapat melaksanakan pelayanan publik secara optimal, memberikan hasil pelayanan kepada pelanggan sesuai permintaan dengan tepat waktu dan hasil yang valid. Inovasi tersebut memberikan dampak positif dan transparansi informasi secara terbuka dengan cara mengurangi biaya pengurusan sertifikasi pengujian, kalibrasi, inspeksi teknis dan sertifikasi produk/jasa di luar biaya resmi sesuai dengan Peraturan Daerah Retribusi.</p><p>Inovasi ini sangat memungkinkan direplika baik oleh layanan sejenis dengan penyesuaian prosedur serta besaran retribusi sesuai bidang pelayanan yang diberikan. Inovasi SI-MAPAN ini masih diimplementasikan, bahkan selama Pandemi dikembangkan menjadi ISONE SI-MAPAN (Inspeksi Online Sistem Manajemen Anti-Penyuapan).</p>',
                'achievement' => 'Top-25 Kovablik Jatim 2018',
                'infographics' => 'innovation_pictures/simapan-infografis.jpeg',
                // 'address' => ,
                'city_id' => '5',
                'innovator_id' => '3', //siti
                // 'innovation_doctor_id' => '3',
                'innovation_admin_id' => '9',
                'year_start' => '2018',
                'sustainability_status_id' => '5', // berlanjut berkembang
                'category_id' => '3', // Administrasi Pelayanan Publik
            ],
            [
                'title' => 'LapeRDe: Kejar Perekaman Warga Hingga ke Desa',
                'photo' => 'innovation_pictures/laperde.jpeg',
                'video_url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/m3CdmCi9398" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'summary' => '<p>Banyaknya warga yang belum melakukan perekaman data identitas menyebabkan berbagai persoalan kependudukan. Umumnya berasal dari kelompok rentan, minoritas, serta mobilitas yang terbatas. Melalui LapeRDe, Dispendukcapil Gresik memburu perekaman mereka hingga ke pelosok desa. Hanya butuh waktu setahun dari awal program, lebih dari separuh data warga yang belum terekam di Gresik bisa didapatkan.</p>',
                'description' => '<p>Sebagai hak dasar masyarakat, pelayanan administrasi kependudukan dan catatan sipil (admindukcapil) diharapkan dapat mewujudkan ketunggalan identitas dengan memulihkan, memutakhirkan, maupun meregistrasi biodata penduduk baik secara individu maupun keluarga. Sejak ketunggalan identitas berbasis NIK dicanangkan pada tahun 2011, ditemukan pada pertengahan 2016 sekitar 12% dari wajib KTP-el secara nasional sebanyak 183 juta penduduk belum melakukan perekaman. Merekalah yang disebut “the Missing Millions” atau jutaan (orang) yang hilang. Permasalahan yang sama dihadapi oleh Kabupaten/Kota di seluruh Indonesia. Pada bulan Januari Tahun 2016, dari 974.057 wajib KTP Kabupaten Gresik, tercatat 147.576 penduduk belum melakukan perekaman atau sekitar 15,2%&nbsp; atau masih di atas rerata nasional yang belum melakukan perekaman.</p><p>Dinas Kependudukan Catatan Sipil Kabupaten Gresik berinisiatif membuat sebuah inovasi yang diberi nama LapeRDe, akronim dari Laporan Petugas Register Desa. Tujuan utama LapeRDe adalah mewujudkan ketunggalan identitas melalui percepatan perekaman KTP-el didukung oleh layanan inklusif dan responsif oleh Petugas Register Desa dan jejaring kerjanya. Sasaran LapeRDe selain missing million&nbsp; atau penduduk yang belum melakukan perekaman KTP-el juga percepatan perolehan akta kelahiran.</p><p>Percepatan perekaman KTP-el melalui perburuan “The Missing Millions” dengan memanfaatkan sistem informasi LapeRDe telah melalui pelbagai tahapan yang terintegrasi secara inklusi. Tahapan inovasi ini adalah (1) Membentuk jejaring kerja memanfaatkan WhatsApp Group secara berjenjang mulai tingkat kabupaten hingga desa; (2) Membuat aplikasi LapeRDe dalam versi Android dan IOs yang terkoneksi dengan data kependudukan lainnya; (3) Melakukan diseminasi, sosialisasi kepada warga, dan pelatihan kepada petugas register desa; (4) Melakukan intensifikasi perekaman dan validasi data di desa yang melakukan e-Pilkades serentak; dan (5) Monitoring dan evaluasi data secara realtime melalui dashboard aplikasi LapeRDe.</p><p>Hasilnya, hanya setahun sejak tanggal 4 Januari 2016 sebagai tonggak awak LaPerDe, perubahan signifikan dari data awal 147.576 jiwa&nbsp; (15,2%) menjadi 96.939 jiwa (9,86%) penduduk yang belum melakukan perekaman KTP menjadi 52.270 jiwa atau 54%&nbsp; telah berhasil diidentifikasi per Februari 2017. Tidak hanya itu, petugas register desa mengalami perubahan pola pikir layanan yang lebih aktif, dan identifikasi penyebab warga belum rekam menjadi dasar pendekatan penyelesaian masalah yang lebih efektif.</p><p>Sejak tahun 2020, inovasi ini bertransformasi menjadi inovasi Poedak (Pelayanan Online Pendaftaran Administrasi Kependudukan) karena dikolaborasikan dengan beberapa layanan administrasi kependudukan lainnya. Atas capaiannya, inovasi LapeRDe pernah masuk dalam Top-25 Kovablik Jatim pada tahun 2018.</p>',
                'achievement' => 'Top-25 Kovablik Jatim 2018',
                'infographics' => 'innovation_pictures/laperde-infografis.jpeg',
                // 'address' => ,
                'city_id' => '1',
                'innovator_id' => '4', //sunarto
                // 'innovation_admin_id' => '1',
                // 'innovation_doctor_id' => '3',
                'innovation_admin_id' => '9',
                'year_start' => '2018',
                'sustainability_status_id' => '7', //bertransformasi
                'category_id' => '3', //Administrasi Pelayanan Publik
            ],
            [
                'title' => 'Baik Lo Jatim: Bank Ikan Lokal Jawa Timur Solusi Pelestarian, Pengembangan Teknologi, Dan Transfer Knowledge Ikan Lokal',
                'photo' => 'innovation_pictures/baiklo.jpeg',
                'video_url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/m3CdmCi9398" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'summary' => '<p>Eksploitasi berlebih sumber daya ikan di perairan umum, penggunaan alat tangkap berbahaya (setrum, bom, racun ikan), pencemaran air dan kerusakan lingkungan. Masuknya ikan asing/impor juga mengancam keanekaragaman hayati perairan, merusak estetika ekosistem dan menggusur ikan-ikan asli/lokal Indonesia. UPT Laboratorium Kesehatan Ikan dan Lingkungan melahirkan inovasi untuk mengatasi ancaman kepunahan ikan lokal melalui inovasi Baik Lo Jatim.</p>',
                'description' => '<p>Keberadaan Ikan lokal di Jawa Timur mulai terancam punah, banyak faktor penyebab berkurangnya populasi ikan lokal; antara lain eksploitasi sumber daya ikan di perairan umum sudah menunjukkan eksploitasi berlebih, penggunaan alat tangkap berbahaya (setrum, bom, racun ikan), pencemaran air dan kerusakan lingkungan. Sebagian besar ikan yang di impor atau ikan invansif untuk tujuan produksi sudah diterima sebagai ikan domestik di Indonesia, dan telah mendarah daging bagi pembudidaya ikan.&nbsp; Analisis yang dilakukan menemukan bahwa penyebab utama permasalahan yang ada yakni kurangnya sistem pengelolaan&nbsp; yang baik.</p><p>UPT Laboratorium Kesehatan Ikan dan Lingkungan melahirkan inovasi untuk mengatasi permasalahan melalui inovasi Baik Lo Jatim.Pendekatan strategis yang dilakukan: inventarisasi, koleksi, domestikasi, stocking, restocking dan transfer knowledge (sosialisasi, pendampingan teknis, monitoring dan evaluasi) kepada masyarakat dalam upaya melestarikan dan menjaga plasma nutfah perairan dari kepunahan.&nbsp;&nbsp;</p><p>Inovasi ini berhasil meningkatkan kesadaran/pemahaman masyarakat tentang pentingnya melestarikan sumber daya ikan serta telah berhasil mengembalikan keberadaan ikan lokal di perairan umum yang terancam punah serta mendorong terbentuknya kawasan pelestarian ikan lokal Jawa Timur.</p><p>Begitu besarnya dampak inovasi dan kebermanfaatan dari penerapannya, inovasi Baik Lo Jatim telah menjadi rujukan dari beberapa daerah untuk melakukan replikasi dan menjadi top 25 Kovablik Jawa Timur tahun 2019.</p>',
                'achievement' => 'Top-25 Kovablik Jatim 2019',
                'infographics' => 'innovation_pictures/baiklo-infografis.jpeg',
                // 'address' => ,
                'city_id' => '2', //surabaya
                'innovator_id' => '5', // '3', //firdaus
                // 'innovation_admin_id' => '1',
                // 'innovation_doctor_id' => '3',
                'innovation_admin_id' => '10', // '2',
                'year_start' => '2019',
                'sustainability_status_id' => '6', //Berlanjut Bereplikasi
                'category_id' => '4', //Lingkungan Hidup
            ],
            [
                'title' => 'SMA DOUBLE TRACK: Solusi Menekan Angka Pengangguran Jenjang SMA',
                'photo' => 'innovation_pictures/double-track.jpeg',
                'video_url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/m3CdmCi9398" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'summary' => '<p>Tidak semua lulusan SMA/MA di Jatim melanjutkan kuliah, dan sulit mendapat pekerjaan ketka lulus menjadi penyebab tingginya jumlah angka pengangguran. Dinas Pendidikan Provinsi Jawa Timur melahirkan inovasi untuk mengurangi jumlah angka pengangguran itulah Pemerintah Provinsi Jawa Timur membuat terobosan melalui program SMA/MA Double Track.</p>',
                'description' => '<p>Bahwasannya tingginya angka pengangguran terutama pada jenjang SMA yang belum memiliki keterampilan menjadi persoalan yang harus diselesaikan. Jika tidak mendapatkan perhatian khusus dan memperoleh intervensi dari para pemangku kebijakan, maka akan menyumbangkan besarnya angka pengangguran dan akan bermuara pada kondisi Indeks Pembangunan Manusia (IPM) Jawa Timur.</p><p>Mengatasi problematika yang ada, Dinas Pendidikan Provinsi Jawa Timur menghadirkan inovasi SMA/MA Double Track.&nbsp; Inovasi dilakukan dengan melaksanakan kegiatan KBM reguler dan menyelenggarakan kegiatan pembekalan keterampilan secara berdampingan dengan memanfaatkan kearifan lokal.&nbsp;</p><p>Pengembangan kurikulum dilakukan oleh pihak Dinas Pendidikan, UPT Pusat Pelatihan dan Sertifikasi Profesi BPPU ITS serta mitra Dunia Usaha dan Dunia Industri (DUDI) dikembangkan berdasarkan SKKNI sehingga sesuai dengan kebutuhan industri. Sistem pengelolaan pelatihan, monitoring, evaluasi dan pemagangan siswa alumni program ini dilaksanakan secara terintegrasi menggunakan sistem online.</p><p>Sejak tahun 2018, inovasi ini berlanjut bertransformasi, inovasi Double Track menjadi percontohan atau pilot project&nbsp; oleh pemerintah pusat yang diadopsi dengan nama vokasi. Hal tersebut membuktikan bahwa inovasi Double Track dalam perkembangannya bertansformasi dengan berbagai macam pengembangan fitur dan platform.</p>',
                'achievement' => 'Top-25 Kovablik Jatim 2019',
                'infographics' => 'innovation_pictures/double-track-infografis.jpeg',
                // 'address' => ,
                'city_id' => '2', //surabaya
                'innovator_id' => '6', //anny
                // 'innovation_admin_id' => '1',
                // 'innovation_doctor_id' => '3',
                'innovation_admin_id' => '11',
                'year_start' => '2019',
                'sustainability_status_id' => '7', //Bertransformasi
                'category_id' => '2', //Pendidikan
            ],
            [
                'title' => 'OMKRIS GARANG : Manajemen Pergudangan Komoditas Garam untuk Sepanjang Tahun',
                'photo' => 'innovation_pictures/omkris.jpeg',
                'video_url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/m3CdmCi9398" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'summary' => '<p>Garam merupakan komoditas utama, namun menjadi problematika ketika tidak tersedianya gudang penyimpanan garam yang memadai di tingkat petambak garam untuk secepatnya menjual hasil panen tanpa mempertimbangkan kondisi dan harga garam. Melalui OMKRIS GARANG, Badan Penelitian dan Pengembangan Provinsi Jawa mampu mengatasi problematika yang ada.</p>',
                'description' => '<p>Produksi garam nasional sampai saat ini tidak mampu memenuhi kebutuhan garam dalam negeri. Selain itu juga kerap terjadi tidak tersedianya gudang penyimpanan garam yang memadai di tingkat petambak garam, yang disebabkan petambak secepatnya menjual hasil panen tanpa mempertimbangkan kondisi dan harga garam. Pada beberapa tahun terakhir permasalahan yang terjadi berkaitan pula dengan produksi, distribusi dan kepastian harga, serta kapasitas dan manajamen pergudangan.</p><p>Perlu adanya suatu program terkait manajemen pergudangan disebut juga SRG (Sistem Resi Gudang) yang bertujuan membantu petani dalam mengatasi persamalahan yang ada. Hal tersebut diwujudkan oleh Badan Penelitian dan Pengembangan Provinsi Jawa Timur melalui OMKRIS GARANG.</p><p>OMKRIS GARANG adalah inovasi pemanfaatan rumah kristalisasi garam dalam produksi garam rakyat untuk dapat memproduksi garam sepanjang tahun. Tujuan dari inovasi ini adalah mendukung pengentasan kemiskinan masyarakat pesisir melalui peningkatan kualitas dan kuantitas produksi garam rakyat. Sasaran pengguna utama dari inovasi ini adalah petambak garam sebagai bagian dari masyarakat pesisir di Jawa Timur.&nbsp;&nbsp;</p><p>Inovasi OMKRIS GARANG mampu menyediakan lapangan kerja bagi calon tenaga kerja dan terciptanya sinergisitas antara unsur pemerintah, swasta, perguruan tinggi, dan masyarakat. Sinergisitas ini memperkuat program pengentasan kemiskinan terutama di wilayah pesisir Jawa Timur serta meningkatkan tingkat kepercayaan masyarakat terdapat pelayanan yang dilakukan oleh pemerintah. Sedangkan untuk aspek ekonomi, dampak utama yang didapatkan adalah peningkatan perekonomian petambak garam. Peningkatan kuantitas dan kualitas produksi yang dihasilkan juga bisa berdampak positif pada PAD.</p><p>Sejak tahun 2018, inovasi ini berlanjut berkembang yang bekerjasama dengan Universitas Brawijaya, inovasi OMKRIS GARANG pernah masuk dalam Top-25 Kovablik Jatim pada tahun 2019.</p>',
                'achievement' => 'Top-25 Kovablik Jatim 2019',
                'infographics' => 'innovation_pictures/omkris-infografis.jpeg',
                // 'address' => ,
                'city_id' => '2', //surabaya
                'innovator_id' => '7', //rimba
                // 'innovation_admin_id' => '1',
                // 'innovation_doctor_id' => '3',
                'innovation_admin_id' => '12',
                'year_start' => '2019',
                'sustainability_status_id' => '6', //berlanjut berkembang
                'category_id' => '5', //Ekonomi
            ],
            [
                'title' => 'MBCU – Mind and Body Check Up: Pemeriksaan Terpadu Menuju Sehat Bermutu',
                'photo' => 'innovation_pictures/mbcu.jpeg',
                'video_url' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/m3CdmCi9398" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'summary' => '<p>Surat keterangan sehat biasanya didapatkan hanya dengan berfokus pada pemeriksaan aspek fisik saja dan mengabaikan non fisik. Padahal kesehatan fisik dan non fisik memiliki hubungan timbal balik yang signifikan. Rumah Sakit Jiwa Provinsi Jawa Timur memberikan solusi dengan inovasi MBCU yang dilakukan dengan melakukan pemeriksaan lengkap sekali datang.</p>',
                'description' => '<p>Permasalahan yang sering terjadi adalah ketika seseorang&nbsp; membutuhkan surat keterangan Sehat fisik, jiwa dan bebas dari narkoba, maka dia harus 3 kali periksa dalam waktu yang berbeda. Hasilnya menunggu sampai dengan 4 hari. Tentu ini pemborosan waktu dan biaya.</p><p>Mengatasi problematika yang ada, RSJ Menur menghadirkan inovasi Mind and Body Check Up&nbsp; - One stop Service Menuju Sehat Jiwa Raga merupakan inovasi yang digagas oleh Rumah Sakit Jiwa Menur untuk merespon kebutuhan masyarakat berkaitan adanya general checkup atau pemeriksaan kesehatan.&nbsp;</p><p>Mengatasi problematika yang ada, RSJ Menur menghadirkan inovasi Mind and Body Check Up&nbsp; - One stop Service Menuju Sehat Jiwa Raga merupakan inovasi yang digagas oleh Rumah Sakit Jiwa Menur untuk merespon kebutuhan masyarakat berkaitan adanya general checkup atau pemeriksaan kesehatan. Inovasi MBCU merupakan penggabungan dari tiga jenis pemeriksaan menjadi One Stop Service langsung dapat tiga surat keterangan. Inovasi ini merupakan satu satunya yang ada di Jawa Timur bahkan di Indonesia.</p><p>MBCU melakukan pemeriksaan deteksi dini kesehatan jiwa dan kesehatan fisik pada klien, dengan berbagai metode, berupa wawancara (anamnesa), pengamatan atau visual, pemeriksaan fisik, pemeriksaan psikis/kesehatan jiwa, pemeriksaan laboratorium atau radiologi.&nbsp;</p><p>Sejak tahun 2020, inovasi ini berlanjut berkembang melakukan kerjasama dengan berbagai intansi untuk dapat melakukan pemeriksaan kesehatan berdasarkan system rekrutmen yang diterapkan di instansi tersebut , inovasi MBCU pernah masuk dalam Top-30 Kovablik Jatim pada tahun 2020.</p>',
                'achievement' => 'Top-30 Kovablik Jatim 2020',
                'infographics' => 'innovation_pictures/mbcu-infografis.jpeg',
                // 'address' => ,
                'city_id' => '2', //surabaya
                'innovator_id' => '8', //shodikin
                // 'innovation_admin_id' => '1',
                // 'innovation_doctor_id' => '3',
                'innovation_admin_id' => '13',
                'year_start' => '2020',
                'sustainability_status_id' => '6', //berlanjut berkembang
                'category_id' => '1', //Ekonomi
            ],
        ];

        foreach ($data_inovasi as $key => $value) {
            $innovation = new Innovation;
            $innovation->title = $value['title'];
            $innovation->photo = $value['photo'];
            $innovation->video_url = $value['video_url'];
            $innovation->summary = $value['summary'];
            $innovation->description = $value['description'];
            $innovation->achievement = $value['achievement'];
            $innovation->infographics = $value['infographics'];
            // $innovation->address = $value['address'];
            $innovation->city_id = $value['city_id'];
            $innovation->innovator_id = $value['innovator_id'];
            // $innovation->innovator_id = $value['innovator_admin_id'];
            // $innovation->innovation_doctor_id = $value['innovation_doctor_id'];
            $innovation->innovation_admin_id = $value['innovation_admin_id'];
            $innovation->year_start = $value['year_start'];
            $innovation->sustainability_status_id = $value['sustainability_status_id'];
            $innovation->category_id = $value['category_id'];
            // $innovation->publised_status = $value['publised_status'];
            // $innovation->latitude = '' . $i;
            // $innovation->longitude = '' . $i;

            $innovation->save();
        }

        // \App\Models\Innovation::factory(30)->create();
    }
}

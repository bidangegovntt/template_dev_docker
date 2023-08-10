@extends('home.layout')
@include('home.style.chat')

@section('content')
    <section id="content" class="blog mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Hotline Inovasi</h2>
            </div>
            <div class="row">
                <div class="col-12 entries">
                    <article class="entry entry-single">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/profile_photos/faizin.jpeg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-md-8">
                                <h2 class="entry-title">
                                    AHMAD FAIZIN KARIMI
                                </h2>

                                <div class="entry-content isi">
                                    <p class="text-muted">Peneliti, Penulis, Konsultan Kreatif dan Pengembangan Media
                                    </p>
                                    <p>Lahir di Gresik, 26 April 1986 pria yang akrab dipanggil Faizin ini memulai kariernya
                                        sebagai seorang penjamin mutu bidang pendidikan dan auditor internal sistem
                                        manajemen mutu di SMAM 1 Gresik. Membuat konsep layanan sesuai standar mutu,
                                        menganalisis sistem, dan mengevaluasi implementasi program yang menjadi pekerjaannya
                                        sehari-hari membuatnya terbiasa berpikir dengan perspektif proses dan orientasi
                                        mutu.&nbsp;</p>
                                    <p>Pada tahun 2013, ia mengembangkan layanan konsultan kreatif dan pengembangan media
                                        melalui lembaga yang ia dirikan yakni Caremedia Communication. Dengan tekun dan
                                        berkelanjutan ia mendampingi beragam lembaga dalam mengelola media, merumuskan
                                        program kreatif, hingga penerbitan publikasi berkala.</p>
                                    <p>Meneliti, menulis, dan memicu perubahan adalah passion lulusan Magister Sosiologi
                                        Universitas Muhammadiyah Malang ini. “Bagi saya, Tuhan itu Maha Kreatif. Dan kita
                                        harus mampu menemukan, memimpikan, dan mewujudkan ciptaan-ciptaan unik. Itulah yang
                                        saya sebut dengan istilah Spiritualitas-Kreatif,” ujarnya.&nbsp;</p>
                                    <p>Bergabung sebagai peneliti di The JawaPos Institute of Pro-Otonomi (JPIP) sejak tahun
                                        2018, ia terlibat dalam beberapa proyek. Di antaranya sebagai Communication
                                        Specialist proyek Ayo Inklusif! bersama USAID dan Researcher proyek Lopo Inovasi
                                        bersama KOMPAK-DFAT. Sejak tahun 2019 hingga sekarang terlibat sebagai Tim Penilai
                                        Provinsi aspek Inovasi Pelayanan Publik dalam Sinergisitas Penyelenggaraan
                                        Pemerintahan di Kecamatan Pemprov NTT.&nbsp;</p>
                                    <p>Selain menjadi editor dan indie publisher, juga aktif menulis buku. Beberapa judul
                                        yang telah diterbitkan di antaranya Wujudkan Tulisanmu Menjadi Buku (Esensi
                                        Erlangga), Jurnalistik Asyik (Esensi Erlangga), Sang Genius Politik (Caremedia), dan
                                        Pedoman Praktis Menerbitkan Majalah Sekolah (Caremedia).</p>

                                </div>
                            </div>
                        </div>

                    </article><!-- End blog entry -->

                    <!-- DIRECT CHAT PRIMARY -->
                    <div class="card card-prirary cardutline direct-chat direct-chat-primary">
                        <div class="card-header">
                            <h3 class="card-title">Direct Chat</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Conversations are loaded here -->
                            <div class="direct-chat-messages">
                                <!-- Message. Default to the left -->
                                <div class="direct-chat-msg">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-left">Alexander Pierce</span>
                                        <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="{{ asset('home/img/user1-128x128.jpg') }}"
                                        alt="Message User Image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        Is this template really for free? That's unbelievable!
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->

                                <!-- Message to the right -->
                                <div class="direct-chat-msg right">
                                    <div class="direct-chat-infos clearfix">
                                        <span class="direct-chat-name float-right">Sarah Bullock</span>
                                        <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                                    </div>
                                    <!-- /.direct-chat-infos -->
                                    <img class="direct-chat-img" src="{{ asset('home/img/user3-128x128.jpg') }}"
                                        alt="Message User Image">
                                    <!-- /.direct-chat-img -->
                                    <div class="direct-chat-text">
                                        You better believe it!
                                    </div>
                                    <!-- /.direct-chat-text -->
                                </div>
                                <!-- /.direct-chat-msg -->
                            </div>
                            <!--/.direct-chat-messages-->

                            <!-- Contacts are loaded here -->
                            <div class="direct-chat-contacts">
                                <ul class="contacts-list">
                                    <li>
                                        <a href="#">
                                            <img class="contacts-list-img"
                                                src="{{ asset('home/img/user1-128x128.jpg') }}">

                                            <div class="contacts-list-info">
                                                <span class="contacts-list-name">
                                                    Count Dracula
                                                    <small class="contacts-list-date float-right">2/28/2015</small>
                                                </span>
                                                <span class="contacts-list-msg">How have you been? I was...</span>
                                            </div>
                                            <!-- /.contacts-list-info -->
                                        </a>
                                    </li>
                                    <!-- End Contact Item -->
                                </ul>
                                <!-- /.contatcts-list -->
                            </div>
                            <!-- /.direct-chat-pane -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <form action="#" method="post">
                                <div class="input-group">
                                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                                    <span class="input-group-append">
                                        <button type="submit" class="btn btn-primary">Send</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-footer-->
                    </div>
                    <!--/.direct-chat -->
                </div>

            </div>
        </div>
    </section>
@endsection

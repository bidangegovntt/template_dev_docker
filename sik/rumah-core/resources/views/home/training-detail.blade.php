@extends('home.layout')

@section('content')
    <section id="content" class="blog mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Training</h2>
            </div>
            <div class="row">
                <div class="col-12 entries">
                    <div class="blog-comments">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h2 class="mb-4">Judul Training</h2>
                                <div id="comment-2" class="comment clearfix">
                                    <img src="{{ asset('home/img/blog/comments-2.jpg') }}" class="comment-img  float-left"
                                        alt="">
                                    <h5><a href="">Aron Alvarado</a></h5>
                                    <time datetime="2020-01-01">01 Jan, 2020</time>
                                    <p>
                                        Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet
                                        saepe.
                                        Officiis illo
                                        ut beatae.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- End comment #2-->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

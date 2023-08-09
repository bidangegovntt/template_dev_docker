@extends('home.layout')

@section('content')
    <section id="content" class="blog mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Profil Inovasi</h2>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Daftar Inovasi</h3>
                        <div class="sidebar-item recent-posts">
                            <div class="post-item clearfix">
                                <img src="{{ asset('home/img/blog/blog-recent-1.jpg') }}" alt="">
                                <h4><a href="{{url('profil-inovasi/1')}}">Nihil blanditiis at in nihil autem</a></h4>
                                <time datetime="2020-01-01">2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{ asset('home/img/blog/blog-recent-2.jpg') }}" alt="">
                                <h4><a href="{{url('profil-inovasi/1')}}">Quidem autem et impedit</a></h4>
                                <time datetime="2020-01-01">2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{ asset('home/img/blog/blog-recent-3.jpg') }}" alt="">
                                <h4><a href="{{url('profil-inovasi/1')}}">Id quia et et ut maxime similique occaecati ut</a></h4>
                                <time datetime="2020-01-01">2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{ asset('home/img/blog/blog-recent-4.jpg') }}" alt="">
                                <h4><a href="{{url('profil-inovasi/1')}}">Laborum corporis quo dara net para</a></h4>
                                <time datetime="2020-01-01">2020</time>
                            </div>

                            <div class="post-item clearfix">
                                <img src="{{ asset('home/img/blog/blog-recent-5.jpg') }}" alt="">
                                <h4><a href="{{url('profil-inovasi/1')}}">Et dolores corrupti quae illo quod dolor</a></h4>
                                <time datetime="2020-01-01">2020</time>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

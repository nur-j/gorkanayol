@extends('front.layout')
@php
    $locale = app()->getLocale();
    if ($locale === 'tm') {
        \Carbon\Carbon::setLocale('tk');
    }
@endphp
@section('content')

        <!-- ##### Hero Area Start ##### -->
        <div class="hero-area">
            <!-- Hero Slides Area -->
            <div class="hero-slides owl-carousel">
                @foreach ($slides as $slide)
                    <!-- Single Slide -->
                    <div class="single-hero-slide bg-img" style="background-image: url( {{  asset('storage/' . $slide->img) }} );">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="slide-content text-center">
                                        <div class="post-tag">
                                        </div>
                                        <h2 data-animation="fadeInUp" data-delay="250ms">
                                            <a href="single-post.html">
                                                @switch($locale)
                                                    @case('ru')
                                                        {{ $slide->text_ru }}
                                                        @break
                                                    @case('tm')
                                                        {{ $slide->text_tm }}
                                                        @break
                                                    @case('en')
                                                        {{ $slide->text_en }}
                                                        @break
                                                    @case('tr')
                                                        {{ $slide->text_tr }}
                                                        @break
                                                    @default
                                                        {{ $slide->text_ru }}
                                                @endswitch
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- ##### Hero Area End ##### -->
    
        <!-- ##### Blog Wrapper Start ##### -->
        <div class="blog-wrapper section-padding-100-0 py-5 clearfix">

            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9">
                        @foreach($posts as $post) 
                            <!-- Single Blog Area  -->
                            <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="single-blog-thumbnail">
                                            <img style="max-height: 200px; object-fit: cover" src="{{ asset('storage/' . $post->poster) }}" alt="">
                                            <div class="post-date">
                                                <a href="#"><span>{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Blog Content -->
                                        <div class="single-blog-content">
                                            <div class="line"></div>
                                            <a href="#" class="post-tag">Habarlar</a>
                                            <h4>
                                                <a href="{{ route('posts.show.front', $post->id) }}" class="post-headline">
                                                    @switch($locale)
                                                        @case('ru')
                                                            {{ $post->title_ru }}
                                                            @break
                                                        @case('tm')
                                                            {{ $post->title_tm }}
                                                            @break
                                                        @case('en')
                                                            {{ $post->title_en }}
                                                            @break
                                                        @case('tr')
                                                            {{ $post->title_tr }}
                                                            @break
                                                        @default
                                                            {{ $post->title_ru }}
                                                    @endswitch
                                                </a>
                                            </h4>
                                            {{-- <p>
                                                @switch($locale)
                                                    @case('ru')
                                                        {!! substr($post->text_ru, 0, 30) !!}
                                                        @break
                                                    @case('tm')
                                                        {!! substr($post->text_tm, 0, 30) !!}
                                                        @break
                                                    @case('en')
                                                        {!! substr($post->text_en, 0, 30) !!}
                                                        @break
                                                    @case('tr')
                                                        {!! substr($post->text_tr, 0, 30) !!}
                                                        @break
                                                    @default
                                                        {!! substr($post->text_ru, 0, 30) !!}
                                                @endswitch
                                            </p> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
    
                        <!-- Load More -->
                        <div class="load-more-btn mt-3 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1000ms">
                            <a href="{{ route('posts.index.front') }}" class="btn original-btn">{{ __('main.show_all') }} ...</a>
                        </div>
                    </div>
    
                    <!-- ##### Sidebar Area ##### -->
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="post-sidebar-area">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Blog Wrapper End ##### -->
       
        <!-- ##### Transport Types Start ##### -->
        <div style="background: #eee" class="transport-types-area py-5 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" style="height:200px; object-fit: cover;" src="{{ asset('front/img/types/multimodal.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text"><strong>{{ __('main.multimodal') }}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" style="height:200px; object-fit: cover;" src="{{ asset('front/img/types/truck.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text"><strong>{{ __('main.auto_transport') }}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" style="height:200px; object-fit: cover;" src="{{ asset('front/img/types/airplane.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text"><strong>{{ __('main.airway') }}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" style="height:200px; object-fit: cover;" src="{{ asset('front/img/types/railway.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                              <p class="card-text"><strong>{{ __('main.railway') }}</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Transport Types End ##### -->
    

        <!-- ##### Cool Facts Area Start ##### -->
        <div class="cool-facts-area section-padding-100-0 bg-img background-overlay" style="background-image: url(/front/img/slider/volvo.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-blog-area blog-style-2 text-center mb-100">
                            <!-- Blog Content -->
                            <div class="single-blog-content">
                                <div class="line"></div>
                                {{-- <a href="#" class="post-tag">Lifestyle</a> --}}
                                <h4><a href="#" class="post-headline">Наши достижения</a></h4>
                                {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis aliquam. Integer accumsan sodales odio, id tempus velit ullamcorper id. Quisque at erat eu libero consequat tempus. Quisque molestie convallis tempus. Ut semper purus metus, a euismod sapien sodales ac. Duis viverra eleifend fermentum. Donec sagittis lacus sit amet augue sodales, vel cursus enim tristique. Maecenas vitae massa ut est consectetur sagittis quis vitae tortor. Sed et massa vel.</p> --}}
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <!-- Single Cool Facts Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-cool-facts-area text-center mb-100">
                            <h2><span class="counter">{{ $a->clients }}</span></h2>
                            <p>довольных клиентов</p>
                        </div>
                    </div>
                    <!-- Single Cool Facts Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-cool-facts-area text-center mb-100">
                            <h2><span class="counter">{{ $a->km }}</span></h2>
                            <p>километров</p>
                        </div>
                    </div>
                    <!-- Single Cool Facts Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-cool-facts-area text-center mb-100">
                            <h2><span class="counter">{{ $a->shipped }}</span></h2>
                            <p>перевезено тонн</p>
                        </div>
                    </div>
                    <!-- Single Cool Facts Area -->
                    <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-cool-facts-area text-center mb-100">
                            <h2><span class="counter">{{ $a->staff }}</span></h2>
                            <p>сотрудников</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ##### Cool Facts Area End ##### -->
        <br>
        <!-- ##### Our partners Area Start ##### -->
        <div class="our-partners-area">
            <h3 class="text-center">Наши партнеры</h3>
        </div>
        <!-- ##### Our partners Area End ##### -->

@endsection
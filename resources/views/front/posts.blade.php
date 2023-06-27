@extends('front.layout')
@php
    $locale = app()->getLocale();
    if ($locale === 'tm') {
        \Carbon\Carbon::setLocale('tk');
    }
@endphp
@section('content')

    
    <!-- ##### Blog Wrapper Start ##### -->
    <div class="blog-wrapper py-5 clearfix">

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    @foreach($posts as $post) 
                        <!-- Single Blog Area  -->
                        <div class="single-blog-area blog-style-2 mb-50 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="1000ms">
                            <div class="row align-items-center">
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
                                            <a href="{{ route('posts.show.front', $post->id) }}" class="post-headline">{{ $post->title_ru }}</a>
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
                                        {{-- <div class="post-meta">
                                            <p>32 gezek okaldy</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    

                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="post-sidebar-area">

                        {{-- <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="searchForm" placeholder="Search">
                                <input type="submit" value="submit">
                            </form>
                        </div> --}}



                        <!-- Widget Area -->
                        {{-- <div class="sidebar-widget-area">
                            <h5 class="title">Reklama ýeri </h5>

                            <div class="widget-content">

                            </div>
                        </div> --}}

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper End ##### -->
       
    

@endsection
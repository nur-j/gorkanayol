@extends('front.layout')

@section('content')
    <!-- ##### Single Blog Area Start ##### -->
    <div class="single-blog-wrapper section-padding-0-100 mt-5">

        <!-- Single Blog Area  -->
        <div class="single-blog-area blog-style-2 mb-50">
            <div class="single-blog-thumbnail row">
                <img class="col-12 col-lg-7 offset-lg-1" src="{{ asset('storage/' . $post->poster) }}" alt="">
                <div class="post-tag-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-10 offset-lg-1">
                                <div class="post-date">
                                    <a href="#">12 <span>march</span></a>
                                    <a href="#"><span>{{ $post->date }}</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!-- ##### Post Content Area ##### -->
                <div class="col-12 col-lg-9">
                    <!-- Single Blog Area  -->
                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Blog Content -->
                        <div class="single-blog-content">
                            <div class="line"></div>
                            {{-- <a href="#" class="post-tag">Lifestyle</a> --}}
                            <h4>
                                <a href="#" class="post-headline mb-0">
                                    @switch(Lang::locale())
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
                            <div class="post-meta mb-50">
                                {{-- <p>By <a href="#">james smith</a></p>
                                <p>3 comments</p> --}}
                            </div>
                            @switch(Lang::locale())
                                @case('ru')
                                    {!! $post->text_ru !!}
                                    @break
                                @case('tm')
                                    {!! $post->text_tm !!}
                                    @break
                                @case('en')
                                    {!! $post->text_en !!}
                                    @break
                                @case('tr')
                                    {!! $post->text_tr !!}
                                    @break
                                @default
                                    {!! $post->text_ru !!}  
                            @endswitch
                        </div>
                    </div>

                </div>

                <!-- ##### Sidebar Area ##### -->
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="text">Latest Posts</h5>

                            <div class="widget-contentext">                               <!-- Single Blog Post -->
                                
                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/lp2.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">A sunday in the park</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/lp3.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">Party people in the house</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Single Blog Post -->
                                <div class="single-blog-post d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/lp4.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="post-tag">Lifestyle</a>
                                        <h4><a href="#" class="post-headline">A sunday in the park</a></h4>
                                        <div class="post-meta">
                                            <p><a href="#">12 March</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Single Blog Area End ##### -->
@endsection
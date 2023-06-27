@extends('front.layout')

@section('content')
    
    <!-- ##### Contact area start ##### -->
    <section class="contact-area section-padding-100">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success mb-3">{{ session('success') }}</div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="contact-form">
                        <h5>{{ __('orders.fill') }}</h5>
                        <!-- Contact Form -->
                        <form action="{{ route('createOrder') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-5">
                                    <div class="group">
                                        <input type="text" name="fullname" id="fullname" required="" value="{{ old('fullname') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.fullname') }}</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="group">
                                        <input type="text" name="phone" id="phone" required="" value="{{ old('phone') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.phone') }}</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required="" value="{{ old('email') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Second line -->
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="group">
                                        <select name="type" id="type" class="form-control">
                                            <option value="">{{ __('orders.transportation_type') }}</option>
                                            <option @if(old('type') === 'road' ) selected @endif value="road">{{ __('orders.road') }}</option>
                                            <option @if(old('type') === 'airway' ) selected @endif value="airway">{{ __('orders.airway') }}</option>
                                            <option @if(old('type') === 'railway' ) selected @endif value="railway">{{ __('orders.railway') }}</option>
                                            <option @if(old('type') === 'multimodal' ) selected @endif value="multimodal">{{ __('orders.multimodal') }}</option>
                                        </select>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label></label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="group">
                                        <input type="text" name="from" id="from" required="" value="{{ old('from') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.from') }}</label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="group">
                                        <input type="text" name="destination" id="destination" required="" value="{{ old('destination') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.to') }}</label>
                                    </div>
                                </div>
                            </div>

                            <!-- Third line -->
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <div class="group">
                                        <input type="text" name="width" id="width" value="{{ old('width') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.width') }}</label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="group">
                                        <input type="text" name="height" id="height" value="{{ old('height') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.height') }}</label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="group">
                                        <input type="text" name="length" id="length" value="{{ old('length') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.length') }}</label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="group">
                                        <input type="text" name="weight" id="weight" required="" value="{{ old('weight') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.weight') }}</label>
                                    </div>
                                </div>

                                <div class="col-12 col-md-3">
                                    <div class="group">
                                        <input type="text" name="code" id="code" value="{{ old('code') }}">
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.code') }}</label>
                                    </div>
                                </div>
                            </div>

                            <!-- fourth line / checkboxes -->
                            <div class="row">
                                <div class="col-12 col-md-3">
                                    <div class="form-check">
                                        <input type="hidden" name="fragile" value="0">
                                        <input class="form-check-input" type="checkbox" id="fragile" name="fragile" value="1">
                                        <label class="form-check-label">{{ __('orders.fragile') }}</label>
                                        </div>
                                </div>
                                <div class="col-12 col-md-3">
                                        <div class="form-check">
                                            <input type="hidden" name="express" value="0">
                                            <input class="form-check-input" type="checkbox" id="express" name="express" value="1">
                                            <label class="form-check-label">{{ __('orders.express') }}</label>
                                        </div>
                                </div>
                                <div class="col-12 col-md-3">
                                        <div class="form-check">
                                            <input type="hidden" name="dangerous" value="0">
                                            <input class="form-check-input" type="checkbox" id="dangerous" name="dangerous" value="1">
                                            <label class="form-check-label">{{ __('orders.dangerous') }}</label>
                                        </div>
                                </div>
                            </div>

                            <!-- details field -->
                            <div class="row mt-5">
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="details" id="details">{{ old('details') }}</textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>{{ __('orders.details') }}</label>
                                    </div>
                                </div>
                            </div>

                            <!-- submit button -->
                            <div class="row">
                                <div class="col-12">
                                    <button type="submit" class="btn original-btn mt-3">{{ __('orders.confirm') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="col-12 col-md-10 col-lg-3">
                    <div class="post-sidebar-area">

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <form action="#" class="search-form">
                                <input type="search" name="search" id="searchForm" placeholder="Search">
                                <input type="submit" value="submit">
                            </form>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title subscribe-title">Subscribe to my newsletter</h5>
                            <div class="widget-content">
                                <form action="#" class="newsletterForm">
                                    <input type="email" name="email" id="subscribesForm" placeholder="Your e-mail here">
                                    <button type="submit" class="btn original-btn">Subscribe</button>
                                </form>
                            </div>
                        </div>

                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <div class="widget-content social-widget d-flex justify-content-between">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>

                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- ##### Contact area end ##### -->
@endsection
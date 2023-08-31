@extends('layout.master')
@section('title')
Chivita
@endsection
@section('content')
@php
use App\Models\Videolike;
@endphp

<section class="hero-area">
    <div class="hero-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="text-white">Celebrate the magic of your loved ones and cherished places with<span style="color: #000;">#IRaiseMyGlassToYou</span><small style="font-size: 11px;color:#292929;">Tell their stories in a video and unlock amazing surprise for them</small></h1>
                        <div class="buttons" id="desktopshow">
                            <div class="btn btn-dark btn-lg" style="background-color: #000;">
                                <a href="{{ url('/') }}#register" class="hero-button text-white">Upload your video <span class="mobile-image"></span></a>
                            </div>
                            <div class="btn btn-outline-light btn-lg" style="border: 1px solid #000;">
                                <a href="{{ url('/login') }}" style="padding: 0 30px 0 30px;color:#000;">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mobile-image">

                </div>
            </div>
        </div>
    </div>
</section>

<section style="padding-top: 50px;" id="register">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <h2 class="desktop-image" style="font-family: 'Crimson Pro';">Register here:</h2>
                <form method="post" action="{{ url('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" name="fname" required>
                            </div>
                            <div class="col-md-6 mobile-line-break">
                                <label>Last Name</label>
                                <input type="text" class="form-control" name="lname" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email Address</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>
                            <div class="col-md-6 mobile-line-break">
                                <label>Phone Number</label>
                                <input type="phone" class="form-control" name="phone" id="phoneInput" oninput="validatePhoneNumber(this)" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Create Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="col-md-6 mobile-line-break">
                                <label>Your Social Media Handle (Instagram)</label>
                                <input type="text" class="form-control" name="instagram" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender</label>
                                <select class="form-control select-form" name="gender" required>
                                    <option selected disabled>Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mobile-line-break">
                                <label>Age range</label>
                                <input type="text" class="form-control" name="age" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6 mobile-line-break">
                                <label>Location</label>
                                <input type="text" class="form-control" name="location" required>
                            </div>
                            <div class="col-md-6">
                                <label>Favourite Chivita Product</label>
                                <select class="form-control select-form" name="product" required>
                                    <option selected disabled>Select Product</option>
                                    <option class="select-option" value="Chivita 100% Apple">Chivita 100% Apple</option>
                                    <option class="select-option" value="Chivita 100% Orange">Chivita 100% Orange</option>
                                    <option class="select-option" value="Chivita 100% Pineapple">Chivita 100% Pineapple</option>
                                    <option class="select-option" value="Chivita 100% Red Grape">Chivita 100% Red Grape</option>
                                    <option class="select-option" value="Chivita Active Power of 6 Mixed Citrus Fruits">Chivita Active Power of 6 Mixed Citrus Fruits</option>
                                    <option class="select-option" value="Chivita Active Carrot & Orange">Chivita Active Carrot & Orange</option>
                                    <option class="select-option" value="Chivita 100% Orange Fruit Juice">Chivita 100% Orange Fruit Juice</option>
                                    <option class="select-option" value="Chivita Active Zest">Chivita Active Zest</option>
                                    <option class="select-option" value="Chivita Exotic Pineapple & Coconut">Chivita Exotic Pineapple & Coconut</option>
                                    <option class="select-option" value="Chivita Exotic Multifruita">Chivita Exotic Multifruita</option>
                                    <option class="select-option" value="Chivita Ice Tea">Chivita Ice Tea</option>
                                    <option class="select-option" value="Chivita Happy Hour Orange Safari">Chivita Happy Hour Orange Safari</option>
                                    <option class="select-option" value="Chivita Happy Hour Tasty Tango">Chivita Happy Hour Tasty Tango</option>
                                    <option class="select-option" value="Chivita Happy Hour Tropical">Chivita Happy Hour Tropical</option>
                                    <option class="select-option" value="Chivita Smart Malt Drink">Chivita Smart Malt Drink</option>
                                </select>
                            </div>
                        </div>
                    </div><br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Upload your 15 Seconds Video</label>
                                <br>
                                <input type="file" class="form-control" id="fileselect" name="image" value="250000" required />
                            </div>
                        </div>
                    </div><br>
                    <div align="center">
                        <button type="submit" class="btn red-button">Register to Participate</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<section class="services-area sec-mar">
    <div class="container">
        <div class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title">
                <h2 class="how-it-works-heading">Here's what <b class="text-danger">you need to do</b></h2>
            </div>
            <p class="how-it-works-paragraph">Follow these simple steps to win amazing prizes</p>
        </div>
    </div>
</section>

<section class="about-area sec-mar-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 or-2 wow animate fadeIn" data-wow-delay="200ms" data-wow-duration="1500ms">
                <div class="about-left">
                    <div class="row">
                        <div class="col-md-3 img-rounded" id="mobileshow">
                            <div class="item mobile-left">
                                <img src="assets/img/image 8.png" class="rounded-circle">
                                <h4>Register Online</h4>
                                <p>Fill out the form and <br> confirm by email</p>
                            </div>
                            <div class="item mobile-right">
                                <img src="assets/img/image 3.png" class="rounded-circle">
                                <h4>Upload a Video</h4>
                                <p>Celebrate with your  Chivita products<br> in the video <span style="color: #EB0010;">(Respondents don't  need <br>to show products in the video)</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 img-rounded" id="mobileshow">
                            <div class="item  mobile-left">
                                <img src="assets/img/image 5.png" class="rounded-circle">
                                <h4>Follow us on <br class="desktop-show"> Social Media</h4>
                                <p>Follow @chivitajuices <br> on instagram  <span style="color: #EB0010;">and Twitter</span></p>
                            </div>
                            <div class="item  mobile-right">
                                <img src="assets/img/image 6.png" class="rounded-circle">
                                <h4>Share your video <br class="desktop-show">across your network</h4>
                                <p>Share a link to your video across <br>different Social Media and invite <br>your friends to like.</p>
                            </div>
                        </div>
                        <div class="col-md-3 img-rounded" id="desktopshow">
                            <div class="item mobile-left">
                                <img src="assets/img/image 8.png" class="rounded-circle">
                                <h4>Register Online</h4>
                                <p>Fill out the form and confirm by email</p>
                            </div>
                        </div>
                        <div class="col-md-3 img-rounded" id="desktopshow">
                            <div class="item mobile-right">
                                <img src="assets/img/image 3.png" class="rounded-circle">
                                <h4>Upload a Video</h4>
                                <p>Celebrate with your Chivita products in the video <span style="color: #EB0010;">(Respondents don't need to show products in the video)</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 img-rounded" id="desktopshow">
                            <div class="item  mobile-left">
                                <img src="assets/img/image 5.png" class="rounded-circle">
                                <h4>Follow us on Social<br class="desktop-show"> Media</h4>
                                <p>Follow @chivitajuices on instagram <span style="color: #EB0010;"> and Twitter</span></p>
                            </div>
                        </div>
                        <div class="col-md-3 img-rounded" id="desktopshow">
                            <div class="item  mobile-right">
                                <img src="assets/img/image 6.png" class="rounded-circle">
                                <h4>Share your video <br class="desktop-show">across your network</h4>
                                <p>Share the link to your video across different Social Media and invite your friends to like.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-area sec-mar">
    <div class="container">
        <div class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title">
                <h2 class="text-center" style="color: #EB0010;"><b class="text-dark">Trending</b> #IRaiseMyGlassToYou <b class="text-dark">videos</b></h2>
            </div>
            <p class="text-center" style="font-size: 18px;">See trending videos from other participants</p>
        </div>
    </div>
</section>


<section class="our-team">
    <div class="container">
        <div class="swiper team-slider">
            <div class="swiper-wrapper">
                @foreach($video as $vid)
                <div class="swiper-slide wow animate fadeInUp" data-wow-delay="100ms" data-wow-duration="500ms">
                    <div class="">
                        <div class="member-img">
                            <video width="350" height="400" controls style="border-radius: 10px;background-color:#333333;">
                                <source src="upload/{{ $vid->source }}" type="video/mp4">
                                <source src="upload/{{ $vid->source }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">

                                @php
                                $countvideolikes = Videolike::where('video_id', $vid->id)->count();
                                @endphp
                                @if (Videolike::where('user_id', request()->ip())->where('video_id', $vid->id)->exists())
                                <form action="{{ route('video.unlike', ['video' => $vid->id]) }}" method="POST">
                                    @csrf
                                    <div class="dropdown dropup">
                                        <button type="submit" class="btn btn-outline-dark btn-sm" style="border: #fff solid 1px"><i class="fa fa-thumbs-down"></i> Unlike</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $countvideolikes }} Likes
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <a href="#" class="text-dark dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> Share</a>
                                        <div class="dropdown-menu">
                                            <span class="dropdown-item"> {!! Share::page(route('videodetails', $vid->slug))->facebook() !!} </span>
                                            <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->twitter() !!} </span>
                                            <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->linkedin() !!} </span>
                                            <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->whatsapp() !!} </span>

                                        </div>
                                    </div>
                                </form>
                                @else
                                <form action="{{ route('video.like', ['video' => $vid->id]) }}" method="POST">
                                    @csrf
                                    <div class="dropdown dropup">
                                        <button type="submit" class="btn btn-outline-dark btn-sm" style="border: #fff solid 1px"><i class="fa fa-thumbs-up "></i> Like</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $countvideolikes }} Likes

                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                        <a href="#" class="text-dark dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> Share</a>
                                        <div class="dropdown-menu">
                                            <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->facebook() !!} </span>
                                            <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->twitter() !!} </span>
                                            <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->linkedin() !!} </span>
                                            <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->whatsapp() !!} </span>

                                        </div>
                                    </div>

                                </form>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <br><br>
        <div align="center">
            <button class="btn btn-outline-danger btn-lg"><a href="{{ url('/trending-moment') }}" class="text-dark">See all</a></button>
        </div>
    </div>
</section>

@endsection
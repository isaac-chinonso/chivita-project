@extends('layout.master')
@section('title')
Chivita
@endsection
@section('content')

<section class="hero-area">
    <div class="hero-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Join the<span class="text-dark">#ChivitaMoments</span>Challenge and Win Amazing Prizes</h1>
                        <div class="buttons">
                            <div class="btn btn-dark btn-lg" style="background-color: #000;">
                                <a href="{{ url('/') }}#register" class="text-white" style="padding: 0 20px 0 20px;font-family: 'DM Sans';font-style: normal;font-weight: 500;font-size: 16px;">Register <span class="mobile-image">to Win</span></a>
                            </div>
                            <div class="btn btn-outline-light btn-lg desktop-image" style="border: 1px solid #000;">
                                <a href="{{ url('/login') }}" style="padding: 0 30px 0 30px;color:#000;">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mobile-image">
                    <img src="assets/img/chivita1.png" alt="image">
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
                            <div class="col-md-12">
                                <label>Favourite Chivita Product</label>
                                <select class="form-control select-form" name="product" required>
                                    <option selected disabled>Select Product</option>
                                    <option class="select-option" value="Chivita Active (Carrot + Orange)">Chivita Active (Carrot + Orange)</option>
                                    <option class="select-option" value="Chivita 100% Orange Fruit Juice">Chivita 100% Orange Fruit Juice</option>
                                    <option class="select-option" value="Chivita Ice Tea Lemon">Chivita Ice Tea Lemon</option>
                                    <option class="select-option" value="Chivita 100% Pineapple Fruit Juice">Chivita 100% Pineapple Fruit Juice</option>
                                    <option class="select-option" value="Chivita Hollandia Yoghurt Strawberry">Chivita Hollandia Yoghurt Strawberry</option>
                                    <option class="select-option" value="Chivita Active">Chivita Active</option>
                                    <option class="select-option" value="Chivita Hollandia Yoghurt Plain">Chivita Hollandia Yoghurt Plain</option>
                                    <option class="select-option" value="Chivita 100% Apple Fruit Juice">Chivita 100% Apple Fruit Juice</option>
                                    <option class="select-option" value="Chivita 100% Red Grape Fruit Juice">Chivita 100% Red Grape Fruit Juice</option>
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
                <h2 class="how-it-works-heading">How it <b class="text-danger">Works</b></h2>
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
                        <div class="col-md-3 img-rounded">
                            <div class="item mobile-left">
                                <span class="notify-badge">1</span>
                                <img src="assets/img/image 8.png" class="rounded-circle">
                                <h4>Register Online</h4>
                                <p>Enter details in the form to<br> register</p>
                            </div>
                        </div>
                        <div class="col-md-3 img-rounded">
                            <div class="item mobile-right">
                                <span class="notify-badge">2</span>
                                <img src="assets/img/image 3.png" class="rounded-circle">
                                <h4>Upload a Video</h4>
                                <p>Make a 15 sec video telling us<br> about your #ChivitaMoments</p>
                            </div>
                        </div>
                        <div class="col-md-3 img-rounded">
                            <div class="item  mobile-left">
                                <span class="notify-badge">3</span>
                                <img src="assets/img/image 5.png" class="rounded-circle">
                                <h4>Follow us on Social<br class="desktop-show"> Media</h4>
                                <p>Follow @chivita on <br>instagram</p>
                            </div>
                        </div>
                        <div class="col-md-3 img-rounded">
                            <div class="item  mobile-right">
                                <span class="notify-badge">4</span>
                                <img src="assets/img/image 6.png" class="rounded-circle">
                                <h4>Invite friends to like <br class="desktop-show"> your Video</h4>
                                <p>invite friends to like your video. <br>Video with the highest price win <br>prizes.</p>
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
                <h2 class="text-center"><b class="text-danger">Trending</b> #ChivitaMoments</h2>
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
                            <video width="350" height="526" poster="assets/img/unsplash.png" controls>
                                <source src="upload/{{ $vid->source }}" type="video/mp4">
                                <source src="upload/{{ $vid->source }}" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div><br>
                        <div class="row">
                            <div class="col-md-12">
                                <form method="post" action="{{ url('/user/save-videos-ikes') }}">
                                    @csrf
                                    <input type="hidden" name="video_id" value="{{ $vid->id }}">
                                    <button type="submit" class="btn btn-outline-dark btn-sm" style="border: #fff solid 1px"><i class="fa fa-thumbs-up "></i> Like</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $countvideolikes }} Likes
                                </form>
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
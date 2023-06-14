@extends('layout.master')
@section('title')
Trending Moments || Chivita
@endsection
@section('content')

<section class="services-area sec-mar" style="padding-top: 150px;">
    <div class="container">
        <div class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title">
                <h2 class="text-center"><b class="text-danger">Trending</b> #ChivitaMoments</h2>
            </div>
            <p class="text-center" style="font-size: 18px;">See popular videos of #ChivitaMoments from others like you</p>
        </div>
    </div>
</section>

<section class="project-area sec-mar">
    <div class="container">
        <div class="row project-items">
            @foreach($video as $vid)
            <div class="col-md-6 col-lg-4 col-sm-6 single-item graphic ui">
                <div class="item-img">
                    <video width="350" height="526" poster="assets/img/unsplash.png" controls>
                        <source src="upload/{{ $vid->source }}" type="video/mp4">
                        <source src="upload/{{ $vid->source }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        <span style="font-size: 20px;"><i class="fa fa-thumbs-up"></i> Like</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <!-- <span style="font-size: 20px;"><i class="fa fa-share"></i> Share</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                        <span style="font-size: 20px;">{{ $countvideolikes }} Likes</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div><br>
        <br>
    </div>
</section><br><br><br><br><br>

@endsection
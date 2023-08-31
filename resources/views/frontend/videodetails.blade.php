@extends('layout.master2')
@section('title')
Trending Moments || Chivita
@endsection
@section('content')
@php
use App\Models\Videolike;
@endphp

<section class="services-area sec-mar" style="padding-top: 150px;">
    <div class="container">
        <div class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title">
                <h2 class="text-center"><b class="text-danger">Trending</b> #IRaiseMyGlassToYou <b class="text-dark">Recipe</b></h2>
            </div>
            <p class="text-center" style="font-size: 18px;">See popular videos of #IRaiseMyGlassToYou from others like you</p>
        </div>
    </div>
</section>

<section class="project-area sec-mar">
    <div class="container">
        <div class="row project-items">
            <div class="col-md-12 col-lg-12 col-sm-6 single-item graphic ui">
                <div class="item-img">
                    <video controls style="border-radius: 10px;width:100%;height:500px;background-color:#333333;">
                        <source src="../upload/{{ $videodetails->source }}" type="video/mp4">
                        <source src="../upload/{{ $videodetails->source }}" type="video/ogg">
                        Your browser does not support the video tag.
                    </video>
                </div><br>
                <div class="row">
                    <div class="col-md-12">
                        @php
                        $countvideolikes = Videolike::where('video_id', $videodetails->id)->count();
                        @endphp
                        @if (Videolike::where('user_id', request()->ip())->where('video_id', $videodetails->id)->exists())
                        <form action="{{ route('video.unlike', ['video' => $videodetails->id]) }}" method="POST">
                            @csrf
                            <div class="dropdown dropup">
                                <button type="submit" class="btn btn-outline-dark btn-sm" style="border: #fff solid 1px"><i class="fa fa-thumbs-down"></i> Unlike</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $countvideolikes }} Likes
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                <a href="#" class="text-dark dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> Share</a>
                                <div class="dropdown-menu">
                                    <span class="dropdown-item"> {!! Share::page(route('videodetails',$videodetails->slug))->facebook() !!} </span>
                                    <span class="dropdown-item"> {!! Share::page(route('videodetails',$videodetails->slug))->twitter() !!} </span>
                                    <span class="dropdown-item"> {!! Share::page(route('videodetails',$videodetails->slug))->linkedin() !!} </span>
                                    <span class="dropdown-item"> {!! Share::page(route('videodetails',$videodetails->slug))->whatsapp() !!} </span>
                                </div>
                            </div>
                        </form>
                        @else
                        <form action="{{ route('video.like', ['video' => $videodetails->id]) }}" method="POST">
                            @csrf
                            <div class="dropdown dropup">
                                <button type="submit" class="btn btn-outline-dark btn-sm" style="border: #fff solid 1px"><i class="fa fa-thumbs-up "></i> Like</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $countvideolikes }} Likes
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="#" class="text-dark dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> Share</a>
                                <div class="dropdown-menu">
                                    <span class="dropdown-item"> {!! Share::page(route('videodetails',$videodetails->slug))->facebook() !!} </span>
                                    <span class="dropdown-item"> {!! Share::page(route('videodetails',$videodetails->slug))->twitter() !!} </span>
                                    <span class="dropdown-item"> {!! Share::page(route('videodetails',$videodetails->slug))->linkedin() !!} </span>
                                    <span class="dropdown-item"> {!! Share::page(route('videodetails',$videodetails->slug))->whatsapp() !!} </span>
                                </div>
                            </div>
                        </form>
                        @endif
                    </div>
                </div>
            </div>
        </div><br>
        <br>
    </div>
</section><br><br><br><br><br>

@endsection
@extends('layout.master1')
@section('title')
Profile || Chivita
@endsection
@section('content')
@php
use App\Models\Videolike;
@endphp
<section class="services-area sec-mar" style="padding-top: 100px;">
    <div class="container">
        <div class="wow animate fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            <div class="sec-title">
                <h2 class="text-center">My <b class="text-danger">Profile</b></h2>
                <p>{{ Auth::user()->profile->first()->fname }} {{ Auth::user()->profile->first()->lname }}</p>
            </div>
        </div><br><br>
        <div class="row">
            <div class="col-md-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="tabs">
                    <div class="tabby-tab">
                        <input type="radio" id="tab-1" name="tabby-tabs" checked>
                        <label for="tab-1">Profile Info</label>
                        <div class="tabby-content">
                            <form method="post" action="{{ route('updateprofile',Auth::user()->id) }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row raw">
                                        <div class="col-md-6 clo">
                                            <label class="text-left lab">First Name</label>
                                            <input type="text" class="form-control" name="fname" value="{{ Auth::user()->profile->first()->fname }}" disabled>
                                        </div>
                                        <div class="col-md-6 clo">
                                            <label class="text-left lab">Last Name</label>
                                            <input type="text" class="form-control" name="lname" value="{{ Auth::user()->profile->first()->lname }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row raw">
                                        <div class="col-md-6">
                                            <label class="text-left lab">Email Address</label>
                                            <input type="email" class="form-control" name="fname" value="{{ Auth::user()->email }}" disabled>
                                        </div>
                                        <div class="col-md-6 mobile-line-break">
                                            <label class="text-left lab">Phone Number</label>
                                            <input type="phone" class="form-control" name="phone" value="{{ Auth::user()->profile->first()->phone }}" disabled>
                                        </div>
                                    </div>
                                    <div class="row raw">
                                        <div class="col-md-6 clo">
                                            <label class="text-left lab">Gender</label>
                                            <select class="form-control select-form" name="product" disabled required>
                                                <option selected value="{{ Auth::user()->profile->first()->gender }}">{{ Auth::user()->profile->first()->gender }}</option>
                                                <option disabled></option>
                                                <option class="select-option" value="Male">Male</option>
                                                <option class="select-option" value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 clo">
                                            <label class="text-left lab">Location</label>
                                            <input type="text" class="form-control" name="location" value="{{ Auth::user()->profile->first()->location }}" disabled>
                                        </div>

                                    </div>
                                    <div class="row raw">
                                        <div class="col-md-6 clo">
                                            <label class="text-left lab">Favourite Chivita Product</label>
                                            <select class="form-control select-form" name="product" disabled required>
                                                <option selected value="{{ Auth::user()->profile->first()->product }}">{{ Auth::user()->profile->first()->product }}</option>
                                                <option disabled></option>
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
                                        <div class="col-md-6 clo">
                                            <label class="text-left lab">Social Media Handle</label>
                                            <input type="text" class="form-control" name="instagram" value="{{ Auth::user()->profile->first()->instagram }}">
                                        </div>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger btn-lg btn-block">Update Profile</button>
                            </form>
                        </div>
                    </div>

                    <div class="tabby-tab">
                        <input type="radio" id="tab-2" name="tabby-tabs">
                        <label for="tab-2">My Videos</label>
                        <div class="tabby-content">
                            <div class="line">
                                @foreach($video as $vid)
                                <div class="media" style="padding: 40px;">

                                    <video width="180" height="126" controls>
                                        <source src="../upload/{{ $vid->source }}" type="video/mp4">
                                        <source src="../upload/{{ $vid->source }}" type="video/ogg ">
                                        Your browser does not support the video tag.
                                    </video>

                                    <div class="media-body" style="padding: 15px 20px 15px 20px;display:inline-block;">
                                        <h5 class="mt-0 ">My Chivita Moments</h5>
                                        <small class="text-muted">{{ $vid->created_at->diffForHumans() }}</small><br>
                                        <br>
                                        @php
                                        $countvideolikes = Videolike::where('video_id', $vid->id)->count();
                                        @endphp
                                        @if (Videolike::where('user_id', request()->ip())->where('video_id', $vid->id)->exists())
                                        <form action="{{ route('video.unlike', ['video' => $vid->id]) }}" method="POST">
                                            @csrf
                                            <div class="dropdown dropup">
                                                <button type="submit" class="btn btn-outline-dark btn-sm" style="border: #fff solid 1px"><i class="fa fa-thumbs-down"></i> Unlike</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $countvideolikes }} Likes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> Share</span>

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

                                            <button type="submit" class="btn btn-outline-dark btn-sm" style="border: #fff solid 1px"><i class="fa fa-thumbs-up "></i> Like</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{ $countvideolikes }} Likes &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-share"></i> Share</span>
                                            <div class="dropdown-menu">
                                                <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->facebook() !!} </span>
                                                <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->twitter() !!} </span>
                                                <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->linkedin() !!} </span>
                                                <span class="dropdown-item"> {!! Share::page(route('videodetails',$vid->slug))->whatsapp() !!} </span>

                                            </div>
                                        </form>
                                        @endif
                                    </div>
                                    <div class="dropDown1">
                                        <i class="fa fa-ellipsis-h"></i>
                                        <div class="submenu">
                                            <a href="#" class="copy-btn" data-url="{{ route('videodetails', $vid->slug) }}"><i class="fa fa-copy"></i> Copy</a>
                                            <a href="{{ route('deletevideo', $vid->id) }}" class="text-danger"><i class="fa fa-trash"></i> Delete</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div><br><br>

                            <form method="post" action="{{ route('savevideo') }}" enctype="multipart/form-data">
                                @csrf
                                <label class="text-left lab">Upload your 15 Seconds Video</label>
                                <input type="file" name="image" class="form-control" value="250000" required><br>
                                <button type="submit" class="btn bot btn-lg btn-block">Upload New Video</button>
                            </form>
                        </div>
                    </div>

                    <div class="tabby-tab">
                        <input type="radio" id="tab-3" name="tabby-tabs">
                        <label for="tab-3">Change Password</label>
                        <div class="tabby-content">
                            <form method="post" action="{{ route('user.update-password') }}">
                                @csrf
                                <div class="form-group">
                                    <div class="row raw">
                                        <div class="col-md-6 col-lg-12 clo">
                                            <label class="text-left lab">Enter Old Password</label>
                                            <input type="password" class="form-control" name="current_password">
                                        </div>
                                    </div>
                                    <div class="row raw">
                                        <div class="col-md-6 col-lg-6 clo">
                                            <label class="text-left lab">Enter New Password</label>
                                            <input type="password" class="form-control" name="password">
                                        </div>
                                        <div class="col-md-6 col-lg-6 clo">
                                            <label class="text-left lab">Confirm New Password</label>
                                            <input type="password" class="form-control" name="password_confirmation">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger btn-lg btn-block">Save</button>
                            </form><br>
                        </div>
                    </div>
                </div>

            </div>
        </div>
</section>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.copy-btn').click(function() {
            var url = $(this).data('url');

            navigator.clipboard.writeText(url)
                .then(function() {
                    alert('URL copied to clipboard!');
                })
                .catch(function() {
                    alert('Unable to copy URL to clipboard.');
                });
        });
    });
</script>


@endsection
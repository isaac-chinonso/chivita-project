<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use App\Models\Videolike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Jorenvh\Share\Share;

class PageController extends Controller
{
    public function index()
    {
        $data['video'] = Video::inRandomOrder()->simplePaginate(6);
        $user = Auth::user();
        return view('frontend.index', $data);
    }

    public function video()
    {
        $data['video'] = Video::inRandomOrder()->simplePaginate(9);
        return view('frontend.video', $data);
    }

    public function videodetails($slug)
    {
        $data['videodetails'] = Video::where('slug', $slug)->first();
        return view('frontend.videodetails', $data);
    }
        
    public function login()
    {
        return view('frontend.login');
    }

    public function profile()
    {
        $user = Auth::user();
        $data['video'] = Video::where('user_id', $user->id)->get();
        return view('frontend.profile', $data);
    }

    public function videourl()
    {
        $data['video'] = Video::get();
        return view('frontend.profile', $data);
    }

    public function verify()
    {
        return view('frontend.verify');
    }

    public function resetpassword()
    {
        return view('frontend.reset_password');
    }

    // public function like(Request $request)
    // {
    //     // Validation
    //     $this->validate($request, [
    //         'video_id' => 'required',
    //     ]);

    //     $user = Auth::user();
    //     $videolikes = new Videolike();
    //     $videolikes->user_id = $user->id;
    //     $videolikes->video_id = $request->input('video_id');
    //     if (Videolike::where('user_id', '=', $user->id)->where('video_id', '=', $videolikes->video_id)->exists()) {
    //         \Session::flash('warning_message', 'Cant like video twice');
    //         return back();
    //     } else {
    //         $videolikes->save();
    //         \Session::flash('Success_message', 'Video liked successfully');

    //         return back();
    //     }
    // }

    // public function unlike($id)
    // { 
    //     // Unlike Video
    //     $user = Auth::user();
    //     $video = Videolike::where('user_id', $user->id)->where('video_id', $id)->first();
    //     $video->delete();

    //     \Session::flash('Success_message', 'Video Unliked Successfully');
    //     return back();
    // }
    

    public function videoupload(Request $request)
    {
        $user = Auth::user();

        $video = $request['image'];
        $filename = time() . '.' . $video->getClientOriginalExtension();
        $destination = public_path('upload/');
        $video->move($destination, $filename);

        // Save Record into image DB
        $video = new Video();
        $video->user_id = $user->id;
        $video->source = $filename;
        $video->save();

        \Session::flash('Success_message', 'Video uploaded successfully');

        return back();
    }

    public function deletevideo($id)
    {
        // Delete Video
        $video = Video::where('id', $id)->first();
        $file_path = public_path() . '/upload/' . $video->first()->source;
        unlink($file_path);
        $video->delete();

        \Session::flash('Success_message', 'Video Deleted Successfully');

        return back();
    }

    public function sharePosts($slug)
    {
        $shareButtons = \Share::page()
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()        
        ->reddit();
  
        $video = Video::where('slug',$slug)->first();

        return view("frontend.profile", compact('shareButtons', 'video'));
    }

    
}

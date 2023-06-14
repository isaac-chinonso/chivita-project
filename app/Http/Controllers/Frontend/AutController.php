<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\UserRegistration;
use App\Models\Profile;
use App\Models\User;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class AutController extends Controller
{
     // Login Function
     public function signin(Request $request)
     {
 
         $validator = Validator::make($request->all(), [
             'email' => 'required',
             'password' => 'required'
         ]);
         if ($validator->fails()) {
             return redirect('/login')
                 ->withErrors($validator)
                 ->withInput($request->all());
         }
 
         if (Auth::attempt(['email' => $request['email'], 'password' => $request['password'], 'role_id' => '2', 'status' => '1'])) {
 
             return redirect()->intended(route('userprofile'));
         }

         \Session::flash('warning_message', 'These credentials do not match our records.');
 
         return redirect()->back();
     }

     //Save Users Function
    public function register(Request $request)
    {
        // Validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'instagram' => 'required',
            'product' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|min:6',
        ]);

        // Save Record into user DB
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->role_id = 2;
        $user->activated = 0;
        $user->status = 1;
        $user->save();


        //Save Record into Referral DB
        $profile = new Profile();
        $profile->user_id = $user->id;
        $profile->fname = $request->input('fname');
        $profile->lname = $request->input('lname');
        $profile->phone = $request->input('phone');
        $profile->instagram = $request->input('instagram');
        $profile->product = $request->input('product');
        $profile->save();

        $video = $request['image'];
        $filename = time() . '.' . $video->getClientOriginalExtension();
        $destination = public_path('upload/');
        $video->move($destination, $filename);

        // Save Record into image DB
        $video = new Video();
        $video->user_id = $user->id;
        $video->source = $filename;
        $video->save();


        Auth::login($user);

        $user = Auth::user();
        
        \Session::flash('Success_message', 'You have successfully registered');

        return redirect()->intended(route('userprofile'));
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();

        $current_password = $user->password;
        if (Hash::check($request->current_password, $current_password)) {
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            return redirect()->back()->with('Success_message', 'Password Changed Successfully');;
        } else {
            return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
        }
    }


    public function activatesystemuser($id)
    {
        $user = Auth::user();

        User::where(['id' => $id])
            ->update(array('status' => 1));

        \Session::flash('success_message', 'Activation Successfully');

        return redirect()->route('activatesuccess');
    }

    // Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect()->intended(route('login'));
    }

}

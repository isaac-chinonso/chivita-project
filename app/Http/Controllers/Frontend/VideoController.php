<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    public function like(Request $request, Video $video)
    {
        $ipAddress = $request->ip();

        if (!$this->hasLiked($video, $ipAddress)) {
            DB::table('videolikes')->insert([
                'video_id' => $video->id,
                'user_id' => $ipAddress,
                'status' => true,
            ]);
        }
        return back();
    }

    public function unlike(Request $request, Video $video)
    {
        $ipAddress = $request->ip();

        if ($this->hasLiked($video, $ipAddress)) {
            DB::table('videolikes')
                ->where('video_id', $video->id)
                ->where('user_id', $ipAddress)
                ->delete();
        }
        return back();
    }

    private function hasLiked(Video $video, $ipAddress)
    {
        return DB::table('videolikes')
            ->where('video_id', $video->id)
            ->where('user_id', $ipAddress)
            ->exists();
    }
}


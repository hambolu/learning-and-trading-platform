<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SMA;
use App\Models\PostShareCount;
use Illuminate\Http\Request;

class SMAController extends Controller
{
    public function sharePost(Request $request, Post $post)
    {
        $sma = SMA::where('user_id',auth()->user()->id)->first();
        $sma->shareContent($post); // Assuming share logic is implemented in the CanShare trait

        $sharingId = uniqid(); // Generate unique sharing ID
        PostShareCount::create([
            'user_id' => $sma->id,
            'post_id' => $post->id,
            'sharing_id' => $sharingId,
        ]);

        return response()->json(['message' => 'Post shared successfully']);
    }

    public function viewSharedPost(Request $request, $sharingId)
    {
        $shareCount = PostShareCount::where('sharing_id', $sharingId)->firstOrFail();

        // Check if this post has been viewed by the current IP address
        $ipAddress = $request->ip();

        if (!$request->session()->has('viewed_' . $sharingId . '_' . $ipAddress)) {
            // Increment view count if the current IP has not viewed this post
            $shareCount->increment('view_count');

            // Mark this post as viewed by the current IP in session
            $request->session()->put('viewed_' . $sharingId . '_' . $ipAddress, true);

            // Implement reward logic here (e.g., award points, credits, etc.)
            // $shareCount->sma->reward(); // Assuming reward logic is implemented in the SMA model

            return response()->json(['message' => 'Post viewed successfully']);
        }

        return response()->json(['message' => 'Post already viewed by this IP']);
    }
}

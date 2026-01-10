<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Profile;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

/** @package App\Http\Controllers */
class ProfileController extends Controller
{
    /**
     * @param Profile $profile
     * @return View
     */
    public function show(Profile $profile)
    {
        $profile->loadCount(['followings', 'followers']);

        $posts = Post::where('profile_id', $profile->id)
            ->whereNull('parent_id')
            ->with(
                ['repostOf' => fn($q) => $q->withCount(['likes', 'repost', 'replies'])]
            )
            ->withCount(['likes', 'repost', 'replies'])
            ->latest()
            ->get();
        return view('profiles.show');
    }
}

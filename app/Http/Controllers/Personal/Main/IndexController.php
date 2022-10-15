<?php

namespace App\Http\Controllers\Personal\Main;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $commentsCount=  auth()->user()->comments()->count();
        $likedUserCount = auth()->user()->likedPosts()->count();

        return view('personal.main.index', compact( 'commentsCount', 'likedUserCount'));
    }
}

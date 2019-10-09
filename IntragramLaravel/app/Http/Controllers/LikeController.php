<?php

namespace App\Http\Controllers;

use App\Like;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function like($image_id)
    {
        $user = \Auth::user();
        
        $like = new Like();
        $like->user_id = $user->id;
        $like->image_id= (int)$image_id;

        $like->save();
        var_dump($like);

    }

    public function dislike($image_id)
    {
        
    }
}

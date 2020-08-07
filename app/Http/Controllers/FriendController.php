<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
      public function getIndex()
    {
        return view('friends.index',
        [
            'friends' => Auth::user()->friends(),
            'requests' => Auth::user()->friendRequests()
        ]);
    }
}

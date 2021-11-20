<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Index()
    {
        return view('profile', [
            "title" => "profile",
            "profile" => Profile::all()
        ]);
    }

    public function show ($link)
    {
        return view('profilepost', [
            "title" => "Single Post",
            "post" => Profile::firstwhere('link', $link)
        ]);
    }
}

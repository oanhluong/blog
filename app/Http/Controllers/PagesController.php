<?php

namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller
{
    public function getIndex()
    {
        $posts = Post::all();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout()
    {        
        $first = 'Oanh';
        $last = 'Luong';
        $fullname = $first . " " . $last;
        $data = [];
        $data['email'] = 'luongoanh@xxx.com';
        $data['fullname'] = $fullname;
        //return view('pages.about')->with('fullname', $fullname);
        //return view('pages.about')->withFullname($fullname);
        return view('pages.about')->withData($data);
    }

    public function getContact()
    {
        # code...
    }

    public function postContact()
    {
        # code...
    }
}

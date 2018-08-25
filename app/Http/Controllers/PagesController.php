<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getIndex()
    {
        return redirect()->route('posts.index');
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

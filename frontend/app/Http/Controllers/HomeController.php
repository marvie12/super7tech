<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show() 
    {
        $pageDetails = '';
        $banners = json_decode(file_get_contents('https://super7tech.com/web_developer_exam_sr/json/slideshow.json'));
        
        return view('home.index', compact('pageDetails', 'banners'));
    }
}

<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function project()
    {
        return view('pages.project.project');
    }

    public function projectDetails()
    {
        return view('pages.project.project-details');
    }

    public function service()
    {
        return view('pages.service.service');
    }

    public function serviceDetails()
    {
        return view('pages.service.service-details');
    }
    
    public function about()
    {
        return view('pages.about');
    }
    
    public function news()
    {
        return view('pages.news');
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
    
    public function team()
    {
        return view('pages.team');
    }
}

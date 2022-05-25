<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Event;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $sliders = Slider::get()->where('status', 1);
        return view('index', compact('sliders'));
    }
    public function about(){
        return view('about');
    }
    public function mission_vision(){
        return view('mission_vision');
    }
    public function goals(){
        return view('goals');
    }
    public function our_services(){
        return view('services');
    }
    public function our_offerings(){
        return view('offerings');
    }
    public function countries(){
        return view('countries');
    }

    public function blogs(){
        $blogs = Blog::Where('blog_status', '1')->get();
        return view('blogs', compact('blogs'));
    }

    public function blog_details($slug){
        $blog = Blog::Where('blog_slug', $slug)->Where('blog_status', '1')->first();
        return view('blog-details', compact('blog'));
    }

    public function events(){
        $events = Event::Where('event_status', '1')->get();
        return view('events', compact('events'));
    }
}

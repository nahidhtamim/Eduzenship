<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
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
    public function countries(){
        return view('countries');
    }
}

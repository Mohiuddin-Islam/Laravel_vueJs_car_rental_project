<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\CarList;
use App\Models\Driver;
use Illuminate\Http\Request;
use Inertia\Inertia;


class HomeController extends Controller
{
    public function index(){

        $carlists = CarList::take(9)->get();
        return Inertia::render('Home',compact('carlists'));
    }

    public function about(){
        return Inertia::render('About');
    }

    public function contact(){
        return Inertia::render('Contact');
    }

    public function faq(){
        return Inertia::render('Faq');
    }

    public function carlist(){
        $carlists = CarList::all();
        return Inertia::render('Carlist',compact('carlists'));
    }
    public function booking(){
        $carlists = CarList::all();
        $drivers = Driver::all();
        return Inertia::render('Booking',compact('carlists','drivers'));
    }

}

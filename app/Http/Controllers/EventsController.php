<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function events(){
        return view('events');
    }
    public function eventsVisitor(){
        return view('eventsVisitor');
    }
}

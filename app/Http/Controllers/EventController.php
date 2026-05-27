<?php

namespace App\Http\Controllers;

class EventController extends Controller
{
    public function create()
    {
        return view('events.create');
    }
}

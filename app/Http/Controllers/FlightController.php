<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    // Show boooking page
    public function searchBooking() {
        return view('pages.search');
    }

    // Show Result page
    public function result() {
        return view('pages.booking');
    }
}

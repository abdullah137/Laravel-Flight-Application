<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    // Show Home Page in the Page
    public function index() {
        return view('pages.index');
    }

    // Show About Page 
    public function aboutPage() {
        return view('pages.about');
    }

    // Show Contact Page
    public function contactPage() {
        return view('pages.contact');
    }

    // Show 404 Page
    public function errorPage() {
        return view('pages.404');
    }

    // Show terms Page
    public function termsPage() {
        return view('pages.terms');
    }

}
 
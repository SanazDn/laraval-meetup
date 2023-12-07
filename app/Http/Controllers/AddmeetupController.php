<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddmeetupController extends Controller
{
    /**
     * Display the home page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('newmeetup');
    }
}


// public function index()
// {
//     return view('home');
// }

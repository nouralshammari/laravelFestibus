<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $festivals = Festival::all(); // alle festivals uit de database halen
        return view('home', compact('festivals'));
    }
}

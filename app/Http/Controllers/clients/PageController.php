<?php

namespace App\Http\Controllers\clients;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.home');
    }
   
}

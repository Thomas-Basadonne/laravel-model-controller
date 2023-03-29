<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;

class PageController extends Controller
{
    public function movielist(){
        $movies = Movie::all();
        return view('list', compact('movies'));
    }
}

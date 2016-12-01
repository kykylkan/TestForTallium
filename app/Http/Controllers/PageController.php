<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sector;

class PageController extends Controller
{
    
    public function home()
    {
        $sectors = Sector::all(['id', 'name']);
        
        return view('pages.home', ['sectors' => $sectors]);
    }
    
}

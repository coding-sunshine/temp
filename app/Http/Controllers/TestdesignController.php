<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestdesignController extends Controller
{
    public function index()
    {
        return view('templates.testdesign.index',[]);    
    }
    
    //
}

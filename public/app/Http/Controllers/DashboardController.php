<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Auth;
class DashboardController extends Controller
{ 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {   
       $this->middleware('auth'); 
       $this->middleware('permission:users', ['only' => ['users']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      return view('templates.dashboard.dashboard');
    }
}

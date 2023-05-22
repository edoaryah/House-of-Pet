<?php

namespace App\Http\Controllers;
use App\Http\Controllers\UlasanController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $komen = [UlasanController::class,'readUlasanCsv'];
        return redirect()->intended('/');
    }

    public function testnavbar(){
        return view('layouts.navbar');
    }

    
}

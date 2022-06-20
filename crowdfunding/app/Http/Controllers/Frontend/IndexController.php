<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Charity;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        return view('frontend.index');
    }
    public function read() {
        $charities = Charity::all();
        // Load students using the model 'Charity'
        // Pass the $charities to the view, '/index'
        return view('/index')
        ->with(['charities' => $charities]);
    }
}

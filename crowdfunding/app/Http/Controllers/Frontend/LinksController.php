<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function f1(){
        return view('frontend/others/careers');
    }
    public function f2(){
        return view('frontend/others/common_questions');
    }
    public function f3(){
        return view('frontend/others/countries_supported');
    }
    public function f4(){
        return view('frontend/others/education');
    }
    public function f5(){
        return view('frontend/others/emergency');
    }
    public function f6(){
        return view('frontend/others/helpcenter');
    }
    public function f7(){
        return view('frontend/others/medical');
    }
    public function f8(){
        return view('frontend/others/memorial');
    }
    public function f9(){
        return view('frontend/others/Succes_stories');
    }
    public function f10(){
        return view('frontend/others/whyFOC');
    }
}

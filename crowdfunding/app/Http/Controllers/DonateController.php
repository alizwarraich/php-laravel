<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donate;
use App\Models\User;
use App\Models\Charity;

class DonateController extends Controller
{
    public function create(Request $request)
    {
        $donation = new Donate;
        $donation->save();
        $user = User::find(1);
        $charity = Charity::find(1);
        $donation->charity()->attach($charity);
        $donation->users()->attach($user);
        return view('frontend.donate');
    }
}

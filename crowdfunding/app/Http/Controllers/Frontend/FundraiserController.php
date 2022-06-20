<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Charity;

class FundraiserController extends Controller
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
    public function create(){
        $fundraiser=Charity::all();
        return view('frontend/fundraiser')
        ->with(['fundraiser'=>$fundraiser]);
    }
    public function store(Request $request) {
        $fundraiser = new Charity; // Must import the Model file: use App\fundraiser;
        $fundraiser->name = $request->get('name');
        $fundraiser->description = $request->get('description');
        $fundraiser->fundtarget = $request->get('fundtarget');
        $fundraiser->category = $request->get('category');
        
        $fundraiser->save();
        return redirect('fundraiser')
            ->with('status', 'id '.$fundraiser->id.' added Successfully!');
    }

    public function read() {
        $fundraisers = Charity::all();
        // Load fundraisers using the model ‘fundraiser'
        // Pass the $fundraisers to the view, 'fundraiser/read'
        return view('frontend/fundraiserRead')
        ->with(['fundraisers' => $fundraisers]);
    }

    public function edit($id) {
        $fundraisers = Charity::find($id);
        // Load fundraisers using the model 'fundraiser'
        // Pass the $fundraisers to the view, 'fundraiser/update'
        // so that user can update.
        return view('frontend/fundraiserUpdate')
        ->with(['fundraisers' => $fundraisers]);
    }

    public function update(Request $request, $id) {
            // Locate the row of this id so that updated record
            // can be overwritten ONLY on the previous record of this id.
            $fundraiser = Charity::find($id);
            // you can add the chech here whether this fundraiser exists or not?
       // Copy from textbox and paste on the handler
            $fundraiser->name = $request->get('name');
            $fundraiser->description = $request->get('description');
            $fundraiser->fundtarget = $request->get('fundtarget');
            $fundraiser->category = $request->get('category');
            // Since the marital_status field has a default value of ZERO,
            // therefore, even if no text is copied from the text box
            // the value ZERO would be stored.
            //$fundraiser->marital_status = $request->get('marital_status');
            $fundraiser->save();
            /* Overwrite data on the row pointed by id */
            // --------------------------------------
            // Help on the following code is given at the following URL
            // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data //
            return redirect('fundraiserRead') ->with('status', 'id '.$id.' updated Successfully!');
    }
            // --------------------------------------
    public function delete($id) {
                // Delete the row pointed to by this id
                Charity::destroy($id);
                // --------------------------------------
                // Help on the following code is given at the following URL
                // https://laravel.com/docs/5.8/redirects#redirecting-with-flashed-session-data //
                return redirect('fundraiserRead')
                ->with('status', 'id '.$id.' deleted Successfully!');
                // --------------------------------------
    }
}

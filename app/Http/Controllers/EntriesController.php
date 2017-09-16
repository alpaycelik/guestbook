<?php

namespace App\Http\Controllers;

use App\Entry;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class EntriesController extends Controller
{
    # Handles "GET /" request
    public function getIndex() {

        return view('home')->with('entries', Entry::orderBy('created_at','desc')->get());
    }

    # Handles "POST /"  request
    public function postIndex(Request $request) {

        $request->validate([
            'frmName' => 'required',
            'frmEmail' => 'required',
            'frmComment' => 'required',
        ]);


        // get form input data
        $entry = [
            'username' => Input::get('frmName'),
            'email'    => Input::get('frmEmail'),
            'comment'  => Input::get('frmComment')
        ];

        // save the guestbook entry to the database
        Entry::create($entry);

        return Redirect::to('/');
    }
}

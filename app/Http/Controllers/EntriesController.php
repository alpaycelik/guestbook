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
            'ad' => 'required',
            'e-mail' => 'required',
            'yorum' => 'required',
        ]);


        // get form input data
        $entry = [
            'username' => Input::get('ad'),
            'email'    => Input::get('e-mail'),
            'comment'  => Input::get('yorum')
        ];

        // save the guestbook entry to the database
        Entry::create($entry);

        return Redirect::to('/');
    }
}

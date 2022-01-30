<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('front-end.pages.contact');
    }

    public function submitted(Request $request)
    {
        Contact::submitted($request);
        return redirect()->back()->with('message', 'Form Submitted');
    }
}

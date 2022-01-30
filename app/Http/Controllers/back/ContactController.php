<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //

    protected $contacts;

    public function manageContact()
    {
        $this->contacts = Contact::all();
        return view('back-end.pages.manage-contact', ['contacts' => $this->contacts]);
    }
}

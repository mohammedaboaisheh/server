<?php

namespace App\Http\Controllers;
use App\Contact;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function saveContact(Request $request)  {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());
        //
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
    //
}

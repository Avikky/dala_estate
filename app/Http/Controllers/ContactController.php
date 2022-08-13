<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contacts = Contact::where('deleted_at', NULL)->get();
        return view('admin.contact', compact('contacts'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|max:250',
            'message' => 'required'
        ]);

        // return $request;

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return back()->with('success', 'Request sent successfully, we will contact you soon!');
    }

    public function delete($id)
    {
        Contact::destroy($id);

        return back()->with('success', 'Request deleted successfully');
    }
}

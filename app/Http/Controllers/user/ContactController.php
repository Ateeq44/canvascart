<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact()
    {
        return view('user.contact');
    }

    public function store(Request $request)
    {
        $data = new Contact();
        $data->fname = $request->input('fname');
        $data->lname = $request->input('lname');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->message = $request->input('message');
        $data->save();
        return view('user.contact')->with('status', 'submited Successfully!');
    }
}

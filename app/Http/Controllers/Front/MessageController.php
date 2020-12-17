<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Message;

class MessageController extends Controller
{
    public function Newsletter(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email|max:191'
        ]);

        Newsletter::create($data);

        // session()->flash('success','Email Sent Successfuly');
        session()->flash('success','Email Sent Successfuly');
        return back();
    }

    public function contact(Request $request)
    {
        $data = $request->validate([
            'name'  => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'subject' => 'nullable|string|',
            'message' => 'required|min:4',
        ]);

        Message::create($data);
        session()->flash('success','Message Sent Successfuly');
        return back();
    }
}

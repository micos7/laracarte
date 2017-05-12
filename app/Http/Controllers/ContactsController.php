<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;


class ContactsController extends Controller
{
    public function create(){
        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        $mailable = new ContactMessageCreated($request->name,$request->email,$request->msg);
        Mail::to('admin@admin.ro')->send($mailable);

        return 'Done!';
    }
}

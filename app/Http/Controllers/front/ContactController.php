<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Founder;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $contacts = Contact::first();
        $founder = Founder::first();
        return view("front.contact", ['contacts' => $contacts, 'founder' => $founder]);
    }
}

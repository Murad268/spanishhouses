<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\about;
use App\Models\Contact;
use App\Models\Founder;
use App\Models\InstaPhotos;
use App\Models\Pages;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $contacts = Contact::first();
        $about = about::first();
        $photos = InstaPhotos::all();
        $founder = Founder::first();
        $products = Products::paginate(4);
        $header = Pages::where('name', 'home')->first();

        return view("front.home", ['contacts' => $contacts, 'about' => $about, 'photos' => $photos, 'founder' => $founder, 'products' => $products, 'header' => $header]);
    }
}

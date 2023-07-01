<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Building_Types;
use App\Models\Contact;
use App\Models\District;
use App\Models\Logo;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id) {
        $contacts = Contact::first();
        $logo = Logo::first();
        $product = Products::findOrFail($id);
        $types = Building_Types::all();
        $districts = District::all();
        return view("front.product", ['logo' => $logo, 'contacts' => $contacts, 'product' => $product, 'types' => $types, 'districts' => $districts]);
    }
}

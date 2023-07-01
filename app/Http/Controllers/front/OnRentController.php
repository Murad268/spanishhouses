<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Building_Types;
use App\Models\Contact;
use App\Models\District;
use App\Models\Logo;
use App\Models\Pages;
use App\Models\Products;
use Illuminate\Http\Request;

class OnRentController extends Controller
{
    public function index(Request $request) {
        $query = Products::query();
        $build_type = $request->build_type;
        $district_type = $request->district_type;
        $artikul = $request->artikul;
        $logo = Logo::first();
        if (!empty($build_type)) {
            $query->where('products_building_type', $build_type)->where('onrest', 1);
        }
        if (!empty($district_type)) {
            $query->where('products_district', $district_type)->where('onrest', 1);
        }
        if (!empty($artikul)) {
            $query->where('artikul', $artikul)->where('is_new', 0)->where('onrest', 1);
        }
        if (empty($build_type) && empty($district_type) && empty($artikul)) {
            $query->where('onrest', 1)->get();
        }

        $results = $query->paginate(6);

        $header = Pages::where('name', 'onrest')->first();
        $contacts = Contact::first();
        $districts = District::all();
        $types = Building_Types::all();
        return view("front.onRent", ['header' => $header, 'contacts' => $contacts, 'products' => $results, 'types' => $types, 'districts' => $districts, 'logo' => $logo]);
    }
}

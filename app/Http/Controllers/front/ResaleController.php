<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Building_Types;
use App\Models\Contact;
use App\Models\District;
use App\Models\Logo;
use App\Models\NewBuildings;
use App\Models\Pages;
use App\Models\Products;
use Illuminate\Http\Request;

class ResaleController extends Controller
{
    public function index(Request $request) {
        $query = Products::query();
        $logo = Logo::first();
        if (!empty($request->build_type)) {
            $query->where('products_building_type', $request->build_type)->where('is_new', 0)->where('onrest', 0);
        }
        if (!empty($request->district_type)) {
            $query->where('products_district', $request->district_type)->where('is_new', 0)->where('onrest', 0);
        }
        if (!empty($request->artikul)) {
            $query->where('artikul', $request->artikul)->where('is_new', 0)->where('onrest', 0);
        }
        if (empty($request->build_type) && empty($request->district_type) && empty($request->artikul)) {
            $query->where('is_new', 0)->where('onrest', 0)->get();
        }
        $results = $query->paginate(10);

        $contacts = Contact::first();
        $products = Products::where('is_new', 0)->where('onrest', 0)->paginate(10);
        $header = Pages::where('name', 'second')->first();
        $districts = District::all();
        $types = Building_Types::all();
        return view("front.resale", ['products' => $results, 'contacts' => $contacts, 'header'=> $header, 'districts' => $districts, 'types' => $types, 'districts_types' => $districts, 'logo' => $logo]);
    }
}

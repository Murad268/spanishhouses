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

class NewBuildingsController extends Controller
{
    public function index() {
        $contacts = Contact::first();
        $header = Pages::where('name', 'newsbuilding')->first();
        $newsBuildings = NewBuildings::paginate(6);
        $logo = Logo::first();
        return view("front.oneNewBuilndings", ['contacts' => $contacts, 'header' => $header, 'newsBuildings' => $newsBuildings, 'logo' => $logo]);

    }
    public function onebuilding(Request $request, $id) {
        $query = Products::query();
        if (!empty($request->build_type)) {
            $query->where('products_building_type', $request->build_type)->where('is_newbuilding', 1)->where('newbuildings_id', $id);
        }
        if (!empty($request->district_type)) {
            $query->where('products_district', $request->district_type)->where('is_newbuilding', 1)->where('newbuildings_id', $id);
        }
        if (!empty($request->artikul)) {
            $query->where('artikul', $request->artikul)->where('is_new', 0)->where('is_newbuilding', 1)->where('newbuildings_id', $id);
        }
        if (empty($request->build_type) && empty($request->district_type) && empty($request->artikul)) {
            $query->where('is_newbuilding', 1)->where('newbuildings_id', $id)->get();
        }
        $results = $query->paginate(6);

        $contacts = Contact::first();
        $logo = Logo::first();
        $dis = NewBuildings::findOrFail($id);
        $districts = District::all();
        $types = Building_Types::all();
        return view("front.newBuildings", ['id' => $id, 'products' => $results, 'contacts' => $contacts, 'dis' => $dis, 'districts' => $districts, 'types' => $types, 'logo' => $logo ]);
    }
}

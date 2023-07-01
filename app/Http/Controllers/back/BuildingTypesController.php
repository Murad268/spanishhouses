<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\buildingtypes\BuildingTypesRequest;
use App\Models\Building_Types;
use Illuminate\Http\Request;
use PhpParser\BuilderFactory;

class BuildingTypesController extends Controller
{
    public function index() {
        $types = Building_Types::paginate(10);
        return view("back.buildingTypes.buildings_types", ['types' => $types]);
    }


    public function add() {
        return view("back.buildingTypes.buildings_types__add");
    }

    public function create( BuildingTypesRequest $request) {
        $type_name = $request->type_name;
        $type_status = (bool)$request->type_status;
        $data = ['status' => $type_status,  'title' => $type_name];
        $created = Building_Types::create($data);
        if($created) {
            return redirect()->route('admin.buildingtypes.index')->with('message', "verilənlər uğurla əlavə edildilər");
        }
    }


    public function change($id) {
        $buildingTypes = Building_Types::findOrFail($id);
        return view("back.buildingTypes.buildings_types_change", ['id' => $id, 'buildingTypes' => $buildingTypes]);
    }

    public function update(BuildingTypesRequest $request, $id) {
        $type_name = $request->type_name;
        $type_status = (bool)$request->type_status;
        $data = ['status' => $type_status,  'title' => $type_name];
        $buildingTypes = Building_Types::findOrFail($id);
        if(!$buildingTypes) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        $updated = $buildingTypes->update($data);
        if($updated) {
            return redirect()->route('admin.buildingtypes.index')->with('message', "verilənlər uğurla güncəlləndilər");
        }
    }

    public function delete($id) {
        $buildingTypes = Building_Types::findOrFail($id);
        $deleted = $buildingTypes->delete();
        if(!$buildingTypes) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        if ($deleted) {
            return redirect()->route('admin.buildingtypes.index')->with("message", "verilənlər uğurla silindi");
        }
    }
}

<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\districts\DistrictsRequest;
use Illuminate\Support\Str;
use App\Models\District;
use Illuminate\Http\Request;

class DistrcitController extends Controller
{
    public function index() {
        $districts = District::paginate(10);
        return view("back.districts.districts", ['districts' => $districts]);
    }
    public function add() {
        return view("back.districts.districts_add");
    }

    public function create( DistrictsRequest $request) {
        $ditrict = $request->district_name;
        $status = (bool)$request->district_status;
        $data = ['status' => $status,  'name' => $ditrict];
        $created = District::create($data);
        if($created) {
            return redirect()->route('admin.districts.index')->with('message', "verilənlər uğurla əlavə edildilər");
        }
    }
    public function change($id) {
        $district = District::findOrFail($id);
        if (!$district) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        return view("back.districts.districts_change", ['id' => $id, 'district' => $district]);
    }

    public function update(DistrictsRequest $request, $id) {
        $ditrict = $request->district_name;
        $status = (bool)$request->district_status;
        $data = ['status' => $status,  'name' => $ditrict];
        $districtModel = District::findOrFail($id);
        if (!$districtModel) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        $updated = $districtModel->update($data);
        if($updated) {

            return redirect()->route('admin.districts.index')->with('message', "verilənlər uğurla güncəlləndilər");
        }
    }

    public function delete($id) {
        $district = District::findOrFail($id);
        $deleted = $district->delete();
        if (!$district) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        if ($deleted) {
            return redirect()->route('admin.districts.index')->with("message", "verilənlər uğurla silindi");
        }
    }
}

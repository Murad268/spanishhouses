<?php

namespace App\Http\Controllers\back;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\newbuildings\NewBuildingRequest;
use App\Models\NewBuildings;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class NewBuildingsController extends Controller
{
    public function index() {
        $newbuildings = NewBuildings::paginate(10);
        return view("back.newbuildings.newbuildings", ['newbuildings' => $newbuildings]);
    }
    public function add() {
        return view("back.newbuildings.newbuildings_add");
    }
    public function create(NewBuildingRequest $request) {
        $img = $request->newbuildings_photo;
        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/newbuildings/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(381, 246)->save($lasPath);
        $newbuildings_status = (bool)$request->newbuildings_status;
        $newbuildings_title = $request->newbuildings_title;
        $elems = ["title" => $newbuildings_title, "img" => $lastName, 'status' => $newbuildings_status];

        $created = NewBuildings::create($elems);

        if ($created) {
            return redirect()->route('admin.newbuildings.index')->with("message", "verilənlər uğurla yükləndilər");
        }
        return view("back.newbuildings.newbuildings_add");
    }
    public function change($id) {
        $newBuilding = NewBuildings::findOrFail($id);
        return view("back.newbuildings.newbuildings_change", ['id' => $id, 'building' => $newBuilding]);
    }

    public function update(NewBuildingRequest $request, $id) {
        $img = $request->newbuildings_photo;
        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/newbuildings/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(381, 246)->save($lasPath);
        $newbuildings_status = (bool)$request->newbuildings_status;
        $newbuildings_title = $request->newbuildings_title;
        $elems = ["title" => $newbuildings_title, "img" => $lastName, 'status' => $newbuildings_status];

        $newbuiling = NewBuildings::findOrFail($id);
        if (!$newbuiling) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        Storage::delete($imagePath . $newbuiling->img);
        $updated = $newbuiling->update($elems);

        if ($updated) {
            return redirect()->route('admin.newbuildings.index')->with("message", "verilənlər uğurla güncəlləndi");
        }
    }


    public function delete($id) {
        $newbuild = NewBuildings::findOrFail($id);
        $imagePath = 'assets/front/images/instagram/';
        if (!$newbuild) {
            redirect()->back()->with("error__message", "verilənlərin silinməsi zamanı xəta Bir az sonra yenidən cəhd edin");
        }
        Storage::delete($imagePath . $newbuild->img);
        $deleted = $newbuild->delete();

        if ($deleted) {
            return redirect()->route('admin.newbuildings.index')->with("message", "verilənlər uğurla silindi");
        }
    }
}

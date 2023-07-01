<?php

namespace App\Http\Controllers\back;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\founder\FounderRequest;
use App\Models\Founder;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class FounderController extends Controller
{
    public function index() {
        $founder = Founder::all();
        return view("back.founder.founder", ['founder' => $founder]);
    }
    public function add() {
        return view("back.founder.founder_add");
    }
    public function create(FounderRequest $request) {

        $img = $request->founder_photo;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/founder/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(370, 502)->save($lasPath);
        $founder_name = $request->founder_name;
        $founder_position = $request->founder_position;
        $founder_desc = $request->founder_desc;
        $founder_languages = $request->founder_languages;

        $elems = ["nmae" => $founder_name, "position" => $founder_position, 'desc' => $founder_desc, 'languages' => $founder_languages, "img" => $lastName];

        $created = Founder::create($elems);

        if ($created) {
            return redirect()->route('admin.founder.index')->with("message", "verilənlər uğurla yükləndilər");
        }
    }
    public function change($id) {
        $founder = Founder::findOrFail($id);
        if (!$founder) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        return view("back.founder.founder_change", ['id' => $id, 'founder' => $founder]);
    }


    public function update(FounderRequest $request, $id)
    {

        $img = $request->founder_photo;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/founder/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(370, 502)->save($lasPath);
        $founder_name = $request->founder_name;
        $founder_position = $request->founder_position;
        $founder_desc = $request->founder_desc;
        $founder_languages = $request->founder_languages;

        $elems = ["nmae" => $founder_name, "position" => $founder_position, 'desc' => $founder_desc, 'languages' => $founder_languages, "img" => $lastName];

        $founder = Founder::findOrFail($id);
        if (!$founder) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        unlink($imagePath. $founder->img);
        $updated = $founder->update($elems);

        if ($updated) {
            return redirect()->route('admin.founder.index')->with("message", "verilənlər uğurla güncəlləndi");
        }


    }

    public function delete($id) {
        $founder = Founder::findOrFail($id);
        $imagePath = 'assets/front/images/instagram/';
        if (!$founder) {
            redirect()->back()->with("error__message", "verilənlərin silinməsi zamanı xəta Bir az sonra yenidən cəhd edin");
        }
        unlink($imagePath. $founder->img);
        $deleted = $founder->delete();

        if ($deleted) {
            return redirect()->route('admin.founder.index')->with("message", "verilənlər uğurla silindi");
        }
    }
}

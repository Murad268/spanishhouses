<?php

namespace App\Http\Controllers\back;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\logo\LogoRequest;
use App\Models\Logo;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class LogoController extends Controller
{
    public function index() {
        $logo = Logo::all();
        return view('back.logo.logo', ['logo' => $logo]);
    }

    public function create(LogoRequest $request) {
        $img = $request->logo__image;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/header/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(255, 60)->save($lasPath);


        $elems = ["logo" => $lastName];

        $created = Logo::create($elems);

        if ($created) {
            return redirect()->route('admin.logo.index')->with("message", "verilənlər uğurla yükləndilər");
        }
    }

    public function delete($id) {
        $logo = Logo::findOrFail($id);
        $imagePath = public_path('assets/front/images/header/'.$logo->logo);
        if (!$logo) {
            redirect()->back()->with("error__message", "verilənlərin silinməsi zamanı xəta Bir az sonra yenidən cəhd edin");
        }
        unlink($imagePath);
        $deleted = $logo->delete();

        if ($deleted) {
            return redirect()->route('admin.logo.index')->with("message", "verilənlər uğurla silindi");
        }
    }
}

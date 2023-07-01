<?php

namespace App\Http\Controllers\back;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\about\aboutRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\about;
class AboutController extends Controller
{

    public function index() {

        $about = about::all();
        return view('back.about.about', ['about' => $about]);
    }
    public function add() {
        return view('back.about.about_add');
    }
    public function create(aboutRequest $request) {
        $img = $request->about_photo;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/about/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(367, 499)->save($lasPath);
        $title = $request->about_title;
        $desc = $request->about_desc;
        $footer = $request->about_footer;

        $elems = ["title" => $title, "img" => $lastName, 'footer' => $footer, "desc" => $desc];

        $created = about::create($elems);

        if ($created) {
            return redirect()->route('admin.about.index')->with("message", "verilənlər uğurla yükləndilər");
        }
    }

    public function change($id) {
        $about_text = about::findOrFail($id);
        return view('back.about.about_change', ['id' => $id, 'about_text' => $about_text]);
    }

    public function update(aboutRequest $request, $id)
    {
        $img = $request->about_photo;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/about/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(367, 499)->save($lasPath);
        $title = $request->about_title;

        $desc = $request->about_desc;
        $footer = $request->about_footer;

        $elems = ["title" => $title, "img" => $lastName,'footer' => $footer, "desc" => $desc];

        $about = about::findOrFail($id);
        if (!$about) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        if(file_exists($imagePath. $about->img)) {
            unlink($imagePath. $about->img);
        }


        $updated = $about->update($elems);

        if ($updated) {
            return redirect()->route('admin.about.index')->with("message", "verilənlər uğurla güncəlləndi");
        }
    }

    public function delete($id) {
        $about = about::findOrFail($id);
        $imagePath = 'assets/front/images/instagram/';
        if (!$about) {
            redirect()->back()->with("error__message", "verilənlərin silinməsi zamanı xəta Bir az sonra yenidən cəhd edin");
        }
        if(file_exists($imagePath. $about->img)) {
            unlink($imagePath. $about->img);
        }

        $deleted = $about->delete();

        if ($deleted) {
            return redirect()->route('admin.about.index')->with("message", "verilənlər uğurla silindi");
        }
    }
}

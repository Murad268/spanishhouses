<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\headers\HeadersRequest;
use App\Models\Pages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;

class HeadersController extends Controller
{
    public function index() {
        $pages = Pages::all();
        return view("back.headers.headers", ['pages' => $pages]);
    }

    public function add() {
        return view("back.headers.headers_add");
    }


    public function create(HeadersRequest $request) {
        $img = $request->headers_photo;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/header/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(1140, 667)->save($lasPath);
        $headers_title = $request->headers_title;
        $header_subtitle = $request->header_subtitle;
        $headers_name = $request->headers_name;


        $elems = ["title" => $headers_title, "img" => $lastName, 'subtitle' => $header_subtitle, 'name' => $headers_name];

        $created = Pages::create($elems);

        if ($created) {
            return redirect()->route('admin.headers.index')->with("message", "verilənlər uğurla yükləndilər");
        }
    }


    public function change($id) {

        $header = Pages::findOrFail($id);
        return view("back.headers.headers_change", array("id" => $id, 'header' => $header));
    }


    public function update(HeadersRequest $request, $id)
    {
        $img = $request->headers_photo;

        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/header/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(1140, 667)->save($lasPath);
        $headers_title = $request->headers_title;
        $header_subtitle = $request->header_subtitle;
        $headers_name = $request->headers_name;


        $elems = ["title" => $headers_title, "img" => $lastName, 'subtitle' => $header_subtitle, 'name' => $headers_name];

        $headers = Pages::findOrFail($id);
        if (!$headers) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        unlink($imagePath. $headers->img);
        $updated = $headers->update($elems);

        if ($updated) {
            return redirect()->route('admin.headers.index')->with("message", "verilənlər uğurla güncəlləndi");
        }
    }

    public function delete($id) {
        $headers = Pages::findOrFail($id);
        if (!$headers) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        $imagePath = 'assets/front/images/header/';
        unlink($imagePath. $headers->img);
        $deleted = $headers->delete($id);

        if ($deleted) {
            return redirect()->route('admin.headers.index')->with("message", "verilənlər uğurla silindi");
        }
    }
}

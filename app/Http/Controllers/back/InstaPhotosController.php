<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\instaPhotos\createRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\InstaPhotos;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use File;
class InstaPhotosController extends Controller
{
    public function index()
    {
        $instaPthotos = InstaPhotos::paginate(10);
        return view("back.instaPhotos.insta_photos", ['photos' => $instaPthotos]);
    }
    public function add()
    {
        return view("back.instaPhotos.insta_photos_add");
    }
    public function create(createRequest $request)
    {
        $img = $request->photo;
        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/instagram/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(377, 381)->save($lasPath);
        $link = $request->link;

        $elems = ["link" => $link, "img" => $lastName];

        $created = InstaPhotos::create($elems);

        if ($created) {
            return redirect()->route('admin.instaphotos.index')->with("message", "verilənlər uğurla yükləndilər");
        }
    }

    public function change($id)
    {
        $instaPhoto = InstaPhotos::findOrFail($id);
        return view("back.instaPhotos.insta_photos_change", ['id' => $id, 'photos' => $instaPhoto]);
    }
    public function update(createRequest $request, $id)
    {
        $img = $request->photo;
        $extension = $img->getClientOriginalExtension();
        $randomName = Str::random(10);
        $imagePath = 'assets/front/images/instagram/';
        $lastName = $randomName . "." . $extension;
        $lasPath = $imagePath . $randomName . "." . $extension;
        Image::make($img)->resize(300, 200)->save($lasPath);
        $link = $request->link;

        $elems = ["link" => $link, "img" => $lastName];

        $instaPhoto = InstaPhotos::findOrFail($id);
        if (!$instaPhoto) {
            redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        if(file_exists($imagePath . $instaPhoto->img)) {
            unlink($imagePath . $instaPhoto->img);
        }

        $updated = $instaPhoto->update($elems);

        if ($updated) {
            return redirect()->route('admin.instaphotos.index')->with("message", "verilənlər uğurla güncəlləndi");
        }
    }

    public function delete($id) {
        $instaPhoto = InstaPhotos::findOrFail($id);
        $imagePath = public_path('assets/front/images/instagram/'.$instaPhoto->img);
        if (!$instaPhoto) {
            redirect()->back()->with("error__message", "verilənlərin silinməsi zamanı xəta Bir az sonra yenidən cəhd edin");
        }
        // Storage::delete($imagePath . public_path('assets/front/images/instagram/'.$instaPhoto->img));
        if(file_exists($imagePath)) {
            unlink($imagePath);
        }

        $deleted = $instaPhoto->delete();
        if (!$instaPhoto) {
            return redirect()->back()->with("error__message", "verilənlərin yüklənməsi zamanı xəta. Bir az sonra yenidən cəhd edin");
        }
        if ($deleted) {
            return redirect()->route('admin.instaphotos.index')->with("message", "verilənlər uğurla silindi");
        }
    }
}

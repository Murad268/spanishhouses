<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Http\Requests\product\ProductsRequest;
use App\Http\Requests\productImages\productImagesRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Building_Types;
use Intervention\Image\Facades\Image;
use App\Models\District;
use App\Models\NewBuildings;
use App\Models\ProductImg;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Products::paginate(10);
        return view("back.products.products", ['products' => $products]);

    }

    public function add() {
        $district = District::all();
        $types = Building_Types::all();
        $newbuildings = NewBuildings::all();
        return view("back.products.products_add", ['types' => $types, 'districts' => $district, 'newbuildings' => $newbuildings]);
    }




    public function create(ProductsRequest $request) {
        $data = $request->all();
        $data['is_newbuilding'] = (bool)$request->is_newbuilding;
        $data['car_parks'] = (bool)$request->car_parks;
        $data['garden'] = (bool)$request->garden;
        $data['pool'] = (bool)$request->pool;
        $data['products_status'] = (bool)$request->products_status;
        $created = Products::create($data);
        if($created) {
            return redirect()->route('admin.products.index')->with('message', "verilənlər uğurla güncəlləndilər");
        };
    }

    public function change($id) {
        $district = District::all();
        $types = Building_Types::all();
        $product = Products::findOrFail($id);
        $newbuildings = NewBuildings::all();
        return view("back.products.products_change", array('types' => $types, 'districts' => $district, "id" => $id, 'product' => $product, 'newbuildings' => $newbuildings));
    }

    public function update(ProductsRequest $request, $id) {
        $data = $request->all();
        $data['is_newbuilding'] = (bool)$request->is_newbuilding;

        $data['car_parks'] = (bool)$request->car_parks;
        $data['garden'] = (bool)$request->garden;
        $data['pool'] = (bool)$request->pool;
        $data['products_status'] = (bool)$request->products_status;
        $product = Products::findOrFail($id);
        $updated = $product->update($data);
        if($updated) {
            return redirect()->route('admin.products.index')->with('message', "verilənlər uğurla güncəlləndilər");
        };
    }

    public function delete($id) {
        $product = Products::findOrFail($id);
        $deleted = $product->delete();
        if($deleted) {
            return redirect()->route('admin.products.index')->with('message', "verilənlər uğurla silindilər");
        }
    }



    public function images() {
        $products = ProductImg::all();
        return view("back.products.product_imgs", ['products' => $products]);
    }
    public function imagesId($id) {
        $imgs = ProductImg::where('product_id',$id)->paginate(10);
        $product = Products::findOrFail($id);
        return view("back.products.product_imgs", ['imgs' => $imgs, 'id' => $id, 'product' => $product]);
    }
    public function image_add($id) {

        $products = Products::all();
        $district = District::all();
        $types = Building_Types::all();
        return view("back.products.product_imgs_add", ['types' => $types, 'districts' => $district, 'products' => $products, 'id' => $id]);
    }

    public function image_create(Request $request, $id ) {

        $images = $request->product_image;
        if($images == NULL)  return redirect()->route('admin.products_images.image_add', ['id' => $id])->with("errorImg", "məhsul şəklinin seçimi mütləqdir");
        foreach ($images as $image) {
            if (!$image->isValid() || !in_array($image->getClientOriginalExtension(), ['jpg', 'png', 'webp', 'svg'])) {
                return redirect()->route('admin.products_images.image_add', ['id' => $id])->with("errorImg", "məhsul şəklini mütləq şəkil tipində və jpg, png, webp,svg uzantılarında olmalıdır ");
            }
        }
        foreach($images as $img) {
            $extension = $img->getClientOriginalExtension();
            $randomName = Str::random(10);
            $imagePath = 'assets/front/images/products/';
            $lastName = $randomName . "." . $extension;
            $lasPath = $imagePath . $randomName . "." . $extension;
            Image::make($img)->resize(911, 437)->save($lasPath);



            $elems = ["product_id" => $id, "product_image" => $lastName, "is_main" => 0];

            ProductImg::create($elems);
        }




        return redirect()->route('admin.products_images.imagesId', ['id' => $id])->with("message", "verilənlər uğurla yükləndilər");
    }

    public function products_images_delete($id, $product_id) {
        $img = ProductImg::findOrFail($id);
        $imagePath = 'assets/front/images/products/';
        if(file_exists($imagePath. $img->product_image)) {
            unlink($imagePath. $img->product_image);
        }
        $deleted = $img->delete($id);
        if($deleted) {
            return redirect()->route('admin.products_images.imagesId', ['id' => $product_id])->with("message", "verilənlər uğurla silindilər");
        }
    }

    public function changeMain($id, $product_id) {
        ProductImg::where('product_id', $product_id)->update(['is_main'=>0]);
        $main = ProductImg::findOrFail($id);
        $updated = $main->update(['is_main'=>1]);
        if($updated) {
            return redirect()->route('admin.products_images.imagesId', ['id' => $product_id])->with("message", "əsaЫ şəkil təyin edildi");
        }
    }

}

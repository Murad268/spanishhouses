<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;


class AdminController extends Controller
{
    public function index() {
        return view("back.index");
    }

    public function login() {
        return view("back.login");
    }

    public function login_check(Request $request) {
        $login = $request->admin_login;
        $password = md5($request->admin_pass);

        $admins = Admin::where('login', $login)->where('password', $password)->get();

        if(count($admins)) {
            Cookie::queue(Cookie::make('login', $login, 30));
            return redirect()->route('admin.home');
        } else {
            return redirect()->back()->with("err", 'şifrə və ya login yanlışdır!');
        }
    }

    public function logout() {
        Cookie::queue(Cookie::make('login', "", -1));
        return redirect()->route('admin.login');
    }
}

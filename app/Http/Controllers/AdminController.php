<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class AdminController extends Controller
{
    public function index() {
        return view('admin_login');
    }

    public function show_dashboard() {
        return view('admin.dashboard');
    }

    // public function dashboard(Request $request) {
    //     $admin_email = $request -> admin_email;
    //     $admin_password = md5($request -> admin_password);

    //     $result = DB::table('tbl_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
    
    //     if($result) {
    //     //     Session::put('admin_name', $result -> admin_name);
    //     //     Session::put('admin_id', $result -> admin_id);
    //     //     return Redirect::to('/dashboard');
    //     // }else {
    //     //     Session::put('message', 'Incorrect Password');
    //     //     return Redirect::to('/admin');
    //     // }

    //     if ($result->admin_password === $admin_password) {
    //         Session::put('admin_name', $result->admin_name);
    //         Session::put('admin_id', $result->admin_id);
    //         return Redirect::to('/dashboard');
    //     } else {
    //         // Mật khẩu không đúng
    //         Session::put('message', 'Incorrect Password');
    //         return Redirect::to('/admin');
    //     }
    // } else {
    //     // Tài khoản không tồn tại
    //     Session::put('message', 'Account does not exist');
    //     return Redirect::to('/admin');
    // }
    // }

    public function dashboard(Request $request) {
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
    
        // Tìm tài khoản theo email
        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->first();
    
        if ($result) {
            // Nếu tài khoản tồn tại, kiểm tra mật khẩu
            if ($result->admin_password === $admin_password) {
                Session::put('admin_name', $result -> admin_name);
                Session::put('admin_id', $result -> admin_id);
                return Redirect::to('/dashboard');
            } else {
                // Mật khẩu không đúng
                Session::put('message', 'Incorrect Password');
                return Redirect::to('/admin');
            }
        } else {
            // Tài khoản không tồn tại
            Session::put('message', 'Account does not exist');
            return Redirect::to('/admin');
        }
    }
    
    public function log_out() {
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}



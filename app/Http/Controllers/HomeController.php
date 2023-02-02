<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function upload(Request $request) {
        $user = new User;
        $user-> email = $request->email;
        $user-> fullname = $request->fullname;
        
        //encrypt password for DB
        $encpassword = password_hash($request->password,PASSWORD_BCRYPT);
        $user-> password = $encpassword;

        //verifying password
        if($encpassword != password_hash($request->verify_password,PASSWORD_BCRYPT)) {
            
        } else
        $user-> verify_password = "true";
        
        $user-> save();
        return redirect()->back();
        
    }
}

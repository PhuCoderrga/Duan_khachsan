<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UserDB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Psr7\Request as Psr7Request;
use function PHPSTORM_META\map;


class LoginAdminController extends Controller
{
    public function LoginAdmin(){
        
        return view('admin.login.login');
    }
    
    public function LoginAdminGet(Request $request){    
        
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request->get('email');
        $user = UserDB::where('email', $email )->first();
        if ($user != null){
            if (Auth::guard('admin')->attempt($request->only('email','password'))) {   
                return redirect()->route('index.admin');
            }else{
                session()->flash('message', 'Tài khoản hoặc mật khẩu chưa chính xác');
                return redirect()->back();
            }

        }else{
            session()->flash('message', 'Tài khoản không hợp lệ');
            return redirect()->back();
        }
    }
    public function logout(Request $request) {
        
        auth('admin')->logout();
        return redirect()->route('login.admin');
    }
}
<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }
    public function login(Request $request)
    {
        // Xác thực thông tin tài khoản pw nhập vào
        $this->validate($request, [ 
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        // Đăng nhập
            if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
            {
            // Nếu đúng, chuyển sang
            return redirect()->intended(route('admin.dashboard'));
            }
            // Nếu không đúng, chuyển sang
            return redirect()->back()->withInput($request->only('email', 'remember'));

    }
}

<?php

namespace App\Http\Controllers\login;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        // dd(Auth::id());
        // lớn hơn 0 thì chuyển đến trang dashboard không thì không truy cập được nếu id > 0 nó vẫn dữ dữ liệu cho đến khi mình logout
        if(Auth::id() > 0){
            return redirect()->route('dashboard.index');
        }
        return view('login.index');
    }

    public function login(AuthRequest $request)
    {
       $credentials = [
        'email' => $request->input('email'),
        'password' => $request->input('password'),
       
       ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')->with('success','Đăng nhập thành công');
    }
        return redirect()->route('admin.admin')->with('error', 'Email và mật khẩu không hợp lệ');
    }

    public function register(AuthRequest $request)
    {
        
        $data = $request->all();
        $data['password'] = Hash::make($data['password']); // Mã hóa mật khẩu

        try {
            // Tạo người dùng
            User::create($data);
            return redirect()->route('admin.admin')->with('success', 'Tạo tài khoản thành công');
        } catch (\Exception $e) {
            // Nếu có lỗi xảy ra
            return redirect()->back()->with('error', 'Đã có lỗi xảy ra: ' . $e->getMessage());
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.admin')->with('success','Đăng xuất thành công');
    }
}

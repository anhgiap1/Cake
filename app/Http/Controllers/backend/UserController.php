<?php

namespace App\Http\Controllers\backend;

use App\Models\User;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   
    public function __construct(){

    }
    public function index(){

        $userDb = Users::paginate(5);
        $config = $this->config();
        $template = 'dashboard.user.index';
        return view('dashboard.layout',compact('template','config','userDb'));
    }

    private function config(){
        return  [
            'js' => [
                'backend/js/plugins/switchery/switchery.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css'
            ]
            ];
    }
    public function create(){
        $config = $this->config();
        $template = 'dashboard.user.create';
        return view('dashboard.layout',compact('template','config'));
    }
    public function store(Request $request){
        // $request->validate([
        //     'name' =>'required|',
        //     'email' =>'required|email|unique:users,email',
        //     'password' => 'required|min:8|confirmed',
        // ]);
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password), // mã hóa mật khẩu
        // ]);
        $data = $request->all();
        Users::create($data);
        return redirect()->route('user.index')->with('success','Thêm mới thành công');
    }
    public function destroy($id){
        $user = Users::find($id);
        if($user){
            $user->delete();
            return redirect()->route('user.index')->with('success','Xóa thành công');
        }
        return redirect()->route('user.index')->with('error','Xóa không thành công');
    }
}

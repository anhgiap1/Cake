<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function listcate(){
        $listcate= categories::all();
        return view('admin.danhmuc.index')->with([
            'listcate' => $listcate
        ]);
    }
    public function addcate(){
        return view('admin.danhmuc.create');
    }
    public function addpostcate(Request $request){
        $data = [
            'name'=> $request->name,
        ];
        categories::create($data);
        return redirect()->route('cates.listcate');
    }
    public function updatecate($id){
        $cate = categories::find($id);
        return view('admin.danhmuc.edit',compact('cate'));
    }

    public function updateputcate($id, Request $request){
        $cate = categories::find($id);
        $data = [
            'name'=> $request->name,
        ];
        $cate->update($data);
        return redirect()->route('cates.listcate');
    }
    public function deletecate($id){
        $cate = categories::find($id);
        $cate->delete();
        return redirect()->route('cates.listcate');
    }
}
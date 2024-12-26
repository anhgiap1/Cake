<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\categories;
use Illuminate\Http\Request;

class categoriesController extends Controller
{
    public function index(){
        $template = 'admin.danhmuc.index';
        $listcate= categories::all();
        return view('dashboard.layout',compact('template','listcate'));
    }
    public function create(){
        return view('admin.danhmuc.component.create');
    }
    public function store(Request $request){
        $data = [
            'name'=> $request->name,
        ];
        categories::create($data);
        return redirect()->route('category.index');
    }
    public function edit($id){
        $cate = categories::find($id);
        return view('admin.danhmuc.component.edit',compact('cate'));
    }

    public function update($id, Request $request){
        $cate = categories::find($id);
        $data = [
            'name'=> $request->name,
        ];
        $cate->update($data);
        return redirect()->route('category.index');
    }
    public function destroy($id){
        $cate = categories::find($id);
        $cate->delete();
        return redirect()->route('category.index');
    }
}
<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    public function index(){
        $template = 'admin.sanpham.index';
        $listpro = products::with('category')->get();
        // dd($listpro);
        return view('dashboard.layout',compact('listpro','template'));

    }
    public function create(){
        $categories = categories::all();
        return view('admin.sanpham.component.create',compact('categories'));
    }
    public function store(Request $request){
        $path = null;
        if($request->hasFile('image')){
            $image =$request->file('image');
            $newName= time().'.'. $image->getClientOriginalExtension();
            $path = $image->storeAs('images', $newName, 'public');

        }
        $data = [
            'name'=> $request->name,
            'image'=> $path,
            'categories_id'=> $request->categories_id,
        ];
        products::create($data);
        return redirect()->route('product.index');
    }
    public function edit($id){
        $product= products::find($id);
        $categories= categories::all();
        return view('admin.sanpham.component.edit',compact('product','categories'));
    }
    public function update($id,Request $request){
        $product= products::find($id);
        $path = $product->image;
        if($request->hasFile('image')){
            Storage::disk('public')->delete($product->image);
            $image =$request->file('image');
            $newName= time().'.'. $image->getClientOriginalExtension();
            $path = $image->storeAs('images', $newName, 'public');
        }
        $data = [
            'name'=> $request->name,
            'image'=> $path,
            'categories_id'=> $request->categories_id,
        ];
        $product->update($data);
        return redirect()->route('pros.listpro');
    }
    public function destroy($id){
        $product= products::find($id);
        $product->delete();
        return redirect()->route('pros.listpro');
    }
}

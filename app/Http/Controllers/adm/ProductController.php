<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\products;
use Illuminate\Http\Request;
use Storage;

class ProductController extends Controller
{
    public function listpro(){
        $listpro = products::all();
        return view('admin.sanpham.index')->with([
            'listpro'=> $listpro
        ]);
    }
    public function addpro(){
        $categories = categories::all();
        return view('admin.sanpham.create',compact('categories'));
    }
    public function addpostpro(Request $request){
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
        return redirect()->route('pros.listpro');
    }
    public function updatepro($id){
        $product= products::find($id);
        $categories= categories::all();
        return view('admin.sanpham.edit',compact('product','categories'));
    }
    public function updateputpro($id,Request $request){
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
    public function deletepro($id){
        $product= products::find($id);
        $product->delete();
        return redirect()->route('pros.listpro');
    }
}

<?php

namespace App\Http\Controllers\adm;

use App\Http\Controllers\Controller;
use App\Models\products;
use App\Models\variants;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function listvar(){
        $listvar = variants::all();
        return view('admin.bienthe.index')->with([
            'listvar'=>$listvar,
        ]);
    }
    public function addvar(){
        $product= products::all();
        return view('admin.bienthe.create',compact('product'));
    }
    public function addpostvar(Request $request){
        $data = [
            'product_id'=>$request->product_id,
            'size'=>$request->size,
            'price'=>$request->price
        ];
        variants::create($data);
        return redirect()->route('vars.listvar');
    }
    public function updatevar($id){
        $variant = variants::find($id);
        $product = products::all();
        return view('admin.bienthe.edit',compact('variant','product'));
    }
    public function updateputvar($id,Request $request){
        $variant = variants::find($id);
        $data = [
            'product_id'=>$request->product_id,
            'size'=>$request->size,
            'price'=>$request->price
        ];
        $variant->update($data);
        return redirect()->route('vars.listvar');
    }
    public function deletevar($id){
        $variant = variants::find($id);
        $variant->delete();
        return redirect()->route(('vars.listvar'));
    }
}

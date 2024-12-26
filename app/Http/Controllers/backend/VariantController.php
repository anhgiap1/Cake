<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\products;
use App\Models\variants;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index(){
        $template = 'admin.bienthe.index';
        $listvar = variants::all();
        return view('dashboard.layout',compact('template','listvar'));
    }
    public function create(){
        $product= products::all();
        return view('admin.bienthe.component.create',compact('product'));
    }
    public function store(Request $request){
        $data = [
            'product_id'=>$request->product_id,
            'size'=>$request->size,
            'price'=>$request->price
        ];
        variants::create($data);
        return redirect()->route('variant.index');
    }
    public function edit($id){
        $variant = variants::find($id);
        $product = products::all();
        return view('admin.bienthe.component.edit',compact('variant','product'));
    }
    public function update($id,Request $request){
        $variant = variants::find($id);
        $data = [
            'product_id'=>$request->product_id,
            'size'=>$request->size,
            'price'=>$request->price
        ];
        $variant->update($data);
        return redirect()->route('variant.index');
    }
    public function destroy($id){
        $variant = variants::find($id);
        $variant->delete();
        return redirect()->route(('variant.index'));
    }
}

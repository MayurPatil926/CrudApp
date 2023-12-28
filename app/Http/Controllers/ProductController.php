<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{
    public function index(){
        $product=Product::get();
        return view('products/index',['products'=>$product]);

    }
    public function new(){
        return view('products/new');

    }
    public function store(Request $req){

        $req->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'required|mimes:jpeg,png,gif'
        ]);

        $imageName=time().'.'.$req->image->extension();
        $req->image->move(public_path('products'),$imageName);
        $product = new Product;
        $product->image=$imageName;
        $product->name=$req->name;
        $product->description=$req->description;
        $product->save();
        return back()->withSuccess('product has been Created!!!');
    }
    public function edit($id){
        $product=Product::where('id',$id)->first();
        return view('products.edit',['product'=>$product]);
    }
    public function update(Request $req,$id){
        $req->validate([
            'name'=>'required',
            'description'=>'required',
            'image'=>'nullable|mimes:jpeg,png,gif'
        ]);

        $product=Product::where('id',$id)->first();

        if(isset($req->image)){
            $imageName=time().'.'.$req->image->extension();
            $req->image->move(public_path('products'),$imageName);
            $product->image=$imageName;

        }
        $product->name=$req->name;
        $product->description=$req->description;
        $product->save();
        return back()->withSuccess('product Updated!!!');

    } 
    public function destroy($id){
        $product=Product::where('id',$id)->first();
        $product->delete();
        return back()->withSuccess('product Deleted!!!');

    }
    public function view($id){
        $product=Product::where('id',$id)->first();
        return view('products.show',['product'=> $product]);

    }
}

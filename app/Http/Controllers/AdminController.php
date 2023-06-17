<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function view_category()
    {
        $category = Category::all();
        return view('admin.category',compact('category'));
    }

    public function add_category(Request $request)
    {
        $category = new Category();
        $category->nama_category=$request->category;
        $category->save();
        return redirect('/viewcategory')->with('message','Category Berhasil Di Tambahkan');
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/viewcategory')->with('message','Category Berhasil Di Hapus');
    }

    public function tampilproduct()
    {
        $product = Product::all();
        return view('admin.product',compact('product'));
    }

    public function add_product()
    {
        $category = Category::all();
        return view('admin.addproduct',compact('category'));
    }

    public function addlogicproduct(Request $request)
    {
        $product = new Product();
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;

        $image=$request->image;
        $namagambar=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product',$namagambar);
        $product->image=$namagambar;

        $product->save();

        return redirect('/tampilproduct')->with('message','Product Success Di Tambahkan');
    }

    public function editproduct($id)
    {
        $product = Product::find($id);
        $category= Category::all();
        return view('admin.editproduct',compact('product','category'));
    }

    public function editlogicproduct(Request $request,$id)
    {
        $product = Product::find($id);

        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->quantity=$request->quantity;
        $product->category=$request->category;

        $image=$request->image;

        if($image)
        {
            $namagambar=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('product',$namagambar);
            $product->image=$namagambar;
        }

        $product->save();
        return redirect('/tampilproduct')->with('message','Product Berhasil Diubah');

    }

    public function delete_product($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('/tampilproduct')->with('message','Product Success Di Hapus');
    }

}

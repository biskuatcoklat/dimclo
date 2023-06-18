<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function index()
    {
        $product = Product::paginate(6);
        return view('home.user',compact('product'));
    }

    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype==1)
        {
            return view('admin.home');
        }
        else
        {
            $product = Product::paginate(6);
            return view('home.user',compact('product'));
        }
    }

    public function allproduct()
    {
        $product = Product::all();
        return view('home.allproduct',compact('product'));
    }

    public function product_detail($id)
    {
        $product = Product::find($id);
        return view('home.product_detail',compact('product'));
    }

    public function showcart()
    {
        if(Auth::id())
        {
            $id=Auth::user()->id;
            $cart=Cart::where('user_id','=',$id)->get();
            return view('home.showcart',compact('cart'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function addcart( Request $request,$id)
    {
        if(Auth::id())
        {
            $user = Auth::user();
            $product = Product::find($id);
            $user_id=$user->id;
            $productstok_id= Cart::where('product_id','=',$id)->where('user_id','=',$user_id)->get('id')->first();
            if($productstok_id!=null)
            {
                $cart=Cart::find($productstok_id)->first();
                $quantity=$cart->quantity;
                $cart->quantity=$quantity + $request->quantity;
                if($product->discount_price!=null)
                {
                    $cart->price=$product->discount_price * $request->quantity;
                }
                else
                {
                    $cart->price=$product->price * $request->quantity;
                }
                $cart->save();
                return redirect()->back()->with('message','Success added your cart');
            }
            else
            {
                $cart = new Cart();
                $cart->name=$user->name;
                $cart->email=$user->email;
                $cart->nohp=$user->nohp;
                $cart->alamat=$user->alamat;
                $cart->user_id=$user->id;
                $cart->product_title=$product->title;

                if($product->discount_price!=null)
                {
                    $cart->price=$product->discount_price * $request->quantity;
                }
                else
                {
                    $cart->price=$product->price * $request->quantity;
                }

                $cart->image=$product->image;
                $cart->product_id=$product->id;

                $cart->quantity=$request->quantity;

                $cart->save();
                return redirect('/showcart')->with('message','Success added your cart');

            }
        }

        else
        {
            return redirect('login');
        }
    }
}

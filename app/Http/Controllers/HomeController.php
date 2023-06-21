<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
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
            $totalproduct= Product::all()->count();
            $totalorder= Order::all()->count();
            $totaluser = User::all()->count();
            $order = Order::all();
            $keuntungan = 0;
            foreach($order as $orders)
            {
                $keuntungan = $keuntungan + $orders->price;
            }
            return view('admin.home',compact('totalproduct','totalorder','totaluser','keuntungan'));
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

    public function malestyle()
    {
        $product = Product::all()->where('category','=','Male');
        return view('home.malestyle',compact('product'));
    }

    public function femalestyle()
    {
        $product = Product::all()->where('category','=','Female');
        return view('home.femalestyle',compact('product'));
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

    public function hapuscart($id)
    {
        $cart=Cart::find($id);
        $cart->delete();
        return redirect('/showcart')->with('message','Barang Berhasil Dihapus');
    }

    public function ordercash()
    {
        $user = Auth::user();
        $userid=$user->id;

        $data=Cart::where('user_id','=',$userid)->get();
        foreach ($data as $datas)
        {
            $order = new Order();
            $order->name=$datas->name;
            $order->email=$datas->email;
            $order->nohp=$datas->nohp;
            $order->alamat=$datas->alamat;
            $order->user_id=$datas->user_id;
            $order->product_title=$datas->product_title;
            $order->price=$datas->price;
            $order->quantity=$datas->quantity;
            $order->image=$datas->image;
            $order->product_id=$datas->product_id;
            $order->payment_status='Cash';
            $order->delivery_status='Sedang Proses';

            $order->save();

            $cart_id=$datas->id;
            $cart=Cart::find($cart_id);
            $cart->delete();

        }
        return redirect()->back()->with('message','Pesanan Telah Diterima dan akan diproses, Terima kasih telah berbelanja di Dimclo');

    }

    public function showorder()
    {
        if(Auth::id())
        {
            $user=Auth::user();
            $userid=$user->id;
            $order = Order::where('user_id','=',$userid)->get();
            return view('home.order',compact('order'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function cancelorder($id)
    {
        $order = Order::find($id);
        $order->delivery_status='Pesanan Dibatalkan';
        $order->save();
        return redirect()->back();
    }

    public function deleteorder($id)
    {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back();
    }

    public function contact()
    {
        return view('home.contact');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Cart;
use App\CartProduct;
use App\Category;

class UserController extends Controller
{
    public function register()
    {
        return view('user.register');
    }
    // register post
    public function registeruser(Request $request)
    {
        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'password' => 'min:6|required_with:confirm|same:confirm'
        ], [], [
            'f_name' => 'First Name',
            'l_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password'
        ]);
        $name = $request->f_name . ' ' . $request->l_name;
        $user = new User;
        $user->name = $name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect('/');
    }

    public function login()
    {
        return view('user.login');
    }
    // login post
    public function loginuser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'min:6|required'
        ]);
        $log = User::where(['email' => $request->email, 'password' => $request->password])->first();
        if ($log) {
            $request->session()->put('id', $log->id);
            return redirect('/');
        }
        return redirect('/login')->with('message', 'This account didn\'t find');
    }

    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(12);
        return view('user.index', compact('products', 'categories'));
    }

    public function addToCart(Request $request, $id)
    {
        if (!session()->has('id')) {
            return redirect('/login');
        }
        $user_id = session()->get('id');
        $product_id = $id;

        $cart = Cart::where('user_id',$user_id)->first();
        if(!$cart){
            $cart= new Cart;
            $cart->user_id = $user_id;
            $cart->save();
        }

        $cart_id = $cart->id;

        $cartProduct = new CartProduct;
        $cartProduct->product_id = $product_id;
        $cartProduct->cart_id = $cart_id;
        $cartProduct->save();
        return redirect('/');
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('user.product', compact('product'));
    }

    public function cart()
    {
        if (session()->has('id')) {
            $cart = Cart::where('user_id', session()->get('id'))->first();
            $products = $cart->products;
            return view('user.cart', compact('products'));
        }
        return redirect('/login');
    }

    public function contact()
    {
        return view('user.contact');
    }
    // contact post

    public function about()
    {
        return view('user.about');
    }

    public function category($id)
    {
        $categories = Category::all();
        $products = Product::where('category_id', $id)->paginate(12);
        return view('user.category', compact('categories', 'products'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Products;
use App\CatProject;
use App\SubCategory; 
use App\Category;
use App\Order;
use Validator;
use Session;
class CartController extends Controller
{

	  public function index()
    {
        $catgory=Category::all();
        $subcatgory=SubCategory::all();
        $cartitems=Cart::content();
       // dd($cartitems);
        return view('Cart.index')->withcartitems($cartitems)->withcat($catgory)->withsub($subcatgory);
    }
     public function edit($id)
    {
       $product=Products::find($id);

       // $product=CatProject::find($id);
       // dd($product);
        Cart::add($product->id,$product->image, 1, $product->price,['size' =>$product->size]);
    return back();
    }
    public function update(Request $request,$id)
    {

        $message=[

        "regex"=>"Only digit is accepted"
        ];

          $validator = Validator::make($request->all(), [
            'qty' => 'required|regex:/^[1-9][0-9]*$/',
            ],$message);

        if ($validator->fails()) {
            return back()
                        ->withErrors($validator)
                        ->withInput();
        }



        
        Cart::update($id,$request->qty);
        return back();
    }
       public function destroy($id)
    {

        Cart::remove($id);
        return back();
    }
    public function checkOut(Request $request){
 $catgory=Category::all();
        $subcatgory=SubCategory::all();
        $cartitems=Cart::content();
       // dd($cartitems);
        return view('Cart.customer')->withcartitems($cartitems)->withcat($catgory)->withsub($subcatgory);

    }
    public function submit(Request $request){
$cart=Session::get('cart');
$order=new Order();
$order->cart=serialize($cart);
$order->name=$request['name'];
$order->address=$request['address'];
$order->phone=$request['phone'];
$order->email=$request['email'];
$order->country=$request['country'];
$order->save();
Session::forget('cart');
Session::flash('flash_message','wait shipment order message');
return redirect('/');





    }
}

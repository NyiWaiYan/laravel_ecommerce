<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(){
        $old_cartitems = Cart::where('user_id',Auth::id())->get();
        foreach($old_cartitems as $item){
            if(!Product::where('id',$item->prod_id)->where('qty','>=',$item->prod_qty)->exists()){
                $removeItem = Cart::where('user_id',Auth::id())->where('prod_id',$item->prod_id)->first();
                $removeItem->delete();
            }
        }
        $cartitems = Cart::where('user_id',Auth::id())->get();
        return view('frontend.checkout',compact('cartitems'));
    }

    public function placeorder(Request $request){
            $order =new Order();
            $order->fname = $request->input('fname');
            $order->lname = $request->input('lname');
            $order->email = $request->input('email');
            $order->phone = $request->input('phone');
            $order->address1 = $request->input('address1');
            $order->address2 = $request->input('address2');
            $order->city = $request->input('city');
            $order->state = $request->input('state');
            $order->country = $request->input('country');
            $order->pincode = $request->input('pincode');
            $order->tracking_no= 'furn'.rand(1111,9999);
            $order->save();

            $cartitems=Cart::where('user_id',Auth::id())->get();
            foreach($cartitems as $item){
                OrderItem::create([
                    'order_id'=>$order->id,
                    'prod_id'=> $item->prod_id,
                    'qty'=>$item->prod_qty,
                    'price'=>$item->products->selling_price,


                ]);
            }

    }
}
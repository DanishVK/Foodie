<?php

namespace App\Http\Controllers;
use App\Menu;
use App\cart;
use App\Order;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Post;

class paymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function paynow(Request $request)

    {       
        


        Session::put(['basic_settings' => request()->all()]);


        return redirect()->back();
        
        
    }

    
    public function neworder()

    {

        $oldcart=Session::has('cart') ? Session::get('cart') : null;
        $cart = new cart($oldcart);

       

        

        $order = new Order();
        $order->customer_name=Session('basic_settings.customer-name');
        $order->mobile=Session('basic_settings.phone-no');
        $order->table=Session('basic_settings.table-no');
        
        
        $order->address=Session('basic_settings.customer-address');
        
        $order->cart_items=serialize($cart);
        
        $order->status=Session('basic_settings.customer-name');
        $order->payment=Session('basic_settings.payment');
        $order->razorpay_payment_id=Session('basic_settings.customer-name');


        
        $order->save();

        
        
        
        

        Session::forget('cart');
        return redirect()->back();


    }

    
    
}




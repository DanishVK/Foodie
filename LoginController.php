<?php

namespace App\Http\Controllers;

use App\Order;
use App\Menu;
use App\cart;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Post;

class LoginController extends Controller
{
   public function index()
   {
      $orders=Order::all();
    return view('auth.home')->with('orders',$orders);
   }

   public function ShowOrders()
   {
    $orders=Order::all();
    
    $orders->transform(function($order, $key) 
    {
       
       $order->cart= unserialize($order->cart_items);
       
       
       
      return $order;

       
    });

    
    
    return view('auth.Orders')->with('orders',$orders);
   }

   
}

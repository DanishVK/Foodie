<?php

namespace App\Http\Controllers;
use App\Menu;
use App\cart;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use Post;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function load()

    {
        
        $meals=Menu::where('category','meals')->get();
        $drinks=Menu::where('category','drinks')->get();
        $breakfasts=Menu::where('category','breakfast')->get();
        $dinners=Menu::where('category','dinner')->get();
        
        return view('/menu')->with('meals',$meals)->with('drinks',$drinks)->with('breakfasts',$breakfasts)->with('dinners',$dinners);


    }

    



    public function AddtoCart(Request $request, $id)
    {
        $menuitem= Menu::find($id);
        $oldcart=Session::has('cart') ? Session::get('cart') : null;
        $cart = new cart($oldcart);
        $cart->add($menuitem,$menuitem->id);

        $request->session()->put('cart',$cart);
        return redirect()->Route('loadmenu');
        
        
    }


    public function getcart()
    {
        if (!Session::has('cart'))
        {
            return view('food-cart',['items' => null]);
        }

        
        $rz="rzp_test_LpuefxY8uI3PKq";
        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);

        if($cart->totalqty <= 0)
            $this->empty();

        return view('food-cart',['rz'=> $rz,'products' => $cart->items,'totalprice' => $cart->totalprice,'totalqty' => $cart->totalqty]);
        
    }

    public function inc(Request $request, $id)

    {

        $menuitem= Menu::find($id);
        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);
        $cart->inc($menuitem,$id);
        $request->session()->put('cart',$cart);





        return redirect()->Route('cart',['products' => $cart->items,'totalprice' => $cart->totalprice]);
    
    }

        public function dec(Request $request, $id)

    {

        $menuitem= Menu::find($id);
        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);
        $cart->dec($menuitem,$id);
        $request->session()->put('cart',$cart);

        $empcheck=$cart->totalprice;

        if($empcheck == 0)
        {
           $this->empty();
        }

        return redirect()->Route('cart',['products' => $cart->items,'totalprice' => $cart->totalprice]);
    
    }

          public function empty()
        {
            Session::flush();
            return view('food-cart');
    
        }




        public function remove(Request $request,$id)
        {
            
        $menuitem= Menu::find($id);
        $oldcart = Session::get('cart');
        $cart = new cart($oldcart);

        $cart->remove($menuitem,$id);

        $request->session()->put('cart',$cart);



        return redirect()->Route('cart',['products' => $cart->items,'totalprice' => $cart->totalprice]);
    
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Menu::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}




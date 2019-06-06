@extends('layouts.app')

@section('title', 'Order Now')

@section('content')
  

  <!-- Start Restaurant Menu -->
  <section class="cart" id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

            <div class="mu-title">
              <span class="mu-subtitle">Your Cart</span>
              <h2></h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>

            @if(Session::has('cart'))


            
           


            <ul>

               @foreach($products as $product)

              <li><h4>{{$product['item']['item_name']}} - {{$product['item']['price']}} ( {{$product['qty']}} ) => {{$product['price']}}  
              <a href="inc/{{$product['item']['id']}}"><button type="button" class="btn btn-dark">+</button></a>
              <a href="dec/{{$product['item']['id']}}"><button type="button" class="btn btn-dark">-</button></a>
              <a href="remove/{{$product['item']['id']}}">Remove</a>

            </h4> 
              </li>

               @endforeach()
            </ul>

            <div class="order-sum">
            <ul>
              <li><h3>Order Summary</h3></li>
              <hr>
              <li><h3>Items    : {{$totalqty}} </h3></li>
              <li><h3>Gstx     : 0.00₹</h3></li>
              <li><h3>SubTotal : {{$totalprice}}₹</h3></li>
            </ul>
            </div>

            <div class="control">

            <a href="empty"><button type="button" class="btn btn-danger">Empty Cart</button></a>


            <button type="button" onclick="document.getElementById('id01').style.display='block'" class="btn btn-danger">Proceed To Order</button>



            @if(Session('basic_settings.payment') == 'Online' )


            <form action="/checkout" method="POST">
              @csrf
            <!-- Note that the amount is in its subunit value = 599 -->
                <script
                    src="https://checkout.razorpay.com/v1/checkout.js"
                    data-key="{{$rz}}"
                    data-amount="{{$totalprice}}00" // The amount is shown in currency subunits. Actual amount is ₹599.
                    data-order_id="" // Pass the order ID if you are using Razorpay Orders.
                    data-currency="INR" // Optional. Same as Order currency
                    data-buttontext="Pay with Razorpay"
                    data-name="Foodie"
                    data-description="Purchase Description"
                    data-image="https://your-awesome-site.com/your_logo.jpg"
                    data-prefill.name="Gaurav Kumar"
                    data-prefill.email="test@test.com"
                    data-theme.color="#F37254"
                > </script>

          </form>


          @elseif(Session('basic_settings.payment') == 'cash' )

          <a href="neworder"><button type="button" class="btn btn-primary">Place Order</button></a>

          
      
            
              
            
            
            

         

            

            @endif



          </div>



            <div id="id01" class="modal">
  
                <form class="modal-content animate" method="POST" action="/checkout">
                  {{ csrf_field() }}

                  <div class="row">

                  <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                   
                  </div>

                  
              
                  <div class="cart-container">
                      <div class="col-md-4">
                          <div class="form-group"> 
                          <label for="name">Name:</label>                      
                                <input type="text" class="form-control" name="customer-name" placeholder="Full Name" >
                          </div>
                      </div>
                      
                      <div class="col-md-4">
                          <div class="form-group"> 
                          <label for="name">Mobile No:</label>                      
                                <input type="text" class="form-control" name="phone-no" placeholder="Mobile" >
                          </div>
                      </div>    

                      
            <div class="col-md-4">
                <div class="form-group">  
                <label for="table">Table no:</label>                     
                      <input type="text" class="form-control" name="table-no" placeholder="Table No" >
                </div>
            </div>

            
            <div class="col-md-4">
            
                <div class="form-group"> 
                <label for="usr">No.of Perons</label>
                <input type="text" class="form-control" name="no-persons" placeholder="Number of persons" >
                </div>
            </div>

            <div class="col-md-4">
            <div class="form-group">
            <label for="sel1">Type of order</label>
            <select onchange="yesnoCheck(this);" class="form-control" name="type">
                <option value="dine">DIne-In</option>
                <option value="hmd">Home Delivary</option>

                <option value="tkway">Take-Away</option>
            
            </select>
            </div> 
            </div>

            <div id="ifYes" style="display: none;">

            <div class="col-md-4">
                <div class="form-group">  
                <label for="table">Address:</label>                     
                      <input type="text" class="form-control" value="dine-in/takeaway" name="customer-address" placeholder="Address">
                </div>
            </div>
           
          </div>

    

                        <div class="col-md-4">
            <div class="form-group">
            <label for="sel1">Payment</label>
            <select onchange="payment(this);" class="form-control" name="payment">

                <option value="nt">Choose payment Method</option>
                <option value="cash">Cash</option>
                <option value="Online">Online Payment</option>
            
            </select>
            </div> 
            </div>  
              
                  
                  </div>

                </div>


                  <div class="control">

                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger">Cancel Order</button>
          
                      <button type="submit" class="btn btn-danger">Save</button>

                      
          
          
          
                     
          
          
          
          
          
                      </div>
              
                  
                   
                  
                 
                </form>
              </div>


       




            

              @endif

        
        </div>
      </div>
    </div>
 
  
    
   @if(!Session::has('cart'))
    <div class="cart-empty">
     <i class="fas fa-shopping-cart"> </i></a></li>
     <i>Empty</i>
    </div>
   @endif

    

    


  </section>
  <!-- End Restaurant Menu -->

  @endsection()
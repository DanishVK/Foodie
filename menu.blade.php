@extends('layouts.app')

@section('title', 'Order Now')

@section('content')
  

  <!-- Start Restaurant Menu -->
  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-restaurant-menu-area">
            <div class="mu-title">
              <span class="mu-subtitle">Discover</span>
              <h2>OUR MENU</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
            <div class="mu-restaurant-menu-content">
              <ul class="nav nav-tabs mu-restaurant-menu">
                <li class="active"><a href="#breakfast" data-toggle="tab">Breakfast</a></li>
                <li><a href="#meals" data-toggle="tab">Meals</a></li>
                <li><a href="#dinner" data-toggle="tab">Dinner</a></li>
                <li><a href="#drinks" data-toggle="tab">Drinks</a></li>
              </ul>

              <!-- Tab panes -->
              
              <div class="tab-content">

                <div class="tab-pane fade in active" id="breakfast">
                  <div class="mu-tab-content-area">
                  
                    @foreach($breakfasts->chunk(3) as $breakchunks)
                    @foreach($breakchunks as $break)
                    <div class="col-lg-3">
                      <div class="card alert">
                          <div class="products_1 text-center">
                              <div class="pr_img_price">
                                  <div class="product_img">
                                      <img src="{{$break->image}}" alt=""/>
                                  </div>
                                  <div class="product_price">
                                      <div class="prd_prc_box">
                                          <div class="product_price">
                                            <span class="mu-menu-price">{{$break->price}}₹</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="product_details">
                                  <div class="product_name">
                                      <h4>{{$break->item_name}}</h4>
                                  </div>
                                  <div class="product_des">
                                      <p>{{$break->description}}.</p>
                                  </div>
                                  <div class="prdt_add_to_cart">
                                      <a href="add-to-cart/{{$break->id}}">  <button type="button" class="btn btn-primary">Add to cart</button></a>
                                  </div>
                              </div>

                          </div>
        </div><!-- /# card -->
      </div><!-- /# column -->

      @endforeach
      @endforeach

                   
                 </div>
                </div>


                <div class="tab-pane fade " id="meals">
                  <div class="mu-tab-content-area">
                  
                      @foreach($meals->chunk(3) as $mealchunks)
                      @foreach($mealchunks as $meal)
                      <div class="col-lg-3">
                        <div class="card alert">
                            <div class="products_1 text-center">
                                <div class="pr_img_price">
                                    <div class="product_img">
                                        <img src="{{$meal->image}}" alt=""/>
                                    </div>
                                    <div class="product_price">
                                        <div class="prd_prc_box">
                                            <div class="product_price">
                                              <span class="mu-menu-price">{{$meal->price}}₹</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
  
                                <div class="product_details">
                                    <div class="product_name">
                                        <h4>{{$meal->item_name}}</h4>
                                    </div>
                                    <div class="product_des">
                                        <p>{{$meal->description}}.</p>
                                    </div>
                                    <div class="prdt_add_to_cart">
                                        <a href="add-to-cart/{{$meal->id}}">  <button type="button" class="btn btn-primary">Add to cart</button></a>
                                    </div>
                                </div>
  
                            </div>
          </div><!-- /# card -->
        </div><!-- /# column -->
  
        @endforeach
        @endforeach
                    
                 </div>
                </div>


                <div class="tab-pane fade " id="dinner">
                  <div class="mu-tab-content-area">

                    
                      @foreach($dinners->chunk(3) as $dinnerchunks)
                      @foreach($dinnerchunks as $dinner)
                      <div class="col-lg-3">
                        <div class="card alert">
                            <div class="products_1 text-center">
                                <div class="pr_img_price">
                                    <div class="product_img">
                                        <img src="{{$dinner->image}}" alt=""/>
                                    </div>
                                    <div class="product_price">
                                        <div class="prd_prc_box">
                                            <div class="product_price">
                                              <span class="mu-menu-price">{{$dinner->price}}₹</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
  
                                <div class="product_details">
                                    <div class="product_name">
                                        <h4>{{$dinner->item_name}}</h4>
                                    </div>
                                    <div class="product_des">
                                        <p>{{$dinner->description}}.</p>
                                    </div>
                                    <div class="prdt_add_to_cart">
                                        <a href="add-to-cart/{{$dinner->id}}">  <button type="button" class="btn btn-primary">Add to cart</button></a>
                                    </div>
                                </div>
  
                            </div>
          </div><!-- /# card -->
        </div><!-- /# column -->
  
        @endforeach
        @endforeach
                      
                 </div>
                </div>




                <div class="tab-pane fade " id="drinks">
                  <div class="mu-tab-content-area">
                     
                    
                      @foreach($drinks->chunk(3) as $drinkchunks)
                      @foreach($drinkchunks as $drink)
                      <div class="col-lg-3">
                        <div class="card alert">
                            <div class="products_1 text-center">
                                <div class="pr_img_price">
                                    <div class="product_img">
                                        <img src="{{$drink->image}}" alt=""/>
                                    </div>
                                    <div class="product_price">
                                        <div class="prd_prc_box">
                                            <div class="product_price">
                                              <span class="mu-menu-price">{{$drink->price}}₹</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
  
                                <div class="product_details">
                                    <div class="product_name">
                                        <h4>{{$drink->item_name}}</h4>
                                    </div>
                                    <div class="product_des">
                                        <p>{{$drink->description}}.</p>
                                    </div>
                                    <div class="prdt_add_to_cart">
                                        <a href="add-to-cart/{{$drink->id}}">  <button type="button" class="btn btn-primary">Add to cart</button></a>
                                    </div>
                                </div>
  
                            </div>
          </div><!-- /# card -->
        </div><!-- /# column -->
  
        @endforeach
        @endforeach
                 </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



  </section>
  <!-- End Restaurant Menu -->

  @endsection()
@extends('layouts.app')

@section('title', 'Pay Now')

@section('content')


  

 <!-- Start Contact section -->
  <section id="mu-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-contact-area">
            <div class="mu-title">
              
              <h2>Pay Now</h2>
              <i class="fa fa-spoon"></i>              
              <span class="mu-title-bar"></span>
            </div>
                          <div class="col-md-6">
                  <div class="mu-contact-right">
                    <div class="mu-contact-widget">



                      <h3>

                        {{$bf}}

                         
                      </h3>
                      <address>
                        <!--
                        <p><i class="fa fa-phone"></i></p>
                        <p><i class="fa fa-envelope-o"></i></p>
                        <p><i class="fa fa-map-marker"></i></p>
                      -->
                      </address>
                    </div>
                    <div class="mu-contact-widget">
                      <h3></h3>                      
                      <address>
                        <p><span></span></p>
                        <p><span></span> </p>
                        <p><span></span></p>
                      </address>
                    </div>
                  </div>
                </div>
            <div class="mu-contact-content">
              <div class="row">
                <div class="col-md-4">


                </div>


                
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->

  @endsection()
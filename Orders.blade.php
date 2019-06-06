@extends('layouts.auth')
@section('page-name','Order List')
@section('content')


<div class="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card alert">
                                <div class="order-list-item">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Customer Name</th>
                                            <th>Order ID</th>
                                            <th>Cart items</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Payment</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($orders as $order)

                                        <tr>
                                            <td>{{$order['customer_name']}}</td>
                                            <td>{{$order['id']}}</td>
                                            <td>
                                            @foreach($order->cart->items as $item)
                                            {{$item['item']['item_name']}}  
                                            <br>
                                            
                                            @endforeach()
                                            </td>

                                            
                                            <td>

                                            @foreach($order->cart->items as $item)
                                            {{$item['qty']}}  
                                            <br>
                                            
                                            @endforeach()
                                            </td>

                                           
                                            <td><button type="button" class="btn btn-primary btn-rounded">{{$order->cart->totalprice}}₹</button></td>
                                            <td><button type="button" class="btn btn-success btn-rounded">{{$order['payment']}}</button></td>
                                            <td><button type="button" class="btn btn-success btn-rounded">Preparing</button></td>

                                        </tr>

                                        @endforeach()

                                        </tbody>
                                    </table>
                                </div>
							</div><!-- /# card -->
						</div><!-- /# column -->
					</div><!-- /# row -->
                </div><!-- /# main content -->
 


@endsection()
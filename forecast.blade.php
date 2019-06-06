@extends('layouts.auth')
@section('page-name','Forecast')
@section('content')

<div class="main-content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card alert">
                <div class="card-header">
                    <h4>Restaurant Basic Data</h4>
                    <div class="booking-system-item">
                        <form>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="E-mail">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control calendar" placeholder="Date" id="text-calendar">
                                        <span class="ti-calendar form-control-feedback booking-system-feedback"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Time">
                                        <span class="ti-time form-control-feedback booking-system-feedback"></span>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-rounded  m-l-5">Submit</button>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
       
    <!-- /# main content -->
</div>

@endsection()
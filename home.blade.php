@extends('layouts.auth')

@section('page-name','DashBoard')

@section('content')




                <div class="main-content">
					<div class="row">
						<div class="col-lg-6">
							<div class="row">
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-primary p-48">
												<i class="ti-eye"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">	Total Order Received</div>
												<div class="stat-digit">{{count($orders)}}</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-success p-48">
												<i class="ti-bag"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Today</div>
												<div class="stat-digit">1</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-warning p-48">
												<i class="ti-user"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">New Customer</div>
												<div class="stat-digit">5</div>
											</div>
										
										</div>
									</div>
								</div>
								
								<div class="col-lg-6">
									<div class="card p-0">
										<div class="stat-widget-three">
											<div class="stat-icon bg-danger p-48">
												<i class="ti-money"></i>
											</div>
											<div class="stat-content p-30">
												<div class="stat-text">Net Earning</div>
												<div class="stat-digit">3,621</div>
											</div>
										
										</div>
									</div>
								</div>
								
								
								
								<div class="col-lg-6">
									<div class="card bg-primary">
										<div class="stat-widget-six">
											<div class="stat-icon p-15">
												<i class="ti-stats-down"></i>
											</div>
											<div class="stat-content p-t-12 p-b-12">
											   <div class="text-left dib">
												<div class="stat-heading">Daily Expense</div>
												<div class="stat-text">Total: 6765</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


                        <!-- 

                            

						<div class="col-lg-6">
							<div class="card alert">
								<div class="card-header">
									<h4>Earning Graph</h4>
									<div class="card-header-right-icon">
										<ul>
											<li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
											<li class="doc-link"><a href="#"><i class="ti-link"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="sales-chart">
									<canvas id="team-chart"></canvas>
								</div>
							</div>
						</div><-->

                    </div><!-- /# row -->
                    
					<!--
					<div class="row">
						<div class="col-lg-4">
							<div class="card alert">
								<div class="card-header">
									<h4>Order Progress</h4>
								</div>
								<div class="card-body">
									<div class="current-progress">
										<div class="progress-content">
											<div class="row">
												<div class="col-lg-4">
													<div class="progress-text">Birthday Cake</div>
												</div>
												<div class="col-lg-8">
													<div class="current-progressbar">
														<div class="progress">
															<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
																40% progress
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="progress-content">
											<div class="row">
												<div class="col-lg-4">
													<div class="progress-text">Chicken Burger</div>
												</div>
												<div class="col-lg-8">
													<div class="current-progressbar">
														<div class="progress">
															<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
																60% progress
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="progress-content">
											<div class="row">
												<div class="col-lg-4">
													<div class="progress-text">Kabab Masala</div>
												</div>
												<div class="col-lg-8">
													<div class="current-progressbar">
														<div class="progress">
															<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
																70% progress
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="progress-content">
											<div class="row">
												<div class="col-lg-4">
													<div class="progress-text">Soft Drinks</div>
												</div>
												<div class="col-lg-8">
													<div class="current-progressbar">
														<div class="progress">
															<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
																90% progress
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						
						
					</div>

					-->
					
						
					</div><!-- /# row -->
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

@endsection()
	
	
	










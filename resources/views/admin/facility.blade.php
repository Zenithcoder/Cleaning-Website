@extends('admin.layout')

@section('title')
HomePage
@endsection

@section('content')

<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header page-header-default">
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Cleaning</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<!-- Dashboard content -->
					<div class="row">
						<div class="col-lg-8">

							<!-- Marketing campaigns -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h4 class="panel-title"><b>Facility Management Bookings</b></h4>
									<div class="heading-elements">
										<span class="label bg-success heading-text">28 active</span>
										 
				                	</div>
								</div>

								<div class="table-responsive">
									<table class="table table-lg text-nowrap">
										<tbody>
											<tr>
												<td class="col-md-5">
													<div class="media-left">
														<div id="campaigns-donut"></div>
													</div>

													<div class="media-left">
														<h5 class="text-semibold no-margin">38,289 <small class="text-success text-size-base"><i class="icon-arrow-up12"></i> (+16.2%)</small></h5>
														<ul class="list-inline list-inline-condensed no-margin">
															<li>
																<span class="status-mark border-success"></span>
															</li>
															<li>
																<span class="text-muted">May 12, 12:30 am</span>
															</li>
														</ul>
													</div>
												</td>

												<td class="col-md-5">
													<div class="media-left">
														<div id="campaign-status-pie"></div>
													</div>

													<div class="media-left">
														<h5 class="text-semibold no-margin">2,458 <small class="text-danger text-size-base"><i class="icon-arrow-down12"></i> (- 4.9%)</small></h5>
														<ul class="list-inline list-inline-condensed no-margin">
															<li>
																<span class="status-mark border-danger"></span>
															</li>
															<li>
																<span class="text-muted">Jun 4, 4:00 am</span>
															</li>
														</ul>
													</div>
												</td>
 
											</tr>
										</tbody>
									</table>	
								</div>

								<div class="table-responsive">
									<table >
										<thead>
											<tr>
												<th class="col-md-2">Name</th>
												<th class="col-md-2">Telephone</th>
												<th class="col-md-2">Email</th>
												<th class="col-md-2">Service</th>
												<th class="col-md-2">Status</th>
												 
											</tr>
										</thead>
										<tbody>
											 @forelse($facilitys as $clean)
											<tr>
												<td>
													<div class="media-left media-middle">
														<!--<a href="#"><img src="assets/images/brands/facebook.png" class="img-circle img-xs" alt=""></a>-->
													</div>
													<div class="media-left">
														<div class=""><a href="#" class="text-default text-semibold">{{$clean->name}}</a></div>
														<div class="text-muted text-size-small">
															<span class="status-mark border-blue position-left"></span>
															{{$clean->created_at}}
														</div>
													</div>
												</td>
												<td><span class="text-muted">{{$clean->phone}}</span></td>
												<td><span class="text-success-600"><i class="icon-stats-growth2 position-left"></i> {{$clean->email}}</span></td>
												<td><h6 class="text-semibold">{{$clean->service}}</h6></td>
												<td><span class="label bg-blue">Pending</span></td>
												 
											</tr>
											  @empty

										        <h3>No products</h3>

										    @endforelse
																			
											
										</tbody>
									</table>
								</div>
							</div>
							 
						                	<!-- Progress counter -->
											<div class="content-group-sm svg-center position-relative" id="hours-available-progress"></div>
											<!-- /progress counter -->


											<!-- Bars -->
											<div id="hours-available-bars"></div>
											<!-- /bars -->

										</div>
									</div>
									<!-- /available hours -->

								</div>

								<div class="col-md-6">

									

								</div>
							</div>
							<!-- /progress counters -->

						</div>
					</div>
					<!-- /dashboard content -->


					<!-- Footer -->
					<div class="footer text-muted">
						&copy; <?php echo date('Y') ?>. <a href="#">Mitaneon</a> by <a href="http://intercoresolutions.com.ng" target="_blank">Intercore</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
@endsection
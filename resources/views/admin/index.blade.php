<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="QueenAdmin - Beautiful Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="{{ asset('templates/theme/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/main.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/skins/full-white.css') }}" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon144x144.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon114x114.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon72x72.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon57x57.png') }} ">
	<link rel="shortcut icon" href="{{ asset('icone.PNG')}}">
</head>

<body class="fixed-top-active dashboard fixed-left-active">
	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- TOP NAV BAR -->
		@include('templates.nav-top')

		{{-- MENU DE NAVEGAÇÃO --}}
		@include('templates.nav-left')

		<div id="col-right" class="col-right ">
			<div class="container-fluid primary-content">

				{{-- HEADLINE --}}
				<div class="headline">
					<ul class="nav nav-pills nav-pills-custom-minimal">
						<li><a href="#summary" data-cid="#headline-summary-chart">SUMMARY</a></li>
						<li><a href="#sales" data-cid="#headline-sales-chart">SALES</a></li>
						<li><a href="#visits" data-cid="#headline-bar-chart">VISITS</a></li>
						<li><a href="#social" data-cid="#headline-mini-chart">SOCIAL</a></li>
						<li><a href="#status-info" data-cid="#headline-pie-chart">STATUS</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane" id="summary">
							<div class="flot-chart" id="headline-summary-chart"></div>
						</div>
						<div class="tab-pane" id="sales">
							<div class="row">
								<div class="col-md-4">
									<div class="headline-report-text">
										<h3>Product Report</h3>
										<ul class="list-unstyled">
											<li><span>Best Seller</span> <span>: QueenAdmin</span></li>
											<li><span>Most Rated</span> <span>: KingAdmin</span></li>
											<li><span>Most Visited Theme</span> <span>: QueenAdmin</span></li>
											<li><span>Most Visited Category</span> <span>: Dashboard</span></li>
											<li><span>Most Reviewed</span> <span>: Big Thing Landing Page</span></li>
										</ul>
									</div>
								</div>
								<div class="col-md-8">
									<div class="flot-chart" id="headline-sales-chart"></div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="visits">
							<div class="flot-chart" id="headline-bar-chart"></div>
						</div>
						<div class="tab-pane" id="social">
							<div class="row">
								<div class="col-sm-6 col-md-4">
									<div class="social-stat">
										<div class="number pull-left"><span>3,700</span><span><i class="icon ion-plus-circled text-success"></i> LIKES</span></div>
										<div class="mini-stat">
											<div id="mini-stat-likes" class="inlinesparkline">Loading...</div>
											<p><i class="icon ion-arrow-graph-up-right text-success"></i> 4% higher than last week</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="social-stat">
										<div class="number pull-left"><span>1,500</span><span><i class="icon ion-plus-circled text-success"></i> SUBSCRIBERS</span></div>
										<div class="mini-stat">
											<div id="mini-stat-subscribers" class="inlinesparkline">Loading...</div>
											<p><i class="icon ion-arrow-graph-up-right text-success"></i> 17% higher than last week</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="social-stat">
										<div class="number pull-left"><span>986</span><span><i class="icon ion-minus-circled text-danger"></i> FOLLOWERS</span></div>
										<div class="mini-stat">
											<div id="mini-stat-followers" class="inlinesparkline">Loading...</div>
											<p><i class="icon ion-arrow-graph-down-right text-danger"></i> 2% lower than last week</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="social-stat">
										<div class="number pull-left"><span>38</span><span><i class="icon ion-minus-circled text-danger"></i> USERS</span></div>
										<div class="mini-stat">
											<span id="mini-stat-users" class="inlinesparkline">Loading...</span>
											<p><i class="icon ion-arrow-graph-down-right text-danger"></i> 2% lower than last week</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="social-stat">
										<div class="number pull-left"><span>4,765</span><span><i class="icon ion-plus-circled text-success"></i> CUSTOMERS</span></div>
										<div class="mini-stat">
											<span id="mini-stat-customers" class="inlinesparkline">Loading...</span>
											<p><i class="icon ion-arrow-graph-up-right text-success"></i> 8% higher than last week</p>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-4">
									<div class="social-stat">
										<div class="number pull-left"><span>175</span><span><i class="icon ion-plus-circled text-success"></i> CONTRIBUTORS</span></div>
										<div class="mini-stat">
											<span id="mini-stat-contributors" class="inlinesparkline">Loading...</span>
											<p><i class="icon ion-arrow-graph-up-right text-success"></i> 6% higher than last week</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="status-info">
							<div class="row">
								<div class="col-xs-6 col-md-3">
									<div class="status-chart">
										<div class="pie-chart" data-percent="34"><span class="percent">34%</span></div>
										<span class="chart-title">DISK SPACE USAGE</span>
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="status-chart">
										<div class="pie-chart" data-percent="12"><span class="percent">12%</span></div>
										<span class="chart-title">DATABASE USAGE</span>
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="status-chart">
										<div class="pie-chart" data-percent="75"><span class="percent">75%</span></div>
										<span class="chart-title">BANDWIDTH</span>
									</div>
								</div>
								<div class="col-xs-6 col-md-3">
									<div class="status-chart">
										<div class="pie-chart" data-percent="65"><span class="percent">65%</span></div>
										<span class="chart-title">COMPLETED TASK</span>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="bottom-stat">
						<div class="row">
							<div class="col-sm-3">
								<div class="stat-item">
									<div class="left">
										<div class="number">3200</div>
										<div class="text">SALES</div>
									</div>
									<div class="right text-success">
										<i class="icon ion-ios-arrow-thin-up"></i>
										<div class="percentage">14%</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="stat-item">
									<div class="left">
										<div class="number">12,482</div>
										<div class="text">VISITS</div>
									</div>
									<div class="right text-danger">
										<i class="icon ion-ios-arrow-thin-down"></i>
										<div class="percentage">8%</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="stat-item">
									<div class="left">
										<div class="number">105</div>
										<div class="text">LIKES</div>
									</div>
									<div class="right text-success">
										<i class="icon ion-ios-arrow-thin-up"></i>
										<div class="percentage">12%</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="stat-item">
									<div class="left">
										<div class="number">$21,473</div>
										<div class="text">REVENUE</div>
									</div>
									<div class="right text-success">
										<i class="icon ion-ios-arrow-thin-up"></i>
										<div class="percentage">22%</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END TICKETS -->
			</div>
			<div class="right-sidebar">
				<!-- CHAT -->
				<div class="widget widget-chat-contacts">
					<div class="widget-header clearfix">
						<h3 class="sr-only">CHAT</h3>
						<div class="btn-group btn-group-justified widget-header-toolbar visible-lg">
							<div class="btn-group">
								<button type="button" class="btn btn-primary btn-xs"><i class="icon ion-plus-circled"></i> Add</button>
							</div>
							<div class="btn-group">
								<button type="button" class="btn dropdown-toggle btn-xs btn-success" data-btnclass="btn-success" data-toggle="dropdown">Online <span class="caret"></span></button>
								<ul class="dropdown-menu dropdown-menu-right chat-status" role="menu">
									<li><a href="#" class="online" data-btnclass="btn-success">Online</a></li>
									<li><a href="#" class="away" data-btnclass="btn-warning">Away</a></li>
									<li><a href="#" class="busy" data-btnclass="btn-danger">Busy</a></li>
									<li><a href="#" class="offline" data-btnclass="btn-default">Offline</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="widget-content">
						<strong>Online (4)</strong>
						<ul class="list-unstyled chat-contacts">
							<li>
								<a href="#" id="theusername"><img src="{{ asset('templates/theme/assets/img/user1.png')}}" class="img-circle" alt="Antonius">Antonius</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user2.png')}}" class="img-circle" alt="Antonius">Michael Smith</a>
							</li>
							<li class="away">
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user3.png')}}" class="img-circle" alt="Antonius">Stella Ray</a>
							</li>
							<li class="busy">
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user4.png')}}" class="img-circle" alt="Antonius">Jane Doe</a>
							</li>
						</ul>
						<strong>Offline (6)</strong>
						<ul class="list-unstyled chat-contacts contacts-offline">
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user5.png')}}" class="img-circle" alt="John Simmons">John Simmons</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user6.png')}}" class="img-circle" alt="Jack Bay">Jack Bay</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user7.png')}}" class="img-circle" alt="Daraiana">Daraiana</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user8.png')}}" class="img-circle" alt="Alessio Ferrara">Alessio Ferrara</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user9.png')}}" class="img-circle" alt="Sorana">Sorana</a>
							</li>
							<li>
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user10.pn')}}" class="img-circle" alt="Regan Morton">Regan Morton</a>
							</li>
						</ul>
					</div>
				</div>
				<!-- END CHAT -->
			</div>
		</div>
		<!-- END COLUMN RIGHT -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src=" {{ asset('templates/theme/assets/js/jquery/jquery-2.1.0.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/bootstrap/bootstrap.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/queen-common.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.resize.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.time.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.orderBars.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/dropzone/dropzone.min.js') }}"></script>
	{{-- <script src=" {{ asset('templates/theme/assets/js/plugins/datatable/jquery.dataTables.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/datatable/dataTables.bootstrap.js') }}"></script> --}}
	<script src=" {{ asset('templates/theme/assets/js/plugins/google-map/google-map.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/plugins/stat/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/queen-charts.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/queen-table.js') }}"></script>
	<script src=" {{ asset('templates/theme/assets/js/queen-maps.js') }}"></script>
	<script src="{{ asset('dropdown.js') }}"></script>
</body>

</html>

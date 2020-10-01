<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard | Editar contas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="QueenAdmin - Beautiful Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	<link href="{{ asset('templates/theme/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/ionicons.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/main.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('templates/theme/assets/css/skins/full-white.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,300,400,700' rel='stylesheet' type='text/css'>
	<!-- Fav and touch icons -->
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="144x144" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon144x144.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="114x114" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon114x114.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="72x72" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon72x72.png') }} ">
	<link rel="apple-touch-icon-precomposed" type="image/png" sizes="57x57" href="{{ asset('templates/theme/assets/ico/queenadmin-favicon57x57.png') }} ">
	<link rel="shortcut icon" href="{{ asset('templates/theme/assets/ico/favicon.ico')}}">
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

				{{-- TABLE --}}
				<div class="widget" id="widget">
					<div class="widget-header clearfix">
						<h3><i class="fas fa-file-invoice-dollar"></i> <span>Editar conta</span></h3>
						{{-- <div class="btn-group widget-header-toolbar">
							<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
							<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
						</div> --}}
					</div>
					<div class="widget-content table-responsive">
                        <form action="{{ url('/admin/contas/editar/salvar') }}/{{ $id }}" method="POST" id="form" enctype="multipart/form-data">
                            @csrf

                            <div class="group-inputs">
                                <label for="titulo_conta">Nome da conta</label>
                                <input type="text" name="titulo_conta" class="titulo_conta" id="titulo_conta" value="{{$titulo_conta}}">
                            </div>
                            
                            <div class="group-inputs">
                                <label for="parcelas">Quantidade de parcelas</label>
                                <input type="number" name="parcelas" class="parcelas" id="parcelas" value="{{$parcelas}}">
                            </div>

                            <div class="group-inputs">
							<label for="status">Status da conta</label>
                                <select class="status" id="status" name="status" >
                                    <option value="1" {{ ($status == "1") ? "selected" : "" }}>Ativa</option>
                                    <option value="0" {{ ($status == "0") ? "selected" : "" }}>Inativa</option>
                                </select>
                            </div>

                            <div class="group-inputs">
                                <label for="vencimento">Vencimento</label>
                                <input type="date" name="vencimento" class="vencimento" id="vencimento" value="{{$vencimento}}">
                            </div>
                            
                            <div class="group-inputs">
                                <label for="email">Descrição</label>
                                <textarea name="descricao" id="descricao" class="form-control" value="{{$descricao}}">{{$descricao}}</textarea>
                            </div>

                            <div class="group-inputs">
                                <label for="valor">Valor</label>
                                <input type="number" name="valor" class="valor" id="valor" step=".01" value="{{$valor}}">
							</div>
							
							<div class="group-inputs">
								<button type="submit">Atualizar</button>
							</div>

                        </form>
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
	<script src="{{ asset('templates/theme/assets/js/jquery/jquery-2.1.0.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/bootstrap/bootstrap.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/queen-common.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/jquery-ui/jquery-ui-1.10.4.custom.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.resize.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.time.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/stat/flot/jquery.flot.orderBars.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/stat/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/dropzone/dropzone.min.js') }}"></script>
	{{-- <script src="{{ asset('templates/theme/assets/js/plugins/datatable/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/datatable/dataTables.bootstrap.js') }}"></script> --}}
	<script src="{{ asset('templates/theme/assets/js/plugins/google-map/google-map.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/stat/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/queen-charts.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/queen-table.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/queen-maps.js') }}"></script>
	<script src="{{ asset('dropdown.js') }}"></script>
	<script src="{{ asset('jquery-validation/dist/jquery.validate.min.js')}}"></script>
	<script src="{{ asset('jquery-validation/dist/jquery.validate.js')}}"></script>
	<script>

	$('form#form').validate({
			rules: {
				titulo_conta: {
					required: true
				},
				vencimento: {
					required: true
				},
				parcelas: {
					required: true
				}
				descricao: {
					required: true
				}
				valor: {
					required: true
				}
				status: {
					required: true
				}
			}
		})

	</script>
</body>

</html>

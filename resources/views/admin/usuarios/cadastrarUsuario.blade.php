<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard | Usuários</title>
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
				<div class="col-md-6" style="padding-right:0;padding-left:0;">
				<div class="widget" id="widget">
					<div class="widget-header clearfix">
						<h3><i class="fas fa-users"></i> <span>Cadastrar usuários</span></h3>
						{{-- <div class="btn-group widget-header-toolbar">
							<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
							<a href="#" title="Remove" class="btn btn-link btn-remove"><i class="icon ion-ios-close-empty"></i></a>
						</div> --}}
					</div>
					<div class="widget-content table-responsive">
                        {{-- <form action="{{ route('usuario.cadastrado') }}" method="POST" id="form" enctype="multipart/form-data">
                            @csrf

                            <div class="group-inputs">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="name" id="name" placeholder="Digite seu nome">
                            </div>
                            <div class="group-inputs">
                                <label for="email">E-Mail</label>
                                <input type="email" name="email" class="email" id="email" placeholder="Digite seu email">
                            </div>
                            <div class="group-inputs">
                                <label for="phone">Telefone</label>
                                <input type="text" name="phone" class="phone" id="phone" placeholder="Digite seu telefone">
                            </div>
                            <div class="group-inputs">
                                <label for="password">Senha</label>
                                <input type="text" name="password" class="password" id="password" placeholder="Digite sua senha">
							</div>
							
							<div class="group-inputs">
								<button type="submit">Cadastrar</button>
							</div>

						</form> --}}
						<form class="form-horizontal" id="form" role="form" action="{{ route('usuario.cadastrado') }}" method="POST" enctype="multipart/form-data" >
							@csrf
							<div class="form-group">
								<label for="name" class="control-label sr-only">Username</label>
								<div class="col-sm-12">
									<div class="input-group">
										<input type="text" class="form-control" id="name" name="name" placeholder="Username">
										<span class="input-group-addon"><i class="icon ion-person"></i></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="email" class="control-label sr-only">Email</label>
								<div class="col-sm-12">
									<div class="input-group">
										<input type="email" class="form-control" id="email" name="email" placeholder="Email">
										<span class="input-group-addon"><i class="icon ion-email"></i></span>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="phone" class="control-label sr-only">Telefone</label>
								<div class="col-sm-12">
									<div class="input-group">
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
										<span class="input-group-addon"><i class="fas fa-phone"></i></span>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="control-label sr-only">Password</label>
								<div class="col-sm-12">
									<div class="input-group">
										<input type="password" class="form-control" id="password" name="password" placeholder="Password">
										<span class="input-group-addon"><i class="icon ion-locked"></i></span>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<button type="submit" class="btn btn-success"><i class="icon ion-checkmark-circled"></i>Cadastrar conta</button>
								</div>
							</div>
						</form>
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
	{{-- <script src="{{ asset('templates/theme/assets/js/jquery/jquery-2.1.0.min.js') }}"></script>
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
	<script src="{{ asset('templates/theme/assets/js/plugins/dropzone/dropzone.min.js') }}"></script> --}}
	{{-- <script src="{{ asset('templates/theme/assets/js/plugins/datatable/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/datatable/dataTables.bootstrap.js') }}"></script> --}}
	{{-- <script src="{{ asset('templates/theme/assets/js/plugins/google-map/google-map.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/plugins/stat/jquery-easypiechart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/queen-charts.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/queen-table.js') }}"></script>
	<script src="{{ asset('templates/theme/assets/js/queen-maps.js') }}"></script>
	<script src="{{ asset('dropdown.js') }}"></script> --}}
	<script src="{{ asset('jquery.js') }}"></script>
	<script src="{{ asset('jquery-validation/dist/jquery.validate.min.js')}}"></script>
	<script src="{{ asset('jquery-validation/dist/jquery.validate.js')}}"></script>
	<script src="{{asset('mask/dist/jquery.mask.js')}}"></script>
	<script>

	$('form#form').validate({
		rules: {
			name: {
				required: true
			},
			email: {
				required: true
			},
			password: {
				required: true
			}
			phone: {
				required: true
			}
		}
	})

	</script>

	<script>
	
	
    (function (){

    $("#form").validate({
            rules: {
              name: {
                required: true
              },
              email: {
                required: true
              },
              telefone: {
                required: true
              },
              servico: {
                required: true
              },
              mensagem: {
                required: true
              },
            },
            messages:{

              name: {
                required: "Este campo é obrigatório."
              },
              email: {
                required: "Este campo é obrigatório."
              },
              telefone: {
                required: "Este campo é obrigatório."
              },
              servico: {
                required: "Este campo é obrigatório."
              },
              mensagem: {
                required: "Este campo é obrigatório."
              },
            },
        
        }) 

      }());

      function onlynumber(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode( key );
    //var regex = /^[0-9.,]+$/;
    var regex = /^[0-9.]+$/;
    if( !regex.test(key) ) {
        theEvent.returnValue = false;
        if(theEvent.preventDefault) theEvent.preventDefault();
    }
    }

    var options = {
        onKeyPress: function (cpf, ev, el, op) {
            var masks = ['(00)00000-0000'],
                mask = (cpf.length > 15) ? masks[1] : masks[0];
            el.mask(mask, op);
        }
    }

    $('#telefone').mask('000.000.000-000', options);

    function limpar() {
       
       document.getElementById('name').value="";
       document.getElementById('email').value="";
       document.getElementById('telefone').value="";
       document.getElementById('servico').value="";
       document.getElementById('mensagem').value="";
       
   }
	
	</script>
</body>

</html>

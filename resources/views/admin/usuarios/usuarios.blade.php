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
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
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
	<link rel="shortcut icon" href="{{ asset('templates/theme/assets/ico/favicon.ico')}}">
</head>

<body class="fixed-top-active dashboard fixed-left-active">
	<body>
        <!-- início do preloader -->
        <div id="preloader">
            <div class="inner">
               <!-- HTML DA ANIMAÇÃO MUITO LOUCA DO SEU PRELOADER! -->
               <img src="{{ asset('loading.gif') }}">
            </div>
        </div>
        <!-- fim do preloader --> 
    </body>
	<!-- WRAPPER -->
	<div class="wrapper main-nav-minified">
		<!-- TOP NAV BAR -->
		@include('templates.nav-top')

		{{-- MENU DE NAVEGAÇÃO --}}
		@include('templates.nav-left')

		<div id="col-right" class="col-right ">
			@include('admin.usuarios.modal')
			<div class="container-fluid primary-content">

				{{-- TABLE --}}
				<div class="widget" id="widget">
					<div class="widget-header">
						<h3><i class="fas fa-users-cog" style="margin-right: 0.5rem;"></i> <span>Usuários do sistema</span></h3>
						<div class="btn-group widget-header-toolbar">

							<div class="btn-group widget-header-toolbar">
								<button type="submit" class="btn btn-primary btn-cadastrar" data-toggle="modal" data-idc="{{ url('/usuarios/viewCadastrar') }}"><i class="fas fa-plus" style="padding-right:0.5rem;"></i>Novo usuário</button>
							</div>

						</div>
					</div>

					@if (session('mensagem'))
						<div class="sacefull">
							
							<div class="alert alert-success">
								<span>
									<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
									{{ session('mensagem') }}
								</span>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
							</div>
						</div>
					@elseif(session('invalido'))
						<div class="alert alert-danger">
							<span>
								<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
								{{ session('invalido') }}
							</span>
							<div class="alert-close">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true"><i class="fas fa-times"></i></span>
								</button>
							</div>
						</div>
					@endif

					<div class="widget-content table-responsive">
						<table id="ticket-table" class="table table-sorting">
							<thead>
								<tr>
									<th>Id</th>
									<th>Nome</th>
									<th>Telefone</th>
									<th>Email</th>
									<th>Criado em</th>
									<th>Editar / Remover</th>
								</tr>
							</thead>
							<tbody>
                                @for ($i = 0; $i < sizeof($users); $i++)
								<tr>
                                    @isset($users[$i]['id'])
                                        <td><a href="#">#{{ $users[$i]['id'] }}</a></td>
                                    @endisset

                                    @isset($users[$i]['name'])
                                        <td>{{ $users[$i]['name'] }}</td>
									@endisset
									
									@isset($users[$i]['phone'])
                                        <td>{{ $users[$i]['phone'] }}</td>
									@endisset
									
                                    @isset($users[$i]['email'])
                                        <td>{{ $users[$i]['email'] }}</td>
									@endisset
									
                                    @isset($users[$i]['created_at'])
                                        <td>{{ $users[$i]['created_at'] }}</td>
									@endisset
									
									<td>
                                      <div class="botoes">
										<button type="button" class="botao-editar btn-editar" data-id="{{ url('admin/usuarios/editar') }}/{{ $users[$i]['id'] }}" style="margin-left: 30px;">
											<i class="fas fa-edit"></i>
										</button>
										<button type="button" class="botao-remover" data-id="{{ url('admin/usuarios/confirm') }}/{{ $users[$i]['id'] }}"><i class="far fa-trash-alt"></i></button> 
                                      </div>
									</td>

								</tr>
							@endfor
							</tbody>
						</table>
					</div>
				</div>
				
				<!-- END TICKETS -->
			</div>
			
		</div>
		<!-- END COLUMN RIGHT -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	@include('layouts.scripts')
	<script>
	
		$(document).ready(function(e) {
			$('#preloader .inner').fadeOut();
			$('#preloader').delay(350).fadeOut('slow'); 
			$('body').delay(350).css({'overflow': 'visible'});
		});

		// EDITAR CLIENTE

		$(document).on('click','.btn-editar', function(e){
			e.preventDefault();
			
			var bodyFormName = $('.modal-body');
			var modalName = $('.modal');
			var id = $(this).data('id')

			console.log(bodyFormName)
			console.log(modalName)
			console.log(id)
			
			$(modalName).modal('show'); 

			$.ajax({
				url: id,
				type: 'get',
				success: function(response){       
					$(bodyFormName).html(response);
				}
			});
			return false;
		});

		// CADASTRAR USUARIO

		$(document).on('click','.btn-cadastrar', function(e){
			e.preventDefault();

			var bodyFormName = $('.modal-body-cadastrar');
			var modalName = $('.modal-cadastrar');
			var idc = $(this).data('idc')

			console.log(bodyFormName)
			console.log(modalName)
			console.log(idc)

			$(modalName).modal('show'); 

			$.ajax({
				url: '{{ url('admin/usuarios/viewCadastrar') }}',
				type: 'get',
				success: function(response){
					$(bodyFormName).html(response);
				}
			});
			return false;
		});

	// CONFIRMAR REMOVER

	$(document).on('click','.botao-remover', function(e){
        e.preventDefault();
        
        var bodyFormName = $('.modal-body-confirm');
		var modalName = $('.modal-confirm');
		var id = $(this).data('id')

		console.log(bodyFormName)
		console.log(modalName)
		console.log(id)
        
		$(modalName).modal('show'); 

        $.ajax({
           url: id,
           type: 'get',
           success: function(response){       
               $(bodyFormName).html(response);
           }
        });
        return false;
	});

	// REMOVER

	$(document).on('click','.btn-remover', function(e){
        e.preventDefault();
        
        var bodyFormName = $('.modal-body-remover');
		var modalName = $('.modal-remover');
		var modalNamee = $('.modal-confirm');
		var id = $(this).data('id')

		console.log(bodyFormName)
		console.log(modalName)
		console.log(id)
        
		$(modalName).modal('show'); 

        $.ajax({
           url: id,
           type: 'get',
           success: function(response){
			$(modalNamee).modal('hide'); 
			$(bodyFormName).html(response);
			// location.reload();
           }
        });
		location.reload();
        return true;
	});

	</script>
</body>

</html>
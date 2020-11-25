<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard | Contatos</title>
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
			@include('admin.contatos.modal')
			<div class="container-fluid primary-content">

				{{-- TABLE --}}
				<div class="widget" id="widget">
					<div class="widget-header">
						<h3><i class="fas fa-address-card"></i> <span>Contatos cadastrados</span></h3>
						<div class="btn-group widget-header-toolbar">
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
									<th>Assunto</th>
									<th>Criado em</th>
									<th>Ver mais...</th>
								</tr>
							</thead>
							<tbody>
                                @for ($i = 0; $i < sizeof($contatos); $i++)
								<tr>
                                    @isset($contatos[$i]['id'])
                                        <td><a href="#">#{{ $contatos[$i]['id'] }}</a></td>
                                    @endisset

                                    @isset($contatos[$i]['name'])
                                        <td>{{ $contatos[$i]['name'] }}</td>
									@endisset
									
                                    @isset($contatos[$i]['assunto'])
                                        <td>{{ $contatos[$i]['assunto'] }}</td>
									@endisset
									
                                    @isset($contatos[$i]['created_at'])
                                        <td>{{ $contatos[$i]['created_at'] }}</td>
									@endisset
									
									<td>
                                      <div class="botoes">
											<button type="button" class="botao-editar btn-editar" style="margin-right: 10px;" data-id="{{ url('admin/contatos/vermais') }}/{{ $contatos[$i]['id'] }}"><span class="entypo-tools"><i class="fas fa-ellipsis-h"></i></span></button>
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
	<!-- Javascript -->
	@include('layouts.scripts')
	<script>

		$(document).ready( function () {
			$('#ticket-table').DataTable({
				"info": false,
				"lengthChange": false,
			});
		});

		$(document).ready(function(e) {
			$('#preloader .inner').fadeOut();
			$('#preloader').delay(350).fadeOut('slow'); 
			$('body').delay(350).css({'overflow': 'visible'});
		});

		// EDITAR USUARIO

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

	</script>
</body>

</html>
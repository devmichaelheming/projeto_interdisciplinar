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
	<!-- WRAPPER -->
	<div class="wrapper main-nav-minified">

		<!-- TOP NAV BAR -->
		@include('templates.nav-top')

		{{-- MENU DE NAVEGAÇÃO --}}
		@include('templates.nav-left')

		<div id="col-right" class="col-right ">

			<div class="modal-cadastrar fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-file-invoice-dollar" style="padding-right:0.5rem;"></i>Lançar despesa</h5>
							</button>
						</div>
						<div class="modal-body-cadastrar">
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid primary-content">

				<div class="mes-geral">
					<button type="button" class="btn-mes" data-toggle="modal" data-target="#mes">
						{{ $mes }}
					</button>
				</div>

				<div class="title">
					<span>
						Despesas
					</span>
				</div>

				<div class="infos">

					<div class="info-text">
						<div class="quick-info">
							<i class="fas fa-calculator"></i>
							<div>Total de despesas
								<span>
									R$
									@if (isset($soma))
										{{ $soma->valor }}
									@else
										00,00
									@endif	
								</span>
							</div>
						</div>
					</div>

					<div class="info-text">
						<div class="quick-info">
							<i class="ion-cash"></i>
							<div>Em aberto <span>R$
							@if (isset($aberto))
								{{ $aberto->valor }}
							@endif	
							</span></div>
						</div>
					</div>

					<div class="info-text">
						<div class="quick-info">
							<i class="far fa-check-circle"></i>
							<div>Pago
								<span>R$
									@if ($pago->valor != null)
										{{ $pago->valor }}
									@else
										00,00
									@endif	
								</span>
							</div>
						</div>
					</div>

				</div>

				<div class="modal fade" id="mes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				
				{{-- TABLE --}}
				<div class="widget" id="widget">
					<div class="widget-header clearfix">
						<div class="btn-group widget-header-toolbar">
							<button type="button" class="btn-plus btn-cadastrar" data-toggle="modal" data-idc="{{ url('/contas/viewCadastrar') }}" style="margin-bottom: 1rem;"><i class="fas fa-plus"></i></button>
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
						<table id="table" class="table table-sorting">
							<thead>
								<tr>
									<th></th>
									<th>Descrição</th>
									<th>Competencia</th>
									<th>Vencimento</th>
									<th>Status</th>
									<th>Valor</th>
									<th>Editar/Remover</th>
								</tr>
							</thead>
							<tbody>
                                @for ($i = 0; $i < sizeof($contas); $i++)
									<tr>

										@if ($contas[$i]['status'] == 'Aberto')
											<td><div style="width:100%;height:100%;display:flex;justify-content:center;"><span style="border-radius:100%;background:red;width:1rem;height:1rem;"></span></div></td>
										@else
											<td><div style="width:100%;height:100%;display:flex;justify-content:center;"><span style="border-radius:100%;background:green;width:1rem;height:1rem;"></span></div></td>
										@endif

										@isset($contas[$i]['descricao'])
											<td>{{ $contas[$i]['descricao'] }}</td>
										@endisset
										
										@isset($contas[$i]['competencia'])
											<td>{{ $contas[$i]['competencia'] }}</td>
										@endisset
										
										@isset($contas[$i]['vencimento'])
											<td>{{ $contas[$i]['vencimento'] }}</td>
										@endisset

										@isset($contas[$i]['status'])
											<td>{{ $contas[$i]['status'] }}</td>
										@endisset
										
										@isset($contas[$i]['valor'])
											<td>{{ $contas[$i]['valor'] }}</td>
										@endisset
										
										<td>
											<div class="botoes">
												<button type="button" class="botao-editar" style="margin-right: 10px;" onclick="javascript:location.href='contas/editar/{{ $contas[$i]['id'] }}'"><span class="entypo-tools"><i class="fas fa-edit"></i></span></button>
												<button type="button" class="botao-remover" onclick="javascript:location.href='contas/remover/{{ $contas[$i]['id'] }}'"><i class="far fa-trash-alt"></i></button>  
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
								<a href="#"><img src="{{ asset('templates/theme/assets/img/user10.png')}}" class="img-circle" alt="Regan Morton">Regan Morton</a>
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
	@include('layouts.scripts')
	<script>
	
	soma = @JSON($soma->valor)

	aberto = @JSON($aberto->valor)

	pago = @JSON($pago->valor)

	</script>

	<script>

		$(document).ready(function() {
		$('#table').DataTable( {
			initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);
	
							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						} );
	
						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			} );
		} );

		

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

	// CADASTRAR

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
			url: '{{ url('admin/contas/viewCadastrar') }}',
			type: 'get',
			success: function(response){
				console.log(response)        
				$(bodyFormName).html(response);
			}
		});
		return false;
	});
	
	</script>
</body>

</html>

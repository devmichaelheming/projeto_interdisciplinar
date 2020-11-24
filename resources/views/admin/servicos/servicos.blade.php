<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard | Serviços</title>
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
				<img src="{{ asset('loading.gif') }}" width="100%">
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
			@include('admin.servicos.modal')
			<div class="container-fluid primary-content">
				
				<div class="porcentagens">
					<div class="col-cards">
						<div class="quick-info boxed bg-green">
							<div class="quick-info-detail">
								<p>{{ $ativo }} </p>
								<span>SERVIÇOS FINALIZADOS</span>
							</div>
							<i class="far fa-check-circle"></i>
						</div>
					</div>
					<div class="col-cards">
						<div class="quick-info boxed bg-red">
							<div class="quick-info-detail">
								<p>{{ $inativo }} </p>
								<span>SERVIÇOS EM ANDAMENTO</span>
							</div>
							<i class="fas fa-spinner"></i>
						</div>
					</div>
					<div class="col-cards">
						<div class="quick-info boxed bg-blue2">
							<div class="quick-info-detail">
								<p>{{ $extornados }} </p>
								<span>SERVIÇOS EXTORNADOS</span>
							</div>
							<i class="fas fa-hand-holding-usd"></i>
						</div>
					</div>
					<div class="col-cards">
						<div class="quick-info boxed bg-gold">
							<div class="quick-info-detail">
								<p>${{ $total }} </p>
								<span>PREVISÃO DE LUCRO</span>
							</div>
							<i class="far fa-money-bill-alt"></i>
						</div>
					</div>
					<div class="col-cards">
						<div class="quick-info boxed bg-blue">
							<div class="quick-info-detail">
								<p>{{ count($servicos) }} </p>
								<span>SERVIÇOS</span>
							</div>
							<i class="fas fa-briefcase"></i>
						</div>
					</div>
				</div>
				
				{{-- TABLE --}}
				<div class="container-servicos">

				<div class="container-table">
					<div class="widget" id="widget">
						<div class="widget-header">
							<h3><i class="fas fa-toolbox" style="margin-right:0.5rem;"></i><span>Serviços</span></h3>

							<div class="btn-group widget-header-toolbar">
								<button type="submit" class="btn btn-primary btn-cadastrar" data-toggle="modal" data-idc="{{ url('/servicos/viewCadastrar') }}"><i class="fas fa-plus" style="padding-right:0.5rem;"></i>Novo serviço</button>
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
										<th>Cliente</th>
										<th>Modelo do veiculo</th>
										<th>Status do serviço</th>
										<th>Descrição</th>
										<th>Valor do serviço</th>
										<th>Data</th>
										<th>Extornar / Editar</th>
									</tr>
								</thead>
								<tbody>
									@for ($i = 0; $i < sizeof($servicos); $i++)
										<tr>
											@if ($servicos[$i]['status'] == 'Extornado')
												<td><div style="width:100%;height:100%;display:flex;justify-content:center;"><span style="border-radius:100%;background:blue;width:1rem;height:1rem;"></span></div></td>
											@else
											
												@if ($servicos[$i]['status'] == 'Andamento')
													<td><div style="width:100%;height:100%;display:flex;justify-content:center;"><span style="border-radius:100%;background:red;width:1rem;height:1rem;"></span></div></td>
												@else
													<td><div style="width:100%;height:100%;display:flex;justify-content:center;"><span style="border-radius:100%;background:green;width:1rem;height:1rem;"></span></div></td>
												@endif

											@endif

											@isset($servicos[$i]['id_cliente'])
												<td>{{ $servicos[$i]['id_cliente'] }}</td>
											@endisset

											@isset($servicos[$i]['modelo'])
												<td>{{ $servicos[$i]['modelo'] }}</td>
											@endisset
											
											@isset($servicos[$i]['status'])
												<td>{{ $servicos[$i]['status'] }}</td>
											@endisset

											<td><div class="botoes"><button type="button" class="botao-editar btn-descricao" style="margin-left: 1rem;font-size:1.5rem;" data-id="{{ url('admin/servicos/descricao') }}/{{ $servicos[$i]['id'] }}"><span class="entypo-tools"><i class="far fa-file-alt"></i></span></button></div></td>
											
											@isset($servicos[$i]['valor'])
												<td>R$ {{ $servicos[$i]['valor'] }}</td>
											@endisset
											
											@isset($servicos[$i]['created_at'])
												<td>{{ $servicos[$i]['created_at'] }}</td>
											@endisset
											
											<td>
												<div class="botoes">
													<a href="{{ url('admin/servicos/extornar') }}/{{ $servicos[$i]['id'] }}" class="btn btn-sm btn-clean btn-icon btn-icon-md delitem" data-skin="brand" data-toggle="kt-tooltip" data-placement="top" title="Deletar">
														<i class="fas fa-hand-holding-usd" style="font-size: 20px;"></i>
													</a>
													<button type="button" class="botao-editar btn-editar" data-id="{{ url('admin/servicos/editar') }}/{{ $servicos[$i]['id'] }}" style="margin-left: 30px;">
														<i class="fas fa-edit"></i>
													</button>
												</div>
											</td>

										</tr>
									
									@endfor

								</tbody>
                            
							</table>
						</div>
					</div>
				</div>

				<div class="container-relatorio">
					<div class="widget">
						<div class="widget-header">
							<h3><i class="fas fa-file-pdf"></i> <span>RELATÓRIO</span></h3>
							<div class="btn-group widget-header-toolbar">
								{{-- <button type="button" class="btn btn-link btn-help" data-content="Gerar o relatório de clientes registrados e seus respectivos serviços"><i class="icon ion-ios-help"></i></button> --}}
								<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
							</div>
						</div>

						@if (session('mensagem_relatorio'))
							<div class="sacefull">
								<div class="alert alert-success">
									<span>
										<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
										{{ session('mensagem_relatorio') }}
									</span>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true"><i class="fas fa-times"></i></span>
										</button>
									</div>
								</div>
							</div>
						@elseif(session('invalido_relatorio'))
							<div class="alert alert-danger">
								<span>
									<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
									{{ session('invalido_relatorio') }}
								</span>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
							</div>
						@endif

						<div class="widget-content">
							<div class="servicos-relatorio">
								<form action="{{ route('relatorios.servicos.diario.pdf') }}" method="POST">
								@csrf
									<div class="relatorio-clientes">

										<div class="form-group">
											<label for="diario" class="control-label">Relatório diario</label>
											<div class="input-group">
												<input type="date" class="form-control" id="diario" name="diario" value="{{ $diario_atual }}">
											</div>
										</div>

										<div class="botao">
											<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Gerar relatório diario</button>
										</div>

									</div>

								</form>
								<form action="{{ route('relatorios.servicos.mensal.pdf') }}" method="POST">
								@csrf
								<div class="relatorio-clientes">

									<div class="form-group">
										<label for="mensal" class="control-label">Relatório mensal</label>
										<div class="input-group">
											<input type="month" class="form-control" id="mensal" name="mensal" value="{{ $mensal_atual }}">
										</div>
									</div>

									<div class="botao">
										<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Gerar relatório mensal</button>
									</div>

								</div>

								</form>
							</div>
						</div>
					</div>
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

		$(document).ready(function(e) {
			$('#preloader .inner').fadeOut();
			$('#preloader').delay(350).fadeOut('slow');
			$('body').delay(350).css({'overflow': 'visible'});
		});

		$(document).ready(function() {
		$('#table').DataTable( {
			initComplete: function () {
				this.api().columns().every( function () {
					var column = this;
					var select = $('<select><option value=""></option></select>')
						.appendTo( $(column.footer()).empty())
						.on('change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
							);
	
							column
								.search( val ? '^'+val+'$' : '', true, false )
								.draw();
						});
	
						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						});
					});
				},
				"info": false,
				"lengthChange": false
			});
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

		// descricao

		$(document).on('click','.btn-descricao', function(e){
			e.preventDefault();
			
			var bodyFormName = $('.modal-body-descricao');
			var modalName = $('.modal-descricao');
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

		// CADASTRAR CLIENTE

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
				url: '{{ url('admin/servicos/viewCadastrar') }}',
				type: 'get',
				success: function(response){
					console.log(response)
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

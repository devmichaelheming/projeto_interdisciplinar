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
			@include('admin.site.banner.modal')
			@include('admin.site.clientes.modal')
			<div class="container-fluid primary-content">

                {{-- TABLE --}}
                <div class="info-sites">

					<div class="widget">
                        <div class="widget-header">
                            <h3><i class="far fa-newspaper"></i> <span>INFORMAÇÕES DE CONTATO</span></h3>
                            <div class="btn-group widget-header-toolbar">
                                <a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
                            </div>
						</div>
						
						@if (session('mensagem'))
							<div class="sacefull" style="margin-bottom: 1rem;">
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
							<div class="alert alert-danger" style="margin-bottom: 1rem;">
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

                        <div class="widget-content">
                            <form class="form-horizontal" id="form" role="form" action="{{ route('banner.cadastrado') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
								@csrf
					
								<div class="groups-two">

									<div class="form-group-tipo2">
										<span for="telefone" class="control-label">Telefone</span>
										<input type="text" class="inputs" id="telefone" name="telefone" value="{{ $contatos_info->telefone }}">
									</div>

									<div class="form-group-tipo2">
										<span for="endereco" class="control-label">Endereço</span>
										<input type="text" class="inputs" id="endereco" name="endereco" value="{{ $contatos_info->endereco }}">
									</div>

								</div>

								<div class="groups-two">

									<div class="form-group-tipo2">
										<span for="numero_whatsapp" class="control-label">Número do whatsapp</span>
										<input type="text" class="inputs" id="numero_whatsapp" name="numero_whatsapp" value="{{ $contatos_info->numero_whatsapp }}">
									</div>

									<div class="form-group-tipo2">
										<span for="instagram" class="control-label">Instagram</span>
										<input type="text" class="inputs" id="instagram" name="instagram" value="{{ $contatos_info->instagram }}">
									</div>

								</div>

								<div class="groups-two" style="margin-bottom: 0.5rem;">

									<div class="form-group-tipo2">
										<span for="texto_whatsapp" class="control-label">Texto de entrada</span>
										<input type="text" class="inputs" id="texto_whatsapp" name="texto_whatsapp" value="{{ $contatos_info->texto_whatsapp }}">
									</div>

									<div class="form-group-tipo2">
										<span for="facebook" class="control-label">Facebook</span>
										<input type="text" class="inputs" id="facebook" name="facebook" value="{{ $contatos_info->facebook }}">
									</div>

								</div>

								<div class="botao">
									<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Atualizar</button>
								</div>
							</form>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">
							<h3><i class="far fa-image"></i> <span>INFORMAÇÃO DOS BANNERS CADASTRADOS</span></h3>
                            <div class="btn-group widget-header-toolbar">
								<button type="submit" class="btn btn-primary btn-cadastrar" data-toggle="modal" data-idc="{{ url('/site/banner/viewCadastrar') }}"><i class="fas fa-plus" style="padding-right:0.5rem;"></i>Novo banner</button>
                                <a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
                            </div>
						</div>
						
						@if (session('mensagem_banner'))
							<div class="sacefull" style="margin-top: 0.5rem;">
								<div class="alert alert-success">
									<span>
										<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
										{{ session('mensagem_banner') }}
									</span>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true"><i class="fas fa-times"></i></span>
										</button>
									</div>
								</div>
							</div>
						@elseif(session('invalido_banner'))
							<div class="alert alert-danger" style="margin-top: 0.5rem;">
								<span>
									<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
									{{ session('invalido_banner') }}
								</span>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
							</div>
						@endif

                        <div class="widget-content">
                            <table id="table" class="table table-sorting">
							
							<thead>
								<tr>
									<th>Id</th>
									<th>Imagem do banner</th>
									<th>Criado em:</th>
									<th>Remover</th>
								</tr>
							</thead>
							<tbody>
                                @for ($i = 0; $i < sizeof($banner); $i++)
									<tr>

										@isset($banner[$i]['id'])
											<td>{{ $banner[$i]['id'] }}</td>
										@endisset

										@isset($banner[$i]['banner'])
											{{-- <td><img src="{{ asset("storage/") }}/{{ $banner[$i]['banner'] }}" class="img" style="height: 5rem;"></td> --}}
											<td><img src="data:image/{{ $banner[$i]['ext_img'] }};base64,{{ $banner[$i]['banner'] }}" style="height: 3rem;"></td>
										@endisset
								
										@isset($banner[$i]['created_at'])
											<td>{{ $banner[$i]['created_at'] }}</td>
										@endisset
										
										<td>
											<div class="botoes">
												<button type="button" class="botao-remover" data-id="{{ url('admin/site/banner/confirm') }}/{{ $banner[$i]['id'] }}"><i class="far fa-trash-alt"></i></button>   
											</div>
										</td>

									</tr>
								
                            	@endfor

							</tbody>
                            
							</table>
                        </div>
                    </div>

                </div>

                <div class="info-sites">

                    <div class="widget">
                        <div class="widget-header">
                            <h3><i class="far fa-newspaper"></i> <span>INFORMAÇÃO DOS CLIENTES</span></h3>
                            <div class="btn-group widget-header-toolbar">
								<button type="submit" class="btn btn-primary btn-cadastrar-cliente" data-toggle="modal" data-idc="{{ url('/site/clientes/viewCadastrar') }}"><i class="fas fa-plus" style="padding-right:0.5rem;"></i>Novo cliente</button>
								<a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
                            </div>
                        </div>
                        @if (session('mensagem_banner'))
							<div class="sacefull" style="margin-top: 0.5rem;">
								<div class="alert alert-success">
									<span>
										<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
										{{ session('mensagem_banner') }}
									</span>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true"><i class="fas fa-times"></i></span>
										</button>
									</div>
								</div>
							</div>
						@elseif(session('invalido_banner'))
							<div class="alert alert-danger" style="margin-top: 0.5rem;">
								<span>
									<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
									{{ session('invalido_banner') }}
								</span>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
							</div>
						@endif

                        <div class="widget-content">
                            <table id="table" class="table table-sorting">
							
							<thead>
								<tr>
									<th>Id</th>
									<th>Imagem do banner</th>
									<th>Criado em:</th>
									<th>Remover</th>
								</tr>
							</thead>
							<tbody>
                                @for ($i = 0; $i < sizeof($clientes); $i++)
									<tr>

										@isset($clientes[$i]['id'])
											<td>{{ $clientes[$i]['id'] }}</td>
										@endisset

										@isset($clientes[$i]['logo'])
											{{-- <td><img src="{{ asset("storage/") }}/{{ $clientes[$i]['clientes'] }}" class="img" style="height: 5rem;"></td> --}}
											<td><img src="data:image/{{ $clientes[$i]['ext_logo'] }};base64,{{ $clientes[$i]['logo'] }}" style="height: 3rem;"></td>
										@endisset
								
										@isset($clientes[$i]['created_at'])
											<td>{{ $clientes[$i]['created_at'] }}</td>
										@endisset
										
										<td>
											<div class="botoes">
												<button type="button" class="botao-remover" data-id="{{ url('admin/site/clientes/confirm') }}/{{ $clientes[$i]['id'] }}"><i class="far fa-trash-alt"></i></button>   
											</div>
										</td>

									</tr>
								
                            	@endfor

							</tbody>
                            
							</table>
                        </div>
                    </div>

                    <div class="widget">
                        <div class="widget-header">
                            <h3><i class="far fa-newspaper"></i> <span>INFORMAÇÃO DOS BENEFÍCIOS DO SISTEMA</span></h3>
                            <div class="btn-group widget-header-toolbar">
                                <a href="#" title="Expand/Collapse" class="btn btn-link btn-toggle-expand"><i class="icon ion-ios-arrow-up"></i></a>
                            </div>
                        </div>
                        @if (session('mensagem_banner'))
							<div class="sacefull" style="margin-top: 0.5rem;">
								<div class="alert alert-success">
									<span>
										<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
										{{ session('mensagem_banner') }}
									</span>
									<div class="alert-close">
										<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true"><i class="fas fa-times"></i></span>
										</button>
									</div>
								</div>
							</div>
						@elseif(session('invalido_banner'))
							<div class="alert alert-danger" style="margin-top: 0.5rem;">
								<span>
									<i class="far fa-check-circle" style="padding-right:0.5rem;"></i>
									{{ session('invalido_banner') }}
								</span>
								<div class="alert-close">
									<button type="button" class="close" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><i class="fas fa-times"></i></span>
									</button>
								</div>
							</div>
						@endif

                        <div class="widget-content">
                            <table id="table" class="table table-sorting">
							
							<thead>
								<tr>
									<th>Id</th>
									<th>Imagem do banner</th>
									<th>Criado em:</th>
									<th>Remover</th>
								</tr>
							</thead>
							<tbody>
                                @for ($i = 0; $i < sizeof($banner); $i++)
									<tr>

										@isset($banner[$i]['id'])
											<td>{{ $banner[$i]['id'] }}</td>
										@endisset

										@isset($banner[$i]['banner'])
											{{-- <td><img src="{{ asset("storage/") }}/{{ $banner[$i]['banner'] }}" class="img" style="height: 5rem;"></td> --}}
											<td><img src="data:image/{{ $banner[$i]['ext_img'] }};base64,{{ $banner[$i]['banner'] }}" style="height: 3rem;"></td>
										@endisset
								
										@isset($banner[$i]['created_at'])
											<td>{{ $banner[$i]['created_at'] }}</td>
										@endisset
										
										<td>
											<div class="botoes">
												<button type="button" class="botao-remover" data-id="{{ url('admin/site/banner/confirm') }}/{{ $banner[$i]['id'] }}"><i class="far fa-trash-alt"></i></button>   
											</div>
										</td>

									</tr>
								
                            	@endfor

							</tbody>
                            
							</table>
                        </div>
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

		// CADASTRAR BANNER

		$(document).on('click','.btn-cadastrar', function(e){
			e.preventDefault();

			let bodyFormName = $('.modal-body-cadastrar');
			let modalName = $('.modal-cadastrar');
			let idc = $(this).data('idc')

			console.log(bodyFormName)
			console.log(modalName)
			console.log(idc)

			$(modalName).modal('show'); 

			$.ajax({
				url: '{{ url('admin/site/banner/viewCadastrar') }}',
				type: 'get',
				success: function(response){
					$(bodyFormName).html(response);
				}
			});
			return false;
		});

	// CONFIRMAR REMOVER BANNER

	$(document).on('click','.botao-remover', function(e){
        e.preventDefault();
        
        let bodyFormName = $('.modal-body-confirm');
		let modalName = $('.modal-confirm');
		let id = $(this).data('id')

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

	// REMOVER BANNER

	$(document).on('click','.btn-remover', function(e){
        e.preventDefault();
        
        let bodyFormName = $('.modal-body-remover');
		let modalName = $('.modal-remover');
		let modalNamee = $('.modal-confirm');
		let id = $(this).data('id')

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

	// CLIENTES ---------------------------------------------

	// EDITAR CLIENTE

		$(document).on('click','.btn-editar-cliente', function(e){
			e.preventDefault();
			
			let bodyFormName = $('.modal-body-cliente');
			let modalName = $('.modal-cliente');
			let id = $(this).data('id')

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

		$(document).on('click','.btn-cadastrar-cliente', function(e){
			e.preventDefault();

			let bodyFormName = $('.modal-body-cadastrar-cliente');
			let modalName = $('.modal-cadastrar-cliente');
			let idc = $(this).data('idc')

			console.log(bodyFormName)
			console.log(modalName)
			console.log(idc)

			$(modalName).modal('show'); 

			$.ajax({
				url: '{{ url('admin/site/clientes/viewCadastrar') }}',
				type: 'get',
				success: function(response){
					$(bodyFormName).html(response);
				}
			});
			return false;
		});

	// CONFIRMAR REMOVER

	$(document).on('click','.botao-remover-cliente', function(e){
        e.preventDefault();
        
        let bodyFormName = $('.modal-body-confirm-cliente');
		let modalName = $('.modal-confirm-cliente');
		let id = $(this).data('id')

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

	$(document).on('click','.btn-remover-cliente', function(e){
        e.preventDefault();
        
        let bodyFormName = $('.modal-body-remover-cliente');
		let modalName = $('.modal-remover-cliente');
		let modalNamee = $('.modal-confirm-cliente');
		let id = $(this).data('id')

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
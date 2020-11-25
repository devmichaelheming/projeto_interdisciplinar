<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>Dashboard | Relatórios</title>
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

		<div id="col-right" class="col-right">

            @include('admin.relatorio.modal')
            
			<div class="container-fluid primary-content">
				
				{{-- TABLE --}}
				
				<div class="widget" id="widget">
					<div class="widget-header">
						<h3><i class="fas fa-file-pdf"></i><span>Relatórios</span></h3>
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
                    <div class="lista-relatorios">

						<div class="relatorio text-center">
							<div class="quick-info vertical">
								<i class="fas fa-user bg-orange"></i>
								<p>RELATÓRIO DE CLIENTES<button type="submit" class="btn-relatorio clientes" data-toggle="modal" data-idc="{{ url('/relatorios/clientes') }}">Clique aqui para gerar o relatório</button></p>
							</div>
						</div>
						<div class="relatorio text-center">
							<div class="quick-info vertical">
								<i class="fas fa-briefcase bg-red"></i>
								<p>RELATÓRIO DE SERVIÇOS<button type="submit" class="btn-relatorio servicos" data-toggle="modal" data-idc="{{ url('/relatorios/servicos') }}">Clique aqui para gerar o relatório</button></p>
							</div>
						</div>
						{{-- <div class="relatorio text-center">
							<div class="quick-info vertical">
								<i class="fas fa-money-check-alt bg-green"></i>
								<p>RELATÓRIO DE VENDAS<button type="submit" class="btn-relatorio vendas" data-toggle="modal" data-idc="{{ url('/relatorios/vendas') }}">Clique aqui para gerar o relatório</button></p>
							</div>
						</div>
						<div class="relatorio text-center">
							<div class="quick-info vertical">
								<i class="fas fa-user-plus bg-blue"></i>
								<p>RELATÓRIO DE CADASTROS<button type="submit" class="btn-relatorio cadastros" data-toggle="modal" data-idc="{{ url('/relatorios/cadastros') }}">Clique aqui para gerar o relatório</button></p>
							</div>
                        </div> --}}

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
						});
					});
				}
			});
		});

		// RELATÓROS DE CLIENTES

		$(document).on('click','.clientes', function(e){
			e.preventDefault();

			var bodyFormName = $('.modal-body-clientes');
			var modalName = $('.modal-clientes');
			var idc = $(this).data('idc')

			console.log(bodyFormName)
			console.log(modalName)
			console.log(idc)

			$(modalName).modal('show'); 

			$.ajax({
				url: '{{ url('admin/relatorios/clientes') }}',
				type: 'get',
				success: function(response){
					console.log(response)        
					$(bodyFormName).html(response);
				}
			});
			return false;
		});

		// RELATÓROS DE VENDAS

		$(document).on('click','.vendas', function(e){
			e.preventDefault();

			var bodyFormName = $('.modal-body-vendas');
			var modalName = $('.modal-vendas');
			var idc = $(this).data('idc')

			console.log(bodyFormName)
			console.log(modalName)
			console.log(idc)

			$(modalName).modal('show'); 

			$.ajax({
				url: '{{ url('admin/relatorios/vendas') }}',
				type: 'get',
				success: function(response){
					console.log(response)        
					$(bodyFormName).html(response);
				}
			});
			return false;
		});

		// RELATORIO DE CADASTROS

		$(document).on('click','.cadastros', function(e){
			e.preventDefault();

			var bodyFormName = $('.modal-body-cadastros');
			var modalName = $('.modal-cadastros');
			var idc = $(this).data('idc')

			console.log(bodyFormName)
			console.log(modalName)
			console.log(idc)

			$(modalName).modal('show'); 

			$.ajax({
				url: '{{ url('admin/relatorios/cadastros') }}',
				type: 'get',
				success: function(response){
					console.log(response)        
					$(bodyFormName).html(response);
				}
			});
			return false;
		});

	// RELATORIO DE CADASTROS

    $(document).on('click','.servicos', function(e){
        e.preventDefault();

        var bodyFormName = $('.modal-body-servicos');
        var modalName = $('.modal-servicos');
        var idc = $(this).data('idc')

        console.log(bodyFormName)
        console.log(modalName)
        console.log(idc)

        $(modalName).modal('show'); 

        $.ajax({
            url: '{{ url('admin/relatorios/servicos') }}',
            type: 'get',
            success: function(response){
                console.log(response)        
                $(bodyFormName).html(response);
            }
        });
        return false;
    });

	// // REMOVER

	// $(document).on('click','.btn-remover', function(e){
    //     e.preventDefault();
        
    //     var bodyFormName = $('.modal-body-remover');
	// 	var modalName = $('.modal-remover');
	// 	var modalNamee = $('.modal-confirm');
	// 	var id = $(this).data('id')

	// 	console.log(bodyFormName)
	// 	console.log(modalName)
	// 	console.log(id)
        
	// 	$(modalName).modal('show'); 

    //     $.ajax({
    //        url: id,
    //        type: 'get',
    //        success: function(response){
	// 		$(modalNamee).modal('hide'); 
	// 		$(bodyFormName).html(response);
	// 		// location.reload();
    //        }
    //     });
	// 	location.reload();
    //     return true;
	// });
	
	</script>
</body>

</html>

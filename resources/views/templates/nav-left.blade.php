<div id="col-left" class="col-left">
	<div class="main-nav-wrapper">
		<nav id="main-nav" class="main-nav">
			<ul class="main-menu">
				
				<button type="button" style="background:transparent;border:none;width:100%;padding:0;" data-trigger="hover" title="Popover title" data-content="Usúarios">
					<li><a href="{{ route('admin.usuarios') }}"><i class="fas fa-user-cog"></i><span class="text"></span></a></li>
				</button>

				<button type="button" style="background:transparent;border:none;width:100%;padding:0;" data-trigger="hover" title="Popover title" data-content="Clientes">
					<li><a href="{{ route('admin.clientes') }}"><i class="fas fa-users"></i><span class="text"></span></a></li>
				</button>
			
				<button type="button" style="background:transparent;border:none;width:100%;padding:0;" data-trigger="hover" title="Popover title" data-content="Serviços">
					<li><a href="{{ route('admin.servicos') }}"><i class="fas fa-wrench"></i><span class="text"></span></a></li>
				</button>

				<button type="button" style="background:transparent;border:none;width:100%;padding:0;" data-trigger="hover" title="Popover title" data-content="Contatos">
					<li><a href="{{ route('admin.contatos') }}"><i class="fas fa-address-card"></i><span class="text"></span></a></li>
				</button>
{{-- 
				<button type="button" style="background:transparent;border:none;width:100%;padding:0;" data-trigger="hover" title="Popover title" data-content="Relatórios">
					<li><a href="{{ route('admin.relatorios') }}"><i class="fas fa-file-pdf"></i><span class="text"></span></a></li>
				</button>
				 --}}
			</ul>
		</nav>
	</div>
</div>
<script>

$(function () {
	$('[data-trigger="hover"]').popover()
})

</script>
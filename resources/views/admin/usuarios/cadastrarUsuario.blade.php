<form class="form-horizontal" id="form" role="form" action="{{ route('usuario.cadastrado') }}" method="POST" enctype="multipart/form-data" >
	@csrf
	<div class="form-group">
		<label for="name" class="control-label sr-only">Username</label>
		<div class="input-group">
			<input type="text" class="form-control" id="name" name="name" placeholder="Username">
			<span class="input-group-addon"><i class="icon ion-person"></i></span>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="control-label sr-only">Email</label>
		<div class="input-group">
			<input type="email" class="form-control" id="email" name="email" placeholder="Email">
			<span class="input-group-addon"><i class="icon ion-email"></i></span>
		</div>
	</div>

	<div class="form-group">
		<label for="phone" class="control-label sr-only">Telefone</label>
		<div class="input-group">
			<input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
			<span class="input-group-addon"><i class="fas fa-phone"></i></span>
		</div>
	</div>
	
	<div class="form-group">
		<label for="password" class="control-label sr-only">Password</label>
		<div class="input-group">
			<input type="password" class="form-control" id="password" name="password" placeholder="Password">
			<span class="input-group-addon"><i class="icon ion-locked"></i></span>
		</div>
	</div>
	<div class="botao">
		<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled"></i>Cadastrar usuário</button>
	</div>
</form>
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
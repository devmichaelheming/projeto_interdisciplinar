<form class="form-horizontal" id="form" role="form" action="{{ url('/admin/usuarios/editar/salvar') }}/{{ $id }}" method="POST" enctype="multipart/form-data" >
	@csrf
	<div class="form-group">
		<label for="name" class="control-label">Username</label>
		<div class="input-group">
			<input type="text" class="form-control" id="name" name="name" value="{{$name}}">
		</div>
	</div>
	
	<div class="form-group">
		<label for="email" class="control-label">Email</label>
		<div class="input-group">
			<input type="email" class="form-control" id="email" name="email" value="{{$email}}">
		</div>
	</div>

	<div class="form-group">
		<label for="phone" class="control-label">Telefone</label>
		<div class="input-group">
			<input type="text" class="form-control" id="phone" name="phone" value="{{$phone}}" onkeypress="return isNumber(event)">
		</div>
	</div>
	
	<div class="form-group">
		<label for="password" class="control-label">Password</label>
		<div class="input-group">
			<input type="password" class="form-control" id="password" name="password" value="{{$password}}">
		</div>
	</div>
	<div class="botao">
		<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled"></i>Atualizar</button>
	</div>
</form>
<script src="{{ asset('js/jquery.js')}}"></script>
<script src="{{ asset('jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{ asset('jquery-validation/dist/jquery.validate.js')}}"></script>
<script src="{{ asset('mask/dist/jquery.mask.js')}}"></script>
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
			},
			phone: {
				required: true
			}
		}
	})

	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
			return true;
	}

	var options = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['(00)0.0000-0000'],
				mask = (cpf.length > 15) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	}

	$('#phone').mask('000.000.000-000', options);

</script>
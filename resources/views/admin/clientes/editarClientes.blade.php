<form class="form-horizontal" id="form" role="form" action="{{ url('/admin/clientes/editar/salvar') }}/{{ $id }}" method="POST" enctype="multipart/form-data" >
	@csrf
	<div class="form-group">
		<label for="name" class="control-label sr-only">Username</label>
		<div class="col-sm-12">
			<div class="input-group">
				<input type="text" class="form-control" id="name" name="name" value="{{$name}}">
				<span class="input-group-addon"><i class="icon ion-person"></i></span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="control-label sr-only">Email</label>
		<div class="col-sm-12">
			<div class="input-group">
				<input type="email" class="form-control" id="email" name="email" value="{{$email}}">
				<span class="input-group-addon"><i class="icon ion-email"></i></span>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="phone" class="control-label sr-only">Telefone</label>
		<div class="col-sm-12">
			<div class="input-group">
				<input type="text" class="form-control" id="phone" name="phone" value="{{$phone}}">
				<span class="input-group-addon"><i class="fas fa-phone"></i></span>
			</div>
		</div>
	</div>
	
	<div class="form-group">
		<label for="password" class="control-label sr-only">Password</label>
		<div class="col-sm-12">
			<div class="input-group">
				<input type="password" class="form-control" id="password" name="password" value="{{$password}}">
				<span class="input-group-addon"><i class="icon ion-locked"></i></span>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-success"><i class="icon ion-checkmark-circled"></i>Atualizar</button>
		</div>
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


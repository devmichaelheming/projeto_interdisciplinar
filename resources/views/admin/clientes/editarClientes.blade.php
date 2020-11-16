<form class="form-horizontal" id="form" role="form" action="{{ url('/admin/clientes/editar/salvar') }}/{{ $id }}" method="POST" enctype="multipart/form-data" >
	@csrf
	<div class="form-group">
		<label for="name" class="control-label sr-only">Username</label>
		<div class="input-group">
			<input type="text" class="form-control" id="name" name="name" value="{{$name}}">
			<span class="input-group-addon"><i class="icon ion-person"></i></span>
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="control-label sr-only">Email</label>
		<div class="input-group">
			<input type="email" class="form-control" id="email" name="email" value="{{$email}}">
			<span class="input-group-addon"><i class="icon ion-email"></i></span>
		</div>
	</div>

	<div class="form-group">
		<label for="endereco" class="control-label sr-only">Endereço</label>
		<div class="input-group">
			<input type="text" class="form-control" id="endereco" name="endereco" value="{{$endereco}}">
			<span class="input-group-addon"><i class="fas fa-map-marker-alt"></i></span>
		</div>
	</div>

	<div class="form-group">
		<label for="nascimento" class="control-label sr-only">Data de nascimento</label>
		<div class="input-group">
			<input type="text" class="form-control" id="nascimento" name="nascimento" value="{{$nascimento}}">
			<span class="input-group-addon"><i class="far fa-calendar-alt"></i></span>
		</div>
	</div>

	<div class="form-group">
		<label for="cidade" class="control-label sr-only">Cidade</label>
		<div class="input-group">
			<input type="text" class="form-control" id="cidade" name="cidade" value="{{$cidade}}">
			<span class="input-group-addon"><i class="far fa-building"></i></span>
		</div>
	</div>

	<div class="form-group">
		<label for="cpf" class="control-label sr-only">Cpf</label>
		<div class="input-group">
			<input type="text" class="form-control" id="cpf" name="cpf" value="{{$cpf}}">
			<span class="input-group-addon"><i class="far fa-id-badge"></i></span>
		</div>
	</div>

	<div class="form-group">
		<label for="phone" class="control-label sr-only">Telefone</label>
		<div class="input-group">
			<input type="text" class="form-control" id="phone" name="phone" value="{{$phone}}">
			<span class="input-group-addon"><i class="fas fa-phone"></i></span>
		</div>
	</div>

	<div class="groups-two" style="display:flex;justify-content:flex-start;padding:0.5rem 0rem 1rem 0rem;flex-direction:column;align-items:flex-start;">
		<label for="switch">Status</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="1" {{ ($status == "1") ? "checked" : "" }}>
			<span><i></i>Ativado</span>
		</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="0" {{ ($status == "0") ? "checked" : "" }}>
			<span><i></i>Desativado</span>
		</label>
	</div>
	
	<div class="botao">
		<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Atualizar</button>
	</div>
	{{-- <button type="submit" class="btn btn-success"><i class="icon ion-checkmark-circled"></i>Atualizar</button> --}}
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


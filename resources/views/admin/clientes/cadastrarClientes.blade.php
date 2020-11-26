<form class="form-horizontal" id="form" role="form" action="{{ route('clientes.cadastrado') }}" method="POST" enctype="multipart/form-data" >
	@csrf
	<div class="groups-two" style="flex-direction: column"> 
		<span for="name" class="control-label">Nome: </span>
		<input type="text" class="inputs" id="name" name="name" placeholder="Nome..">
	</div>

	<div class="groups-two" style="flex-direction: column"> 
		<span for="email" class="control-label">E-Mail</span>
		<input type="email" class="inputs" id="email" name="email" placeholder="example@example.com">
	</div>

	<div class="groups-two" style="flex-direction: column"> 
		<span for="endereco" class="control-label">Endereço</span>
		<input type="text" class="inputs" id="endereco" name="endereco" placeholder="Endereço...">
	</div>

	<div class="groups-two" style="flex-direction: column"> 
		<span for="nascimento" class="control-label">Data de nascimento</span>
		<input type="date" class="inputs" id="nascimento" name="nascimento" placeholder="Data de nascimento...">
	</div>

	<div class="groups-two" style="flex-direction: column"> 
		<span for="cidade" class="control-label">Cidade</span>
		<input type="text" class="inputs" id="cidade" name="cidade" placeholder="Cidade...">
	</div>

	<div class="groups-two" style="flex-direction: column"> 
		<span for="cpf" class="control-label">Cpf</span>
		<input type="text" class="inputs" id="cpf" name="cpf" placeholder="Cpf...">
	</div>

	<div class="groups-two" style="flex-direction: column"> 
		<span for="phone" class="control-label">Telefone</span>
		<input type="text" class="inputs" id="phone" name="phone" placeholder="Telefone...">
	</div>

	<div class="groups-two2" style="display:flex;justify-content:flex-start;padding:0.5rem 0rem 1rem 0.5rem;flex-direction:column;align-items:flex-start;">
		<label for="switch">Status</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="1" checked>
			<span><i></i>Ativado</span>
		</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="0">
			<span><i></i>Desativado</span>
		</label>
	</div>
	
	<div class="botao">
		<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Cadastrar cliente</button>
	</div>
</form>
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
			endereco: {
				required: true
			},
			nascimento: {
				required: true
			},
			cpf: {
				required: true
			},
			cidade: {
				required: true
			},
			status: {
				required: true
			},
			phone: {
				required: true
			},
			status: {
				required: true
			}
		}
	});
	function isNumber(evt) {
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) {
			return false;
		}
			return true;
	};
	var options = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['(00)0.0000-0000'],
				mask = (cpf.length > 15) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	};
	var options_cpf = {
		onKeyPress: function (cpf, ev, el, op) {
			var masks = ['000.000.000-00'],
				mask = (cpf.length > 14) ? masks[1] : masks[0];
			el.mask(mask, op);
		}
	};
	$('#phone').mask('(00)0.0000-0000', options);
	$('#cpf').mask('000.000.000-00', options_cpf);

</script>
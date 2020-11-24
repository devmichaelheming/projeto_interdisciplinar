<form class="form-horizontal" id="form" role="form" action="{{ route('servicos.cadastrado') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
	@csrf
	<div class="sessao3">
		<span>Informações do cliente</span>
	</div>

	<div class="form-group" style="margin:0;">
		<span for="id_cliente" class="control-label">Cliente:</span>
		<select name="id_cliente" id="id_cliente" class="form-control">
			@foreach ($clientes as $cliente)	
				<option value="{{$cliente['id']}}">{{$cliente['name']}}</option>
			@endforeach
		</select>
	</div>

	<div class="sessao2">
		<span>Informações do carro</span>
	</div>

	<div class="groups-two">

		<div class="form-group-tipo2">
			<span for="ano" class="control-label">Ano</span>
			<input type="text" class="inputs" id="ano" name="ano" placeholder="Insira o ano do veiculo..." required>
		</div>

		<div class="form-group-tipo2">
			<span for="marca" class="control-label">Marca</span>
			<input type="text" class="inputs" id="marca" name="marca" placeholder="Insira a marca do veiculo..." required>
		</div>

	</div>

	<div class="groups-two">

		<div class="form-group-tipo2">
			<span for="modelo" class="control-label">Modelo</span>
			<input type="text" class="inputs" id="modelo" name="modelo" placeholder="Insira o modelo do veiculo..." required>
		</div>

		<div class="form-group-tipo2">
			<span for="placa" class="control-label">Placa</span>
			<input type="text" class="inputs" id="placa" name="placa" placeholder="Insira a placa do veiculo..." required>
		</div>

	</div>

	<div class="sessao3">
		<span>Informações do serviço</span>
	</div>

	<div class="groups-two" style="flex-direction: column">
		<span for="date" class="control-label">Data do serviço</span>
		<input type="datetime-local" class="inputs" id="date" name="date" required placeholder="00/00/0000">
	</div>

	<div class="groups-two" style="flex-direction: column">
		<span for="phone" class="control-label">Descrição</span>
		<textarea name="descricao" id="descricao" class="inputs" rows="5" placeholder="tipo de serviço, gastos previstos, observações..." required></textarea>
	</div>

	<div class="groups-two" style="flex-direction: column">
		<span for="valor" class="control-label">Valor do serviço</span>
		<input type="text" class="inputs" id="valor" name="valor" required placeholder="R$">
	</div>

	<div class="groups-two2" style="display:flex;justify-content:flex-start;padding:1rem 0rem 1rem 0.5rem;flex-direction:column;align-items:flex-start;">
		<label for="switch">Status do serviço</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="0" checked>
			<span><i></i>Em andamento</span>
		</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="1">
			<span><i></i>Finalizado</span>
		</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="1">
			<span><i></i>Extornado</span>
		</label>
	</div>
	
	<div class="botao">
		<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Cadastrar</button>
	</div>
</form>
<script src="{{ asset('jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{ asset('jquery-validation/dist/jquery.validate.js')}}"></script>
<script>

	$('form#form').validate({
		rules: {
			ano: {
				required: true
			},
			marca: {
				required: true
			},
			modelo: {
				required: true
			},
			placa: {
				required: true
			},
			date: {
				required: true
			},
			descricao: {
				required: true
			},
			valor: {
				required: true
			},
		}
	})

</script>
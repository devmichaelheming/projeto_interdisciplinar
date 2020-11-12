<form class="form-horizontal" id="form" role="form" action="{{ route('servicos.cadastrado') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
	@csrf
	<div class="sessao3">
		<span>Informações do cliente</span>
	</div>

	<div class="form-group" style="margin:0;">
		<label for="id_cliente" class="control-label">Cliente:</label>
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
			<label for="ano" class="control-label">Ano</label>
			<input type="text" class="inputs" id="ano" name="ano" placeholder="Insira o ano do veiculo..." required>
		</div>

		<div class="form-group-tipo2">
			<label for="marca" class="control-label">Marca</label>
			<input type="text" class="inputs" id="marca" name="marca" placeholder="Insira a marca do veiculo..." required>
		</div>

	</div>

	<div class="groups-two">

		<div class="form-group-tipo2">
			<label for="modelo" class="control-label">Modelo</label>
			<input type="text" class="inputs" id="modelo" name="modelo" placeholder="Insira o modelo do veiculo..." required>
		</div>

		<div class="form-group-tipo2">
			<label for="placa" class="control-label">Placa</label>
			<input type="text" class="inputs" id="placa" name="placa" placeholder="Insira a placa do veiculo..." required>
		</div>

	</div>

	<div class="sessao3">
		<span>Informações do serviço</span>
	</div>

	<div class="groups-two" style="flex-direction: column">
		<label for="date" class="control-label">Data do serviço</label>
		<input type="datetime-local" class="inputs" id="date" name="date" required placeholder="00/00/0000">
	</div>

	<div class="groups-two" style="flex-direction: column">
		<label for="phone" class="control-label">Descrição</label>
		<textarea name="descricao" id="descricao" class="inputs" rows="5" placeholder="tipo de serviço, gastos previstos, observações..." required></textarea>
	</div>

	<div class="groups-two" style="flex-direction: column">
		<label for="valor" class="control-label">Valor do serviço</label>
		<input type="number" class="inputs" id="valor" name="valor" required placeholder="R$">
	</div>

	<div class="groups-two" style="display:flex;justify-content:flex-start;padding:1rem 0rem 1.5rem 0rem;flex-direction:column;align-items:flex-start;">
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
<script>

function selecionar(elemento)
		{
			var verific = elemento.value

			console.log(verific)
			
			switch (verific) {
				case 'parcelas':
					$("#retorno div").remove()
					$("#retorno").append('\
					<div class="form-group-tipo">\
						<label for="phone" class="control-label" style="padding:0;">Vezes</label>\
							<input type="number" class="inputs" id="vezes" name="vezes" required>\
					</div>\
					<div class="form-group-tipo">\
					<label for="phone" class="control-label" style="padding:0;">Periodo</label>\
					<select id="ticket-priority" id="periodo" name="periodo" class="select-ticket-priority">\
						<option value="meses">Meses</option>\
						<option value="anos">Anos</option>\
					</select>\
					</div>\
					');
				break;
				case 'unica':
					$("#retorno div").remove()
				break;
				case 'fixa':
					$("#retorno div").remove()
				break;
			}
		}

</script>
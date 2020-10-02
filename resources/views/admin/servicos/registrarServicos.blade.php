<form class="form-horizontal" id="form" role="form" action="{{ route('servicos.cadastrado') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
	@csrf

	<div class="sessao-carro">
		<span></span>
		<span>Informações do cliente</span>
		<span></span>
	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="nome" class="control-label">Nome</label>
			<input type="text" class="inputs" id="nome" name="nome" placeholder="Insira o nome do cliente..." required>
		</div>

		<div class="form-group-tipo2">
			<label for="email" class="control-label">E-mail</label>
			<input type="email" class="inputs" id="email" name="email" placeholder="Insira o email do cliente..." required>
		</div>

	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="cpf" class="control-label">Cpf</label>
			<input type="text" class="inputs" id="cpf" name="cpf" placeholder="Insira o cpf do cliente..." required>
		</div>

		<div class="form-group-tipo2">
			<label for="telefone" class="control-label">Telefone</label>
			<input type="number" class="inputs" id="telefone" placeholder="(66)0.0000-0000" name="telefone" required>
		</div>

	</div>
    
    <div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="cidade" class="control-label">Cidade</label>
			<input type="text" class="inputs" id="cidade" placeholder="Insira a cidade..." name="cidade" required>
		</div>

		<div class="form-group-tipo2">
			<label for="bairro" class="control-label">Bairro</label>
			<input type="text" class="inputs" id="bairro" placeholder="Insira o bairro..."  name="bairro" required>
		</div>

	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;flex-direction:column;">
		<label for="endereco" class="control-label">Endereço</label>
		<input type="text" class="inputs" id="endereco" name="endereco" placeholder="Insira o endereço..." required>
	</div>

	<div class="sessao-carro">
		<span></span>
		<span>Informações do carro</span>
		<span></span>
	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="ano" class="control-label">Ano</label>
			<input type="text" class="inputs" id="ano" name="ano" placeholder="Insira o ano do veiculo..." required>
		</div>

		<div class="form-group-tipo2">
			<label for="marca" class="control-label">Marca</label>
			<input type="text" class="inputs" id="marca" name="marca" placeholder="Insira a marca do veiculo..." required>
		</div>

	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="modelo" class="control-label">Modelo</label>
			<input type="text" class="inputs" id="modelo" name="modelo" placeholder="Insira o modelo do veiculo..." required>
		</div>

		<div class="form-group-tipo2">
			<label for="placa" class="control-label">Placa</label>
			<input type="text" class="inputs" id="placa" name="placa" placeholder="Insira a placa do veiculo..." required>
		</div>

	</div>

	<hr>

	<div class="form-group" style="margin:0;">
		<label for="phone" class="control-label">Relatório</label>
		<textarea name="relatorio" id="relatorio" class="inputs" placeholder="tipo de serviço, gastos previstos, observações..." required></textarea>
	</div>

	<div class="form-group" style="margin:0;">
		<label for="valor" class="control-label">Valor do serviço</label>
		<input type="number" class="inputs" id="valor" name="valor" required placeholder="R$">
	</div>

	<div class="groups-two" style="display:flex;justify-content:flex-start;padding:1.5rem 0rem 1.5rem 0rem;flex-direction:column;align-items:flex-start;">
		<label for="switch">Status do serviço ?</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="1" checked>
			<span><i></i>Finalizado</span>
		</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="0">
			<span><i></i>Em andamento</span>
		</label>
	</div>

	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-success"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Cadastrar</button>
		</div>
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
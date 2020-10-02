<form class="form-horizontal" id="form" role="form" action="{{ url('/admin/servicos/editar/salvar') }}/{{ $id }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
	@csrf

	<div class="sessao-carro">
		<span></span>
		<span>Informações do cliente</span>
		<span></span>
	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="nome" class="control-label">Nome</label>
            <input type="text" class="inputs" id="nome" name="nome" value="{{$nome}}" required>
		</div>

		<div class="form-group-tipo2">
			<label for="email" class="control-label">E-mail</label>
			<input type="email" class="inputs" id="email" name="email" value="{{$email}}" required>
		</div>

	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="cpf" class="control-label">Cpf</label>
			<input type="text" class="inputs" id="cpf" name="cpf" value="{{$cpf}}" required>
		</div>

		<div class="form-group-tipo2">
			<label for="telefone" class="control-label">Telefone</label>
			<input type="number" class="inputs" id="telefone" name="telefone" value="{{$telefone}}" required>
		</div>

	</div>
    
    <div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="cidade" class="control-label">Cidade</label>
			<input type="text" class="inputs" id="cidade" name="cidade" value="{{$cidade}}" required>
		</div>

		<div class="form-group-tipo2">
			<label for="bairro" class="control-label">Bairro</label>
			<input type="text" class="inputs" id="bairro" name="bairro" value="{{$bairro}}" required>
		</div>

	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;flex-direction:column;">
		<label for="endereco" class="control-label">Endereço</label>
		<input type="text" class="inputs" id="endereco" name="endereco" value="{{$endereco}}" required>
	</div>

	<div class="sessao-carro">
		<span></span>
		<span>Informações do carro</span>
		<span></span>
	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="ano" class="control-label">Ano</label>
			<input type="text" class="inputs" id="ano" name="ano" value="{{$ano}}" required>
		</div>

		<div class="form-group-tipo2">
			<label for="marca" class="control-label">Marca</label>
			<input type="text" class="inputs" id="marca" name="marca" value="{{$marca}}" required>
		</div>

	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding:0.5rem 0 0.5rem 0;">

		<div class="form-group-tipo2">
			<label for="modelo" class="control-label">Modelo</label>
			<input type="text" class="inputs" id="modelo" name="modelo" value="{{$modelo}}" required>
		</div>

		<div class="form-group-tipo2">
			<label for="placa" class="control-label">Placa</label>
			<input type="text" class="inputs" id="placa" name="placa" value="{{$placa}}" required>
		</div>

	</div>

	<hr>

	<div class="form-group" style="margin:0;">
		<label for="phone" class="control-label">Relatório</label>
		<textarea name="relatorio" id="relatorio" class="inputs" value="{{$relatorio}}" required>{{$relatorio}}</textarea>
	</div>
	
	<div class="form-group" style="margin:0;">
		<label for="modelo" class="control-label">Valor do serviço</label>
		<input type="number" class="inputs" id="valor" name="valor" value="{{$valor}}" required>
	</div>

	<div class="groups-two" style="display:flex;justify-content:flex-start;padding:1.5rem 0rem 1.5rem 0rem;flex-direction:column;align-items:flex-start;">
		<label for="switch">Status do serviço ?</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="1" {{ ($status == "1") ? "checked" : "" }}>
			<span><i></i>Finalizado</span>
		</label>
		<label class="control-inline fancy-radio">
			<input type="radio" name="status" value="0" {{ ($status == "0") ? "checked" : "" }}>
			<span><i></i>Em andamento</span>
		</label>
	</div>

	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-success"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Atualizar</button>
		</div>
	</div>

</form>
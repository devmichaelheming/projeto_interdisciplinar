<form class="form-horizontal" id="form" role="form" action="{{ route('contas.cadastrado') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
	@csrf
	<div class="form-group">
		<label for="valor" class="control-label">Valor</label>
		<div class="col-sm-12">
			<input type="text" class="inputs" id="valor" name="valor" placeholder="R$" required>
		</div>
	</div>

	<div class="groups-two" style="display:flex;justify-content:space-between;padding-right:2rem;">

		<div class="form-group-tipo2">
			<label for="competencia" class="control-label">Competência</label>
				<input type="month" class="inputs" id="competencia" name="competencia" required>
		</div>

		<div class="form-group-tipo2">
			<label for="email" class="control-label">Vencimento</label>
				<input type="month" class="inputs" id="vencimento" name="vencimento" required>
		</div>

	</div>

	<div class="form-group">
		<label for="phone" class="control-label">Descrição</label>
		<div class="col-sm-12">
			<textarea name="descricao" id="descricao" class="inputs" required></textarea>
		</div>
	</div>

	<div class="form-group">
		<label for="ticket-priority" class="col-sm-3 control-label">Tipo de despesa</label>
		<div class="col-sm-12">
			<select id="ticket-priority" id="tipo" name="tipo" class="select-ticket-priority" onchange="javascript:selecionar(this);">
				<option value="unica">Única</option>
				<option value="fixa">Fixa</option>
				<option value="parcelas">Parcelas</option>
			</select>
		</div>
		
	</div>
	<div id="retorno">
	</div>
	<div class="form-group" style="padding:1rem 0;">
		<label for="switch" class="col-xs-4">Foi pago ?</label>
		<div class="col-xs-8">
			<label class="switch-input">
				<input type="checkbox" name="status" id="switch" checked>
				<i data-swon-text="não" data-swoff-text="sim"></i>
			</label>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-12">
			<button type="submit" class="btn btn-success"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Cadastrar conta</button>
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
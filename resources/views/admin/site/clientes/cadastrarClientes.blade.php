<form class="form-horizontal" id="form" role="form" action="{{ route('site.clientes.cadastrado') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
	@csrf
	<div class="form-banner">

        <div class="groups-two" style="flex-direction: column"> 
            <span for="nome" class="control-label">Nome</span>
            <input type="text" class="inputs" id="nome" name="nome" placeholder="Nome...">
        </div>

        <div class="groups-two" style="flex-direction: column"> 
            <span for="endereco" class="control-label">Endereço</span>
            <input type="text" class="inputs" id="endereco" name="endereco" placeholder="Endereço...">
        </div>

		<span for="logo" class="control-label" style="margin-top: 0.5rem;">Logo</span>
		<span>Obs: Tamanho recomendado: largura: 50px, Altura: 50px.</span>
		<div class="input-group">
			<div class="custom-file"> 
				<input type="file" accept="image/*" name="logo" class="inputs" id="logo" onchange="previewImagem()">
				<label class="custom-file-label" for="inputGroupFile04">Escolha uma imagem</label>
			</div>
        </div>
    
    </div>
	
	<img style="width: 6rem; height: 6rem;margin: 0.5rem 0;border-radius:100%;" name="logo">

	<div class="botao">
		<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Cadastrar</button>
	</div>
</form>
<script src="{{ asset('jquery-validation/dist/jquery.validate.min.js') }}"></script>
<script src="{{ asset('jquery-validation/dist/jquery.validate.js') }}"></script>
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
    
    var configuracoes = {}
	
	$("#logo").base64({
		"onSuccess": function(inst, base64Str) {
			console.log(base64Str)
			configuracoes['base64'] = base64Str;
			console.log(configuracoes)
		}
	});

	function previewImagem(){

	console.log(configuracoes);

	var imagem = document.querySelector('input[name=logo]').files[0];
	var preview = document.querySelector('img[name=logo]');

	var reader = new FileReader();

	reader.onloadend = function () {
		preview.src = reader.result;
	}

	if(imagem){
		reader.readAsDataURL(imagem);
	}else{
		preview.src = "";
	    }
	}

</script>
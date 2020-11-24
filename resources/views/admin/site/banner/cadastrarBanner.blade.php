<form class="form-horizontal" id="form" role="form" action="{{ route('banner.cadastrado') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
	@csrf
	<div class="form-banner">
		<span for="banner" class="control-label">Imagem do banner</span>
		<span>Obs: Tamanho recomendado: largura: 2000px, Altura: 506px.</span>
		<div class="input-group">
			<div class="custom-file"> 
				<input type="file" accept="image/*" name="banner" class="inputs" id="banner" onchange="previewImagem()">
				<label class="custom-file-label" for="inputGroupFile04">Escolha uma imagem</label>
			</div>
		</div>
    </div>
	
	<img style="width: 100%; height: 100%;margin: 0.5rem 0;" name="banner">

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
	
	$("#banner").base64({
		"onSuccess": function(inst, base64Str) {
			console.log(base64Str)
			configuracoes['base64'] = base64Str;
			console.log(configuracoes)
		}
	});

	function previewImagem(){

	console.log(configuracoes);

	var imagem = document.querySelector('input[name=banner]').files[0];
	var preview = document.querySelector('img[name=banner]');

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
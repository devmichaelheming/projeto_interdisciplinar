<form class="form-horizontal" id="form" role="form" action="{{ url('/admin/site/info_sistema/editar/salvar') }}/{{ $id }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
    @csrf
    <div class="groups-two" style="flex-direction: column"> 
		<span for="title" class="control-label">Title</span>
		<input type="title" class="inputs" id="title" name="title" value="{{ $title }}">
    </div>
    <div class="groups-two" style="flex-direction: column"> 
		<span for="legenda" class="control-label">Legenda</span>
		<input type="legenda" class="inputs" id="legenda" name="legenda" value="{{ $legenda }}">
	</div>

	<div class="form-banner">

		<span for="logo">Imagem:</span>
		<span class="kt-widget14__desc">Obs: Tamanho recomendado: largura: 91px, Altura: 50px.</span>

		<div class="input-group">
			<div class="custom-file">
				<input type="file" accept="image/*" name="logo" class="custom-file-input" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" onchange="previewImagem()">
				<label class="custom-file-label" for="inputGroupFile04" value="{{$img}}">{{$name_file}}</label>
			</div>
		</div>

	</div>

	<img src="data:image/{{$ext_img}};base64,{{$img}}" name="img" id="logo" style="width: 100%;"><br><br>

	<div class="botao">
		<button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Cadastrar</button>
	</div>
</form>
<script>
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
    var preview = document.querySelector('img[name=img]');

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
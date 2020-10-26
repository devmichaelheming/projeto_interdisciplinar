<form action="{{ route('relatorios.clientes.pdf') }}" method="POST">
@csrf
    <div class="relatorio-clientes">
        <label>Selecione o cliente em que deseja gerar o relatório</label>

        <select name="id_cliente" id="id_cliente" class="form-control">
            @foreach ($clientes as $cliente)	
                <option value="{{$cliente['id']}}">{{$cliente['name']}}</option>
            @endforeach
        </select>

        <div class="botao">
            <button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Gerar relatório</button>
        </div>

    </div>

</form>
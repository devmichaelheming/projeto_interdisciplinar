<form action="{{ route('relatorios.servicos.pdf') }}" method="POST">
@csrf
    <div class="relatorio-clientes">

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cliente:</th>
                    <th scope="col">Status:</th>
                    <th scope="col">Ano:</th>
                    <th scope="col">Marca:</th>
                    <th scope="col">Modelo:</th>
                    <th scope="col">Placa:</th>
                    <th scope="col">Valor:</th>
                    <th scope="col">Descrição:</th>
                    <th scope="col">Criado em:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($servicos as $servico)
                    <tr>
                        <td>{{ $servico['id_cliente'] }}</td>
                        <td>{{ $servico['status'] }}</td>
                        <td>{{ $servico['ano'] }}</td>
                        <td>{{ $servico['marca'] }}</td>
                        <td>{{ $servico['modelo'] }}</td>
                        <td>{{ $servico['placa'] }}</td>
                        <td>{{ $servico['valor'] }}</td>
                        <td>{{ $servico['descricao'] }}</td>
                        <td>{{ $servico['created_at'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="botao">
            <button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Gerar relatório</button>
        </div>

    </div>

</form>
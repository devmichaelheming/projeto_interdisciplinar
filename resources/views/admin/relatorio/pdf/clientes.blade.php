<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}"> --}}
</head>
<style>
    body{
        font: 12px;
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
    td {
        display: table-cell;
        vertical-align: inherit;
    }
    table {
        border-collapse: collapse;
    }
    table {
        border-collapse: separate;
    }
    .table {
        width: 100%;
        margin-bottom: 0rem;
        color: #212529;
    }
    .table thead th {
        vertical-align: bottom;
        text-align: initial;
        border-bottom: 2px solid #dee2e6;
    }
    .table th, .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6;
    }
    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
    }
    th {
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;
        text-align: -internal-center;
    }
    thead {
        display: table-header-group;
        vertical-align: middle;
        border-color: inherit;
    }
    tbody {
        display: table-row-group;
        vertical-align: middle;
        border-color: inherit;
    }
    table {
        display: table;
        border-collapse: separate;
        box-sizing: border-box;
        border-spacing: 0px;
        border-color: grey;
    }
    .title{
        font-size: 1.3rem;
        padding: 1rem 0;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
<body>
    <div class="title">INFORMAÇÃO DO CLIENTE(A): <?PHP echo strtoupper($dados['name']) ?></div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nome:</th>
                <th scope="col">E-Mail:</th>
                <th scope="col">Telefone:</th>
                <th scope="col">Data de nascimento:</th>
                <th scope="col">Cidade:</th>
                <th scope="col">Cpf:</th>
                <th scope="col">Endereço:</th>
                <th scope="col">Criado em:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $dados['name'] }}</td>
                <td>{{ $dados['email'] }}</td>
                <td>{{ $dados['phone'] }}</td>
                <td>{{ $dados['nascimento'] }}</td>
                <td>{{ $dados['cidade'] }}</td>
                <td>{{ $dados['cpf'] }}</td>
                <td>{{ $dados['endereco'] }}</td>
                <td>{{ $dados['created_at'] }}</td>
            </tr>
        </tbody>
    </table>

    <div class="title">SERVIÇOS CADASTRADOS DO CLIENTE: <?PHP echo strtoupper($dados['name']) ?></div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Status:</th>
                <th scope="col">Valor:</th>
                <th scope="col">Descrição:</th>
                <th scope="col">Ano:</th>
                <th scope="col">Marca:</th>
                <th scope="col">Placa:</th>
                <th scope="col">Criado em:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicos_cliente as $servicos)
                <tr>
                    <td>{{ $servicos['status'] }}</td>
                    <td>{{ $servicos['valor'] }}</td>
                    <td>{{ $servicos['descricao'] }}</td>
                    <td>{{ $servicos['ano'] }}</td>
                    <td>{{ $servicos['marca'] }}</td>
                    <td>{{ $servicos['placa'] }}</td>
                    <td>{{ $servicos['created_at'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
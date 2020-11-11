<div class="servicos-relatorio">
    <form action="{{ route('relatorios.servicos.diario.pdf') }}" method="POST">
    @csrf
        <div class="relatorio-clientes">

            <div class="form-group">
                <label for="diario" class="control-label">Relatório diario</label>
                <div class="input-group">
                    <input type="date" class="form-control" id="diario" name="diario" placeholder="Escolha o mês ">
                </div>
            </div>

            <div class="botao">
                <button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Gerar relatório diario</button>
            </div>

        </div>

    </form>
    <form action="{{ route('relatorios.servicos.mensal.pdf') }}" method="POST">
    @csrf
        <div class="relatorio-clientes">

            <div class="form-group">
                <label for="mensal" class="control-label">Relatório mensal</label>
                <div class="input-group">
                    <input type="month" class="form-control" id="mensal" name="mensal" placeholder="Escolha o mês ">
                </div>
            </div>

            <div class="botao">
                <button type="submit" class="btn btn-primary"><i class="icon ion-checkmark-circled" style="padding-right:0.5rem;"></i>Gerar relatório mensal</button>
            </div>

        </div>

    </form>
</div>
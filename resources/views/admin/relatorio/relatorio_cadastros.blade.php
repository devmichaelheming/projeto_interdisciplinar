<form action="{{ route('servicos.cadastrado') }}" method="POST">
    @csrf
    <div class="select-relatorios">
        <div class="meses">
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="janeiro">
                    <span><i></i>JANEIRO</span>
                </label>
            </div>
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="fevereiro">
                    <span><i></i>FEVEREIRO</span>
                </label>
            </div>
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="marco">
                    <span><i></i>MARÇO</span>
                </label>
            </div>
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="abril">
                    <span><i></i>ABRIL</span>
                </label>
            </div>
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="maio">
                    <span><i></i>MAIO</span>
                </label>
            </div>
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="junho">
                    <span><i></i>JUNHO</span>
                </label>
            </div>
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="julho">
                    <span><i></i>JULHO</span>
                </label>
            </div>
            <div class="mes">
            <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="agosto">
                    <span><i></i>AGOSTO</span>
                </label>
            </div>
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="setembro">
                    <span><i></i>SETEMBRO</span>
                </label>
            </div>
            <div class="mes">
                <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="outubro">
                    <span><i></i>OUTUBRO</span>
                </label>
            </div>
            <div class="mes">
            <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="novembro">
                    <span><i></i>NOVEMBRO</span>
                </label>
            </div>
            <div class="mes">
            <label class="control-inline fancy-radio">
                    <input type="radio" name="mes" value="dezembro">
                    <span><i></i>DEZEMBRO</span>
                </label>
            </div>
        </div>
    </div>
</form>
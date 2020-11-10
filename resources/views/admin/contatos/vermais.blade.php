<div class="vermais">
    <div class="group-vermais">
        <label for="name" class="control-label">Nome</label>
        <div class="input-group-vermais">
            <input type="text" class="form-control" id="name" name="name" placeholder="{{$name}}" disabled>
        </div>
    </div>
    <div class="group-vermais">
        <label for="sobrenome" class="control-label">Sobrenome</label>
        <div class="input-group-vermais">
            <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="{{$sobrenome}}" disabled>
        </div>
    </div>

    <div class="group-vermais">
        <label for="text" class="control-label">E-Mail</label>
        <div class="input-group-vermais">
            <input type="text" class="form-control" id="email" name="email" placeholder="{{$email}}" disabled>
        </div>
    </div>

    <div class="group-vermais">
        <label for="telefone" class="control-label">Telefone</label>
        <div class="input-group-vermais">
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="{{$telefone}}" disabled>
        </div>
    </div>

    <div class="group-vermais">
        <label for="assunto" class="control-label">Assunto</label>
        <div class="input-group-vermais">
            <input type="text" class="form-control" id="assunto" name="assunto" placeholder="{{$assunto}}" disabled>
        </div>
    </div>

    <div class="group-vermais">
        <label for="telefone" class="control-label">Mensagem</label>
        <div class="input-group-vermais">
            <textarea name="mensagem" id="mensagem" class="inputs" rows="5" placeholder="{{$mensagem}}" required disabled>{{$mensagem}}</textarea>
        </div>
    </div>
</div>
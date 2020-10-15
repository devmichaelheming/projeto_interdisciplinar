@if (session('mensagem'))
    <div class="alert alert-danger fade show mb-0 pl-3 pr-3 pt-1 pb-1 col-12" role="alert" style="height:4.5rem;">
    <div class="alert-icon"><i class="far fa-times-circle"></i></div>
        <div class="alert alert-danger" style="display: flex; justify-content: center;font-size: 1.3rem;">
            {{ session('mensagem') }}
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="opacity:0.8;font-size:2rem;color:white;">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
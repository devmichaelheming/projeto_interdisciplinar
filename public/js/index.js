$('.header span a').click(function (e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetOffset = $(id).offset().top + -150;
    $('html, body').animate({
        scrollTop: targetOffset
    }, 400);
});

$(document).ready(function () {
    $(window).scroll(function () {
        if (this.scrollY > 80) {
            $(".header").addClass("sticky");
            $(".header span a").addClass("sticky-font");
            $(".dashboard a").addClass("sticky-font2");
            $(".header img").addClass("sticky-img");
        } else {
            $(".header").removeClass("sticky");
            $(".header span a").removeClass("sticky-font");
            $(".dashboard a").removeClass("sticky-font2");
            $(".header img").removeClass("sticky-img");
        }
    });
});

var options = {
    onKeyPress: function (cpf, ev, el, op) {
        var masks = ['(00)0.0000-0000'],
            mask = (cpf.length > 15) ? masks[1] : masks[0];
        el.mask(mask, op);
    }
};

$('#telefone').mask('(00)0.0000-0000', options);

(function () {

    $("#form").validate({
        rules: {
            name: {
                required: true
            },
            sobrenome: {
                required: true
            },
            email: {
                required: true
            },
            telefone: {
                required: true
            },
            assunto: {
                required: true
            },
            mensagem: {
                required: true
            },
        },
        messages: {

            name: {
                required: "Este campo é obrigatório."
            },
            sobrenome: {
                required: "Este campo é obrigatório."
            },
            email: {
                required: "Este campo é obrigatório."
            },
            telefone: {
                required: "Este campo é obrigatório."
            },
            assunto: {
                required: "Este campo é obrigatório."
            },
            mensagem: {
                required: "Este campo é obrigatório."
            },
        },

        submitHandler: function (form) {
            event.preventDefault(form);

            var configuracoes = {}

            console.log(configuracoes)

            configuracoes['name'] = $('#name').val();
            configuracoes['email'] = $('#email').val();
            configuracoes['telefone'] = $('#telefone').val();
            configuracoes['sobrenome'] = $('#sobrenome').val();
            configuracoes['assunto'] = $('#assunto').val();
            configuracoes['mensagem'] = $('#mensagem').val();

            $.ajax({
                url: '{{ url(' / contato') }}',
                type: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend: function () {
                    $("#load-more").html("<span>Enviando</span><img src='{{ asset('ajax.gif') }}'>");
                },
                data: JSON.stringify(configuracoes),

                sucess: function () {
                },

                error: function (err) {
                    console.log("Erro ao requisitar os dados")
                    console.log(err)
                }

            }).done(function (resultados) {
                if (resultados == 1) {
                    $('.retorno div').remove();

                    $('.retorno').append('<div class="alert alert-success fade show mb-0" role="alert">\
                    <div class="alert-icon"><i class="far fa-check-circle"></i></div>\
                        <div class="alert alert-success">\
                        Contato enviado com sucesso!\
                        </div>\
                        <div class="alert-close">\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true"><i class="fas fa-times"></i></span>\
                        </button>\
                        </div>\
                    </div>');

                    $("#load-more").html("Enviar");

                    limpar()

                } else {

                    ''
                }
            })
        }
    })
}());

function limpar() {
    document.getElementById('name').value = "";
    document.getElementById('email').value = "";
    document.getElementById('telefone').value = "";
    document.getElementById('assunto').value = "";
    document.getElementById('mensagem').value = "";
    document.getElementById('sobrenome').value = "";
    document.getElementById('retorno').hidden();
};
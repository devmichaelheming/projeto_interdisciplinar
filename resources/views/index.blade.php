<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/anji.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('index/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Sistema de gerenciamento de mecânicas</title>
</head>
<body>
    <nav>
        <div class="header">
            <img src="{{ asset('logo.png') }}">
            <div class="contato">
                <i class="fas fa-phone-volume"></i>
                <span>(66)3212-5236</span>
            </div>
            <div class="rs">
                <div class="title-rs">REDES SOCIAIS</div>
                <div class="links-rs">
                    <span>
                        <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </span>
                    <span>
                        <a href="https://api.whatsapp.com/send?phone=556633920717&text=Olá, gostaria de que conhecer um pouco mais do produto">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </span>
                    <span>
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </span>
                </div>
            </div>
            <div class="dashboard">
                <a href="{{ route('admin') }}">
                    <i class="fas fa-sign-in-alt"></i>
                    <span>ACESSAR O SISTEMA</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('banner3.png') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('banner.png') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('banner2.png') }}">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="informacoes" data-anijs="if: scroll, on: window, do: fadeInLeftBig animated, before: scrollReveal, after: holdAnimClass">
        <div class="logo">
            <img src="{{ asset('logo.png') }}">
        </div>
        <div class="conteudo">
            <div class="title">
                CONHEÇA MAIS SOBRE O SISTEMA!
            </div>
            <div class="text">
                Nosso sistema visa facilitar, organizar e proporcionar maior agilidade em sua oficina mecânica. desde controle de estoque até mesmo controle financeiro.
            </div>
        </div>
    </div>

    <div class="info-geral" data-anijs="if: scroll, on: window, do: fadeInRightBig animated, before: scrollReveal, after: holdAnimClass">
        
        <div class="title-info">BENEFÍCIOS DO SISTEMA</div>

        <div class="header-info">

            <div class="bloco-financeiro" >
                <div class="card-info" id="financeiro">
                        <i class="fas fa-coins"></i>
                        <span>Controle financeiro</span>
                </div>

                <div class="card-info-more" id="financeiro-more">
                    <span>
                        Controle os serviços cadastrados no sistema, exibindo de uma maneira pratica na tela de serviços: serviços finalizados, serviços em andamento, serviços extornados, previsões de lucro e quantidade total de serviços.
                    </span>
                </div>

            </div>

            {{-- <div class="bloco-clientes" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal, after: holdAnimClass">

                <div class="card-info" id="clientes">
                    <i class="fas fa-file-pdf"></i>
                    <span>Relátorios de clientes</span>
                </div>

                <div class="card-info-more" id="clientes-more">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit reprehenderit aperiam laudantium magni commodi vitae aliquid, repudiandae quaerat quibusdam in ex, et ipsam explicabo voluptatum tenetur minima delectus optio?
                    </span>
                </div>

            </div> --}}

            <div class="bloco-servico">

                <div class="card-info" id="servico">
                    <i class="fas fa-file-pdf"></i>
                    <span>Relátorios</span>
                </div>

                <div class="card-info-more" id="servico-more">
                    <span>
                        Relatórios das informações dos serviços, e dos clientes cadastrados no sistema.
                    </span>
                </div>

            </div>
            
            <div class="bloco-admin">

                <div class="card-info" id="admin">
                    <i class="fas fa-user-lock"></i>
                    <span>Permissões para administradores</span>
                </div>

                 <div class="card-info-more" id="admin-more">
                    <span>
                        Controle e administre os usuários cadastrados no sistema, limitando suas permissões para agir no sistema.
                    </span>
                </div>

            </div>
            
        </div>

    </div>

    <div class="contato-form">
        <div class="contato-interno">

            

            <form id="form" name="form" data-anijs="if: scroll, on: window, do: fadeInLeftBig animated, before: scrollReveal, after: holdAnimClass">
                <div class="title-form">ENTRE EM CONTATO CONOSCO</div>
                <div class="linha-form">
                    <span></span>
                </div>
                <div class="bloco1">
                    <div class="group">
                        <span for="name">NOME</span>
                        <input type="text" id="name" name="name" placeholder="nome">
                    </div>
                    <div class="group">
                        <span for="sobrenome">SOBRENOME</span>
                        <input type="text" id="sobrenome" name="sobrenome" placeholder="sobrenome">
                    </div>
                </div>
                
                <div class="bloco1">
                    <div class="group">
                        <span for="email">E-MAIL</span>
                        <input type="email" id="email" name="email" placeholder="example@example.com">
                    </div>
                    <div class="group">
                        <span for="telefone">TELEFONE</span>
                        <input type="text" id="telefone" name="telefone" placeholder="(00)00000-0000" onkeypress="return isNumber(event)">
                    </div>
                </div>
                
                <div class="group">
                    <span for="assunto">ASSUNTO</span>
                    <input type="text" id="assunto" name="assunto" placeholder="assunto">
                </div>
                <div class="group">
                    <span for="mensagem">MENSAGEM</span>
                    <textarea name="mensagem" id="mensagem" rows="6" placeholder="Insira aqui sua mensagem"></textarea>
                </div>

                <div class="retorno" id="retorno"></div>

            <button type="submit" id="load-more"><span>Enviar</span></button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-top">
            <img src="{{ asset('logo.png') }}">
            <div class="bloco2-footer">
                <div class="title-endereco">
                    ENDEREÇO
                </div>
                <span>
                    Rua das Cerejeiras, N° 1987, Jardim Paraíso, CEP 78556-106
                </span>
            </div>
            <div class="bloco1-footer">
                <div class="title-footer-top">
                    REDES SOCIAIS
                </div>
                <div class="conteudo-footer-top">
                    <span>
                        <a href="https://www.facebook.com/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </span>
                    <span>
                        <a href="https://api.whatsapp.com/send?phone=556633920717&text=Olá, gostaria de que conhecer um pouco mais do produto">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </span>
                    <span>
                        <a href="https://www.instagram.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </span>
                </div>   
            </div>
        </div>
        <div class="footer-interno">
            <span>
                © TODOS OS DIREITOS RESERVADOS
            </span>
        </div>
    </footer>

    <script src="{{ asset('jquery.js') }}"></script>
    <script src="{{ asset('popper.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/anijs-min.js') }}"></script>
    <script src="{{ asset('js/anijs-helper-scrollreveal.js') }}"></script>
    <script src="{{ asset('js/collapse.js') }}"></script>
    <script src="{{asset('mask/dist/jquery.mask.js')}}"></script>
    <script src="{{asset('jquery-validation/dist/jquery.validate.js')}}"></script>
    <script>

        $(document).ready(function(){
        
            $(window).scroll(function(){
                if(this.scrollY > 80)
                    $(".header").addClass("sticky");
                else
                    $(".header").removeClass("sticky");
            });

            // $('.lado-esquerdo button').click(function (){
            //     $(this).toggleClass("active")
            //     $(".lado-direito").toggleClass("active")
            // });

        });

        var options = {
            onKeyPress: function (cpf, ev, el, op) {
                var masks = ['(00)00000-0000'],
                    mask = (cpf.length > 15) ? masks[1] : masks[0];
                el.mask(mask, op);
            }
        }

        $('#telefone').mask('000.000.000-000', options);

        (function (){

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
            messages:{

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

            console.log(configuracoes)

            $.ajax({
                url: '{{ url('/contato') }}',
                type: 'POST',
                headers: {
                    "Content-Type": "application/json",
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend : function(){
                    $("#load-more").html("<span>Enviando</span><img src='{{ asset('ajax.gif') }}'>");
                },
                data: JSON.stringify(configuracoes),
                
                sucess: function () {   
                },
                
                error: function (err) {
                    console.log("Erro ao requisitar os dados")
                    console.log(err)
                }
                
                }).done(function (resultados){
                    console.log(resultados)
                    if(resultados == 1){
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

                    }else{
                    
                    '' 
                    }
                })  
            }
        }) 
    }());

    function limpar() {
        document.getElementById('name').value="";
        document.getElementById('email').value="";
        document.getElementById('telefone').value="";
        document.getElementById('assunto').value="";
        document.getElementById('mensagem').value="";
        document.getElementById('sobrenome').value="";
        document.getElementById('retorno').hidden();
    }

    </script>
</body>
</html>
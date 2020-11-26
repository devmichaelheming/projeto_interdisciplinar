<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('index/style.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <title>Sistema de gerenciamento de mecânicas</title>
</head>
<body>
    <nav>
        <div class="header">
            <img src="{{ asset('logo.png') }}">
            <div class="header-submenus">
                <span>
                    <a href="#clientes">
                        <i class="fas fa-users"></i>
                        <span>NOSSOS CLIENTES</span>
                    </a>
                </span>
                <span>
                    <a href="#beneficios">
                        <i class="fas fa-sort-amount-up"></i>
                        <span>BENEFÍCIOS</span>
                    </a>
                </span>
                <span>
                    <a href="#contato">
                        <i class="fas fa-phone-volume"></i>
                        <span>CONTATO</span>
                    </a>
                </span>
                <span>
                    <a href="#dashboard">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>ACESSAR O SISTEMA</span>
                    </a>
                </span>
            </div>
            <button class="btn-responsive">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <div class="lado-direito">
                <span>
                    <a href="#clientes">
                        <i class="fas fa-users"></i>
                        <span>NOSSOS CLIENTES</span>
                    </a>
                </span>
                <span>
                    <a href="#beneficios">
                        <i class="fas fa-sort-amount-up"></i>
                        <span>BENEFÍCIOS</span>
                    </a>
                </span>
                <span>
                    <a href="#contato">
                        <i class="fas fa-phone-volume"></i>
                        <span>CONTATO</span>
                    </a>
                </span>
                <span>
                    <a href="#dashboard">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>ACESSAR O SISTEMA</span>
                    </a>
                </span>
                <div class="linha-dropdown">
                    <span></span>
                    <span></span>
                </div>
                <div class="contact">

                    <div class="endereco-mobile">
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

                </div>
            </div>

        </div>
    </nav>

    <div class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('banner.png') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('banner2.png') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('banner3.png') }}">
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

    <div class="informacoes">

        <div class="title-informacoes" id="clientes">
            <div class="title-info2">NOSSOS CLIENTES</div>
            <div class="linha-form-informacoes">
                <span></span>
            </div>
        </div>

        <div class="bloco-informacoes">
            <div class="informacoes-card">
                <div class="header-informacoes">
                    <div class="logo">
                        <img src="{{ asset('auto_center.png') }}">
                    </div>
                </div>
                <div class="conteudo">
                    <div class="title">AUTO CENTER SINOP!</div>
                    <div class="text">Endereço: R. Colonizador Ênio Pipino, 2205 - St. Industrial Sul, Sinop - MT, 78558-439</div>
                </div>
            </div>
            
            <div class="informacoes-card">
                <div class="header-informacoes">
                    <div class="logo">
                        <img src="{{ asset('ams.jpeg') }}">
                    </div>
                </div>
                <div class="conteudo">
                    <div class="title">AMS AUTO MECÂNICA SINOP</div>
                    <div class="text">Endereço: Av. dos Jacarandás, 165 - Jardim Jacarandas, Sinop - MT, 78557-727</div>
                </div>
            </div>

            <div class="informacoes-card">
                <div class="header-informacoes">
                    <div class="logo">
                        <img src="{{ asset('alcar.png') }}">
                    </div>
                </div>
                <div class="conteudo">
                    <div class="title">ALCAR MECÂNICA</div>
                    <div class="text">Endereço: R. Colonizador Ênio Pipino, 4211 - St. Industrial Sul, Sinop - MT, 78550-000</div>
                </div>
            </div>
            
            <div class="informacoes-card">
                <div class="header-informacoes">
                    <div class="logo">
                        <img src="{{ asset('itaubas.jpeg') }}">
                    </div>
                </div>
                <div class="conteudo">
                    <div class="title">MECÂNICA ITAÚBAS</div>
                    <div class="text">Endereço: R. das Samambaias - St. Industrial Sul, Sinop - MT, 78558-105</div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="acessar" id="dashboard">
        <div class="bloco-info-acessar">
            <div class="title-acessar">Porque escolher nosso sistema ?</div>
            <div class="conteudo-acessar">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Culpa ducimus autem voluptatem nesciunt voluptatum! Repellendus, fugit, voluptatibus magnam alias aliquam sed animi, quo deleniti aspernatur dignissimos sequi quae maxime sit!</div>
            <div class="button-acessar">
                <a href="{{ route('admin') }}">
                    <button><i class="fas fa-sign-in-alt"></i> ACESSAR O SISTEMA</button>
                </a>
            </div>
        </div>
        <div class="carrosel-acessar">


            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('sistema.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('sistema.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('sistema.png') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon2" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon2" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>


        </div>
    </div>

    <div class="info-geral">

        <div class="title-beneficios-geral">
            <div class="title-info">BENEFÍCIOS DO SISTEMA</div>
            <div class="linha-form2">
                <span></span>
            </div>
        </div>
        
        <div class="header-info" id="beneficios">
            <div class="bloco-info">
                <div class="card-info" id="financeiro">
                    <i class="fas fa-coins"></i>
                </div>
                <div class="card-info-more" id="financeiro-more">
                    <div class="title-card-info-more">CONTROLE FINANCEIRO</div>
                    <span>Controle os serviços cadastrados no sistema, exibindo de uma maneira pratica na tela de serviços: serviços finalizados, serviços em andamento, serviços extornados, previsões de lucro e quantidade total de serviços.</span>
                </div>
            </div>

            <div class="title-beneficios">
                <div class="title-info">BENEFÍCIOS DO SISTEMA</div>
                <div class="linha-form2">
                    <span></span>
                </div>
            </div>
        
            <div class="bloco-info">
                <div class="card-info" id="admin">
                    <i class="fas fa-user-lock"></i>
                </div>
                <div class="card-info-more" id="admin-more">
                    <div class="title-card-info-more">PERMISSÕES</div>
                    <span>Controle e administre os usuários cadastrados no sistema, limitando suas permissões para agir no sistema.</span>
                </div>
            </div>
        </div>

        <div class="bloco-info">
            <div class="card-info" id="servico">
                <i class="fas fa-file-pdf"></i>
            </div>
            <div class="card-info-more" id="servico-more">
                <div class="title-card-info-more">RELATÓRIOS</div>
                <span>Relatórios das informações dos serviços, e dos clientes cadastrados no sistema.</span>
            </div>
        </div>
        
    </div>
                
    <div class="contato-form" id="contato">
        <div class="contato-interno">
            <form id="form" name="form">
                <div class="title-form">ENTRE EM CONTATO CONOSCO</div>
                <div class="linha-form">
                    <span></span>
                </div>
                <div class="bloco1">
                    <div class="group">
                        <span for="name">NOME</span>
                        <input type="text" id="name" name="name" placeholder="Nome...">
                    </div>
                    <div class="group">
                        <span for="sobrenome">SOBRENOME</span>
                        <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome...">
                    </div>
                </div>
                
                <div class="bloco1">
                    <div class="group">
                        <span for="email">E-MAIL</span>
                        <input type="email" id="email" name="email" placeholder="example@example.com">
                    </div>
                    <div class="group">
                        <span for="telefone">TELEFONE</span>
                        <input type="text" id="telefone" name="telefone" placeholder="(00)0.0000-0000" onkeypress="return isNumber(event)">
                    </div>
                </div>
                
                <div class="group">
                    <span for="assunto">ASSUNTO</span>
                    <input type="text" id="assunto" name="assunto" placeholder="Assunto...">
                </div>
                <div class="group">
                    <span for="mensagem">MENSAGEM</span>
                    <textarea name="mensagem" id="mensagem" rows="6" placeholder="Insira aqui sua mensagem..."></textarea>
                </div>

                <div class="retorno" id="retorno"></div>
                <button type="submit" id="load-more"><span>Enviar</span></button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-top">
            <img src="{{ asset('logo.png') }}">
            <div class="contato-footer">
                <i class="fas fa-phone-volume"></i>
                <span>(66)3212-5236</span>
            </div>
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
            <div class="contato">
                <i class="fas fa-phone-volume"></i>
                <span>(66)3212-5236</span>
            </div>
        </div>
        <div class="linha-form3">
            <span></span>
        </div>
        <div class="footer-interno">
            <span>
                © TODOS OS DIREITOS RESERVADOS
            </span>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('mask/dist/jquery.mask.js') }}"></script>
    <script src="{{ asset('jquery-validation/dist/jquery.validate.js') }}"></script>
    <script>

        $('.header span a').click(function(e){
            e.preventDefault();
            var id = $(this).attr('href'),
                targetOffset = $(id).offset().top + -150;
            $('html, body').animate({
                scrollTop: targetOffset
            }, 400);
        });

        $(document).ready(function(){
            $(window).scroll(function(){
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

            $('.header button').click(function (){
                $(this).toggleClass("active")
                $(".lado-direito").toggleClass("active")
            });

        });

        function isNumber(evt) {
            evt = (evt) ? evt : window.event;
            var charCode = (evt.which) ? evt.which : evt.keyCode;
            if (charCode > 31 && (charCode < 48 || charCode > 57)) {
                return false;
            }
            return true;
        }

        var options = {
            onKeyPress: function (cpf, ev, el, op) {
                var masks = ['(00)0.0000-0000'],
                mask = (cpf.length > 15) ? masks[1] : masks[0];
                el.mask(mask, op);
            }
        }

        $('#telefone').mask('(00)0.0000-0000', options);

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
    }
    </script>
</body>
</html>
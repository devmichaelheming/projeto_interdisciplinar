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
        </div>
    </nav>

    <div class="informacoes" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: scrollReveal, after: holdAnimClass">
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

    <div class="info-geral">
        
        <div class="header-info">

            <div class="bloco-financeiro">
                <div class="card-info" id="financeiro">
                    <button type="button">
                        <i class="fas fa-coins"></i>
                        Controle financeiro
                    </button>
                </div>

                <div class="card-info-more" id="financeiro-more">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit reprehenderit aperiam laudantium magni commodi vitae aliquid, repudiandae quaerat quibusdam in ex, et ipsam explicabo voluptatum tenetur minima delectus optio?
                    </span>
                </div>

            </div>

            <div class="bloco-clientes">

                <div class="card-info" id="clientes">
                    <button type="button">
                        <i class="fas fa-file-pdf"></i>
                        Relátorios de clientes
                    </button>
                </div>

                <div class="card-info-more" id="clientes-more">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit reprehenderit aperiam laudantium magni commodi vitae aliquid, repudiandae quaerat quibusdam in ex, et ipsam explicabo voluptatum tenetur minima delectus optio?
                    </span>
                </div>

            </div>

            <div class="bloco-servico">

                <div class="card-info" id="servico">
                    <button type="button">
                        <i class="fas fa-file-pdf"></i>
                        Relátorios de serviços
                    </button>
                </div>

                <div class="card-info-more" id="servico-more">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit reprehenderit aperiam laudantium magni commodi vitae aliquid, repudiandae quaerat quibusdam in ex, et ipsam explicabo voluptatum tenetur minima delectus optio?
                    </span>
                </div>

            </div>
            
            <div class="bloco-admin">

                <div class="card-info" id="admin">
                    <button type="button">
                        <i class="fas fa-user-lock"></i>
                        Permissões para administradores
                    </button>
                </div>

                 <div class="card-info-more" id="admin-more">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit reprehenderit aperiam laudantium magni commodi vitae aliquid, repudiandae quaerat quibusdam in ex, et ipsam explicabo voluptatum tenetur minima delectus optio?
                    </span>
                </div>

            </div>
            
        </div>

    </div>

    <div class="informacoes" data-anijs="if: scroll, on: window, do: fadeInLeft animated, before: scrollReveal, after: holdAnimClass">
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
{{-- 
    <div class="banner">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('banner.png') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('banner.png') }}">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('banner.png') }}">
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
    </div> --}}

    <script src="{{ asset('jquery.js') }}"></script>
    <script src="{{ asset('popper.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/anijs-min.js') }}"></script>
    <script src="{{ asset('js/anijs-helper-scrollreveal.js') }}"></script>
    <script>
    
    $('#financeiro').mouseenter(function(){
        $('#financeiro-more').addClass('more');
    })
    $('#financeiro').mouseleave(function(){
        $('#financeiro-more').removeClass('more');
    })

    $('#clientes').mouseenter(function(){
        $('#clientes-more').addClass('more');
    })
    $('#clientes').mouseleave(function(){
        $('#clientes-more').removeClass('more');
    })

    $('#servico').mouseenter(function(){
        $('#servico-more').addClass('more');
    })
    $('#servico').mouseleave(function(){
        $('#servico-more').removeClass('more');
    })

    $('#admin').mouseenter(function(){
        $('#admin-more').addClass('more')
    })
    $('#admin').mouseleave(function(){
        $('#admin-more').removeClass('more');
    })
    </script>
</body>
</html>
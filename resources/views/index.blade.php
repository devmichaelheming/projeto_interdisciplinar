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
        
        <div class="title-info">NOSSOS PRODUTOS</div>

        <div class="header-info">

            <div class="bloco-financeiro" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal, after: holdAnimClass">
                <div class="card-info" id="financeiro">
                    <button type="button">
                        <i class="fas fa-coins"></i>
                        <span>Controle financeiro</span>
                    </button>
                </div>

                <div class="card-info-more" id="financeiro-more">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit reprehenderit aperiam laudantium magni commodi vitae aliquid, repudiandae quaerat quibusdam in ex, et ipsam explicabo voluptatum tenetur minima delectus optio?
                    </span>
                </div>

            </div>

            <div class="bloco-clientes" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal, after: holdAnimClass">

                <div class="card-info" id="clientes">
                    <button type="button">
                        <i class="fas fa-file-pdf"></i>
                        <span>Relátorios de clientes</span>
                    </button>
                </div>

                <div class="card-info-more" id="clientes-more">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit reprehenderit aperiam laudantium magni commodi vitae aliquid, repudiandae quaerat quibusdam in ex, et ipsam explicabo voluptatum tenetur minima delectus optio?
                    </span>
                </div>

            </div>

            <div class="bloco-servico" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal, after: holdAnimClass">

                <div class="card-info" id="servico">
                    <button type="button">
                        <i class="fas fa-file-pdf"></i>
                        <span>Relátorios de serviços</span>
                    </button>
                </div>

                <div class="card-info-more" id="servico-more">
                    <span>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptas impedit reprehenderit aperiam laudantium magni commodi vitae aliquid, repudiandae quaerat quibusdam in ex, et ipsam explicabo voluptatum tenetur minima delectus optio?
                    </span>
                </div>

            </div>
            
            <div class="bloco-admin" data-anijs="if: scroll, on: window, do: fadeInUp animated, before: scrollReveal, after: holdAnimClass">

                <div class="card-info" id="admin">
                    <button type="button">
                        <i class="fas fa-user-lock"></i>
                        <span>Permissões para administradores</span>
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

    <div class="contato-form">
        <div class="contato-interno" >
            <form action="" id="form" method="POST" data-anijs="if: scroll, on: window, do: zoomIn animated, before: scrollReveal, after: holdAnimClass">
                <div class="bloco1">
                    <div class="group">
                        <label for="name">NOME</label>
                        <input type="text" id="name" name="name" placeholder="nome">
                    </div>
                    <div class="group">
                        <label for="sobrenome">SOBRENOME</label>
                        <input type="text" id="sobrenome" name="sobrenome" placeholder="sobrenome">
                    </div>
                </div>
                
                <div class="bloco1">
                    <div class="group">
                        <label for="email">E-MAIL</label>
                        <input type="email" id="email" name="email" placeholder="example@example.com">
                    </div>
                    <div class="group">
                        <label for="telefone">TELEFONE</label>
                        <input type="text" id="telefone" name="telefone" placeholder="(00)00000-0000" onkeypress="return isNumber(event)">
                    </div>
                </div>
                
                <div class="group">
                    <label for="assunto">ASSUNTO</label>
                    <input type="text" id="assunto" name="assunto" placeholder="assunto">
                </div>
                <div class="group">
                    <label for="mensagem">MENSAGEM</label>
                    <textarea name="mensagem" id="mensagem" rows="6" placeholder="Insira aqui sua mensagem"></textarea>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-top">
            <div class="title-footer-top">
                REDES SOCIAIS
            </div>
            <div class="conteudo-footer-top">
                <span>
                    <a href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </span>
                <div class="linha"></div>
                <span>
                    <a href="https://api.whatsapp.com/send?phone=556633920717&text=Olá, gostaria de que conhecer um pouco mais do produto">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </span>
                <div class="linha"></div>
                <span>
                    <a href="https://www.instagram.com/">
                        <i class="fab fa-instagram"></i>
                    </a>
                </span>
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
    <script>
        var options = {
            onKeyPress: function (cpf, ev, el, op) {
                var masks = ['(00)00000-0000'],
                    mask = (cpf.length > 15) ? masks[1] : masks[0];
                el.mask(mask, op);
            }
        }

        $('#telefone').mask('000.000.000-000', options);
    </script>
</body>
</html>
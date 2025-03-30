<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samuka Editor</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <style>
        body {
            background-color: #141414;
            color: #fff;
            font-family: 'Roboto', sans-serif;
            background-image: url(img/fundo.svg);
        }

        .primary-color {
            background-color: #141414 !important;
        }

        .secondary-color {
            background-color: #2BFF06 !important;
        }

        .secondary-text {
            color: #2BFF06 !important;
        }

        .btn-custom {
            background-color: #2BFF06 !important;
            border-radius: 25px;
            padding: 0 20px;
        }

        #projects {
            background-image: url(img/fundo2.svg);
        }

        .divider-custom {
            height: 3px;
            background: linear-gradient(to right, #2BFF06, transparent);
            border: none;
            margin: 20px 0;
        }

        .icon-box {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            color: #fff;
        }

        .icon-box i {
            font-size: 48px;
            margin-bottom: 10px;
        }

        .navbar-fixed {
            position: sticky;
            top: 0;
            z-index: 999;
        }

        /* Estilos para os vídeos ajustáveis */
        .video-card iframe {
            border-radius: 10px;
        }

        .video-card {
            overflow: hidden;
            border-radius: 10px;
        }

        /* Para os vídeos se ajustarem ao tamanho da tela */
        .video-card .card-image {
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
            overflow: hidden;
        }

        .video-card iframe {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        /* Ajuste de responsividade para telas menores */
        @media screen and (max-width: 600px) {
            .video-card iframe {
                width: 100%;
                height: auto;
            }
        }

        /* Para garantir que todas as imagens tenham o mesmo tamanho */
        .design-card .card-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px;
            overflow: hidden;
        }

        .design-card .card-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .testimonial {
            text-align: center;
            padding: 20px;
            border: 1px solid #2BFF06;
            border-radius: 10px;
            margin: 10px;
            background-color: #1d1d1d;
        }

        .testimonial p {
            font-style: italic;
        }

        .testimonial h5 {
            margin-top: 15px;
        }

        [data-aos^="fade"][data-aos^="fade"] {
            opacity: 1 !important;
            /* Corrige a opacidade inicial */
            transition-property: opacity, transform;
        }

        /* Borda Neon */
        .border {
            border: 2px solid #2BFF06;
            box-shadow: 0 0 10px #2BFF06, 0 0 20px #2BFF06, 0 0 30px #2BFF06;
        }

        /* Efeitos de animação */
        .fadeIn {
            animation: fadeIn 2s ease-in-out;
        }

        .zoomIn {
            animation: zoomIn 1.5s ease-in-out;
        }

        /* Keyframes para animações */
        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        @keyframes zoomIn {
            0% {
                transform: scale(0.9);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        .responsive-audio {
            width: 100%;
            margin-top: 10px;
            /* Adiciona um pequeno espaço entre o GIF e o player */
        }

        .card-content {
            text-align: center;
            /* Centraliza o conteúdo do áudio */
            padding: 10px;
            /* Adiciona um pouco de preenchimento */
        }

        .responsive-video {
            width: 100%;
            height: auto;
            object-fit: contain;
            /* Ou 'contain', se você preferir não cortar o vídeo */
        }

        video {
            width: 100%;
            height: auto;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="navbar-fixed">
        <nav class="primary-color">
            <div class="nav-wrapper container">
                <a href="#" class="brand-logo secondary-text">Samuka Editor</a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="fas fa-bars"></i></a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="#about" class="secondary-text">Sobre Mim</a></li>
                    <li><a href="#projects" class="secondary-text">Videos</a></li>
                    <li><a href="#designs" class="secondary-text">Designs</a></li>
                    <li><a href="#testimonials" class="secondary-text">Depoimentos</a></li>
                    <li><a href="#contact" class="secondary-text">Contato</a></li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Sidenav para dispositivos móveis -->
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#about" class="secondary-text">Sobre Mim</a></li>
        <li><a href="#projects" class="secondary-text">Videos</a></li>
        <li><a href="#designs" class="secondary-text">Designs</a></li>
        <li><a href="#testimonials" class="secondary-text">Depoimentos</a></li>
        <li><a href="#contact" class="secondary-text">Contato</a></li>
    </ul>

    <!-- Seção Sobre Mim -->
    <section id="about" class="section scrollspy fadeIn" data-aos="fade-up">
        <div class="container">
            <div class="row valign-wrapper">
                <div class="col s12 m4 center-align">
                    <img src="img/samuka.png" alt="Minha Foto" class="responsive-img circle border">
                </div>
                <div class="col s12 m6">
                    <h2 class="white-text">Samuka Editor</h2>
                    <hr class="divider-custom">
                    <p>Sou um editor de vídeo criativo e experiente, com 19 anos e domínio em ferramentas como Adobe
                        Premiere, Sony Vegas, Canva e Photoshop. Tenho expertise em edição dinâmica
                        para redes sociais e criação de conteúdos que engajam públicos no TikTok, Instagram e YouTube.
                    </p>
                    <a href="#contact" class="btn btn-custom zoomIn">Entre em Contato</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Projetos -->
    <section id="projects" class="section scrollspy secondary-color" data-aos="fade-up">
        <div class="container">
            <h2 class="white-text center">Meus Projetos</h2>
            <hr class="divider-custom">
            <div class="row">
                <!-- Filtros para projetos -->
                <div class="col s12">
                    <ul class="tabs tabs-fixed-width">
                        <li class="tab col s3"><a href="#all" class="secondary-text">Todos</a></li>
                        <li class="tab col s3"><a href="#redes" class="secondary-text">Redes Sociais</a></li>
                        <li class="tab col s3"><a href="#comercial" class="secondary-text">Comerciais</a></li>
                    </ul>
                </div>
            </div>

            <!-- Seção de Todos -->
            <div id="all" class="col s12">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls lass="responsive-video">
                                    <source src="img/principal.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/santorini.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/edicao_dinamica.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/gringo.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/editorcomercial.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/black.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seção de Redes Sociais -->
            <div id="redes" class="col s12">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/edicao_dinamica.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/gringo.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/black.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Seção Comercial -->
            <div id="comercial" class="col s12">
                <div class="row">
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/santorini.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/editorcomercial.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card primary-color hoverable video-card">
                            <div class="card-image">
                                <video controls>
                                    <source src="img/principal.mp4" type="video/mp4">
                                    Seu navegador não suporta o formato de vídeo.
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Seção Designs -->
    <section id="designs" class="section scrollspy" data-aos="fade-up">
        <div class="container">
            <h2 class="white-text center">Meus Designs</h2>
            <hr class="divider-custom">
            <div class="carousel">
                <a class="carousel-item" href="#"><img src="img/design_torcidas_city.png"></a>
                <a class="carousel-item" href="#"><img src="img/designer_3_torcidas.png"></a>
                <a class="carousel-item" href="#"><img src="img/download.gif"></a>
                <a class="carousel-item" href="#"><img src="img/elevador_II.png"></a>
                <a class="carousel-item" href="#"><img src="img/felca_e_sua_seita_vieram_me_pegar.png"></a>
                <a class="carousel-item" href="#"><img src="img/thumbuser657.png"></a>
            </div>
        </div>
    </section>

    <!-- Seção Depoimentos -->
    <section id="testimonials" class="section scrollspy" data-aos="fade-up">
        <div class="container">
            <h2 class="white-text center">Depoimentos</h2>
            <hr class="divider-custom">
            <div class="row">
                <div class="col s12 m4">
                    <div class="testimonial">
                        <p>"Trabalho incrível! Meu vídeo teve um aumento enorme no engajamento."</p>
                        <h5>- Lorenzo Marty</h5>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="testimonial">
                        <p>"Recomendo demais, o resultado final ficou acima do esperado."</p>
                        <h5>- Mônica Estética</h5>
                    </div>
                </div>
                <div class="col s12 m4">
                    <div class="testimonial">
                        <p>"Excelente profissional, entregou tudo antes do prazo!"</p>
                        <h5>- Santorini Trinks Studio</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seção Contato -->
    <section id="contact" class="section scrollspy" data-aos="fade-up">
        <div class="container">
            <h2 class="white-text center">Contato</h2>
            <hr class="divider-custom">
            <div class="row">
                <div class="col s12 m4 icon-box">
                    <a href="https://discord.com/users/1272056941547491430" class="white-text" target="_blank">
                        <i class="fab fa-discord"></i>
                        <p>Discord
                    </a></p>
                </div>
                <div class="col s12 m4 icon-box">
                    <a href="https://www.instagram.com/samueditor21" class="white-text" target="_blank">
                        <i class="fab fa-instagram"></i>
                        <p>Instagram
                    </a>
                    </p>
                </div>
                <div class="col s12 m4 icon-box">
                    <a href="https://www.youtube.com/@SamuelEditorBinapse" class="white-text" target="_blank">
                        <i class="fab fa-youtube"></i>
                        <p>YouTube
                    </a></p>
                </div>
            </div>
        </div>
    </section>


    <!-- Rodapé -->
    <footer class="primary-color">
        <div class="container center-align">
            <p>&copy; 2024 Meu Portfólio de Edição de Vídeo. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Importando Materialize JS e AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.3.1/dist/aos.js"></script>
    <script>
        // Inicializa o efeito parallax do Materialize
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.parallax');
            M.Parallax.init(elems);

            // Inicializa o carousel
            var carouselElems = document.querySelectorAll('.carousel');
            M.Carousel.init(carouselElems, {
                fullWidth: true, // Isso garante que o carousel ocupe toda a largura da tela
                indicators: true // Isso adiciona os indicadores de navegação
            });
        });

        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
        });
        document.addEventListener('DOMContentLoaded', function () {
            // Inicializa o efeito parallax do Materialize
            var elems = document.querySelectorAll('.parallax');
            M.Parallax.init(elems);

            // Inicializa as abas
            var elemsTabs = document.querySelectorAll('.tabs');
            M.Tabs.init(elemsTabs);

            // Inicializa o carousel
            var carouselElems = document.querySelectorAll('.carousel');
            M.Carousel.init(carouselElems, {
                fullWidth: true,
                indicators: true
            });

            // AOS Init
            AOS.init({
                duration: 1000,
                easing: 'ease-in-out',
                once: true,
            });
        });

    </script>
</body>

</html>
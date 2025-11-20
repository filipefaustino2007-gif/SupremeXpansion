<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SupremeXpansion - Capturamos a Realidade</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="../img/icon.png">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/index.css">
    <script src="../js/index.js" defer></script>
</head>
<body>
    <?php include 'cabecalho.php'; ?>


    <!-- Slideshow -->
    <section class="slideshow-container">

        <!-- Slide 1 -->
        <div class="slide fade active">
            <img src="../img/index1.png" alt="Laser Scan e Levantamentos 3D">
            <div class="text-box">
                <h1>LASER SCAN E LEVANTAMENTOS 3D</h1>
                <br>
                <p>Laser Scanning e Nuvens de Pontos são tecnologias avançadas que permitem capturar com precisão a forma e as dimensões dos objetos em 3D.</p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide fade">
            <img src="../img/index2.png" alt="Desenho 2D e Modelação 3D">
            <div class="text-box">
                <h1>DESENHO 2D E MODELAÇÃO 3D</h1>
                <br>
                <p>Desenhamos e Modelamos através de nuvens de pontos ou qualquer outro método disponível e desejado.</p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide fade">
            <img src="../img/index3.png" alt="UAV/Drone Fotogrametria">
            <div class="text-box">
                <h1>UAV/DRONE FOTOGRAMETRIA</h1>
                <br>
                <p>A fotogrametria é a arte e ciência de extrair medições precisas e informações tridimensionais a partir de imagens bidimensionais.</p>
            </div>
        </div>

        <!-- Botões de navegação -->
        <div class="slide-controls">
            <button class="prev">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="next">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>
    </section>

    <!-- Secção dos Serviços -->
    <section class="services-gallery">
        <div class="service-card">
            <img src="../img/laserscan.png" alt="Laser Scan e Levantamentos 3D">
            <div class="service-overlay">
                <h2>Laser Scan e Levantamentos 3D</h2>
                <p>
                    Realizamos levantamentos arquitetónicos, patrimoniais, comerciais e industriais.
                    Produzimos As-Builts detalhados e oferecemos monitorização especializada de edifícios históricos.
                </p>
            </div>
        </div>

        <div class="service-card">
            <img src="../img/index2.png" alt="Desenho 2D e Modelação 3D">
            <div class="service-overlay">
                <h2>Desenho 2D e Modelação 3D</h2>
                <p>
                    Elaboramos plantas, cortes e alçados em DWG. Trabalhamos com modelação 3D em múltiplos softwares,
                    incluindo processos em BIM (Building Information Modeling).
                </p>
            </div>
        </div>

        <div class="service-card">
            <img src="../img/index3.png" alt="UAV/Drone Fotogrametria">
            <div class="service-overlay">
                <h2>UAV/Drone Fotogrametria</h2>
                <p>
                    Oferecemos apoio a levantamentos topográficos, fotogrametria industrial e residencial,
                    além da criação de modelos 3D virtuais e modelos digitais de terreno (MDT).
                </p>
            </div>
        </div>
    </section>

    <!-- Por que escolher trabalhar com a SupremeXpansion -->
    <section class="why-supreme">
        <div class="video-side">
            <video src="../img/scan_to_3d_model.mp4" autoplay muted loop playsinline></video>
        </div>

        <div class="text-side">
            <a class="h1_video"><strong>Por que escolher trabalhar</strong> com a SupremeXpansion?</a>

            <div class="topics">
                <p><a href="sobre.php#experiencia" class="subtitulo">Experiência e Qualidade de Trabalho</a> - Mais de 25 anos de experiência e tecnologia de ponta garantem precisão e detalhe em cada levantamento e modelo 3D.</p>
                <br>
                <p><a href="sobre.php#tecnologia" class="subtitulo">Tecnologia e Ferramentas</a> - Utilizamos tecnologias 2D e 3D avançadas, entregando resultados fiáveis, eficientes e prontos a integrar nos seus projetos.</p>
                <br>
                <p><a href="sobre.php#preco" class="subtitulo">Preço Acessível</a> - Qualidade técnica a preços justos, ajustados a projetos de qualquer dimensão — de pequenas reabilitações a grandes empreendimentos.</p>
                <br>
                <p><a href="sobre.php#suporte" class="subtitulo">Excelente Suporte ao Cliente</a> - Acompanhamento próximo e transparente em todas as fases, com apoio contínuo e total dedicação ao cliente.</p>
            </div>
        </div>
    </section>

    <!-- Secção Portfolio -->
    <section class="portfolio-showcase">
        <div class="portfolio-showcase-header">
            <strong><h2>Portfolio</h2></strong>

            <a href="portfolio.php" class="btn-portfolio-outline">
                VER TODOS
            </a>
        </div>

        <div class="portfolio-strip-carousel">
            <div class="portfolio-strip-track">
            <div class="portfolio-item">
                <img src="../img/img1.png" alt="Projeto North Finchley UK">
                <strong><div class="portfolio-caption">Projeto North Finchley UK</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img2.png" alt="Herdade Alentejo">
                <strong><div class="portfolio-caption">Levantamento Urbano</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img3.png" alt="Estádio Municipal de Coimbra">
                <strong><div class="portfolio-caption">Estádio Municipal de Coimbra</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img4.png" alt="Destilaria da Longra">
                <strong><div class="portfolio-caption">Destilaria da Longra</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img5.png" alt="Armazéns Cofersan">
                <strong><div class="portfolio-caption">Armazéns Cofersan</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img6.png" alt="Remodelação de Predio">
                <strong><div class="portfolio-caption">Remodelação de Predio</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img7.png" alt="Taberna do Quinzena">
                <strong><div class="portfolio-caption">Taberna do Quinzena</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img8.png" alt="Ruina">
                <strong><div class="portfolio-caption">Ruina</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img9.png" alt="Projeto Moradia">
                <strong><div class="portfolio-caption">Projeto Moradia</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img10.png" alt="Levantamento Moradia">
                <strong><div class="portfolio-caption">Levantamento Moradia</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img11.png" alt="Levantamento de Armazém">
                <strong><div class="portfolio-caption">Levantamento de Armazém</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img12.png" alt="Fábrica Alimentar">
                <strong><div class="portfolio-caption">Fábrica Alimentar</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img13.png" alt="Confragem Ponte">
                <strong><div class="portfolio-caption">Confragem Ponte</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img14.png" alt="CNEMA">
                <strong><div class="portfolio-caption">CNEMA</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img15.png" alt="Moradia Santarém">
                <strong><div class="portfolio-caption">Moradia Santarém</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img16.png" alt="Linhas de Vapor em Cardiff UK">
                <strong><div class="portfolio-caption">Linhas de Vapor em Cardiff UK</div></strong>
            </div>
            <div class="portfolio-item">
                <img src="../img/img17.png" alt="Mapeamento Drone Londres UK">
                <strong><div class="portfolio-caption">Mapeamento Drone Londres UK</div></strong>
            </div>
        </div>
        </div>
    </section>

        <!-- Secção de Contacto -->
    <section class="contact-footer">
        <div class="contact-footer-content">
            <h2 class="contact-footer-title">Entre em contacto</h2>
            <p class="contact-footer-subtitle">
                Para qualquer questão ou esclarecimentos, entre em contacto connosco.
            </p>
            <a href="contactos.php" class="btn-contactar-outline">CONTACTOS</a>
        </div>
    </section>

    <?php include 'rodape.php'; ?>
    
</body>
</html>



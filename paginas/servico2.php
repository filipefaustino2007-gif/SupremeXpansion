<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desenho 2D e Modelação 3D - SupremeXpansion</title>
    <link rel="icon" type="image/png" href="../img/icon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/servico2.css">
</head>
<body>
    <?php include 'cabecalho.php'; ?>

    <!-- TOPO -->
    <section class="servico-topo">
        <img src="../img/index2.png" alt="Vista aérea com modelação 3D" class="servico-topo-img">
        <div class="servico-topo-texto">
            <strong><h1>Desenho 2D e Modelação 3D</h1></strong>
        </div>
    </section>

    <!-- INTRODUÇÃO -->
    <section class="servico-introducao">
        <div class="servico-introducao-texto">
            <h2>Desenho 2D e Modelação 3D</h2>
            <p>
                Combinamos desenho técnico 2D e modelação 3D para criar representações precisas e realistas de espaços e
                estruturas. Estas ferramentas permitem visualizar, planear e comunicar projetos com eficiência - desde plantas e
                cortes até modelos tridimensionais detalhados.
            </p>
        </div>

        <div class="servico-introducao-imagem">
            <img src="../img/modelacao3d.png" alt="Desenho técnico de planta arquitetónica">
        </div>
    </section>

    <!-- PLANTAS, CORTES E ALÇADOS -->
    <section class="servico-plantas">
        <div class="servico-plantas-imagem">
            <img src="../img/desenho_planta.png" alt="Detalhe de fachada arquitetónica">
        </div>

        <div class="servico-plantas-texto">
            <h2>Plantas, Cortes e Alçados</h2>
            <p>
                Criamos desenhos técnicos detalhados e precisos, adaptados às necessidades de cada cliente. A nossa equipa alia
                experiência em modelação 3D com rigor de desenho 2D, garantindo resultados fiáveis, entregues dentro dos prazos e
                orçamentos acordados.
            </p>
        </div>
    </section>

    <!-- MODELACAO 3D -->
    <section class="servico-modelacao">
        <div class="servico-modelacao-texto">
            <h2>Modelação 3D</h2>
            <p>
                Criamos modelos 3D precisos e realistas, adaptados às necessidades de cada projeto. Combinamos tecnologia avançada com uma equipa experiente em arquitetura, engenharia e design, garantindo qualidade, cumprimento de prazos e total satisfação dos nossos clientes.
            </p>
        </div>

        <div class="servico-modelacao-grelha">
            <div class="modelacao-grid">
                <img class="gallery-item" src="../img/servico3_1.png" alt="Modelo 3D de complexo urbano">
                <img class="gallery-item" src="../img/servico3_2.png" alt="Modelo 3D de infraestrutura industrial">
                <img class="gallery-item" src="../img/servico3_3.png" alt="Modelo 3D de interior arquitetónico">
                <img class="gallery-item" src="../img/servico3_4.png" alt="Modelo 3D de equipamento técnico">
            </div>
        </div>
    </section>

    <!-- POPUP IMAGENS (COMUM À PÁGINA) -->
    <div id="imagePopup" class="image-popup" aria-hidden="true">
        <div class="popup-content" role="dialog" aria-modal="true">
            <button class="close-btn" aria-label="Fechar">&times;</button>
            <button class="nav-btn prev" aria-label="Anterior">&#10094;</button>
            <img id="popupImage" src="" alt="Imagem Ampliada">
            <button class="nav-btn next" aria-label="Seguinte">&#10095;</button>
            <div class="popup-caption" id="popupCaption"></div>
        </div>
    </div>

        <!-- GALERIA EM GRELHA -->
        <section class="galeria-catalogo" data-gallery="servico3">
        <!-- Topo: 1ª e 2ª linha (6 + 6) -->
        <div class="galeria-grid galeria-grid-top">
            <!-- Linha 1 -->
            <img class="grid-img gallery-item" src="../img/servico3_5.png"  alt="Galeria 1">
            <img class="grid-img gallery-item" src="../img/servico3_6.png"  alt="Galeria 2">
            <img class="grid-img gallery-item" src="../img/servico3_7.png"  alt="Galeria 3">
            <img class="grid-img gallery-item" src="../img/servico3_8.png"  alt="Galeria 4">
            <img class="grid-img gallery-item" src="../img/servico3_9.png"  alt="Galeria 5">
            <img class="grid-img gallery-item" src="../img/servico3_10.png" alt="Galeria 6">

            <!-- Linha 2 -->
            <img class="grid-img gallery-item" src="../img/servico3_11.png" alt="Galeria 7">
            <img class="grid-img gallery-item" src="../img/servico3_12.png" alt="Galeria 8">
            <img class="grid-img gallery-item" src="../img/servico3_13.png" alt="Galeria 9">
            <img class="grid-img gallery-item" src="../img/servico3_14.png" alt="Galeria 10">
            <img class="grid-img gallery-item" src="../img/servico3_15.png" alt="Galeria 11">
            <img class="grid-img gallery-item" src="../img/servico3_16.png" alt="Galeria 12">
        </div>

        <!-- Fundo: 3ª linha (5 imagens maiores) -->
        <div class="galeria-grid galeria-grid-bottom">
            <img class="grid-img gallery-item" src="../img/servico3_17.png" alt="Galeria 13">
            <img class="grid-img gallery-item" src="../img/servico3_18.png" alt="Galeria 14">
            <img class="grid-img gallery-item" src="../img/servico3_19.png" alt="Galeria 15">
            <img class="grid-img gallery-item" src="../img/servico3_20.png" alt="Galeria 16">
            <img class="grid-img gallery-item" src="../img/servico3_21.png" alt="Galeria 17">
        </div>
    </section>


    <!-- CONTACTOS -->
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

    <!-- JS -->
    <script src="../js/servico3.js"></script>
</body>
</html>

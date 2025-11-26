<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laser Scan e Levantamentos 3D - SupremeXpansion</title>
    <link rel="icon" type="image/png" href="../img/icon.png">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/servico1.css">
</head>
<body>
    <?php include 'cabecalho.php'; ?>

    <!-- Topo -->
    <section class="servico-topo">
        <img src="../img/index1.png" alt="Laser Scan e Levantamentos 3D" class="servico-topo-img">
        <div class="servico-topo-texto">
            <strong><h1>Laser Scan e Levantamentos 3D</h1></strong>
        </div>
    </section>

    <!-- Secção Laser Scanning -->
    <section class="servico-conteudo">
        <div class="servico-media">
            <video src="../img/3d_laser_scanning.mp4" autoplay muted loop playsinline></video>
        </div>

        <div class="servico-texto">
            <h2>Laser Scanning e Nuvens de Pontos</h2>
            <p>
                O laser scanning capta milhões de pontos em segundos, criando nuvens de pontos 3D altamente precisas.
                Esta tecnologia permite modelar e documentar com rigor qualquer espaço físico - ideal para projetos de
                arquitetura, engenharia e construção.
            </p>
        </div>
    </section>

    <!-- Secção Levantamentos Arquitetónicos -->
    <section class="servico-arquitetonicos">
        <div class="servico-arquitetonicos-texto">
            <h2>Levantamentos Arquitetónicos</h2>
            <p>
                Somos especialistas em levantamentos por laser scanning, criando nuvens de pontos precisas
                para gerar modelos 3D, plantas e elevações detalhadas. A nossa equipa experiente trabalha
                lado a lado com os clientes para garantir soluções adaptadas a cada projeto.
            </p>
        </div>

        <div class="servico-arquitetonicos-img">
            <img src="../img/arquitetonicos.png" alt="Levantamentos Arquitetónicos">
        </div>
    </section>

    <!-- Secção Levantamentos de Interiores, Exteriores e Arruamentos -->
    <section class="servico-levantamentos">
        <div class="servico-levantamentos-esquerda">
            <img src="../img/lev_ext.png" alt="Levantamentos de Interiores e Exteriores">
        </div>

        <div class="servico-levantamentos-direita">
            <h2>Levantamentos de Interiores, Exteriores e Arruamentos</h2>
            <p>
                Utilizamos laser scanning para mapear com alta precisão espaços interiores, exteriores e arruamentos.
                Criamos modelos 3D detalhados que apoiam projetos de arquitetura, engenharia, planeamento urbano, 
                reabilitação e conservação. Dos interiores de edifícios às ruas e praças, entregamos dados fiáveis 
                para análise, projeto e <br>tomada de decisão.
            </p>
        </div>
    </section>

    <!-- Secção Criação de As-Builts -->
    <section class="servico-asbuilts">
        <div class="servico-asbuilts-texto">
            <h2>Criação de As-Builts</h2>
            <p>
                Produzimos documentação técnica precisa do estado real da construção, ideal para reabilitações, ampliações 
                ou alterações. Os nossos As-Builts incluem plantas, cortes, elevações e detalhes construtivos fiéis à obra 
                executada, servindo de base sólida para qualquer intervenção futura.
            </p>
        </div>

        <div class="servico-asbuilts-imagem">
            <img src="../img/point_cloud.png" alt="Criação de As-Builts">
        </div>
    </section>

    <!-- Secção Monitorização de Edifícios Históricos -->
    <section class="servico-monitorizacao">
        <div class="monitorizacao-imagens">
            <div class="img-grid">
                <!-- Estas 4 entram no mesmo popup e antes das restantes -->
                <img class="gallery-item" src="../img/index1.png"       alt="Monitorização 1">
                <img class="gallery-item" src="../img/laserscan.png"    alt="Monitorização 2">
                <img class="gallery-item" src="../img/Point_Clouds3.png" alt="Monitorização 3">
                <img class="gallery-item" src="../img/Point_Cloud4.png"  alt="Monitorização 4">
            </div>
        </div>

        <div class="monitorizacao-texto">
            <h2>Monitorização de Edifícios Históricos</h2>
            <p>
                Recorremos ao laser scanning para monitorizar edifícios históricos com elevada precisão.
                Esta tecnologia permite detetar alterações estruturais ao longo do tempo e apoia a conservação
                e restauração com modelos 3D detalhados e fiéis à realidade, essenciais para garantir a segurança
                e longevidade do património.
            </p>
        </div>
    </section>

    <!-- Popup de Imagem (comum a toda a página) -->
    <div id="imagePopup" class="image-popup" aria-hidden="true">
        <div class="popup-content" role="dialog" aria-modal="true">
            <button class="close-btn" aria-label="Fechar">&times;</button>
            <button class="nav-btn prev" aria-label="Anterior">&#10094;</button>
            <img id="popupImage" src="" alt="Imagem Ampliada">
            <button class="nav-btn next" aria-label="Seguinte">&#10095;</button>
            <div class="popup-caption" id="popupCaption"></div>
        </div>
    </div>

    <!-- Galeria em Grelha (continuação da mesma galeria; mantém a ordem) -->
    <section class="galeria-catalogo" data-gallery="servico1">
        <div class="galeria-grid">
            <!-- Linha 1 -->
            <img class="grid-img gallery-item" src="../img/lev5.png"            alt="Item 5">
            <img class="grid-img gallery-item" src="../img/arquitetonicos.png"  alt="Item 6">
            <img class="grid-img gallery-item" src="../img/lev7.png"            alt="Item 7">
            <img class="grid-img gallery-item" src="../img/index1.png"          alt="Item 8">
            <img class="grid-img gallery-item" src="../img/lev9.png"            alt="Item 9">
            <img class="grid-img gallery-item" src="../img/laserscan.png"       alt="Item 10">

            <!-- Linha 2 -->
            <img class="grid-img gallery-item" src="../img/lev11.png"           alt="Item 11">
            <img class="grid-img gallery-item" src="../img/Point_Clouds3.png"   alt="Item 12">
            <img class="grid-img gallery-item" src="../img/point_cloud.png"     alt="Item 13">
            <img class="grid-img gallery-item" src="../img/Point_Cloud4.png"    alt="Item 14">
            <img class="grid-img gallery-item" src="../img/lev15.png"           alt="Item 15">
            <img class="grid-img gallery-item" src="../img/lev16.png"           alt="Item 16">

            <!-- Linha 3 -->
            <img class="grid-img gallery-item" src="../img/lev17.png"           alt="Item 17">
            <img class="grid-img gallery-item" src="../img/lev18.png"           alt="Item 18">
            <img class="grid-img gallery-item" src="../img/lev19.png"           alt="Item 19">
            <img class="grid-img gallery-item" src="../img/lev20.png"           alt="Item 20">
            <img class="grid-img gallery-item" src="../img/lev21.png"           alt="Item 21">
            <img class="grid-img gallery-item" src="../img/lev22.png"           alt="Item 22">

            <!-- Linha 4 (largas) -->
            <img class="grid-img wide-2 gallery-item" src="../img/lev23.png"    alt="Item 23">
            <img class="grid-img wide-2 gallery-item" src="../img/lev24.png"    alt="Item 24">
            <img class="grid-img wide-2 gallery-item" src="../img/lev25.png"    alt="Item 25">
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
    <script src="../js/servico1.js"></script>
</body>
</html>

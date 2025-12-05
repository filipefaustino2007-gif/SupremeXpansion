<?php

include_once __DIR__ . '/i18n.php';
include_once __DIR__ . '/language_utils.php';

// Carregar línguas disponíveis e língua atual
$availableLanguages = getAvailableLanguages();          // vem do language_utils.php
$currentLang = resolveLanguageCode($_SESSION['lang'] ?? 'pt');

// Fallbacks de segurança caso algo venha marado
if (!is_array($availableLanguages) || empty($availableLanguages)) {
    $availableLanguages = ['pt' => 'Português'];
}
if (!isset($availableLanguages[$currentLang])) {
    $currentLang = array_key_first($availableLanguages);
}

// Opções para o dropdown (todas menos a atual)
$languageOptions = array_filter(
    $availableLanguages,
    fn($label, $code) => $code !== $currentLang,
    ARRAY_FILTER_USE_BOTH
);

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= t('servico2.meta_title') ?></title>
    <link rel="icon" type="image/png" href="/img/icon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/cabecalho.css">
    <link rel="stylesheet" href="/css/servico2.css">
</head>
<body>
    <?php include 'cabecalho.php'; ?>

    <!-- TOPO -->
    <section class="servico-topo">
        <img src="../img/index2.png" alt="Vista aérea com modelação 3D" class="servico-topo-img">
        <div class="servico-topo-texto">
            <strong><h1><?= t('servico2.title') ?></h1></strong>
        </div>
    </section>

    <!-- INTRODUÇÃO -->
    <section class="servico-introducao">
        <div class="servico-introducao-texto">
            <h2><?= t('servico2.introducao.title') ?></h2>
            <p><?= t('servico2.introducao.text') ?></p>
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
            <h2><?= t('servico2.plantas.title') ?></h2>
            <p><?= t('servico2.plantas.text') ?></p>
        </div>
    </section>

    <!-- MODELACAO 3D -->
    <section class="servico-modelacao">
        <div class="servico-modelacao-texto">
            <h2><?= t('servico2.modelacao.title') ?></h2>
            <p><?= t('servico2.modelacao.text') ?></p>
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


    <!-- Secção de Contacto -->
    <section class="contact-footer">
        <div class="contact-footer-content">
            <h2 class="contact-footer-title"><?= t('home.contact_section.title') ?></h2>
            <p class="contact-footer-subtitle">
                <?= t('home.contact_section.subtitle') ?>
            </p>
            <a href="contactos.php" class="btn-contactar-outline">
                <?= t('home.contact_section.button') ?>
            </a>
        </div>
    </section>

    <?php include 'rodape.php'; ?>

    <!-- JS -->
    <script src="../js/servico2.js"></script>
</body>
</html>

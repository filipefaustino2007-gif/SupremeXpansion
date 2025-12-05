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
    <title><?= t('home.meta_title') ?></title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/png" href="/img/icon.png">
    <link rel="stylesheet" href="/css/cabecalho.css">
    <link rel="stylesheet" href="/css/index.css">
    <script src="../js/index.js" defer></script>
</head>
<body>
    <?php include 'cabecalho.php'; ?>


    <!-- Slideshow -->
    <section class="slideshow-container">

        <!-- Slide 1 -->
        <div class="slide fade active">
            <img src="../img/index1.png" alt="<?= t('home.slides.slide1.title') ?>">
            <div class="text-box">
                <h1><?= t('home.slides.slide1.title') ?></h1>
                <br>
                <p><?= t('home.slides.slide1.text') ?></p>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="slide fade">
            <img src="../img/index2.png" alt="<?= t('home.slides.slide2.title') ?>">
            <div class="text-box">
                <h1><?= t('home.slides.slide2.title') ?></h1>
                <br>
                <p><?= t('home.slides.slide2.text') ?></p>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="slide fade">
            <img src="../img/index3.png" alt="<?= t('home.slides.slide3.title') ?>">
            <div class="text-box">
                <h1><?= t('home.slides.slide3.title') ?></h1>
                <br>
                <p><?= t('home.slides.slide3.text') ?></p>
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

        <a class="service-card" href="servico1.php">
            <img src="../img/laserscan.png" alt="<?= t('home.services.laser.title') ?>">
            <div class="service-overlay1">
                <h2><?= t('home.services.laser.title') ?></h2>
                <p><?= t('home.services.laser.text') ?></p>
            </div>
        </a>

        <a class="service-card" href="servico2.php">
            <img src="../img/index2.png" alt="<?= t('home.services.design.title') ?>">
            <div class="service-overlay2">
                <h2><?= t('home.services.design.title') ?></h2>
                <p><?= t('home.services.design.text') ?></p>
            </div>
        </a>

        <a class="service-card" href="servico3.php">
            <img src="../img/index3.png" alt="<?= t('home.services.drone.title') ?>">
            <div class="service-overlay3">
                <h2><?= t('home.services.drone.title') ?></h2>
                <p><?= t('home.services.drone.text') ?><br><?= t('home.services.drone.rtext') ?></p>
            </div>
        </a>
    </section>

    <!-- Por que escolher trabalhar com a SupremeXpansion -->
    <section class="why-supreme">
        <div class="video-side">
            <video src="../img/scan_to_3d_model.mp4" autoplay muted loop playsinline></video>
        </div>

        <div class="text-side">
            <a class="h1_video">
                <strong><?= t('home.why.title_strong') ?></strong>
                <?= t('home.why.title_rest') ?>
            </a>

            <div class="topics">
                <p>
                    <a href="sobre.php#experiencia" class="subtitulo">
                        <?= t('home.why.experience.title') ?>
                    </a>
                    - <?= t('home.why.experience.text') ?>
                </p>
                <br>
                <p>
                    <a href="sobre.php#tecnologia" class="subtitulo">
                        <?= t('home.why.tech.title') ?>
                    </a>
                    - <?= t('home.why.tech.text') ?>
                </p>
                <br>
                <p>
                    <a href="sobre.php#preco" class="subtitulo">
                        <?= t('home.why.price.title') ?>
                    </a>
                    - <?= t('home.why.price.text') ?>
                </p>
                <br>
                <p>
                    <a href="sobre.php#suporte" class="subtitulo">
                        <?= t('home.why.support.title') ?>
                    </a>
                    - <?= t('home.why.support.text') ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Secção Portfolio -->
    <section class="portfolio-showcase">
        <div class="portfolio-showcase-header">
            <strong><h2><?= t('home.portfolio.title') ?></h2></strong>

            <a href="portfolio.php" class="btn-portfolio-outline">
                <?= t('home.portfolio.view_all') ?>
            </a>
        </div>

        <div class="portfolio-strip-carousel">
            <div class="portfolio-strip-track">
                <div class="portfolio-item">
                    <img src="../img/img1.png" alt="Projeto North Finchley UK">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img1') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img2.png" alt="Levantamento Urbano">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img2') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img3.png" alt="Estádio Municipal de Coimbra">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img3') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img4.png" alt="Destilaria da Longra">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img4') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img5.png" alt="Armazéns Cofersan">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img5') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img6.png" alt="Remodelação de Prédio">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img6') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img7.png" alt="Taberna do Quinzena">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img7') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img8.png" alt="Ruína">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img8') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img9.png" alt="Projeto Moradia">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img9') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img10.png" alt="Levantamento Moradia">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img10') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img11.png" alt="Levantamento de Armazém">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img11') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img12.png" alt="Fábrica Alimentar">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img12') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img13.png" alt="Cofragem Ponte">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img13') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img14.png" alt="CNEMA">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img14') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img15.png" alt="Moradia Santarém">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img15') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img16.png" alt="Linhas de Vapor em Cardiff UK">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img16') ?></div></strong>
                </div>
                <div class="portfolio-item">
                    <img src="../img/img17.png" alt="Mapeamento Drone Londres UK">
                    <strong><div class="portfolio-caption"><?= t('home.carousel_section.img17') ?></div></strong>
                </div>
            </div>
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
    
</body>
</html>

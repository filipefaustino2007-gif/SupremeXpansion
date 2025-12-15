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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= t('servicos.meta_title') ?></title>
    <link rel="icon" type="image/png" href="/img/icon.png" />
    <link rel="stylesheet" href="/css/cabecalho.css" />
    <link rel="stylesheet" href="/css/servico.css" />
</head>
<body>
    <?php include 'cabecalho.php'; ?>

    <!-- Topo Serviços -->
    <section class="servicos-topo">
        <img src="../img/servicos.png" alt="Serviços SupremeXpansion" class="servicos-topo-img" />
        <div class="servicos-topo-texto">
            <h1><?= t('servicos.text') ?></h1>
        </div>
    </section>

    <!-- Secção dos Serviços -->
    <section class="services-gallery">

        <a class="service-card" href="servico1.php">
            <img src="../img/laserscan.png" alt="<?= t('home.services.laser.title') ?>">
            <div class="service-overlay">
                <h2><?= t('home.services.laser.title') ?></h2>
                <p><?= t('home.services.laser.text') ?></p>
            </div>
        </a>

        <a class="service-card" href="servico2.php">
            <img src="../img/index2.png" alt="<?= t('home.services.design.title') ?>">
            <div class="service-overlay">
                <h2><?= t('home.services.design.title') ?></h2>
                <p><?= t('home.services.design.text') ?></p>
            </div>
        </a>

        <a class="service-card" href="servico3.php">
            <img src="../img/index3.png" alt="<?= t('home.services.drone.title') ?>">
            <div class="service-overlay">
                <h2><?= t('home.services.drone.title') ?></h2>
                <p><?= t('home.services.drone.text') ?><br><?= t('home.services.drone.rtext') ?></p>
            </div>
        </a>
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

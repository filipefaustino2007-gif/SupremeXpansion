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
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= t('politicas.meta_title') ?></title>
    <link rel="icon" type="image/png" href="../img/icon.png">
    <link rel="stylesheet" href="../css/cabecalho.css">
    <link rel="stylesheet" href="../css/politica_privacidade.css">
</head>
<body>
    <?php include 'cabecalho.php'; ?>

        <!-- Topo -->
        <section class="sobre-topo">
            <img src="../img/index2.png" alt="Sobre SupremeXpansion" class="sobre-topo-img">
            <div class="sobre-topo-texto">
                <h1><?= t('politicas.title') ?></h1>
            </div>
        </section>

        <section class="privacy-content">
            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts1.title') ?></h2>
                <p><?= t('politicas.texts.texts1.about') ?><a href="https://supremexpansion.com" target="_blank" rel="noopener noreferrer">https://supremexpansion.com</a></p>
            </article>

            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts2.title') ?></h2>
                <p><?= t('politicas.texts.texts2.about1') ?></p>
                <p><?= t('politicas.texts.texts2.about2') ?><a href="https://automattic.com/privacy/" target="_blank" rel="noopener noreferrer">https://automattic.com/privacy/</a>. <?= t('politicas.texts.texts2.about3') ?></p>
            </article>

            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts3.title') ?></h2>
                <p><?= t('politicas.texts.texts3.about') ?></p>
            </article>

            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts4.title') ?></h2>
                <p><?= t('politicas.texts.texts4.about1') ?></p>
                <p><?= t('politicas.texts.texts4.about2') ?></p>
                <p><?= t('politicas.texts.texts4.about3') ?></p>
                <p><?= t('politicas.texts.texts4.about4') ?></p>
            </article>

            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts5.title') ?></h2>
                <p><?= t('politicas.texts.texts5.about1') ?></p>
                <p><?= t('politicas.texts.texts5.about2') ?></p>
            </article>

            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts6.title') ?></h2>
                <p><?= t('politicas.texts.texts6.about') ?></p>
            </article>

            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts7.title') ?></h2>
                <p><?= t('politicas.texts.texts7.about1') ?></p>
                <p><?= t('politicas.texts.texts7.about2') ?></p>
            </article>

            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts8.title') ?></h2>
                <p><?= t('politicas.texts.texts8.about') ?></p>
            </article>

            <article class="privacy-section">
                <h2><?= t('politicas.texts.texts9.title') ?></h2>
                <p><?= t('politicas.texts.texts9.about') ?></p>
            </article>
        </section>
    </main>

    <?php include 'rodape.php'; ?>
</body>
</html>
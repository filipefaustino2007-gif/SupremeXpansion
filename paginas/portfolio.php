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
    <title><?= t('portfolio.meta_title') ?></title>
    <link rel="icon" type="image/png" href="/img/icon.png">
    <link rel="stylesheet" href="/css/portofolio.css">
    <link rel="stylesheet" href="/css/cabecalho.css">
</head>
<body>
<?php include 'cabecalho.php'; ?>

    <!-- Imagem principal -->
    <section class="portfolio-base">
        <img src="../img/portofolio.png" alt="Imagem de Portfólio">
        <div class="portfolio-text">
            <h1><?= t('portfolio.title') ?></h1>
            <div class="underline"></div>
        </div>
    </section>

    <!-- Linha vermelha divisória -->
    <div class="portfolio-divider"></div>

    <!-- Conteúdo cinzento expansível -->
    <section class="portfolio-content">
        <!-- Aqui podes colocar os teus projetos -->
    </section>

<?php include 'rodape.php'; ?>
</body>
</html>

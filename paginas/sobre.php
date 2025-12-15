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
    <title><?= t('sobre.meta_title') ?></title>
    <link rel="icon" type="image/png" href="/img/icon.png">
    <link rel="stylesheet" href="/css/cabecalho.css">
    <link rel="stylesheet" href="/css/sobre.css">
</head>
<body>
    <?php include 'cabecalho.php'; ?>

    <!-- Topo -->
    <section class="sobre-topo">
        <img src="../img/index2.png" alt="Sobre SupremeXpansion" class="sobre-topo-img">
        <div class="sobre-topo-texto">
            <h1><?= t('sobre.title') ?></h1>
        </div>
    </section>

    <!-- Secção Sobre a SupremeXpansion -->
    <section class="sobre-intro">
        <div class="sobre-intro-esquerda">
            <img src="../img/icon.png" alt="SupremeXpansion Ícone">
        </div>
        <div class="sobre-intro-direita">
            <h2><?= t('sobre.sobre') ?><strong><?= t('sobre.supreme') ?></strong></h2>
        </div>
    </section>

    <!-- Secção Experiência e Qualidade -->
    <section id="experiencia" class="sobre-experiencia">
        <div class="sobre-experiencia-esquerda">
            <h2><?= t('sobre.experiencia.title') ?></h2>
            <p><?= t('sobre.experiencia.text') ?></p>
        </div>
        <div class="sobre-experiencia-direita">
            <img src="../img/img16.png" alt="Experiência e Qualidade">
        </div>
    </section>

    <!-- Secção Tecnologia e Ferramentas -->
    <section id="tecnologia" class="sobre-tecnologia">
        <div class="sobre-tecnologia-esquerda">
            <img src="../img/drone.png" alt="Tecnologia e Ferramentas">
        </div>
        <div class="sobre-tecnologia-direita">
            <h2><?= t('sobre.tecnologia.title') ?></h2>
            <p><?= t('sobre.tecnologia.text') ?></p>
        </div>
    </section>

    <!-- Secção Preço Acessível -->
    <section id="preco" class="sobre-preco">
        <div class="sobre-preco-esquerda">
            <h2><?= t('sobre.preco.title') ?></h2>
            <p><?= t('sobre.preco.text') ?></p>
        </div>
        <div class="sobre-preco-direita">
            <img src="../img/virtualreality.png" alt="Preço Acessível">
        </div>
    </section>

    <!-- Secção Excelente Suporte ao Cliente -->
    <section id="suporte" class="sobre-suporte">
        <div class="sobre-suporte-esquerda">
            <img src="../img/suportecliente.png" alt="Excelente Suporte ao Cliente">
        </div>
        <div class="sobre-suporte-direita">
            <h2><?= t('sobre.suporte.title') ?></h2>
            <p><?= t('sobre.suporte.text') ?></p>
        </div>
    </section>

    <!-- NOVA SECÇÃO RESUMO FINAL -->
    <section class="sobre-resumo">
        <p><?= t('sobre.resumo.text') ?></p>
    </section>

        <!-- Secção Equipa -->
    <section class="sobre-equipa">
        <h2><?= t('sobre.equipa.title') ?></h2>

        <div class="equipa-container">
            <!-- Primeira fila -->
            <div class="equipa-fila">
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro1') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo1') ?></p>
                </div>
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro2') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo2') ?></p>
                </div>
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro3') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo3') ?></p>
                </div>
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro4') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo4') ?></p>
                </div>
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro5') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo5') ?></p>
                </div>
            </div>

            <!-- Segunda fila -->
            <div class="equipa-fila">
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro6') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo6') ?></p>
                </div>
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro7') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo7') ?></p>
                </div>
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro8') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo8') ?></p>
                </div>
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro9') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo9') ?></p>
                </div>
                <div>
                    <p class="membro"><?= t('sobre.equipa.membro10') ?></p>
                    <p class="cargo"><?= t('sobre.equipa.cargo10') ?></p>
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

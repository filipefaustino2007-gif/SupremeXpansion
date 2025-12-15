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

ini_set('display_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= t('contact.meta_title') ?></title>
    <link rel="icon" type="image/png" href="/img/icon.png">
    <link rel="stylesheet" href="/css/cabecalho.css">
    <link rel="stylesheet" href="/css/contactos.css">
</head>
<body>
    <?php include 'cabecalho.php'; ?>

    <!-- Topo -->
    <section class="contactos-topo">
        <img src="../img/index2.png" alt="<?= t('contact.hero_alt') ?>" class="contactos-topo-img">
        <div class="contactos-topo-texto">
            <h1><?= t('contact.hero_title') ?></h1>
        </div>
    </section>

    <!-- Conteúdo principal -->
    <section class="contactos-conteudo">
        <div class="contactos-texto">
            <h2><?= t('contact.form.title') ?></h2>
            <p class="contactos-intro">
                <?= t('contact.form.intro') ?>
            </p>
        </div>

        <div class="contactos-form-wrapper">
            <form class="contactos-form" action="enviar.php" method="post">
                            
                <!-- Linha 1: Name + Email -->
                <div class="contactos-form-row">
                    <div class="contactos-field">
                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            placeholder="<?= t('contact.form.fields.name') ?>"
                            required
                        >
                    </div>

                    <div class="contactos-field">
                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="<?= t('contact.form.fields.email') ?>"
                            required
                        >
                    </div>
                </div>

                <!-- Linha 2: Telemóvel + Motivo de contacto -->
                <div class="contactos-form-row">
                    <div class="contactos-field">
                        <input
                            type="tel"
                            id="telemovel"
                            name="telemovel"
                            placeholder="<?= t('contact.form.fields.phone') ?>"
                        >
                    </div>

                    <div class="contactos-field" id="motivo-wrapper">
                        <select id="motivo" name="motivo" required>
                            <option value="" disabled selected>
                                <?= t('contact.form.fields.reason_placeholder') ?>
                            </option>
                            <option value="orcamento">
                                <?= t('contact.form.fields.reason_budget') ?>
                            </option>
                            <option value="parceria">
                                <?= t('contact.form.fields.reason_partnership') ?>
                            </option>
                            <option value="suporte">
                                <?= t('contact.form.fields.reason_support') ?>
                            </option>
                            <option value="outro">
                                <?= t('contact.form.fields.reason_other') ?>
                            </option>
                        </select>
                    </div>
                </div>

                <!-- Assunto -->
                <div class="contactos-field full-width" id="assunto-wrapper">
                    <input
                        type="text"
                        id="assunto"
                        name="assunto"
                        placeholder="<?= t('contact.form.fields.subject') ?>"
                        required
                    >
                </div>

                <!-- Mensagem -->
                <div class="contactos-field full-width">
                    <textarea
                        id="mensagem"
                        name="mensagem"
                        rows="5"
                        placeholder="<?= t('contact.form.fields.message') ?>"
                        required
                    ></textarea>
                </div>

                <!-- Checkbox -->
                <div class="contactos-consent">
                    <input type="checkbox" id="consent" name="consent" required>
                    <label for="consent">
                        <?= t('contact.form.consent_text') ?>
                    </label>
                </div>

                <!-- Botão -->
                <button type="submit" class="btn-enviar-outline">
                    <?= t('contact.form.submit') ?>
                </button>
                <p id="success-message" class="success-message">
                    <?= t('contact.form.success') ?>
                </p>
            </form>
        </div>

        <div class="contactos-info">
            <div class="contactos-info-blocos">
                <div class="contactos-bloco">
                    <h3><?= t('contact.info.phone_title') ?></h3>
                    <p class="contactos-phone"><?= t('contact.info.phone_number_pt') ?></p>
                    <p class="contactos-note">
                        <?= t('contact.info.pt_note') ?>
                    </p>
                    <p class="contactos-phone"><?= t('contact.info.phone_number_ing') ?></p>
                    <div class="contactos-social-box"></div>
                </div>

                <div class="contactos-bloco contactos-email-bloco">
                    <h3><?= t('contact.info.email_title') ?></h3>
                    <p class="contactos-email"><?= t('contact.info.email_text') ?></p>
                    <div class="contactos-social-box">
                        <div class="social-icons">
                            <a href="https://www.facebook.com/supremexpansion2023/" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <img src="../img/facebook.svg" alt="Facebook">
                            </a>
                            <a href="https://www.instagram.com/supremexpansion/" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <img src="../img/instagram.svg" alt="Instagram">
                            </a>
                            <a href="https://pt.linkedin.com/company/supremexpansion" target="_blank" rel="noopener noreferrer" class="social-icon">
                                <img src="../img/linkedin.svg" alt="LinkedIn">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'rodape.php'; ?>
    <script src="../js/contactos.js"></script>
</body>
</html>

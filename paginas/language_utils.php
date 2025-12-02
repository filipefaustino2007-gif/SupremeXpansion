<?php

function getAvailableLanguages(): array
{
    return [
        'pt' => 'Português ',
        'en' => 'English',
        'es' => 'Español',
    ];
}

function getLanguageFlags(): array
{
    return [
        'pt' => '../img/portugal.svg',
        'en' => '../img/uk.svg',
        'es' => '../img/spain.svg',
    ];
}

function resolveLanguageCode(?string $requested): string
{
    $available = getAvailableLanguages();

    if ($requested !== null && array_key_exists($requested, $available)) {
        return $requested;
    }

    return 'pt';
}

function buildRedirectTarget(?string $referer): string
{
    if (!$referer) {
        return 'index.php';
    }

    $parts = parse_url($referer);
    $path = $parts['path'] ?? 'index.php';
    $query = isset($parts['query']) ? '?' . $parts['query'] : '';

    if (str_contains($path, '..')) {
        return 'index.php';
    }

    $target = ltrim($path, '/');

    if ($target === '') {
        $target = 'index.php';
    }

    return $target . $query;
}
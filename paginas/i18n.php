<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function t(string $key): string {
    static $translations = null;

    if ($translations === null) {
        $lang = $_SESSION['lang'] ?? 'pt';
        $file = __DIR__ . "/../lang/{$lang}.json";

        if (!file_exists($file)) {
            $file = __DIR__ . "/../lang/pt.json";
        }

        $translations = json_decode(file_get_contents($file), true) ?? [];
    }

    $value = $translations;
    foreach (explode('.', $key) as $segment) {
        if (!isset($value[$segment])) return $key;
        $value = $value[$segment];
    }
    return is_string($value) ? $value : $key;
}

<?php

declare(strict_types=1);

function toast_success(string $message): void
{
    $_SESSION['toast'] = [
        'type' => 'success',
        'message' => $message,
    ];
}

function toast_error(string $message): void
{
    $_SESSION['toast'] = [
        'type' => 'error',
        'message' => $message,
    ];
}

function redirect(string $path): void
{
    header('Location: ' . $path);
    exit;
}

function old(string $key, mixed $default = ''): mixed
{
    return $_SESSION['old'][$key] ?? $default;
}

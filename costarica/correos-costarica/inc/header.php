<?php
declare(strict_types=1);
$page_title   = $page_title ?? 'Sucursal Virtual';
$show_spinner = $show_spinner ?? false;
$head_extra   = $head_extra ?? '';
?>
<!DOCTYPE html>
<html lang="es" class="">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<meta name="robots" content="noindex, nofollow" />
<title><?php echo h($page_title); ?> | Correos de Costa Rica</title>
<meta name="description" content="Sitio oficial de Correos de Costa Rica" />
<link rel="icon" href="assets/img/logo_icon.png" type="image/png" sizes="16x16"/>
<link rel="icon" href="assets/img/logo_icon.png" type="image/png" sizes="32x32"/>
<link rel='stylesheet' href='assets/css/icomoon-the7-font.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/fontawesome-all.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/Defaults.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/main.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/custom-scrollbar.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/wpbakery.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/css-vars.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/custom.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/media.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/mega-menu.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/post-type-dynamic.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/hind.css' type='text/css' media='all' />
<link rel='stylesheet' href='assets/css/kit.css' type='text/css' media='all' />
<style id="dt-main-inline-css">
body #load {
  display: block;
  height: 100%;
  overflow: hidden;
  position: fixed;
  width: 100%;
  z-index: 9901;
  opacity: 1;
  visibility: visible;
  transition: all .35s ease-out;
}
.load-wrap {
  width: 100%;
  height: 100%;
  background-position: center center;
  background-repeat: no-repeat;
  text-align: center;
  display: -ms-flexbox;
  display: -ms-flex;
  display: flex;
  -ms-align-items: center;
  -ms-flex-align: center;
  align-items: center;
  -ms-flex-flow: column wrap;
  flex-flow: column wrap;
  -ms-flex-pack: center;
  -ms-justify-content: center;
  justify-content: center;
}
.load-wrap > svg {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
}
#load {
  background: var(--the7-elementor-beautiful-loading-bg,#ffffff);
  --the7-beautiful-spinner-color2: var(--the7-beautiful-spinner-color,rgba(51,51,51,0.3));
}
/*# sourceURL=dt-main-inline-css */
</style>
<?php echo $head_extra; ?>
</head>
<body id="the7-body" class="wp-singular page-template page-template-template-microsite page-template-template-microsite-php page page-id-2427 wp-embed-responsive wp-theme-dt-the7 the7-core-ver-2.7.12 everest-forms-no-js one-page-row dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-hamburger-close-bg-enable mobile-hamburger-close-bg-hover-enable  fade-medium-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color phantom-sticky phantom-shadow-decoration phantom-custom-logo-on sticky-mobile-header top-header first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style the7-ver-14.3.4 dt-fa-compatibility wpb-js-composer js-comp-ver-8.7.3 vc_responsive">
<?php if ($show_spinner) { ?>
<div id="load" class="spinner-loader">
	<div class="load-wrap"><style type="text/css">
    [class*="the7-spinner-animate-"]{
        animation: spinner-animation 1s cubic-bezier(1,1,1,1) infinite;
        x:46.5px;
        y:40px;
        width:7px;
        height:20px;
        fill:var(--the7-beautiful-spinner-color2);
        opacity: 0.2;
    }
    .the7-spinner-animate-2{
        animation-delay: 0.083s;
    }
    .the7-spinner-animate-3{
        animation-delay: 0.166s;
    }
    .the7-spinner-animate-4{
         animation-delay: 0.25s;
    }
    .the7-spinner-animate-5{
         animation-delay: 0.33s;
    }
    .the7-spinner-animate-6{
         animation-delay: 0.416s;
    }
    .the7-spinner-animate-7{
         animation-delay: 0.5s;
    }
    .the7-spinner-animate-8{
         animation-delay: 0.58s;
    }
    .the7-spinner-animate-9{
         animation-delay: 0.666s;
    }
    .the7-spinner-animate-10{
         animation-delay: 0.75s;
    }
    .the7-spinner-animate-11{
        animation-delay: 0.83s;
    }
    .the7-spinner-animate-12{
        animation-delay: 0.916s;
    }
    @keyframes spinner-animation{
        from {
            opacity: 1;
        }
        to{
            opacity: 0;
        }
    }
</style>
<svg width="75px" height="75px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
	<rect class="the7-spinner-animate-1" rx="5" ry="5" transform="rotate(0 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-2" rx="5" ry="5" transform="rotate(30 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-3" rx="5" ry="5" transform="rotate(60 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-4" rx="5" ry="5" transform="rotate(90 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-5" rx="5" ry="5" transform="rotate(120 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-6" rx="5" ry="5" transform="rotate(150 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-7" rx="5" ry="5" transform="rotate(180 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-8" rx="5" ry="5" transform="rotate(210 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-9" rx="5" ry="5" transform="rotate(240 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-10" rx="5" ry="5" transform="rotate(270 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-11" rx="5" ry="5" transform="rotate(300 50 50) translate(0 -30)"></rect>
	<rect class="the7-spinner-animate-12" rx="5" ry="5" transform="rotate(330 50 50) translate(0 -30)"></rect>
</svg></div>
</div>
</div>
<script>
(function () {
  var load = document.getElementById('load');
  if (!load) { return; }
  var hide = function () {
    load.style.transition = 'opacity .35s ease-out, visibility .35s ease-out';
    load.style.opacity = '0';
    load.style.visibility = 'hidden';
    load.style.pointerEvents = 'none';
    setTimeout(function () { if (load.parentNode) { load.parentNode.removeChild(load); } }, 400);
  };
  if (document.readyState === 'complete') { setTimeout(hide, 250); }
  else { window.addEventListener('load', function () { setTimeout(hide, 250); }); }
  setTimeout(hide, 3000);
})();
</script>
<?php } ?>
<div id="page" >
	<a class="skip-link screen-reader-text" href="#content">Saltar al contenido</a>

<div class="masthead inline-header justify widgets full-height full-width shadow-mobile-header-decoration medium-mobile-menu-icon dt-parent-menu-clickable show-sub-menu-on-hover show-device-logo show-mobile-logo" >

	<div class="top-bar top-bar-line-hide">
	<div class="top-bar-bg" ></div>
	<div class="left-widgets mini-widgets"><a href="https://api.whatsapp.com/send?phone=50622578888" class="microwidget-btn mini-button header-elements-button-2 hide-on-desktop near-logo-first-switch in-top-bar microwidget-btn-bg-on microwidget-btn-hover-bg-on disable-animation-bg border-on hover-border-on btn-icon-align-right" ><span>2257-8888</span><i class="icomoon-the7-font-whatsapp"></i></a><span class="mini-contacts address show-on-desktop in-top-bar-left hide-on-second-switch"><i class="fa-fw the7-mw-icon-address-bold"></i>Zapote, San José, Costa Rica</span></div><div class="right-widgets mini-widgets"><div class="mini-search show-on-desktop in-menu-first-switch in-menu-second-switch animate-search-width custom-icon"><form class="searchform mini-widget-searchform" role="search" method="get" action="https://correos.go.cr/"> <div class="screen-reader-text">Buscar:</div> <input type="text" aria-label="Search" class="field searchform-s" name="s" value="" placeholder="Buscar..." title="Search form"/> <a href="" class="search-icon" aria-label="Search"><i class="the7-mw-icon-search-bold" aria-hidden="true"></i></a> <input type="submit" class="assistive-text searchsubmit" value="Ir!"/> </form> </div><div class="soc-ico show-on-desktop in-top-bar-right in-menu-second-switch disabled-bg custom-border border-on hover-custom-bg hover-disabled-border hover-border-off"><a title="Whatsapp page opens in new window" href="https://api.whatsapp.com/send?phone=50622578888" target="_blank" class="whatsapp"><span class="soc-font-icon"></span><span class="screen-reader-text">Whatsapp page opens in new window</span></a><a title="Facebook page opens in new window" href="https://facebook.com/correosdecostarica" target="_blank" class="facebook"><span class="soc-font-icon"></span><span class="screen-reader-text">Facebook page opens in new window</span></a><a title="X page opens in new window" href="https://twitter.com/correoscr" target="_blank" class="twitter"><span class="soc-font-icon"></span><span class="screen-reader-text">X page opens in new window</span></a><a title="YouTube page opens in new window" href="https://www.youtube.com/channel/UCTVhjZIzG36vEzotLBD053Q" target="_blank" class="you-tube"><span class="soc-font-icon"></span><span class="screen-reader-text">YouTube page opens in new window</span></a><a title="Instagram page opens in new window" href="https://instagram.com/CorreosCR" target="_blank" class="instagram"><span class="soc-font-icon"></span><span class="screen-reader-text">Instagram page opens in new window</span></a><a title="Linkedin page opens in new window" href="https://cr.linkedin.com/company/correoscr" target="_blank" class="linkedin"><span class="soc-font-icon"></span><span class="screen-reader-text">Linkedin page opens in new window</span></a></div></div></div>
	<header class="header-bar" role="banner">

		<div class="branding">
	<div id="site-title" class="assistive-text">Correos de Costa Rica</div>
	<div id="site-description" class="assistive-text">En Correos de Costa Rica estamos conectados con vos</div>
	<a class="" href="https://correos.go.cr/"><img srcset="assets/img/logo_header.jpg 190w, assets/img/logo_header_retina.jpg 250w" width="190" height="69" sizes="190px" alt="Correos de Costa Rica" src="assets/img/logo_header.jpg" /><img srcset="assets/img/logo_header.jpg 190w, assets/img/logo_header_retina.jpg 250w" width="190" height="69" sizes="190px" class="mobile-logo" alt="Correos de Costa Rica" src="assets/img/logo_header.jpg" /></a></div>

		<ul id="primary-menu" class="main-nav bg-outline-decoration hover-bg-decoration active-bg-decoration level-arrows-on outside-item-remove-margin"><li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1440 first depth-0"><a href='https://correos.go.cr' data-level='1'><span class="menu-item-text"><span class="menu-text">Inicio</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1467 has-children depth-0"><a href='#' data-level='1' aria-haspopup='true' aria-expanded='false'><span class="menu-item-text"><span class="menu-text">Transparencia</span></span></a><ul class="sub-nav hover-style-bg level-arrows-on" role="group"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2702 first depth-1"><a href='https://correos.go.cr/la-empresa/' data-level='2'><span class="menu-item-text"><span class="menu-text">La Empresa</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2130 depth-1"><a href='https://correos.go.cr/correos-institucional/' data-level='2'><span class="menu-item-text"><span class="menu-text">Correos Institucional</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9051 depth-1"><a href='https://correos.go.cr/gobierno-corporativo/' data-level='2'><span class="menu-item-text"><span class="menu-text">Gobierno Corporativo</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3396 depth-1"><a href='https://correos.go.cr/auditoria/' data-level='2'><span class="menu-item-text"><span class="menu-text">Auditoría</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41454 depth-1"><a href='https://correos.go.cr/seguridad-canales-tecnologicos/' data-level='2'><span class="menu-item-text"><span class="menu-text">Seguridad Tecnológica</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23125 depth-1"><a href='https://correos.go.cr/reconocimientos/' data-level='2'><span class="menu-item-text"><span class="menu-text">Reconocimientos</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1441 depth-1"><a href='https://correos.go.cr/sala-de-prensa/' data-level='2'><span class="menu-item-text"><span class="menu-text">Sala de Prensa</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66390 depth-1"><a href='https://correos.go.cr/blog-correos/' data-level='2'><span class="menu-item-text"><span class="menu-text">Blog</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1506 depth-0"><a href='https://correos.go.cr/oficinas/' data-level='1'><span class="menu-item-text"><span class="menu-text">Sucursales</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2771 has-children depth-0"><a href='https://correos.go.cr/?page_id=2767' data-level='1' aria-haspopup='true' aria-expanded='false'><span class="menu-item-text"><span class="menu-text">Servicios</span></span></a><ul class="sub-nav hover-style-bg level-arrows-on" role="group"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1764 first depth-1"><a href='https://correos.go.cr/personas/' data-level='2'><span class="menu-item-text"><span class="menu-text">Personas</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82651 depth-1"><a href='https://correos.go.cr/pymexpress/' data-level='2'><span class="menu-item-text"><span class="menu-text">Pymes</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81669 depth-1"><a href='https://correos.go.cr/corporativo/' data-level='2'><span class="menu-item-text"><span class="menu-text">Corporativo</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82346 depth-1"><a href='https://correos.go.cr/punto-correos/' data-level='2'><span class="menu-item-text"><span class="menu-text">Punto Correos</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82663 depth-1"><a href='https://correos.go.cr/filatelia' data-level='2'><span class="menu-item-text"><span class="menu-text">Filatelia</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79455 depth-1"><a href='https://correos.go.cr/terminos-y-condiciones/' data-level='2'><span class="menu-item-text"><span class="menu-text">Términos y Condiciones</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1463 has-children depth-0"><a href='#' data-level='1' aria-haspopup='true' aria-expanded='false'><span class="menu-item-text"><span class="menu-text">Autoservicio</span></span></a><ul class="sub-nav hover-style-bg level-arrows-on" role="group"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2431 first depth-1"><a href='https://correos.go.cr/rastreo/' target='_blank' data-level='2'><span class="menu-item-text"><span class="menu-text">Rastreo</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2426 depth-1"><a href='https://correos.go.cr/codigo-postal/' data-level='2'><span class="menu-item-text"><span class="menu-text">Código Postal</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77898 depth-1"><a href='https://correos.go.cr/bolsas-ems/' data-level='2'><span class="menu-item-text"><span class="menu-text">Bolsas EMS</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2422 depth-1"><a href='https://correos.go.cr/guia-web/' data-level='2'><span class="menu-item-text"><span class="menu-text">Generar Guía Web</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2377 depth-1"><a href='https://sucursal.correos.go.cr/login' data-level='2'><span class="menu-item-text"><span class="menu-text">Sucursal Virtual</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2227 depth-1"><a href='https://correos.go.cr/declaracion-cn23/' target='_blank' data-level='2'><span class="menu-item-text"><span class="menu-text">Declaración CN23</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2843 depth-1"><a href='https://correos.go.cr/servicio-box/' data-level='2'><span class="menu-item-text"><span class="menu-text">Box Correos</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2615 depth-0"><a href='https://correos.go.cr/recursos-humanos/' data-level='1'><span class="menu-item-text"><span class="menu-text">Recursos Humanos</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1442 last depth-0"><a href='https://correos.go.cr/contactenos/' data-level='1'><span class="menu-item-text"><span class="menu-text">Contáctanos</span></span></a></li> </ul>
		<div class="mini-widgets"><a href="https://sucursal.correos.go.cr" class="microwidget-btn mini-button header-elements-button-1 show-on-desktop near-logo-first-switch near-logo-second-switch microwidget-btn-bg-on microwidget-btn-hover-bg-on disable-animation-bg border-on hover-border-on btn-icon-align-left" target="_blank"><i class="Defaults-truck"></i><span>Sucursal Virtual</span></a></div>
	</header>

</div>
<div role="navigation" aria-label="Main Menu" class="dt-mobile-header mobile-menu-show-divider">
	<div class="dt-close-mobile-menu-icon" aria-label="Close" role="button" tabindex="0"><div class="close-line-wrap"><span class="close-line"></span><span class="close-line"></span><span class="close-line"></span></div></div>	<ul id="mobile-menu" class="mobile-main-nav">
		<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-1440 first depth-0"><a href='https://correos.go.cr' data-level='1'><span class="menu-item-text"><span class="menu-text">Inicio</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1467 has-children depth-0"><a href='#' data-level='1' aria-haspopup='true' aria-expanded='false'><span class="menu-item-text"><span class="menu-text">Transparencia</span></span></a><ul class="sub-nav hover-style-bg level-arrows-on" role="group"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2702 first depth-1"><a href='https://correos.go.cr/la-empresa/' data-level='2'><span class="menu-item-text"><span class="menu-text">La Empresa</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2130 depth-1"><a href='https://correos.go.cr/correos-institucional/' data-level='2'><span class="menu-item-text"><span class="menu-text">Correos Institucional</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9051 depth-1"><a href='https://correos.go.cr/gobierno-corporativo/' data-level='2'><span class="menu-item-text"><span class="menu-text">Gobierno Corporativo</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3396 depth-1"><a href='https://correos.go.cr/auditoria/' data-level='2'><span class="menu-item-text"><span class="menu-text">Auditoría</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-41454 depth-1"><a href='https://correos.go.cr/seguridad-canales-tecnologicos/' data-level='2'><span class="menu-item-text"><span class="menu-text">Seguridad Tecnológica</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-23125 depth-1"><a href='https://correos.go.cr/reconocimientos/' data-level='2'><span class="menu-item-text"><span class="menu-text">Reconocimientos</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1441 depth-1"><a href='https://correos.go.cr/sala-de-prensa/' data-level='2'><span class="menu-item-text"><span class="menu-text">Sala de Prensa</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-66390 depth-1"><a href='https://correos.go.cr/blog-correos/' data-level='2'><span class="menu-item-text"><span class="menu-text">Blog</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1506 depth-0"><a href='https://correos.go.cr/oficinas/' data-level='1'><span class="menu-item-text"><span class="menu-text">Sucursales</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2771 has-children depth-0"><a href='https://correos.go.cr/?page_id=2767' data-level='1' aria-haspopup='true' aria-expanded='false'><span class="menu-item-text"><span class="menu-text">Servicios</span></span></a><ul class="sub-nav hover-style-bg level-arrows-on" role="group"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1764 first depth-1"><a href='https://correos.go.cr/personas/' data-level='2'><span class="menu-item-text"><span class="menu-text">Personas</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82651 depth-1"><a href='https://correos.go.cr/pymexpress/' data-level='2'><span class="menu-item-text"><span class="menu-text">Pymes</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-81669 depth-1"><a href='https://correos.go.cr/corporativo/' data-level='2'><span class="menu-item-text"><span class="menu-text">Corporativo</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82346 depth-1"><a href='https://correos.go.cr/punto-correos/' data-level='2'><span class="menu-item-text"><span class="menu-text">Punto Correos</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-82663 depth-1"><a href='https://correos.go.cr/filatelia' data-level='2'><span class="menu-item-text"><span class="menu-text">Filatelia</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-79455 depth-1"><a href='https://correos.go.cr/terminos-y-condiciones/' data-level='2'><span class="menu-item-text"><span class="menu-text">Términos y Condiciones</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1463 has-children depth-0"><a href='#' data-level='1' aria-haspopup='true' aria-expanded='false'><span class="menu-item-text"><span class="menu-text">Autoservicio</span></span></a><ul class="sub-nav hover-style-bg level-arrows-on" role="group"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2431 first depth-1"><a href='https://correos.go.cr/rastreo/' target='_blank' data-level='2'><span class="menu-item-text"><span class="menu-text">Rastreo</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2426 depth-1"><a href='https://correos.go.cr/codigo-postal/' data-level='2'><span class="menu-item-text"><span class="menu-text">Código Postal</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-77898 depth-1"><a href='https://correos.go.cr/bolsas-ems/' data-level='2'><span class="menu-item-text"><span class="menu-text">Bolsas EMS</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2422 depth-1"><a href='https://correos.go.cr/guia-web/' data-level='2'><span class="menu-item-text"><span class="menu-text">Generar Guía Web</span></span></a></li> <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2377 depth-1"><a href='https://sucursal.correos.go.cr/login' data-level='2'><span class="menu-item-text"><span class="menu-text">Sucursal Virtual</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2227 depth-1"><a href='https://correos.go.cr/declaracion-cn23/' target='_blank' data-level='2'><span class="menu-item-text"><span class="menu-text">Declaración CN23</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2843 depth-1"><a href='https://correos.go.cr/servicio-box/' data-level='2'><span class="menu-item-text"><span class="menu-text">Box Correos</span></span></a></li> </ul></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2615 depth-0"><a href='https://correos.go.cr/recursos-humanos/' data-level='1'><span class="menu-item-text"><span class="menu-text">Recursos Humanos</span></span></a></li> <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1442 last depth-0"><a href='https://correos.go.cr/contactenos/' data-level='1'><span class="menu-item-text"><span class="menu-text">Contáctanos</span></span></a></li> 	</ul>
	<div class='mobile-mini-widgets-in-menu'></div>
</div>

		<div class="page-title title-center solid-bg breadcrumbs-mobile-off page-title-responsive-enabled">
			<div class="wf-wrap">

				<div class="page-title-head hgroup"><h1 ><?php echo h($page_title); ?></h1></div><div class="page-title-breadcrumbs"><div class="assistive-text">Estás aquí:</div><ol class="breadcrumbs text-small" itemscope itemtype="https://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a itemprop="item" href="https://correos.go.cr/" title="Inicio"><span itemprop="name">Inicio</span></a><meta itemprop="position" content="1" /></li><li class="current" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><span itemprop="name"><?php echo h($page_title); ?></span><meta itemprop="position" content="2" /></li></ol></div>			</div>
		</div>

		

<div id="main" class="sidebar-none sidebar-divider-off">

	
	<div class="main-gradient"></div>
	<div class="wf-wrap">
	<div class="wf-container-main">

	

<div id="content" class="content" role="main">

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>

	<!--Codigo para inserta FAVICON-->
	<link rel="shortcut icon" href="<?php echo IMG_PATH ?>/PhotoTourist_icono.ico">
	<!--Fin FAVICON-->
	<title>PhotoTourist|<?php if(!isset($_GET['module'])){ echo "Homepage";}else{ echo $_GET['module'];} ?></title>

	<!--Código para hacer Responsive-->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--Código para caracteres especiales-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta charset="utf-8">

	<!--Código para motores de búsqueda-->
	<meta name="keywords" content="PhotoTourist es la nueva aplicación con la que obtendrás fotos realizadas por profesionales
	en tus viajes. Tu maleta de recuerdos se llama PhotoTourist" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


  <!-- BOOTSTRAP CORE STYLE CSS -->
	<link href="<?php echo CSS_PATH ?>bootstrap.css" rel='stylesheet' type='text/css' />

  <!-- Código para definir estilo CSS general de la página-->
	<link href="<?php echo CSS_PATH ?>style.css" rel='stylesheet' type='text/css' />

	<!-- Código para definir estilo CSS de Home-->
	<link href="<?php echo HOME_CSS_PATH ?>style.css" rel='stylesheet' type='text/css' />
	<link href="<?php echo HOME_CSS_PATH ?>swipebox.css" rel='stylesheet' type='text/css' />

	<!-- Código para definir estilo CSS de geolocalización-->
	<link href="<?php echo CAMTOURIST_CSS_PATH ?>geolocation.css" rel='stylesheet' type='text/css' />

	<!-- Código para definir estilo CSS de users: solo singin y singup-->
	<link href="<?php echo USERS_CSS_PATH ?>users.css" rel='stylesheet' type='text/css' />

	<!-- Código para obtener las tipografías elegidas de Google Font-->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Código para obtener librerias de jquery-->
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<!-- Código para Tipografías Especiales de Google Font-->
	<link href="https://fonts.googleapis.com/css?family=Unica+One" rel="stylesheet">

	<!-- Llamada al función efectos fotos home---->
	<script type="text/javascript" src="<?php echo HOME_JS_PATH ?>jquery.swipebox.min.js"></script>

	<!-- Llamada al main.js donde está la función amigable---->
  <script type="text/javascript" src="<?php echo JS_PATH ?>main.js"></script>

	<!-- Llamada al init.js donde damos información al usuario---->
	<script type="text/javascript" src="<?php echo USERS_JS_PATH ?>init.js"></script>

	<!-- Llamada al cookies.js --->
	<script type="text/javascript" src="<?php echo JS_PATH ?>cookies.js"></script>


	<!-- start-smoth-scrolling---->
	<script type="text/javascript" src="<?php echo JS_PATH ?>move-top.js"></script>
	<script type="text/javascript" src="<?php echo JS_PATH ?>easing.js"></script>


	<link href="<?php echo PRODUCTS_CSS_PATH ?>main.css" rel="stylesheet">

	<!--DatePicker-->
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/ui-lightness/jquery-ui.css">
	<script src="<?php echo JS_PATH ?>datepicker-es.js"></script>

	<script>
		$(function() {
			$.datepicker.setDefaults($.datepicker.regional["es"]);
			$("#birth_date").datepicker();
			$("#title_date").datepicker();
		});
	</script>
	<!--FIN DatePicker-->

	<!--Script para Galeria Fotos Main-->
			    <script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
					</script>
<!--FIN Galeria Fotos Main-->

	<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
	</script>

	</head>

<!DOCTYPE html>
<html>
<head>
	<title>Censo Cultores - Somos Nueva Esparta | GEBNE</title>
	<meta charset="utf-8">
	<meta name="description" content="Prefecturas - Somos Nueva Esparta">
	<meta name="keywords" content="Prefecturas de la Gobernación del Estado Bolivariano de Nueva Esparta - En la Gestión del Gobernador Alfredo Diaz">
	<meta name="author" content="Dirección del PPP las Telecomunicaciones y Sistemas Informáticos - Programa Practicantes">
	<!-- CSS de Bootstrap -->
	<link rel="stylesheet" type="text/css" href="/Cultores/css/bootstrap.css">
	<!-- CSS de iconos -->
	<link rel="stylesheet" type="text/css" href="/Cultores/css/fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.css">
	<!-- Jquery -->
	<script type="text/javascript" src="/Cultores/js/jquery-3.3.1.min.js"></script>
	<!-- JS de Bootstrap -->
	<script type="text/javascript" src="/Cultores/js/bootstrap.min.js"></script>
	<!-- Jquery Validacion de datos -->
	<script type="text/javascript" src="/Cultores/js/jquery.validate.min.js"></script>
	<!-- Jquery Mensajes de Alerta -->
 	<script type="text/javascript" src="/Cultores/js/sweetalert.js"></script>
 	<!-- JS de Charts -->
 	<script type="text/javascript" src="/Cultores/js/chart.js"></script>
 	<!-- CSS para la particion del side nav bar y el contenido interno -->
 	<link rel="stylesheet" type="text/css" href="/Cultores/css/solicitudes.css">
 	
 	<!-- CSS interno de la pagina -->
 	<style type="text/css">
 		
 		.som{
 			cursor: pointer;
 		}

 		html, body{
 			margin: 0px;
 			height: 100%;
 		}

 		/*MENSAJE DE ERROR EN EL FORMULARIO*/
		label.error{	/*MANIPULO EL CSS DEL LABEL QUE SE ESCRIBE CUANDO HAY UN ERROR*/
			color: red;
			margin-left: 2%;
			display: inline;
			font-style: italic;
		}

		input.error, select.error{	/*MODIFICA LOS INPUT QUE HAYAN TENEDIO ALGUN ERROR*/
			border: 1px solid red;
			background: rgba(230,200,180,0.5);
		}

		@media (max-width: 800px){
		    .fuente {
		        font-size: 10vw;
		    }

		    .fuente2{
		    	font-size: 9vw;
		    }
		}

		@media (min-width: 800px){
		    .fuente {
		        font-size: 4vw;
		    }

		    .fuente2{
		    	font-size: 3vw;
		    }
		}
    </style>

 	<!-- SCRIPT INTERNO DE LA PAGINA -->
 	<script>
	    $(document).ready(function() {

	      //FUNCION CLICK AL LOGO QUE MANDE AL HOME
	      $("#logo-seguridad").click(function(event) {
	      	location.href="/Cultores/home.php"
	      });

	      $(".som").each(function() { //SOMBREADO Y SELECCION DE QUE TIPO DE SOLUCITUD DESEA HACER

	        $(this).hover(function() {
	          $(this).css('opacity', '0.5'); //AQUI LE CAMBIAS EL NIVEL DE OPACIDAD AL PARARTE SOBRE EL
	        }, function() {
	          $(this).css('opacity', '1');
	        });
	      });

	      //EVENTOS PARA DEJAR ACTIVO LA SELECCION PUESTA
	      $("#i_cultores").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');

	      });

	      $("#i_agrupaciones").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');
	      });

	      $("#i_arte").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');
	      });

	      $("#i_estadisticas").click(function(event) {
	      	if($(this).hasClass('active'))
	      		$(this).removeClass('active');
	      	else
	      		$(this).addClass('active');
	      });

	    });
  	</script>
</head>
<body>
	<div class="nav-side-menu">
	    <div class="brand py-2">
	    	<div class="m-auto text-center">
		    	<img src="/Cultores/Imagenes/logo-cultores.png" class="img-fluid" width="100" height="100" id="logo-seguridad" style="cursor: pointer;">
		    	<span class="font-weight-bold d-block">Censo Cultores</span>
	    	</div>
	    </div>
	    <div class="menu-list">
	        <ul id="menu-content" class="menu-content collapse out text-white text-justified d-block">
	            <div class="m-auto text-center py-2" style="line-height: 28px; border-bottom: 1px solid #23282e;">
	            	<span class="text-center font-weight-bold" style="font-size: 1.3em">Panel Administrativo</span>
	            </div>
	            <li data-toggle="collapse" data-target="#cultores" class="collapsed" id="i_cultores">
                    <a><i class="fa fa-user fa-lg"></i> Cultores <i class="fas fa-angle-double-down text-white"></i></a>
                </li>
                <ul class="sub-menu collapse" id="cultores">
                    <li class="py-1" id="">
		                <a class="ml-2" href="/Cultores/Personas/censo.php">Registrar Cultor</a>
		            </li>
		            <li class="py-1" id="">
		                <a class="ml-2" href="/Cultores/Personas/l_usuarios.php">Lista de Cultores</a>
		            </li>	            
					<li class="py-1" id="">
		                <a class="ml-2" href="/Cultores/Personas/m_usuarios.php">Modificar Datos de Cultor</a>
		            </li>
                </ul>
                <li data-toggle="collapse" data-target="#agrupaciones" class="collapsed" id="i_agrupaciones">
                    <a><i class="fa fa-microphone-alt fa-lg"></i> Agrupaciones <i class="fas fa-angle-double-down text-white"></i></a>
                </li>
                <ul class="sub-menu collapse" id="agrupaciones">
                    <li class="py-1">
		                <a class="ml-2" href="/Cultores/Agrupaciones/r_agrupacion.php">Registrar Agrupación</a>
		            </li>
		            <li class="py-1">
		                <a class="ml-2" href="/Cultores/Agrupaciones/l_agrupaciones.php">Lista de Agrupaciones</a>
		            </li>	            
					<li class="py-1">
		                <a class="ml-2" href="/Cultores/Agrupaciones/m_agrupaciones.php">Modificar Datos de Agrupaciones</a>
		            </li>
                </ul>
                <li data-toggle="collapse" data-target="#arte" class="collapsed" id="i_arte">
                    <a><i class="fa fa-palette fa-lg"></i> Artes Culturales <i class="fas fa-angle-double-down text-white"></i></a>
                </li>
                <ul class="sub-menu collapse" id="arte">
                    <li class="py-1">
		                <a class="ml-2" href="/Cultores/Artes/informacion.php">Información</a>
		            </li>
					<li class="py-1">
		                <a class="ml-2" href="/Cultores/Artes/r_expresion.php">Agregar Expresiones Culturales</a>
		            </li>
		            <li class="py-1">
		                <a class="ml-2" href="/Cultores/Artes/m_expresion.php">Modificar Expresiones Culturales</a>
		            </li>
                </ul>
                <li id="i_estadisticas">
                    <a href="/Cultores/Estadisticas/estadistica.php"><i class="fa fa-chart-pie fa-lg"></i> Estadísticas de Cultores </a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-user-lock fa-lg"></i> Cerrar Sesion </a>
                </li>
	        </ul>
	    </div>
	</div>
	
	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO 
	<div class="container-fluid justify-content-center" style="height: 100%" id="main">
	    <div id="solicitud">
	    	 CREO QUE SE DEBERIA PONER EL INCLUDE HASTA AQUI Y LUEGO COMPLETAMOS CON LO DE ABAJO Y YA 
	    	 O QUE EL INCLUDE SOLO FUERA LA BARRA LATERAL CON TODO LO DEMAS 
	    </div>
	</div>
     FIN CONTENEDOR DE LAS OPCIONES 
    <script type="text/javascript" src="js/solicitud.js"></script>
</body>
</html>-->
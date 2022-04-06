<?php
	$error=0;
	if(isset($_POST["login"])){
		$error=1;	
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Prefecturas Somos Nueva Esparta | GEBNE</title>
	<meta charset="utf-8">
	<meta name="description" content="Censo Cultores - Somos Nueva Esparta">
	<meta name="keywords" content="Gobernación del Estado Bolivariano de Nueva Esparta - En la Gestión del Gobernador Alfredo Diaz">
	<meta name="author" content="Dirección del PPP las Telecomunicaciones y Sistemas Informáticos - Programa Practicantes">
	<!-- CSS de Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Jquery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<!-- JS de Bootstrap -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Jquery Validacion de datos -->
	<script type="text/javascript" src="js/jquery.validate.min.js"></script>
	<!-- Jquery Mensajes de Alerta -->
 	<script type="text/javascript" src="js/sweetalert.js"></script>

 	<!-- CSS interno de la pagina -->
 	<style type="text/css">
 		
 		body {
 			background: url('Imagenes/fondo.jpg');
			background-size: 100% 100%; /*contain; cover;*/
			background-position: center;
			background-attachment: fixed;
			background-repeat: no-repeat;
			background-color: #0071BC;
 		}

 		/*MENSAJE DE ERROR EN EL FORMULARIO*/
		label.error{	/*MANIPULO EL CSS DEL LABEL QUE SE ESCRIBE CUANDO HAY UN ERROR*/
			color: red;
			margin-left: 2%;
			display: block;
			font-style: italic;
		}

		input.error, select.error{	/*MODIFICA LOS INPUT QUE HAYAN TENEDIO ALGUN ERROR*/
			border: 1px solid red;
			background: rgba(230,200,180,0.5);
		}
 	</style>

 	<!-- SCRIPT INTERNO DE LA PAGINA -->
 	<script>
	    $(document).ready(function() {
	    	$("#login").validate({	

				rules:{	//REGLAS DE VALIDACION PARA CADA INPUT
					user: "required",
					password: "required",
				},

				messages:{	//MENSAJES DE VALIDACION CONFORME A CADA VALIDACION ECHAç
					user:"Porfavor Ingrese el Usuario",
					password:"Porfavor Ingrese la Contraseña",
				},

				errorPlacement:function(error,element){ //Para reposicionar los elementos de error que son level
					error.insertAfter(element);
				}

			});
	    });
  	</script>
</head>
<body>
	<div class="container-fluid d-block">
		
		<!-- SECCION DE IMAGEN DE LA BANDERA CON EL LOGIN INSTITUCIONAL-->
		<div class="row col-12 justify-content-center py-3 my-auto" style="position: absolute; top: 25%;">
			<div class="col-lg-6 col-mg-6 col-sm-6 d-none d-sm-block text-center m-auto">

			</div>
			<!-- LOGIN INSTITUCIONAL -->
			<div class="col-lg-6 col-mg-6 col-sm-6 col-12 m-auto">
				<div class="card px-0 col-lg-8 col-mg-8 col-sm-10 col-12 m-auto" style="box-shadow: 0px 0px 20px -2px rgba(0,0,0,0.5); border: 0">
				    <h5 class="text-white text-center py-3" style="background-color: #1B1464">
				        <strong>Acesso Institucional</strong>
				    </h5>
				    <div class="card-body px-sm-4 px-2">
				        <!-- FORMULARIO -->
				        <form class="m-auto" id="login" action="index.php" method="post" style="color: #757575;">
				            <!-- USUARIO -->
				            <div class="form-group">
							    <label class="text-muted" style="font-size: 1.2em">Usuario</label>
							    <input type="text" class="form-control" id="user" name="user" placeholder="Ingrese su Usuario">
							</div>
				            <!-- CONTRASEÑA -->
				            <div class="form-group">
							    <label class="text-muted" style="font-size: 1.2em">Contraseña</label>
							    <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su Contraseña">
							    <span class="text-dark">¿Olvidó su contraseña?<a href="#" class="text-dark"> Presione Aquí</a></span>
							</div>
				            <!-- BOTON DE INGRESAR -->
				            <div class="text-center">
								<button name="login" type="submit" class="btn btn-outline-info btn-rounded w-50 text-white" style="border: 2px solid #1B1464; background-color: #2E3192;">Ingresar</button>	  	
							</div>
				        </form>
				        <!-- FORMULARIO -->
				    </div>
				</div>
			</div>
			<!-- FIN LOGIN INSTITUCIONAL -->
		</div>
	</div>
</body>
</html>

<?php if($error==1): ?> <!-- MENSAJE DE FALLO ERROR SI NO INGRESO BIEN EL LOGIN-->
	<script type="text/javascript">
		swal({
        	  title: 'Login Fallido',
        	  text: 'Porfavor Intente de Nuevo el Login',
        	  icon: 'error',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>
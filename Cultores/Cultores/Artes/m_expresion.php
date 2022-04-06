<?php
	include("../base.php");
?>
	
	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="container-fluid justify-content-center" style="height: 100%" id="main">
	    <div id="solicitud" class="mb-5">
	    	<div class="mt-4 text-center col-10 m-auto pt-3">
	    		<span class="text-center d-block">
	    			Republica Bolivariana de Venezuela<br>
	    			Gobierno del Estado Bolivariano de Nueva Esparta<br>
	    			Dirección del Poder Popular para la Eduación<br>
	    			Instituto Autonomo para el Desarrollo Cultural del Estado Bolivariano de Nueva Esparta
	    		</span>
	    		<img src="/Prefectura/Imagenes/escudo-512x512.png" class="img-fluid mt-2" style="height: 150px">
	    	</div>
	    	<div class="col-lg-10 mx-auto ">
		        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid mt-3">
		        <h4 class="text-center mt-4">MODIFICACIÓN DE EXPRESIONES CULTURALES</h4>
	        </div>
	        
	        <div class="col-sm-10 col-12 m-auto">
		        <h5 class="text-primary mt-4">Modificar los Datos de Expresiones Culturales.</h5>
		        <div class="row justify-content-between mb-2">
		        	<div class="col-12 text-left">
						<label class="float-left">Buscar por Estilo de Arte:</label>
		        		<select class="float-left ml-lg-2 ml-md-0 ml-sm-2 col-lg-3 col-md-5 col-sm-4 col-12 form-control form-control-sm" id="" name="">
					    	<option>Seleccione un Arte:</option>
  							<option>Plásticas</option>
  							<option>Literarias</option>
  							<option>Musicales o Sonoras</option>
  							<option>Escénicas o Visuales</option>
						</select>
		        	</div>
		        </div>

		    <!-- CONTENEDOR DE LAS BARRAS Y BOTON DEL FORM -->
		    	<form>
	        	<div class="row mt-4 justify-content-center">
	        		<!-- BARRA DE LA IZQUIERDA -->
			    	<div class="col-lg-5 col-md-10 col-sm-10 col-12 mx-auto"> 
			    		<h5 class="">Tipos de Arte</h5>
			    		<div class="border px-sm-4 py-3 text-dark row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Nombre: </span>
			    				<input id="i_nombre" type="text" name="" disabled="true" class="font-italic form-control" value="Calle Ciega" style="display: inline;  background-color: transparent; border:0">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_nombre" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark row mt-2">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Nombre: </span>
			    				<input id="i_nombre2" type="text" name="" disabled="true" class="font-italic form-control" value="Calle Ciega" style="display: inline;  background-color: transparent; border:0">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_nombre2" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark row mt-2">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Nombre: </span>
			    				<input id="i_nombre3" type="text" name="" disabled="true" class="font-italic form-control" value="Calle Ciega" style="display: inline;  background-color: transparent; border:0">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_nombre3" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    	</div>
			    	<!-- FIN BARRA DE LA IZQUIERDA -->
			    	
			    	<!-- LA BARRA DE LA DERECHA -->
			    	<div class="col-lg-5 col-md-10 col-sm-10 col-12 mx-auto mt-lg-0 mt-3">
			    		<h5 class="">Género o Materiales</h5>
			    		<div class="border px-sm-4 py-3 text-dark row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Nombre: </span>
			    				<input id="i_genero" type="text" name="" disabled="true" class="font-italic form-control" value="Calle Ciega" style="display: inline;  background-color: transparent; border:0">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_genero" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark row mt-2">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Nombre: </span>
			    				<input id="i_genero2" type="text" name="" disabled="true" class="font-italic form-control" value="Calle Ciega" style="display: inline;  background-color: transparent; border:0">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_genero2" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark row mt-2">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Nombre: </span>
			    				<input id="i_genero3" type="text" name="" disabled="true" class="font-italic form-control" value="Calle Ciega" style="display: inline;  background-color: transparent; border:0">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_genero3" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    	</div>
			    	<!-- FIN DE LA BARRA DE LA DERECHA-->

			    	<!-- BOTON PARA GUARDAR CAMBIOS -->
	    			<div class="text-center mt-4">
	    				<button class="btn btn-success">Guardar Cambios</button>
	    			</div>
	    		</div>
	    		</form>
	    	<!-- FIN DE CONTENEDOR DE LAS BARRAS Y EL BOTON DE ENVIAR -->
	    </div>
	</div>
	<!-- FIN CONTENEDOR DE LA INFORMACION DE ADENTRO -->
    
    <!-- SCRIPTS PARA HABILITAR LOS FORMULARIOS DE EDITAR -->
    <script type="text/javascript">

    	//INPUTS DE SECCION DE DATOS PERSONALES
	    	$("#e_nombre").click(function(event) {
	    		$("#i_nombre").removeAttr('disabled');
	    		$("#i_nombre").focus();
	    	});

	    	$("#e_nombre2").click(function(event) {
	    		$("#i_nombre2").removeAttr('disabled');
	    		$("#i_nombre2").focus();
	    	});

	    	$("#e_nombre3").click(function(event) {
	    		$("#i_nombre3").removeAttr('disabled');
	    		$("#i_nombre3").focus();
	    	});

	    	$("#e_genero").click(function(event) {
	    		$("#i_genero").removeAttr('disabled');
	    		$("#i_genero").focus();
	    	});

	    	$("#e_genero2").click(function(event) {
	    		$("#i_genero2").removeAttr('disabled');
	    		$("#i_genero2").focus();
	    	});

	    	$("#e_genero3").click(function(event) {
	    		$("#i_genero3").removeAttr('disabled');
	    		$("#i_genero3").focus();
	    	});
	    //FIN INPUTS DE SECCION DE DATOS PERSONALES
    </script>
</body>
</html>

<?php //SQL DE MODIFICAR EXPRESION MAS EL DE LA ALERTA SI TODO FUE CORRECTO O NO
	include ("../config/proceso_solicitud.php");
	$algo = -5;
?>

<?php if($algo==0): ?> <!-- MENSAJE DE EFECTIVAMENTE SE MODIFICO LA EXPRESION CULTURAL -->
	<script type="text/javascript">
		swal({
        	  title: 'Modificaciones Guardadas con Exito',
        	  text: 'Presione Cerrar para Continuar',
        	  icon: 'success',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>

<?php if($algo==1): ?> <!-- MENSAJE DE FALLO ERROR SI NO SE MODIFICO LA EXPRESION CULTURAL -->
	<script type="text/javascript">
		swal({
        	  title: 'Fallo al Guardar los Cambios',
        	  text: 'Porfavor Intente de Nuevo la Modificación',
        	  icon: 'error',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>

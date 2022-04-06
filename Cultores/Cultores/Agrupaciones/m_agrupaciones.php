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
		        <h4 class="text-center mt-4">MODIFICACIÓN DE AGRUPACIÓN</h4>
	        </div>
	        
	        <div class="col-sm-10 col-12 m-auto">
		        <h5 class="text-primary mt-4">Modificar los Datos de Agrupación Registrada.</h5>
		        <div class="row justify-content-between mb-2">
		        	<div class="col-sm-6 col-12 text-left">
						<label class="float-left">Buscar por nombre:</label>
		        		<input id="#" align="left" class="float-left ml-lg-2 ml-md-0 ml-sm-2 col-lg-3 col-md-5 col-sm-4 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="nombre">
		        	</div>
		        </div>

		      <form id="cagrupacion">
		    <!-- CADA SECCION SOBRE LOS DATOS DE UNA AGRUPACION -->
	        	<div class="row mt-4">
			    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
			    		<h5 class="">Datos de la Agrupación</h5>
			    		<div class="border px-sm-4 py-3 text-dark row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Nombre: </span>
			    				<input id="i_nombre" type="text" name="nombre" disabled="true" class="font-italic form-control" value="Calle Ciega" style="display: inline;  background-color: transparent; border:0">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_nombre" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Fecha de Fundación: </span>
			    				<input id="i_fundacion" type="date" name="fundacion" disabled="true" class="font-italic form-control" value="1996-06-28" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_fundacion" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>

			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Estatus de la Agrupación: </span>
			    				<input id="i_estatus" type="text" name="activo" disabled="true" class="font-italic form-control" value="Activo" style="display: inline;  background-color: transparent; border: 0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_estatus" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Estilo de Arte: </span>
			    				<select class="form-control font-italic" id="i_estilo" name="estilo" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="La que Viaja">Literarias</option>
		  							<option value="Plásticas">Plásticas</option>
		  							<option value="Literarias">Literarias</option>
		  							<option value="Musicales o Sonoras">Musicales o Sonoras</option>
		  							<option value="Escénicas o Visuales">Escénicas o Visuales</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_estilo" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Tipo de Arte: </span>
			    				<select class="form-control font-italic" id="i_tipo" name="tipo_arte" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="La que Viaja">Poesía</option>
		  							<option value="x estilo">Carga X según el estilo</option>
		  							<option value="x estilo">Carga X según el estilo</option>
		  							<option value="x estilo">Carga X según el estilo</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_tipo" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Género / Material: </span>
			    				<select class="form-control font-italic" id="i_genero" name="genero_arte" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="La que Viaja">Épico</option>
		  							<option value="x genero">Carga genero si es literario o musical</option>
		  							<option value="x genero">Carga un material si es pintor, escultor, orfebre, artesano etc etc</option>
		  							<option value="x genero">Si hace vainas escenicas pues depende si es ballet pues se inhabilita esta paja</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_genero" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    	</div>
		        </div>
		    <!-- FIN DE CADA SECCION DE LOS DATOS DE UNA AGRUPACIÓN -->

		    <!-- BOTON PARA GUARDAR CAMBIOS -->
    			<div class="text-center mt-4">
    				<button class="btn btn-success">Guardar Cambios</button>
    			</div>
    		<!-- FIN BOTON PARA GUARDAR CAMBIOS -->
		      </form>
	    	</div>
	    </div>
	</div>
	<!-- FIN CONTENEDOR DE LA INFORMACION DE ADENTRO -->

    <script type="text/javascript" src="../js/validaciones.js"></script>
    
    <!-- SCRIPTS PARA HABILITAR LOS FORMULARIOS DE EDITAR -->
    <script type="text/javascript">

    	//INPUTS DE SECCION DE DATOS PERSONALES
	    	$("#e_nombre").click(function(event) {
	    		$("#i_nombre").removeAttr('disabled');
	    		$("#i_nombre").focus();
	    	});

	    	$("#e_fundacion").click(function(event) {
	    		$("#i_fundacion").removeAttr('disabled');
	    		$("#i_fundacion").focus();
	    	});

	    	$("#e_estatus").click(function(event) {
	    		$("#i_estatus").removeAttr('disabled');
	    		$("#i_estatus").focus();    	
	    	});

	    	$("#e_estilo").click(function(event) {
	    		$("#i_estilo").removeAttr('disabled');
	    		$("#i_estilo").focus();    	
	    	});

	    	$("#e_tipo").click(function(event) {
	    		$("#i_tipo").removeAttr('disabled');
	    		$("#i_tipo").focus();    	
	    	});

	    	$("#e_genero").click(function(event) {
	    		$("#i_genero").removeAttr('disabled');
	    		$("#i_genero").focus();    	
	    	});
	    //FIN INPUTS DE SECCION DE DATOS PERSONALES
    </script>
</body>
</html>

<?php //SQL DE MODIFICAR AGRUPACION MAS EL DE LA ALERTA SI TODO FUE CORRECTO O NO
	include ("../config/proceso_solicitud.php");
	$algo = -5;
?>

<?php if($algo==0): ?> <!-- MENSAJE DE EFECTIVAMENTE SE MODIFICO LOS DATOS DE LA AGRUPACIONL -->
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

<?php if($algo==1): ?> <!-- MENSAJE DE FALLO ERROR SI NO SE MODIFICO LOS DATOS DE LA AGRUPACION -->
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

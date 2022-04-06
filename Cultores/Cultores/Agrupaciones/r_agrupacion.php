<?php 
	include("../base.php");
?>
	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="container-fluid justify-content-center" style="height: 100%" id="main">
	    <div class="mt-4 text-center col-10 m-auto pt-3">
    		<span class="text-center d-block">
    			Republica Bolivariana de Venezuela<br>
    			Gobierno del Estado Bolivariano de Nueva Esparta<br>
    			Dirección del Poder Popular para la Eduación<br>
    			Instituto Autonomo para el Desarrollo Cultural del Estado Bolivariano de Nueva Esparta
    		</span>
    		<img src="/Prefectura/Imagenes/escudo-512x512.png" class="img-fluid mt-2" style="height: 150px">
    	</div>
	    <div class="row text-center mt-0">
	        <div class="col-lg-10 m-auto mt-4 text-justify">
	        	<span></span>
	            <img src="../Imagenes/franja.jpg" class="img-fluid mt-3">
	            <h4 class="text-center mt-4">REGISTRO DE AGRUPACIÓN</h4>
	        </div>

			<div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm mb-5 mt-4 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
				<form class="m-auto col-12" id="cagrupacion">
				  <h5 class="text-center mb-3" style="font-size: 1.5em">Datos de la Agrupación</h5>

				  <h6 class="text-center pb-2" style="border-bottom: 2px solid">Información del Grupo</h6>
				  <div class="form-group text-justify col-12 row justify-content-center m-auto">
				  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
					    <label class="text-muted" style="font-size: 1.2em">Nombre:</label>
					    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre">
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Fecha de Fundación:</label>
					    <input type="date" class="form-control" id="fundacion" name="fundacion" placeholder="Ingrese su Apellido"> 
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
					    <label class="text-muted" style="font-size: 1.2em">Estatus:</label>
					    <input type="text" class="form-control" id="activo" name="activo" placeholder="Ingrese su Estatus">
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Estilo:</label>
					    <select class="form-control" id="estilo" name="estilo">
					    	<option value="">Seleccione un Arte:</option>
  							<option value="Plásticas">Plásticas</option>
  							<option value="Literarias">Literarias</option>
  							<option value="Musicales o Sonoras">Musicales o Sonoras</option>
  							<option value="Escénicas o Visuales">Escénicas o Visuales</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Tipo de Arte Culural:</label>
					    <select class="form-control" id="tipo_arte" name="tipo_arte">
					    	<option value="">Seleccione una Clasificación:</option>
  							<option value="x estilo">Carga X según el estilo</option>
  							<option value="x estilo">Carga X según el estilo</option>
  							<option value="x estilo">Carga X según el estilo</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Género / Material Implementado:</label>
					    <select class="form-control" id="genero_arte" name="genero_arte">
					    	<option value="">Seleccione una Opción:</option>
  							<option value="x genero">Carga genero si es literario o musical</option>
  							<option value="x genero">Carga un material si es pintor, escultor, orfebre, artesano etc etc</option>
  							<option value="x genero">Si hace vainas escenicas pues depende si es ballet pues se inhabilita esta paja</option>
						</select>
				    </div>
				  </div>

				  <div class="form-group text-center col-12 mt-2 mx-auto">
					  <button type="submit" class="btn btn-success">Registrar</button>
				  </div>
				</form>
	        </div>
	        
	    </div>		 
	</div>

    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
    <script type="text/javascript" src="../js/validaciones.js"></script>
</body>
</html>

<?php //SQL DE AGREGAR AGRUPACION MAS EL DE LA ALERTA SI TODO FUE CORRECTO O NO
	include ("../config/proceso_solicitud.php");
	$algo = -5;
?>

<?php if($algo==0): ?> <!-- MENSAJE DE EFECTIVAMENTE SE AGREGO LA AGRUPACION -->
	<script type="text/javascript">
		swal({
        	  title: 'Agrupación Añadida Exitosamente',
        	  text: 'Presione Cerrar para Continuar',
        	  icon: 'success',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>

<?php if($algo==1): ?> <!-- MENSAJE DE FALLO ERROR SI NO SE AGREGO LA AGRUPACION -->
	<script type="text/javascript">
		swal({
        	  title: 'Fallo al Añadir Agrupación',
        	  text: 'Porfavor Intente de Nuevo Añadir la Agrupación',
        	  icon: 'error',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>
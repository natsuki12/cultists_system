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
	            <h4 class="text-center mt-4">EXPRESIONES CULTURALES</h4>
	        </div>

			<div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm mb-5 mt-4 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
				<form class="m-auto col-12" id="tarte">
				  <h5 class="text-center mb-3" style="font-size: 1.5em">Ingresar Sub-División de Estilo</h5>
				  <h6 class="text-center pb-2" style="border-bottom: 2px solid">Seleccione el Estilo Previamente</h6>
				  <div class="form-group text-justify col-12 row justify-content-center m-auto">
				  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
					    <label class="text-muted" style="font-size: 1.2em">Estilo de Arte Cultural:</label>
					    <select class="form-control" id="estilo" name="estilo">
					    	<option value="">Seleccione un Arte:</option>
  							<option value="Plásticas">Plásticas</option>
  							<option value="Literarias">Literarias</option>
  							<option value="Musicales o Sonoras">Musicales o Sonoras</option>
  							<option value="Escénicas o Visuales">Escénicas o Visuales</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Nueva Sub-División o Tipo de Arte:</label>
					    <input type="text" class="form-control" id="tipo_arte" name="tipo_arte" placeholder="Ingresar Tipo"> 
				    </div>
				  </div>
				  <div class="form-group text-center col-12 mt-2">
					  <button type="submit" class="btn btn-success">Ingresar</button>
				  </div>
				</form>
	        </div>
	        
	        <div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm mb-5 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
				<form class="m-auto col-12" id="tgenero">
				  <h5 class="text-center mb-3" style="font-size: 1.5em">Ingresar Género o Material</h5>
				  <h6 class="text-center pb-2" style="border-bottom: 2px solid">Seleccione el Estilo previamente</h6>
				  <div class="form-group text-justify col-12 row justify-content-center m-auto">
				  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
					    <label class="text-muted" style="font-size: 1.2em">Estilo de Arte Cultural:</label>
					    <select class="form-control" id="estilo" name="estilo">
					    	<option value="">Seleccione un Arte:</option>
  							<option value="Plásticas">Plásticas</option>
  							<option value="Literarias">Literarias</option>
  							<option value="Musicales o Sonoras">Musicales o Sonoras</option>
  							<option value="Escénicas o Visuales">Escénicas o Visuales</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Género o Material del Arte:</label>
					    <input type="text" class="form-control" id="genero_arte" name="genero_arte" placeholder="Ingresar Género o Material"> 
				    </div>
				  </div>
				  <div class="form-group text-center col-12 mt-2">
					  <button type="submit" class="btn btn-success">Ingresar</button>
				  </div>
				</form>
	        </div>
	    </div>		 
	</div>

    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
    <script type="text/javascript" src="../js/validaciones.js"></script>
</body>
</html>

<?php //SQL DE AGREGAR EXPRESION MAS EL DE LA ALERTA SI TODO FUE CORRECTO O NO
	include ("../config/proceso_solicitud.php");
	$algo = -5;
?>

<?php if($algo==0): ?> <!-- MENSAJE DE EFECTIVAMENTE SE AGREGO LA EXPRESION CULTURAL -->
	<script type="text/javascript">
		swal({
        	  title: 'Expresión Cultural Añadida Exitosamente',
        	  text: 'Presione Cerrar para Continuar',
        	  icon: 'success',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>

<?php if($algo==1): ?> <!-- MENSAJE DE FALLO ERROR SI NO SE AGREGO LA EXPRESION CULTURAL -->
	<script type="text/javascript">
		swal({
        	  title: 'Fallo al Añadir Expresión Cultural',
        	  text: 'Porfavor Intente de Nuevo Añadir la Expresión Cultural',
        	  icon: 'error',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>
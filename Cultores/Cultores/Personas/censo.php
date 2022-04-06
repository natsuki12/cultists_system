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
	        <div class="col-lg-10 m-auto mt-0 text-justify">
	        	<span></span>
	            <img src="../Imagenes/franja.jpg" class="img-fluid mt-3">
	            <h4 class="text-center mt-4">REGISTRO DE CULTOR</h4>
	        </div>

			<div class="col-md-10 col-sm-11 col-12 mx-auto shadow-sm my-4 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
				<form class="m-auto col-12" id="censo" action="censo.php">
				  <h5 class="text-center mb-3" style="font-size: 1.5em">Datos de la Persona</h5>

				  <h6 class="text-center pb-2" style="border-bottom: 2px solid">Información del Cultor</h6>
				  <div class="form-group text-justify col-12 row justify-content-center m-auto">
				  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
					    <label class="text-muted" style="font-size: 1.2em">Nombre:</label>
					    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre">
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Apellido:</label>
					    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese su Apellido"> 
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Cédula:</label>
					    <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Ingrese su Cedula"> 
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
					    <label class="text-muted" style="font-size: 1.2em">Profesión u Oficio:</label>
					    <select class="form-control" id="profesion" name="profesion">
					    	<option value="">Seleccione una opción:</option>
					    	<option value="Abogado">Abogado</option>
					    	<option value="Administrador de Empresas">Administrador de Empresas</option>
					    	<option value="Agricultor">Agricultor</option>
					    	<option value="Albañiles, Mamposteros y Afines">Albañiles, Mamposteros y Afines</option>
					    	<option value="Arquitecto">Aquitecto</option>
					    	<option value="Auxiliar Administrativo y Afines">Auxiliar Administrativo y Afines</option>
					    	<option value="Carpintero">Carpintero</option>
					    	<option value="Cocineros y Afines">Cocineros y Afines</option>
					    	<option value="Comerciante">Comerciante</option>
					    	<option value="Comunicador Social">Comunicador Social</option>
					    	<option value="Conductor de Buses, Vehículos Pesados y Livianos">Conductor de Buses, Vehículos Pesados y Livianos</option>
					    	<option value="Contador">Contador</option>
					    	<option value="Diseñador Gráfico">Diseñador Gráfico</option>
					    	<option value="Diseñador Industrial">Diseñador Industrial</option>
					    	<option value="Economista">Economista</option>
					    	<option value="Electricista">Electricista</option>
					    	<option value="Enfermeros Profesionales">Enfermeros Profesionales</option>
					    	<option value="Estudiante">Estudiante</option>
					    	<option value="Hogar">Hogar</option>
					    	<option value="Ingeniero Agrícola">Ingeniero Agrícola</option>
					    	<option value="Ingeniero Agroindustrial">Ingeniero Agroindustrial</option>
					    	<option value="Ingeniero Agronomo">Ingeniero Agronomo</option>
					    	<option value="Ingeniero Civil">Ingeniero Civil</option>
					    	<option value="Ingeniero Electricista">Ingeniero Electricista</option>
					    	<option value="Ingeniero Industrial y Afines">Ingeniero Industrial y Afines</option>
					    	<option value="Ingeniero Mecánico">Ingeniero Mecánico</option>
					    	<option value="Ingeniero Petrolero">Ingeniero Petrolero</option>
					    	<option value="Ingeniero de Producción">Ingeniero de Producción</option>
					    	<option value="Ingeniero Químico y Afines">Ingeniero Químico y Afines</option>
					    	<option value="Ingeniero de Seguridad Industrial">Ingeniero de Seguridad Industrial</option>
					    	<option value="Ingeniero de Sistemas">Ingeniero de Sistemas</option>
					    	<option value="Ingeniero de Minas, Metalurgia y Afines">Ingeniero de Minas, Metalurgia y Afines</option>
					    	<option value="Médico">Médico</option>
					    	<option value="Obrero">Obrero</option>
					    	<option value="Odontologo">Odontologo</option>
					    	<option value="Ortodoncista">Ortodoncista</option>
					    	<option value="Oficial de las Fuerza Militar">Oficial de las Fuerza Militar</option>
					    	<option value="Oficial de la Policia Nacional">Oficial de la Policia Nacional</option>
					    	<option value="Peluqueros, Tratamiento de Belleza y Afines">Peluqueros, Tratamiento de Belleza y Afines</option>
					    	<option value="Pensionado / Jubilado">Pensionado / Jubilado</option>
					    	<option value="Plomero">Plomero</option>
					    	<option value="Prestamista">Prestamista</option>
					    	<option value="Profesores de Eduación Preescolar">Profesores de Eduación Preescolar</option>
					    	<option value="Profesores de Eduación Primaría">Profesores de Eduación Primaría</option>
					    	<option value="Profesores de Eduación Secundaría">Profesores de Eduación Secundaría</option>
					    	<option value="Profesores de Universidades y Eduación Superior">Profesores de Universidades y Eduación Superior</option>
					    	<option value="Químicos y Afines">Químicos y Afines</option>
					    	<option value="Secretario">Secretario</option>
					    	<option value="Taxista">Taxista</option>
					    	<option value="Técnicos y Asistentes de Servicios de Administración">Técnicos y Asistentes de Servicios de Administración</option>
					    	<option value="Trabajadores Agropecuarios">Trabajadores Agropecuarios</option>
					    	<option value="Tripulante">Tripulante</option>
					    	<option value="Vigilante">Vigilante</option>
					    	<option value="Otro">Otro</option>
					    </select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">	
					    <label class="text-muted" style="font-size: 1.2em">Estudio:</label>
					    <select class="form-control" id="estudio" name="estudio">
					    	<option value="">Seleccione una opción:</option>
					    	<option value="Ninguno">Ninguno</option>
					    	<option value="Básico">Básico</option>
					    	<option value="Bachiller">Bachiller</option>
					    	<option value="TSU">TSU</option>
					    	<option value="Universitario">Universitario</option>
					    </select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Estado Civil:</label>
					    <select class="form-control" id="civil" name="civil">
					    	<option value="">Seleccione una opción:</option>
  							<option value="Soltero">Soltero/a</option>
  							<option value="Casado">Casado/a</option>
  							<option value="Divorciado">Divorciado/a</option>
  							<option value="Viudo">Viudo/a</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Genero:</label>
					    <select class="form-control" id="genero" name="genero">
					    	<option value="">Seleccione una opción:</option>
  							<option value="Masculino">Masculino</option>
  							<option value="Femenino">Femenino</option>
  							<option value="Otro">Otro</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-4">
					    <label class="text-muted" style="font-size: 1.2em">¿Se encuentra activo?:</label>
					    <select class="form-control" id="activo" name="activo">
					    	<option value="">Seleccione una opción:</option>
  							<option value="SI">SI</option>
  							<option value="NO">NO</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-4">	
					    <label class="text-muted" style="font-size: 1.2em">Fecha de Nacimiento:</label>
					    <input type="date" class="form-control" id="nacimiento" name="nacimiento" placeholder="Fecha de nacimiento">
				    </div>
				  </div>

				  <h6 class="text-center pb-2 col-12" style="border-bottom: 2px solid">Expresión Cultural que Practica</h6>
				  <div class="form-group text-justify col-12 mt-3 row justify-content-center m-auto">
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
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
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
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Pertence a una Agrupación:</label>
					    <select class="form-control" id="agrupacion" name="agrupacion">
					    	<option value="">Seleccione una Opción:</option>
  							<option value="NO">NO</option>
  							<option value="x agrupacion">Carga listado de agrupaciones</option>
  							<option value="Otro">Otro</option>
						</select>
				    </div>
				  </div>

				  <h6 class="text-center pb-2 col-12" style="border-bottom: 2px solid">Datos Extra: (Opcionales)</h6>
				  <div class="form-group text-justify col-12 mt-3 row justify-content-center m-auto">
				  	<div class="col-lg-8 col-md-12 col-sm-8 col-12 mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Como fue su Aprendizaje:</label>
						<div class="input-group">
						    <select class="form-control col-3 mr-1" id="" name="">
						    	<option>Opción:</option>
	  							<option>Solo</option>
	  							<option>Clases</option>
							</select>
							<input type="text" name="aprendizaje" class="form-control" id="aprendizaje" placeholder="¿De que manera? (Opcional)" disabled="true">
						</div>
				    </div>
				  	<div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Transmite su conocimiento:</label>
					    <div class="input-group">
						    <select class="form-control col-3 mr-1" id="" name="">
						    	<option>Opción:</option>
	  							<option>SI</option>
	  							<option>NO</option>
							</select>
							<input type="text" name="conocimiento" class="form-control" id="conocimiento" placeholder="¿De que forma?" disabled="true">
						</div>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-3">
					    <label class="text-muted col-12" style="font-size: 1.2em">Presenta condiciones laborales:</label>
					    <div class="input-group">
						    <select class="form-control col-3 mr-1" id="" name="">
						    	<option>Opción:</option>
	  							<option>SI</option>
	  							<option>NO</option>
							</select>
							<input type="text" name="condiciones" class="form-control" id="condiciones" placeholder="¿Por qué?" disabled="true">
						</div>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-4">
					    <label class="text-muted" style="font-size: 1.2em">Que ganancía obtiene:</label>
					    <select class="form-control" id="ganancia" name="ganancia">
					    	<option value="">Seleccione una opción:</option>
  							<option value="Dinero">Dinero</option>
  							<option value="Alimentos">Alimentos</option>
  							<option value="Reconocimiento">Reconocimiento</option>
  							<option value="Prestigio">Prestigio</option>
  							<option value="Ninguna">Ninguna</option>
  							<option value="Otra">Otra</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-4">	
					    <label class="text-muted" style="font-size: 1.2em">Fecha que Inicio a Ejercer su Cultura:</label>
					    <input type="date" class="form-control" id="inicio" name="inicio" placeholder="Fecha de inicio">
				    </div>
				  </div>


				  <h6 class="text-center pb-2 col-12" style="border-bottom: 2px solid">Dirección de Hogar</h6>
				  <div class="form-group text-justify col-12 mt-3 row justify-content-center m-auto">
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Municipio</label>
					    <select class="form-control" id="municipio" name="municipio">
					    	<option value="">Seleccione una opción:</option>
  							<option value="X municipio">X municipio</option>
  							<option value="X municipio">X municipio</option>
  							<option value="X municipio">X municipio</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Parroquia</label>
					    <select class="form-control" id="parroquia" name="parroquia">
					    	<option value="">Seleccione una opción:</option>
  							<option value="X parroquia">X parroquia</option>
  							<option value="X parroquia">X parroquia</option>
  							<option value="X parroquia">X parroquia</option>
						</select>
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-4">	
					    <label class="text-muted" style="font-size: 1.2em">Dirección 1:</label>
					    <input type="text" class="form-control" id="dir1" name="dir1" placeholder="Ingrese su Dirección 1">
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-4">
					    <label class="text-muted" style="font-size: 1.2em">Dirección 2:</label>
					    <input type="text" class="form-control" id="dir2" name="dir2" placeholder="Ingrese su Dirección 2">
				    </div>
				  </div>


				  <h6 class="text-center pb-2" style="border-bottom: 2px solid">Información de Contacto</h6>
				  <div class="form-group text-justify col-12 mt-3 row justify-content-center m-auto">
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Teléfono 1:</label>
					    <input type="text" class="form-control" id="telefono1" name="telefono1" placeholder="Ingrese su Teléfono">
				    </div>
				  	<div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Teléfono 2 (Opcional):</label>
					    <input type="text" class="form-control" id="telefono2" name="telefono2" placeholder="Ingrese su Teléfono 2">
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Email:</label>
					    <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su Email">
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Facebook (Opcional):</label>
					    <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Ingrese su Facebook">
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Instagram (Opcional):</label>
					    <input type="text" class="form-control" id="instagram" name="instagram" placeholder="Ingrese su Instagram">
				    </div>
				    <div class="col-lg-6 col-md-10 col-sm-6 col-12  mb-3">
					    <label class="text-muted" style="font-size: 1.2em">Twitter (Opcional):</label>
					    <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Ingrese su Twitter">
				    </div>
				  </div>

				  <div class="form-group text-center col-12 mt-2 mx-auto">
				  		<input type="text" name="solicitud" value="cultor" hidden="">
					  	<button type="submit" class="btn btn-success" name="btnsubmit">Registrar</button>
				  </div>
				</form>
	        </div>
	        
	    </div>		 
	</div>

    <!-- FIN CONTENEDOR DE LAS OPCIONES -->

    <!-- MODAL DE CUANDO VAYA A REGISTRAR ALGUNA AGRUPACION -->
    <div class="modal fade" id="modal_agrupacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content" style="height: auto;">
      			<div class="modal-header">
        			<h5 class="modal-title">Registro de Agrupación</h5>
        			<button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<form class="m-auto col-12" id="cagrupacion">
					  <div class="form-group text-justify col-12 row justify-content-center m-auto">
					  	<div class="col-12 mb-3">	
						    <label class="text-muted" style="font-size: 1.2em">Nombre:</label>
						    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese su Nombre">
					    </div>
					    <div class="col-12  mb-3">
						    <label class="text-muted" style="font-size: 1.2em">Fecha de Fundación:</label>
						    <input type="date" class="form-control" id="fundacion" name="fundacion" placeholder="Ingrese su Apellido"> 
					    </div>
					    <div class="col-12  mb-3">	
						    <label class="text-muted" style="font-size: 1.2em">Estatus:</label>
						    <input type="text" class="form-control" id="activo" name="activo" placeholder="Ingrese su Estatus">
					    </div>
					    <div class="col-12  mb-3">
						    <label class="text-muted" style="font-size: 1.2em">Estilo:</label>
						    <select class="form-control" id="estilo" name="estilo">
						    	<option value="">Seleccione un Arte:</option>
	  							<option value="Plásticas">Plásticas</option>
	  							<option value="Literarias">Literarias</option>
	  							<option value="Musicales o Sonoras">Musicales o Sonoras</option>
	  							<option value="Escénicas o Visuales">Escénicas o Visuales</option>
							</select>
					    </div>
					    <div class="col-12 mb-3">
						    <label class="text-muted" style="font-size: 1.2em">Tipo de Arte Culural:</label>
						    <select class="form-control" id="tipo_arte" name="tipo_arte">
						    	<option value="">Seleccione una Clasificación:</option>
	  							<option value="x estilo">Carga X según el estilo</option>
	  							<option value="x estilo">Carga X según el estilo</option>
	  							<option value="x estilo">Carga X según el estilo</option>
							</select>
					    </div>
					    <div class="col-12  mb-3">
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
	</div>
    <!-- FIN MODAL DE CUANDO VAYA A REGISTRAR UNA AGRUPACION -->

    <script type="text/javascript" src="../js/validaciones.js"></script>
    <script type="text/javascript">
    	$("#agrupacion").change(function(event) {
    		if($(this).val()=="Otro"){
    			$("#modal_agrupacion").modal('show');
    		}
    	}); 
    </script>
</body>
</html>

<?php //SQL DE CENSAR MAS EL DE LA ALERTA SI TODO FUE CORRECTO O NO
	include ("../config/proceso_solicitud.php");
	$algo = -5;
?>

<?php if($algo==0): ?> <!-- MENSAJE DE EFECTIVAMENTE SE CENSO LA PEROSNA -->
	<script type="text/javascript">
		swal({
        	  title: 'Registro Exitoso',
        	  text: 'Presione el boton Reporte si no se genero el PDF',
        	  icon: 'success',
        	  closeOnClickOutside: false,
        	  buttons:{
	        	  Reporte: {
	        	  	value: "Reporte",
	        	  	closeModal:false,
	        	  },
	        	  Cerrar: {
	        	  	dangerMode: true,
	        	  	value: "Cerrar",

	        	  },
        	  },
        	});

		$(".swal-button--Reporte").addClass('bg-danger');
		$(".swal-button--Cerrar").addClass('bg-secondary');

		$(".swal-button--Reporte").click(function(event) {
		    $(".swal-button__loader").text('Reporte');
		    $(this).removeClass('swal-button--loading');
		    //AQUI SE PONE EL PDF PARA QUE LO GENERE NUEVAMENTE
		});
	</script>
<?php endif; ?>

<?php if($algo==1): ?> <!-- MENSAJE DE FALLO ERROR SI NO SE CENSO LA PEROSNA POR TRANSACCION-->
	<script type="text/javascript">
		swal({
        	  title: 'Registro Fallido',
        	  text: 'Porfavor Intente de Nuevo el Registro',
        	  icon: 'error',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>

<?php if($algo==2): ?> <!-- MENSAJE DE FALLO ERROR SI NO SE CENSO LA PEROSNA POR CEDULA DUPLICADA-->
	<script type="text/javascript">
		swal({
        	  title: 'Registro Fallido - Cédula Duplicada',
        	  text: 'Porfavor Intente de Nuevo el Registro',
        	  icon: 'error',
        	  closeOnClickOutside: false,
        	  button: "Cerrar",
        	});
		$(".swal-button--confirm").addClass('bg-secondary');
	</script>
<?php endif; ?>
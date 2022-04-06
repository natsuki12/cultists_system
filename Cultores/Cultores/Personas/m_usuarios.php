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
	    	<div class="col-lg-10 mx-auto">
		        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid mt-3">
		        <h4 class="text-center mt-4">MODIFICACIÓN DE CULTOR</h4>
	        </div>
	        
	        <div class="col-sm-10 col-12 m-auto">
		        <h5 class="text-primary mt-4">Modificar los Datos de Persona Registrada.</h5>
		        <div class="row justify-content-between mb-2">
		        	<div class="col-sm-6 col-12 text-left">
						<label class="float-left">Buscar por cédula:</label>
		        		<input id="#" align="left" class="float-left ml-lg-2 ml-md-0 ml-sm-2 col-lg-3 col-md-5 col-sm-4 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="cédula">
		        	</div>
		        </div>

		     <form id="censo">
		    <!-- CADA SECCION SOBRE LOS DATOS DE UNA PERSONA -->
	        	<div class="row mt-4">
			    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
			    		<h5 class="">Datos de la Persona</h5>
			    		<div class="border px-sm-4 py-3 text-dark row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Nombre: </span>
			    				<input id="i_nombre" type="text" name="nombre" disabled="true" class="font-italic form-control" value="Andres Eduardo" style="display: inline;  background-color: transparent; border:0">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_nombre" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Apellido: </span>
			    				<input id="i_apellido" type="text" name="apellido" disabled="true" class="font-italic form-control" value="Ramirez Duque" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_apellido" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>

			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Fecha de Nacimiento: </span>
			    				<input id="i_nacimiento" type="date" name="nacimiento" disabled="true" class="font-italic form-control" value="1996-06-28" style="display: inline;  background-color: transparent; border: 0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_nacimiento" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Cédula de Identidad: </span>
			    				<input id="i_cedula" type="text" name="cedula" disabled="true" class="font-italic form-control" value="23868394" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_cedula" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Profesión u Oficio: </span>
			    				<select class="form-control font-italic" id="i_profesion" name="profesion" disabled="true" style="display: inline;  background-color: transparent; border:0;">
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
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_profesion" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Estudio: </span>
			    				<select class="form-control font-italic" id="i_estudio" name="estudio" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="">Seleccione una opción:</option>
							    	<option value="Ninguno">Ninguno</option>
							    	<option value="Básico">Básico</option>
							    	<option value="Bachiller">Bachiller</option>
							    	<option value="TSU">TSU</option>
							    	<option value="Universitario">Universitario</option>
							    </select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_estudio" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Estado Civil: </span>
			    				<select class="form-control font-italic" id="i_ecivil" name="civil" disabled="true" style="display: inline; background-color: transparent; border:0;">
		  							<option value="La que viaja">Soltero/a</option>
		  							<option value="Soltero">Soltero/a</option>
		  							<option value="Casado">Casado/a</option>
		  							<option value="Divorciado">Divorciado/a</option>
		  							<option value="Viudo">Viudo/a</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_ecivil" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Se encuentra Activo: </span>
			    				<select class="form-control font-italic" id="i_activo" name="activo" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="La que viaja">SI</option>
		  							<option value="SI">SI</option>
		  							<option value="NO">NO</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_activo" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    	</div>
		        </div>
		    <!-- FIN DE CADA SECCION DE LOS DATOS DE UNA PERSONA -->

		    <div class="w-100"></div> <!--FORZAR LA SEPARACION-->

		    <!-- CADA SECCIION DE ARTE PRACTICADA -->
		    	<div class="row mt-5">
			    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
			    		<h5 class="">Expresión Cultural</h5>
			    		<div class="border px-sm-4 py-3 text-dark row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Estilo de Arte Cultural: </span>
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
			    				<span class="font-weight-bold">Tipo de Arte Cultural: </span>
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
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Agrupación que Pertenece: </span>
			    				<select class="form-control font-italic" id="i_agrupacion" name="agrupacion" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="La que Viaja">N/A</option>
		  							<option value="NO">NO</option>
		  							<option value="x agrupacion">Carga listado de agrupaciones</option>
		  							<option value="Otro">Otro</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_agrupacion" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    	</div>
		        </div>
		    <!-- FIN DE CADA SECCION DE ARTE PRACTICADA -->

		    <div class="w-100"></div> <!--FORZAR LA SEPARACION-->

		    <!-- CADA SECCIION DE DATOS EXTRA DEL CULTOR -->
		    	<div class="row mt-5">
			    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
			    		<h5 class="">Datos Extra del Cultor</h5>
			    		<div class="border px-sm-4 py-3 text-dark row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Forma de Aprendizaje: </span>
			    				<input id="i_aprendizaje" type="text" name="i_aprendizaje" disabled="true" class="font-italic form-control" value="Clases" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_aprendizaje" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Transmite su Conocimiento: </span>
			    				<input id="i_conocimiento" type="text" name="i_conocimiento" disabled="true" class="font-italic form-control" value="Clases particulares" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_conocimiento" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Presenta Condiciones Laborales: </span>
			    				<input id="i_condiciones" type="text" name="i_condiciones" disabled="true" class="font-italic form-control" value="No" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_condiciones" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Ganancía generada: </span>
			    				<select class="form-control font-italic" id="i_ganancia" name="ganancia" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="La que Viaja">Null - Vacio</option>
		  							<option value="Dinero">Dinero</option>
		  							<option value="Alimentos">Alimentos</option>
		  							<option value="Reconocimiento">Reconocimiento</option>
		  							<option value="Prestigio">Prestigio</option>
		  							<option value="Ninguna">Ninguna</option>
		  							<option value="Otra">Otra</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_ganancia" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Fecha de Inicio del arte practicada: </span>
			    				<input id="i_inicio" type="date" name="inicio" disabled="true" class="font-italic form-control" value="1996-06-28" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_inicio" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    	</div>
		        </div>
		    <!-- FIN DE CADA SECCION DE DATOS EXTRA DEL CULTOR -->

		    <div class="w-100"></div> <!--FORZAR LA SEPARACION-->

		    <!-- CADA SECCIION DE DIRECCION DE HOGAR -->
		    	<div class="row mt-5">
			    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
			    		<h5 class="">Dirección de Hogar</h5>
			    		<div class="border px-sm-4 py-3 text-dark row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Municipio: </span>
			    				<select class="form-control font-italic" id="i_municipio" name="municipio" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="La que Viaja">Maneiro</option>
		  							<option value="X municipio">X municipio</option>
		  							<option value="X municipio">X municipio</option>
		  							<option value="X municipio">X municipio</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_municipio" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Parroquia: </span>
			    				<select class="form-control font-italic" id="i_parroquia" name="parroquia" disabled="true" style="display: inline;  background-color: transparent; border:0;">
							    	<option value="La que Viaja">Pampatar</option>
		  							<option value="X parroquia">X parroquia</option>
		  							<option value="X parroquia">X parroquia</option>
		  							<option value="X parroquia">X parroquia</option>
								</select>
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_parroquia" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Dirección 1: </span>
			    				<input id="i_dir1" type="text" name="dir1" disabled="true" class="font-italic form-control" value="Calle San Martin" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_dir1" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Dirección 2: </span>
			    				<input id="i_dir2" type="text" name="dir2" disabled="true" class="font-italic form-control" value="Urb. Paraiso 3, Aquamarina, Casa N#25" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_dir2" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    	</div>
		        </div>
		    <!-- FIN DE CADA SECCION DE DIRECCION DE HOGAR -->

		    <div class="w-100"></div> <!--FORZAR LA SEPARACION-->

		    <!-- SECCION DE INFORMACION DE REDES SOCIALES -->
		    	<div class="row mt-5">
			    	<div class="col-lg-8 col-md-10 col-sm-10 col-12 mx-auto">
			    		<h5 class="">Redes y Contacto</h5>
			    		<div class="border px-sm-4 py-3 text-dark row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Teléfono 1: </span>
			    				<input id="i_telefono1" type="text" name="telefono1" disabled="true" class="font-italic form-control" value="04127942183" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_telefono1" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Teléfono 2: </span>
			    				<input id="i_telefono2" type="text" name="telefono2" disabled="true" class="font-italic form-control" value="04127942183" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_telefono2" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Correo: </span>
			    				<input id="i_correo" type="text" name="email" disabled="true" class="font-italic form-control" value="andresramirez2025@gmail.com" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_correo" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Instagram: </span>
			    				<input id="i_instagram" type="text" name="instagram" disabled="true" class="font-italic form-control" value="@andres28ramirez" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_instagram" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Twitter: </span>
			    				<input id="i_twitter" type="text" name="twitter" disabled="true" class="font-italic form-control" value="N/A" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_twitter" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    		<div class="border px-sm-4 py-3 text-dark mt-2 row">
			    			<div class="col-sm-10 col-12">
			    				<span class="font-weight-bold">Facebook: </span>
			    				<input id="i_facebook" type="text" name="facebook" disabled="true" class="font-italic form-control" value="@andres28ramirez" style="display: inline;  background-color: transparent; border:0;">
			    			</div>
			    			<div class="col-sm-2 col-12 text-right">
			    				<a class="text-primary" id="e_facebook" style="cursor: pointer;">Editar</a>
			    			</div>
			    		</div>
			    	</div>
		        </div>
		    <!-- FIN DE REDES SOCIALES -->

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

	    	$("#e_apellido").click(function(event) {
	    		$("#i_apellido").removeAttr('disabled');
	    		$("#i_apellido").focus();
	    	});

	    	$("#e_nacimiento").click(function(event) {
	    		$("#i_nacimiento").removeAttr('disabled');
	    		$("#i_nacimiento").focus();    	
	    	});

	    	$("#e_cedula").click(function(event) {
	    		$("#i_cedula").removeAttr('disabled');
	    		$("#i_cedula").focus();    	
	    	});

	    	$("#e_profesion").click(function(event) {
	    		$("#i_profesion").removeAttr('disabled');
	    		$("#i_profesion").focus();    	
	    	});

	    	$("#e_estudio").click(function(event) {
	    		$("#i_estudio").removeAttr('disabled');
	    		$("#i_estudio").focus();    	
	    	});

	    	$("#e_ecivil").click(function(event) {
	    		$("#i_ecivil").removeAttr('disabled');
	    		$("#i_ecivil").focus();    	
	    	});

	    	$("#e_activo").click(function(event) {
	    		$("#i_activo").removeAttr('disabled');
	    		$("#i_activo").focus();    	
	    	});
	    //FIN INPUTS DE SECCION DE DATOS PERSONALES

	    //INPUTS DE SECCION DE EXPRESION CULTURAL
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

	    	$("#e_agrupacion").click(function(event) {
	    		$("#i_agrupacion").removeAttr('disabled');
	    		$("#i_agrupacion").focus();    	
	    	});
	    //FIN INPUTS DE SECCION DE EXPRESION CULTURAL

	    //INPUTS DE SECCION DE DATOS EXTRA DE LA PERSONA
	    	$("#e_aprendizaje").click(function(event) {
	    		$("#i_aprendizaje").removeAttr('disabled');
	    		$("#i_aprendizaje").focus();    	
	    	});

	    	$("#e_conocimiento").click(function(event) {
	    		$("#i_conocimiento").removeAttr('disabled');
	    		$("#i_conocimiento").focus();    	
	    	});

	    	$("#e_condiciones").click(function(event) {
	    		$("#i_condiciones").removeAttr('disabled');
	    		$("#i_condiciones").focus();    	
	    	});

	    	$("#e_ganancia").click(function(event) {
	    		$("#i_ganancia").removeAttr('disabled');
	    		$("#i_ganancia").focus();    	
	    	});

	    	$("#e_inicio").click(function(event) {
	    		$("#i_inicio").removeAttr('disabled');
	    		$("#i_inicio").focus();    	
	    	});
	    //FIN INPUTS DE SECCION DE DATOS EXTRA DE LA PERSONA

	    //INPUTS DE SECCION DE DIRECCION DE HOGAR
	    	$("#e_municipio").click(function(event) {
	    		$("#i_municipio").removeAttr('disabled');
	    		$("#i_municipio").focus();    	
	    	});

	    	$("#e_parroquia").click(function(event) {
	    		$("#i_parroquia").removeAttr('disabled');
	    		$("#i_parroquia").focus();    	
	    	});

	    	$("#e_dir1").click(function(event) {
	    		$("#i_dir1").removeAttr('disabled');
	    		$("#i_dir1").focus();    	
	    	});

	    	$("#e_dir2").click(function(event) {
	    		$("#i_dir2").removeAttr('disabled');
	    		$("#i_dir2").focus();    	
	    	});
	    //FIN INPUTS DE SECCION DE DIRECCION DE HOGAR

	    //INPUTS DE SECCION DE INFORMACION DE CONTACTO Y REDES
	    	$("#e_telefono1").click(function(event) {
	    		$("#i_telefono1").removeAttr('disabled');
	    		$("#i_telefono1").focus();    	
	    	});

	    	$("#e_telefono2").click(function(event) {
	    		$("#i_telefono2").removeAttr('disabled');
	    		$("#i_telefono2").focus();    	
	    	});

	    	$("#e_correo").click(function(event) {
	    		$("#i_correo").removeAttr('disabled');
	    		$("#i_correo").focus();    	
	    	});

	    	$("#e_instagram").click(function(event) {
	    		$("#i_instagram").removeAttr('disabled');
	    		$("#i_instagram").focus();    	
	    	});

	    	$("#e_twitter").click(function(event) {
	    		$("#i_twitter").removeAttr('disabled');
	    		$("#i_twitter").focus();    	
	    	});

	    	$("#e_facebook").click(function(event) {
	    		$("#i_facebook").removeAttr('disabled');
	    		$("#i_facebook").focus();    	
	    	});
	    //FIN INPUTS DE SECCION DE INFORMACION DE CONTACTO Y REDES
    </script>
</body>
</html>

<?php //SQL DE MODIFICAR MAS EL DE LA ALERTA SI TODO FUE CORRECTO O NO
	include ("../config/proceso_solicitud.php");
	$algo = -5;
?>

<?php if($algo==0): ?> <!-- MENSAJE DE EFECTIVAMENTE SE MODIFICO LOS DATOS DE LA PEROSNA -->
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

<?php if($algo==1): ?> <!-- MENSAJE DE FALLO ERROR SI NO SE MODIFICO LOS DATOS DE LA PERSONA -->
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

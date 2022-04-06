<?php
	include("../base.php");
?>	
	<!-- CONTENEDOR DE LA INFORMACION DE ADENTRO -->
	<div class="container-fluid justify-content-center" style="height: 100%" id="main">
	    <div id="solicitud">
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
		        <h4 class="text-center mt-4">CULTORES CENSADOS</h4>
	        </div>

	        <div class="col-11 m-auto">
	        <h5 class="text-primary mt-4">Listado de Personas Registradas:</h5>
	        <div class="row justify-content-between mb-2">
	        	<div class="col-lg-6 col-md-12 col-sm-10 col-12">
					<input id="#" align="left" class="float-left mr-2 col-sm-3 col-12 form-control form-control-sm" type='number' name='cantidad' value='10' min='1'>
					<label class="float-left">Nro de Registros por Pág.</label>
	        	</div>
	        	<div class="col-lg-6 col-md-12 col-12 text-right">
	        		<input id="#" align="left" class="float-right ml-2 col-sm-3 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="cédula">
					<label class="float-right">Buscar por cédula:</label>
	        	</div>
	        	<div class="col-lg-6 col-md-12 col-12"></div>
	        	<div class="col-lg-6 col-md-12 col-12 text-right">
	        		<input id="#" align="left" class="float-right ml-2 col-sm-3 col-12 form-control form-control-sm" type='text' name='busqueda' placeholder="nombre">
					<label class="float-right">Buscar por nombre:</label>
	        	</div>
	        </div>

	        <div class="row justify-content-between">
	        	<div class='col-lg-6 col-md-6 col-sm-6 col-12'>
			    	<h6 class='text-muted mb-lg-3'>Cantidad de Registrados: <strong class='text-dark'>20</strong></h6>
			    </div>
			    <div class='col-lg-6 col-md-6 col-sm-6 col-12 text-right'>
			      	<h6 class='text-muted mb-lg-3'>1-10 / Página: 
			      		<a class='text-dark' href='#'><strong>1 </strong></a>
			      		<a class='text-dark' href='#'>2 </a>
			      		<a class='text-dark' href='#'>3 </a>
			      		<a class='text-dark' href='#'>4 </a>
			      		<a class='text-dark' href='#'>5 </a>
			        </h6>
			    </div>
	        </div>
	        <table class="table table-responsive p-0 text-center table-striped table-bordered col-12 " style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
	          <thead class="thead-success ">
	            <tr>
	                <th>Descargar Reporte</th>
	                <th>Cédula</th>
	                <th>Genero</th>
	                <th>Nombre</th>
	                <th>Apellido</th>
	                <th>Fecha de Nacimiento</th>
	                <th>Profesión</th>
	                <th>Estudio</th>
	                <th>Estado Civil</th>
	                <th>Agrupación</th>
	                <th>Expresión Cultural</th>
	                <th>Contacto / Redes</th>
	                <th>Dirección de Hogar</th>
	                <th>Inf. Extra</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $i=0; while($i<5): ?>
                  <tr>
                  	 <th><img src="../Imagenes/pdf.png" class="img-fluid" height="50%" width="40%"></th>
                     <th>24877448</th>
                     <td>M</td>
                     <td>Miguel José</td>
                     <td>Gil Fuentes</td>
                     <td>1994-03-04</td>
                     <td>Estudiante</td>
                     <td>Bachiller</td>
                     <td>Soltero</td>
                     <td>N/A</td>
                     <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#m_arte">Ver</button></td>
                     <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#contacto">Ver</button></td>
                     <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#direction">Ver</button></td>
                     <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#extra">Ver</button></td>
                  </tr>
                <?php $i++; endwhile; ?>	   	       
	          </tbody>
	        </table>
	        <div class="row justify-content-between">
	        	<div class='col-lg-6 col-md-6 col-sm-12'>
			    </div>
			    <div class='col-lg-6 col-md-6 col-sm-12 text-right'>
			      	<h6 class='text-muted mb-lg-3'>1-10 / Página: 
			      		<a class='text-dark' href='#'><strong>1 </strong></a>
			      		<a class='text-dark' href='#'>2 </a>
			      		<a class='text-dark' href='#'>3 </a>
			      		<a class='text-dark' href='#'>4 </a>
			      		<a class='text-dark' href='#'>5 </a>
			        </h6>
			    </div>
	        </div>
	        </div>
	    </div>
	</div>

	<!-- MODAL PARA CUANDO QUIERA VER AL DETALLE LA INFORMACION DE DIRECCION DE HOGAR -->
	<div class="modal fade" id="direction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content" style="height: auto;">
      			<div class="modal-header">
        			<h5 class="modal-title">Miguel Jose Gil Fuentes<br>Dirección de Hogar:</h5>
        			<button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<form class="h-50">
						<div class="form-group">
			    			<label>Municipio:</label>
			    			<label class="form-control">X Municipio</label>
			  			</div>
			  			<div class="form-group">
    						<label>Parroquia:</label>
			    			<label class="form-control">X Parroquia</label>
  						</div>
  						<div class="form-group">
    						<label>Dirección 1:</label>
    						<label class="form-control">X Zona Territotial</label>
  						</div>
  						<div class="form-group">
    						<label>Dirección 2:</label>
    						<label class="form-control">X Direccion especifica</label>
			  			</div>
					</form>
      			</div>
    		</div>
  		</div>
	</div>
	
	<!-- MODAL PARA CUANDO QUIERA VER AL DETALLE LA INFORMACION DE CONTACTO -->
	<div class="modal fade" id="contacto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content" style="height: auto;">
      			<div class="modal-header">
        			<h5 class="modal-title">Miguel Jose Gil Fuentes<br>Información de Contacto:</h5>
        			<button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<form class="h-50">
						<div class="form-group">
			    			<label>Teléfono 1:</label>
			    			<label class="form-control">X Número</label>
			  			</div>
			  			<div class="form-group">
    						<label>Teléfono 2:</label>
			    			<label class="form-control">X Número</label>
  						</div>
  						<div class="form-group">
    						<label>Correo Electrónico:</label>
    						<label class="form-control">X correo</label>
  						</div>
  						<h6 class="text-center">Redes Sociales</h6>
  						<div class="form-group">
    						<label>Instagram:</label>
    						<label class="form-control">@red</label>
			  			</div>
			  			<div class="form-group">
    						<label>Facebook:</label>
    						<label class="form-control">@red</label>
			  			</div>
			  			<div class="form-group">
    						<label>Twitter:</label>
    						<label class="form-control">@red</label>
			  			</div>
					</form>
      			</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL PARA CUANDO QUIERA VER AL DETALLE LA INFORMACION EXTRA DE LA PERSONA -->
	<div class="modal fade" id="extra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content" style="height: auto;">
      			<div class="modal-header">
        			<h5 class="modal-title">Miguel Jose Gil Fuentes<br>Información Extra:</h5>
        			<button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<form class="h-50">
						<div class="form-group">
			    			<label>Aprendizaje:</label>
			    			<label class="form-control">X texto</label>
			  			</div>
			  			<div class="form-group">
    						<label>Transmite su Conocimiento:</label>
			    			<label class="form-control">X texto</label>
  						</div>
  						<div class="form-group">
    						<label>Presenta condiciones minimas para laborar:</label>
    						<label class="form-control">X texto</label>
  						</div>
  						<div class="form-group">
    						<label>Ganancía que recibe:</label>
    						<label class="form-control">X texto</label>
			  			</div>
			  			<div class="form-group">
    						<label>Fecha en que inicio su arte cultural:</label>
    						<label class="form-control">X texto</label>
			  			</div>
					</form>
      			</div>
    		</div>
  		</div>
	</div>

	<!-- MODAL PARA CUANDO QUIERA VER AL DETALLE LA INFORMACION EXTRA DE LA PERSONA -->
	<div class="modal fade" id="m_arte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content" style="height: auto;">
      			<div class="modal-header">
        			<h5 class="modal-title">Miguel Jose Gil Fuentes<br>Expresión Cultural que Practica:</h5>
        			<button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<form class="h-50">
						<div class="form-group">
			    			<label>Estilo:</label>
			    			<label class="form-control">X texto</label>
			  			</div>
			  			<div class="form-group">
    						<label>Tipo de Arte Cultural:</label>
			    			<label class="form-control">X texto</label>
  						</div>
  						<div class="form-group">
    						<label>Género o Material Implementado:</label>
    						<label class="form-control">X texto</label>
  						</div>
					</form>
      			</div>
    		</div>
  		</div>
	</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>
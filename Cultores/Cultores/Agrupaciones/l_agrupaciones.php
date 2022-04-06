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
		        <h4 class="text-center mt-4">AGRUPACIONES CENSADOS</h4>
	        </div>
	        
	        <div class="col-11 m-auto">
	        <h5 class="text-primary mt-4">Listado de Agrupaciones Registradas:</h5>
	        <div class="row justify-content-between mb-2">
	        	<div class="col-lg-6 col-md-12 col-sm-10 col-12">
					<input id="#" align="left" class="float-left mr-2 col-sm-3 col-12 form-control form-control-sm" type='number' name='cantidad' value='10' min='1'>
					<label class="float-left">Nro de Registros por Pág.</label>
	        	</div>
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
	                <th>Nombre</th>
	                <th>Fecha de Fundación</th>
	                <th>Estatus</th>
	                <th>Estilo de Arte</th>
	                <th>Tipo de Arte</th>
	                <th>Género / Material</th>
	                <th>Integrantes</th>
	            </tr>
	          </thead>
	          <tbody>
	          	<?php $i=0; while($i<5): ?>
                  <tr>
                     <th>Calle Ciega</th>
                     <td>28-06-1996</td>
                     <td>Activo</td>
                     <td>Musicales o Sonoras</td>
                     <td>Compositores</td>
                     <td>Reggaeton</td>
                     <td><button class="btn btn-primary" value="Ver" data-toggle="modal" data-target="#m_integrantes">Ver</button></td>
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

	<!-- MODAL PARA CUANDO QUIERA VER AL DETALLE LA INFORMACION EXTRA DE LA PERSONA -->
	<div class="modal fade" id="m_integrantes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  		<div class="modal-dialog modal-dialog-centered" role="document">
    		<div class="modal-content" style="height: auto;">
      			<div class="modal-header">
        			<h5 class="modal-title">Agrupación Calle Ciega<br>Integrantes:</h5>
        			<button type="button" class="close r-cerrar" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
      			<div class="modal-body">
        			<form class="h-50">
						<div class="form-group">
			    			<label>Miguel Gil Fuentes:</label>
			    			<label class="form-control">Compositor</label>
			  			</div>
			  			<div class="form-group">
    						<label>Miguel Gil Fuentes:</label>
			    			<label class="form-control">Cantante</label>
  						</div>
  						<div class="form-group">
    						<label>Persona:</label>
    						<label class="form-control">Que hace</label>
  						</div>
					</form>
      			</div>
    		</div>
  		</div>
	</div>
    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
    <script type="text/javascript" src="/Prefectura/js/solicitud.js"></script>
</body>
</html>
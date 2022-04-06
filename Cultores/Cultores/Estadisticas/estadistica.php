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
	    	<div class="col-lg-10 mx-auto">
		        <img src="/Prefectura/Imagenes/franja.jpg" class="img-fluid mt-3">
	        </div>

	        <div class="col-12 mx-auto">
	        <h5 class="text-primary text-center mt-4">Estadísticas de Censo de Cultores</h5>
	        	
	        	<!-- CONTENEDOR DE LO DE ADENTRO CON LAS ESTADISTICAS-->
	        	<div class="container">
      
			      <!-- LOS 6 BLOQUES DEL INICIO -->
			      <div class="row justify-content-center my-3">
			          <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			            <div class="col-7 float-left mt-4">
			              <p class="display-4 text-primary">5000</p>
			            </div>
			            <div class="p-2 col-5 float-left">
			              <img src="../Imagenes/Censados.png" class="img-fluid" style="height: 95px">
			            </div>
			            <div class="col-12 p-0">
			              <span class="text-muted">N# DE PERSONAS CENSADAS</span>
			            </div>
			          </div>
			          <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			            <div class="col-7 float-left mt-4">
			              <p class="display-4 text-primary">X</p>
			            </div>
			            <div class="p-2 col-5 float-left">
			              <img src="../Imagenes/Agrupaciones.png" class="img-fluid" style="height: 95px">
			            </div>
			            <div class="col-12 p-0">
			              <span class="text-muted">N# DE AGRUPACIONES CENSADAS</span>
			            </div>
			          </div>
			          <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			            <div class="col-7 float-left mt-4">
			              <p class="display-4 text-primary">X</p>
			            </div>
			            <div class="p-2 col-5 float-left">
			              <img src="../Imagenes/Plasticos.png" class="img-fluid" style="height: 95px">
			            </div>
			            <div class="col-12 p-0">
			              <span class="text-muted">N# DE ARTISTAS PLÁSTICOS</span>
			            </div>
			          </div>
			          <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			            <div class="col-7 float-left mt-4">
			              <p class="display-4 text-primary">X</p>
			            </div>
			            <div class="p-2 col-5 float-left">
			              <img src="../Imagenes/Literarios.png" class="img-fluid" style="height: 95px">
			            </div>
			            <div class="col-12 p-0">
			              <span class="text-muted">N# DE ARTISTAS LITERARIOS</span>
			            </div>
			          </div>
			          <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			            <div class="col-7 float-left mt-4">
			              <p class="display-4 text-primary">X</p>
			            </div>
			            <div class="p-2 col-5 float-left">
			              <img src="../Imagenes/Sonoros.png" class="img-fluid" style="height: 95px">
			            </div>
			            <div class="col-12 p-0">
			              <span class="text-muted">N# DE ARTISTAS MUSICALES O SONORAS</span>
			            </div>
			          </div>
			          <div class="col-lg-3 col-sm-6 p-2 mx-2 mb-mg-0 mb-sm-2 text-center rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			            <div class="col-7 float-left mt-4">
			              <p class="display-4 text-primary">X</p>
			            </div>
			            <div class="p-2 col-5 float-left">
			              <img src="../Imagenes/Escenicas.png" class="img-fluid" style="height: 95px">
			            </div>
			            <div class="col-12 p-0">
			              <span class="text-muted">N# DE ARTISTAS ESCÉNICOS O VISUALES</span>
			            </div>
			          </div>
			      </div>
			      <!-- FIN LOS 6 BLOQUES DEL INICIO -->

			      <!-- BLOQUE PARA GENERAR EL REPORTE -->
			      <div class="col-lg-8 col-md-10 col-sm-11 col-12 mx-auto shadow-sm my-4 py-2 rounded" style="box-shadow: 0px 5px 10px -2px rgba(0,0,0,0.2);">
			      	<form class="m-auto col-12" id="freporte">
					  <h5 class="text-center mb-3" style="font-size: 1.5em">Generar Reporte</h5>
					  <div class="form-group text-justify col-12 row justify-content-center m-auto">
					  	<div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">	
						    <label class="text-muted" style="font-size: 1.2em">Censados:</label>
						    <select class="form-control" id="rcensado" name="rcensado">
						    	<option value="">Seleccione el Filtro:</option>
	  							<option value="Personas">Personas</option>
	  							<option value="Agrupaciones">Agrupaciones</option>
							</select>
					    </div>
					    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">	
						    <label class="text-muted" style="font-size: 1.2em">Periodo:</label>
						    <select class="form-control" id="rperiodo" name="rperiodo">
						    	<option value="">Seleccione el Periodo:</option>
	  							<option value="Anual">Anual</option>
	  							<option value="Cuatrimestral">Cuatrimestral</option>
	  							<option value="Trimestral">Trimestral</option>
	  							<option value="Bimensual">Bimensual</option>
	  							<option value="Mensual">Mensual</option>
	  							<option value="Semanal">Semanal</option>
	  							<option value="Diario">Diario</option>
							</select>
					    </div>
					    <div class="col-lg-6 col-md-10 col-sm-6 col-12 mb-1">	
						    <label class="text-muted" style="font-size: 1.2em">Estilo:</label>
						    <select class="form-control" id="restilo" name="restilo">
						    	<option value="">Seleccione un Arte:</option>
						    	<option value="Todos">Todos</option>
	  							<option value="Plásticas">Plásticas</option>
	  							<option value="Literarias">Literarias</option>
	  							<option value="Musicales o Sonoras">Musicales o Sonoras</option>
	  							<option value="Escénicas o Visuales">Escénicas o Visuales</option>
							</select>
					    </div>
					  </div>
					  <div class="form-group text-center col-12 mt-2">
						  <button type="submit" class="btn btn-success">Enviar</button>
					  </div>
					</form>
			      </div>
			      <!-- FIN BLOQUE PARA GENERAR EL REPORTE -->

			    <!-- RONDA DE CONTADORES ESPECIFICOS -->
			       <div class="row justify-content-center my-3">
			       	<!-- AQUI LA IDEA ES UTILIZAR EL CONTADOR TOTAL DE PERSONAS CENSADAS POR X ARTE, EL CUAL SE COLOCARA AL FINAL Y SERA NUESTRA AREA VALUE MAX, LUEGO EN EL ARIA VALUE NOW SE COLOCA CUANTOS EN CANTIDAD SOLTO Y BUENO COPIAR EL NOMBRE Y LISTO
						OJO SE DEBE DETERMINAR EL PORCENTAJE QUE REPRESENTA DEL TOTAL PARA ACOMODAR EL WIDTH DEL PROGRESS BAR
			       	-->
			       	<!-- CONTADOR ESPECIFICOS DE TIPOS DE PERSONAS POR ARTE PLASTICA -->
				       <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Artes Plásticas:</h6>
		                </div>
		                <div class="card-body border">
		                  <h4 class="small font-weight-bold ">Pintor <span class="float-right">200</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar" role="progressbar" style="width: 15.92%; background-color: #FFEC0E" aria-valuenow="200" aria-valuemin="0" aria-valuemax="1256"></div>
		                  </div>
		                  <h4 class="small font-weight-bold ">Escultor <span class="float-right">326</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar" role="progressbar" style="width: 25.95%; background-color: #3FA637" aria-valuenow="326" aria-valuemin="0" aria-valuemax="1256"></div>
		                  </div>
		                  <h4 class="small font-weight-bold ">Artesano <span class="float-right">400</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar" role="progressbar" style="width: 31.84%; background-color: #FFEC0E" aria-valuenow="400" aria-valuemin="0" aria-valuemax="1256"></div>
		                  </div>
		                  <h4 class="small font-weight-bold ">Orfebrería <span class="float-right">140</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar" role="progressbar" style="width: 11.14%; background-color: #3FA637" aria-valuenow="140" aria-valuemin="0" aria-valuemax="1256"></div>
		                  </div>
		                  <h4 class="small font-weight-bold ">Grabado <span class="float-right">190</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar" role="progressbar" style="width: 15.12%; background-color: #FFEC0E" aria-valuenow="190" aria-valuemin="0" aria-valuemax="1256"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Total de Artistas Plásticos <span class="float-right">1256</span></h4>
		                  <div class="progress">
		                    <div class="progress-bar" role="progressbar" style="width: 100%; background-color: #2E3192" aria-valuenow="100" aria-valuemin="0" aria-valuemax="1256"></div>
		                  </div>
		                </div>
		               </div>
		            <!-- FIN CONTADOR ESPECIFICOS DE TIPOS DE PERSONAS POR ARTE PLASTICA -->

		            <!-- CONTADOR ESPECIFICOS DE TIPOS DE PERSONAS POR ARTE LITERARIAS -->
		               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Artes Literarias:</h6>
		                </div>
		                <div class="card-body border">
		                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Total de Artistas Literarios <span class="float-right">X cantidad</span></h4>
		                  <div class="progress">
		                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                </div>
		               </div>
		            <!-- FIN CONTADOR ESPECIFICOS DE TIPOS DE PERSONAS POR ARTE LITERIA -->

		            <!-- CONTADOR ESPECIFICOS DE TIPOS DE PERSONAS POR ARTE MUSICAL -->
		               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Artes Musicales o Sonoras:</h6>
		                </div>
		                <div class="card-body border">
		                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Total de Artistas Musicales o Sonoras <span class="float-right">X cantidad</span></h4>
		                  <div class="progress">
		                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                </div>
		               </div>
		            <!-- FIN CONTADOR ESPECIFICOS DE TIPOS DE PERSONAS POR ARTE MUSICA -->

		            <!-- CONTADOR ESPECIFICOS DE TIPOS DE PERSONAS POR ARTE ESCENIA O VISUAL -->
		               <div class="shadow mb-4 col-lg-6 col-md-10 col-sm-6">
		                <div class="card-header py-3">
		                  <h6 class="m-0 font-weight-bold" style="color: #333333">Personas Censadas / Artes Escénicas o Visuales:</h6>
		                </div>
		                <div class="card-body border">
		                  <h4 class="small font-weight-bold">Server Migration <span class="float-right">20</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Sales Tracking <span class="float-right">40%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Customer Database <span class="float-right">60%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Payout Details <span class="float-right">80%</span></h4>
		                  <div class="progress mb-4">
		                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                  <h4 class="small font-weight-bold">Total de Artistas Escénicos o Visuales <span class="float-right">X cantidad</span></h4>
		                  <div class="progress">
		                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
		                  </div>
		                </div>
		               </div>
		            <!-- FIN CONTADOR ESPECIFICOS DE TIPOS DE PERSONAS POR ARTE ESCENICA O VISUAL -->

		            <!-- CONTENEDDOR YA POR AGRUPACION O PERSONAS POR MESES -->
		            	<div class="col-lg-6 col-md-10 col-sm-12 mt-2">
			              <div class="card rounded">
			              	  <div class="card-header py-3">
				                <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Censados por Mes: 
	                              	<select class="font-weight-bold" style="background-color: transparent; border:0;">
	                              		<option>Opción</option>
	                              		<option>Cultores</option>
	                              		<option>Agrupaciones</option>
	                              	</select>
                              	</h6>
				              </div>
			                  <div class="card-body px-1">
			                      <canvas id="total_mes"></canvas>
			                  </div>
			              </div>
			            </div>
		            <!-- FIN CONTENEDDOR YA POR AGRUPACION O PERSONAS POR MESES -->

		            <!-- CONTENEDDOR YA POR AGRUPACION O PERSONAS POR DIA -->
		            	<div class="col-lg-6 col-md-10 col-sm-12 mt-2">
			              <div class="card rounded">
			                  <div class="card-header py-3">
				                <h6 class="m-0 font-weight-bold" style="color: #333333">N# de Censados por Día: 
	                              	<select class="font-weight-bold" style="background-color: transparent; border:0;">
	                              		<option>Opción</option>
	                              		<option>Cultores</option>
	                              		<option>Agrupaciones</option>
	                              	</select>
                              	</h6>
				              </div>
			                  <div class="card-body px-1">
			                      <canvas id="total_dia"></canvas>
			                  </div>
			              </div>
			            </div>
		            <!-- FIN CONTENEDDOR YA POR AGRUPACION O PERSONAS POR DIA -->

	               </div>
	            <!-- FIN RONDA DE CONTADORES ESPECIFICOS -->

			  	</div>
			  	<!-- FIN CONTENEDOR DONDE ESTAN LOS ESTADISTICOS -->

	        </div>
	    </div>
	</div>

    <!-- FIN CONTENEDOR DE LAS OPCIONES -->
</body>
</html>

<script type="text/javascript" src="../js/validaciones.js"></script>

<?php include("charts_estadisticas.php"); ?>
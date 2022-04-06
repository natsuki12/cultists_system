<script type="text/javascript">
	//GRAFICA DE TOTAL DE CENSADOS POR MES//
	    var pro_mes = $("#total_mes");

	    var chartData = {
	      labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"], //ESTO SE QUITA LUEGO
	          /*<?php foreach ($pro_mes as $mes):?>
	            <?php 
	              switch ($mes->mes) {
	                case 1:
	                  echo '"Enero", ';
	                  break;
	                case 2:
	                  echo '"Febrero", ';
	                  break;
	                case 3:
	                  echo '"Marzo", ';
	                  break;
	                case 4:
	                  echo '"Abril", ';
	                  break;
	                case 5:
	                  echo '"Mayo", ';
	                  break;
	                case 6:
	                  echo '"Junio", ';
	                  break;
	                case 7:
	                  echo '"Julio", ';
	                  break;
	                case 8:
	                  echo '"Agosto", ';
	                  break;
	                case 9:
	                  echo '"Septiembre", ';
	                  break;
	                case 10:
	                  echo '"Octubre", ';
	                  break;
	                case 11:
	                  echo '"Noviembre", ';
	                  break;
	                case 12:
	                  echo '"Diciembre"';
	                  break;
	                default:
	                  # code...
	                  break;
	              } 
	            ?>
	          <?php endforeach; ?>
	      ],*/
	      datasets: [{
	        label: "Censados",
	        data: [25, 20, 30, 40, 35, 45, 55, 50, 25, 30, 35, 30],
	          /*<?php foreach ($pro_mes as $mes):?>
	            <?php echo $mes->total ?>,
	          <?php endforeach; ?>
	        ],*/
	        backgroundColor: '#2E3192',
	        borderColor: "#1B1464",
	        borderWidth: 4,
	        pointBackgroundColor: "#3FA637"
	      }]
	    };

	    if (pro_mes) {new Chart(pro_mes, {
	      type: 'line',
	      data: chartData,
	      options: {
	        scales: {
	          yAxes: [{
	            ticks: {
	              beginAtZero: true
	            }
	          }]
	        },
	        legend: {
	          display: false,
	          labels:{
	            fontColor: 'red',
	            fontSize: 20
	          }
	        },
	        tooltip: {
	          xPadding: 6
	        }
	      }
	      });
	    }
    //FIN GRAFICA DE TOTAL DE CENSADOS POR MES//

    //GRAFICA DE TOTAL DE CENSADOS POR DIA//
	    var pro_dia = $("#total_dia");

	    var chartData = {
	      labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"], //ESTO SE QUITA LUEGO
	          /*<?php foreach ($pro_mes as $mes):?>
	            <?php 
	              switch ($mes->mes) {
	                case 1:
	                  echo '"Lunes", ';
	                  break;
	                case 2:
	                  echo '"Martes", ';
	                  break;
	                case 3:
	                  echo '"Miercoles", ';
	                  break;
	                case 4:
	                  echo '"Jueves", ';
	                  break;
	                case 5:
	                  echo '"Viernes", ';
	                  break;
	                case 6:
	                  echo '"Sabado"';
	                  break;
	                case 7:
	                  echo '"Domingo", ';
	                  break;
	                default:
	                  # code...
	                  break;
	              } 
	            ?>
	          <?php endforeach; ?>
	      ],*/
	      datasets: [{
	        label: "Censados",
	        data: [25, 20, 30, 40, 35, 45, 55],
	          /*<?php foreach ($pro_mes as $mes):?>
	            <?php echo $mes->total ?>,
	          <?php endforeach; ?>
	        ],*/
	        backgroundColor: '#2E3192',
	        borderColor: "#1B1464",
	        borderWidth: 4,
	        pointBackgroundColor: "#3FA637"
	      }]
	    };

	    if (pro_dia) {new Chart(pro_dia, {
	      type: 'line',
	      data: chartData,
	      options: {
	        scales: {
	          yAxes: [{
	            ticks: {
	              beginAtZero: true
	            }
	          }]
	        },
	        legend: {
	          display: false,
	          labels:{
	            fontColor: 'red',
	            fontSize: 20
	          }
	        },
	        tooltip: {
	          xPadding: 6
	        }
	      }
	      });
	    }
    //FIN GRAFICA DE TOTAL DE CENSADOS POR DIA//
</script>
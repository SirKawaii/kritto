<?php
include ("conection.php");
$fecha;
$temperatura;
$presion;
$x=0;
		  $sql = "SELECT * FROM registrosmed where num_carnnet = '144514769' ";

						$resultado = mysqli_query($con,$sql)
						  or die('Error: ' . mysqli_error($con));
						while($row = mysqli_fetch_array($resultado)){
							$fecha[$x] = $row[10];
							$temperatura[$x] = $row[4];
							$presion[$x] = $row[5];
							$x++;


							}
						?>
			<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'temperatura', 'presión arterial'],
		  <?php for ($count = 0; $count <$x; $count++){
			  echo "['".$fecha[$count]."',".$temperatura[$count].",".$presion[$count]."],";}?>




        ]);

        var options = {
          title: 'Company Performance'
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
    </script>

    <div  id="chart_div" style="height:100%; width:100%;"></div>


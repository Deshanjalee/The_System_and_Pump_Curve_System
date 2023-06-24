<?php 
include "connection.php";
include "navbar.php";
  
?>
  <html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Flow rate', 'System Curve'],
          <?php
              $query="select * from chart";
              $res=mysqli_query($conn,$query);
              while($data=mysqli_fetch_array($res)){
                $flow_rate=$data['flow_rate'];
                $total_head=$data['total_head'];
                
               
            ?>
            ['<?php echo $flow_rate;?>',<?php echo $total_head;?>],
            <?php

              }
        ?>
      ]);

        var options = {
          title: 'System Curve',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="curve_chart" style="width: 1000px; height: 1000px"></div>
  </body>
</html>

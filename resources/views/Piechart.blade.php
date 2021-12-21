@extends('dashboard')
<!DOCTYPE html>
<html>
  <head>
  
  <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    
    
      // Load the Visualization API and the piechart package.
      google.charts.load('current', {'packages':['corechart']});
      
      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);
      
      
       // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {
         
         // Create our data table.
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
           <?php echo $chartData?>
        ]);

        var options = {
          title: 'Products Available',
          is3D:true
        };
         
         
          // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
      @section('con')
    <div id="piechart" style="width: 700px; height: 500px;margin-left:70px;"></div>
    @endsection
  </body>
</html>

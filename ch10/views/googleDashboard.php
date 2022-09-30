<?php 
function displayDashboard($Data, $RangeLabel, $Label) {
$info = "<html>
  <head>
    <!--Load the AJAX API-->
    <script type='text/javascript' src='https://www.gstatic.com/charts/loader.js'></script>
    <script type='text/javascript'>

      // Load the Visualization API and the controls package.
      google.charts.load('current', {'packages':['corechart', 'controls']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawDashboard);

      // Callback that creates and populates a data table,
      // instantiates a dashboard, a range slider and a pie chart,
      // passes in the data and draws it.
      function drawDashboard() {
		var data = new google.visualization.DataTable();
		// Add columns
		data.addColumn('string','" . $Label . "');
		data.addColumn('number','" . $RangeLabel . "');
		";
		
			$info .="data.addRows([";
			$count = 0;
			foreach($Data as $row) {
			if($count == 0) { $count++; continue; }
			$info .= "['" . $row[0] . "'," . $row[1] . "],";
			$count++;
			}
		$info .= "]);
        // Create a dashboard.
        var dashboard = new google.visualization.Dashboard(
            document.getElementById('dashboard_div'));

        // Create a range slider, passing some options";
		$info .="
        var donutRangeSlider = new google.visualization.ControlWrapper({
          'controlType': 'NumberRangeFilter',
          'containerId': 'filter_div',
          'options': {
            'filterColumnLabel': '" . $RangeLabel . "'
          }
        });

        var pieChart = new google.visualization.ChartWrapper({
          'chartType': 'PieChart',
          'containerId': 'chart_div',
          'options': {
            'width': 300,
            'height': 300,
            'pieSliceText': '" . $Label . "',
            'legend': 'right'
          }
        });
		
		var lineChart = new google.visualization.ChartWrapper({
          chartType: 'LineChart',
          options: {'title': '". $Label . "'},
         containerId: 'vis_div'
		});

		var columnChart = new google.visualization.ChartWrapper({
          chartType: 'ColumnChart',
          options: {'title': '" . $Label . "'},
          containerId: 'column_div'
        });
		
 var tableChart = new google.visualization.ChartWrapper({
   chartType: 'Table',
    containerId: 'table_div',
	options: {
                        'allowHtml': true,
                        'page': 'enable',
                        'width':'48%',
                        'height':'250px',
                        'pageSize': 10,
						'alternatingRowStyle' : true		
                    }
  });

	var formatter = new google.visualization.BarFormat({width: 120});
	formatter.format(data, 1); // Apply formatter to second column

        // Establish dependencies, declaring that 'filter' drives 'pieChart',
        // so that the pie chart will only display entries that are let through
        // given the chosen slider range.
	//	dashboard.bind(donutRangeSlider, [pieChart, columnChart, lineChart]);
		dashboard.bind(donutRangeSlider, [pieChart, tableChart, columnChart, lineChart]);

        // Draw the dashboard.
        dashboard.draw(data);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the dashboard-->
    <div id='dashboard_div'>
      <!--Divs that will hold each control and chart-->
      <div id='filter_div'
	  style='display: flex;
	    padding: 10px;
		justify-content: center;
		align-items: center;
		border: 3px solid black; '></div>
		<div id='container_div' style=' width: 100%; margin-top: 20px;'>
      <div id='chart_div' 
	    style='
		justify-content: center;
		align-items: center;
		width: 48%;
        padding-left: 40px;
		margin-bottom: 20px;
		float: left;'>
		</div>
		<div id='table_div'
		></div>
		</div>
	  <div id='column_div'
	  style='float: clear;'></div>
	  <div id='vis_div'></div>
    </div>
  </body>
</html>";
return $info;
}
?>

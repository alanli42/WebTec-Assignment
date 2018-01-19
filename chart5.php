<html>
  <head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
  google.charts.load("current", {packages:["timeline"]});
  google.charts.setOnLoadCallback(drawChart);
  function drawChart() {

    var container = document.getElementById('example5.1');
    var chart = new google.visualization.Timeline(container);
    var dataTable = new google.visualization.DataTable();
    dataTable.addColumn({ type: 'string', id: 'Room' });
    dataTable.addColumn({ type: 'string', id: 'Name' });
    dataTable.addColumn({ type: 'date', id: 'Start' });
    dataTable.addColumn({ type: 'date', id: 'End' });
    dataTable.addRows([
      [ 'Magnolia Room', 'Beginning JavaScript',       new Date(0,0,0,12,0,0),  new Date(0,0,0,13,30,0) ],
      [ 'Magnolia Room', 'Intermediate JavaScript',    new Date(0,0,0,14,0,0),  new Date(0,0,0,15,30,0) ],
      [ 'Magnolia Room', 'Advanced JavaScript',        new Date(0,0,0,16,0,0),  new Date(0,0,0,17,30,0) ],
      [ 'Willow Room',   'Beginning Google Charts',    new Date(0,0,0,12,30,0), new Date(0,0,0,14,0,0) ],
      [ 'Willow Room',   'Intermediate Google Charts', new Date(0,0,0,14,30,0), new Date(0,0,0,16,0,0) ],
      [ 'Willow Room',   'Advanced Google Charts',     new Date(0,0,0,16,30,0), new Date(0,0,0,18,0,0) ]]);

    var options = {
      timeline: { colorByRowLabel: true }
    };

    chart.draw(dataTable, options);
  }

</script>
 </head>
  <body>
<div id="example5.1" style="height: 100px;"></div>  </body>
</html>

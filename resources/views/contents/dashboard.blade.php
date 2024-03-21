<div class="row bg-white col-md-10 d-flex justify-content-md-center">
    <div class="col-md-6 justify-content-md-center">
        <div class="dashboard-content-total-income bg-primary rounded-3 p-3 m-3">
            <h6>Total Income</h6>
            <h4>$ 579,000</h4>
            <p>Saved 25%</p>
        </div>
        <div class="dashboard-content-total-income bg-success rounded-3 p-3 m-3">
            <h6>Total Income</h6>
            <h4>$ 579,000</h4>
            <p>Saved 25%</p>
        </div>
    </div >
    <div class="col-md-6 ">
        <div class="dashboard-content-total-income bg-info rounded-3 p-3 m-3">
            <h6>Total Income</h6>
            <h4>$ 579,000</h4>
            <p>Saved 25%</p>
        </div>
        <div class="dashboard-content-total-income rounded-3 p-3 m-3" style="background-color:palevioletred">
            <h6>Total Income</h6>
            <h4>$ 579,000</h4>
            <p>Saved 25%</p>
        </div>
    </div>
    <div class="row">
      <div class="col-md-6" id="chartContainer" style="height: 370px;"></div>
      <div class="row col-md-6">
          <div class="col-md-6"><canvas class="circle-chart pb-5"  id="doughnutChart1" style="width: 100%;"></canvas></div>
          <div class="col-md-6"><canvas class="circle-chart pb-5" id="doughnutChart" style="width: 100%;"></canvas></div>
      </div>
    </div>
</div>

<?php
$dataPoints = array( 
	array("y" => 450, "label" => "Jan 01" ),
	array("y" => 475, "label" => "France" ),
	array("y" => 400, "label" => "China" ),
	array("y" => 650, "label" => "Russia" ),
	array("y" => 220, "label" => "Switzerland" ),
	array("y" => 400, "label" => "Japan" ),
	array("y" => 200, "label" => "Netherlands" ),
  array("y" => 378, "label" => "Netherlands" ),
  array("y" => 680, "label" => "Netherlands" ),
  array("y" => 320, "label" => "Netherlands" ),
  array("y" => 240, "label" => "Netherlands" ),
  array("y" => 180, "label" => "Netherlands" ),
);
$dataPointsLine = array( 
    array("y" => 380, "label" => "Germany" ),
    array("y" => 450, "label" => "France" ),
    array("y" => 400, "label" => "China" ),
    array("y" => 710, "label" => "Russia" ),
    array("y" => 370, "label" => "Switzerland" ),
    array("y" => 300, "label" => "Japan" ),
    array("y" => 455, "label" => "Netherlands" ),
    array("y" => 360, "label" => "Netherlands" ),
    array("y" => 359, "label" => "Netherlands" ),
    array("y" => 200, "label" => "Netherlands" ),
    array("y" => 220, "label" => "Netherlands" ),
);
?>
<script>
  window.onload = function() {
  var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2",
    title:{
      text: "AP và AR Balance"
    },
    axisY: {
      title: "Gold Reserves (in tonnes)"
    },
    data: [{
      type: "column",
      yValueFormatString: "#,##0.## tonnes",
      dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    },
    {
      type: "line",
      yValueFormatString: "#,##0.## tonnes",
      dataPoints: <?php echo json_encode($dataPointsLine, JSON_NUMERIC_CHECK); ?>
    }],
  });
  chart.render();
  }
  //doughnut
  var ctxD = document.getElementById("doughnutChart1").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });
  var ctxD = document.getElementById("doughnutChart").getContext('2d');
  var myLineChart = new Chart(ctxD, {
    type: 'doughnut',
    data: {
      labels: ["Red", "Green", "Yellow", "Grey", "Dark Grey"],
      datasets: [{
        data: [300, 50, 100, 40, 120],
        backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C", "#949FB1", "#4D5360"],
        hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870", "#A8B3C5", "#616774"]
      }]
    },
    options: {
      responsive: true
    }
  });
</script>
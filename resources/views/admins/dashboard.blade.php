<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/admin/css/style-dashboard.css')}}">
</head>
<body>
<div class="container">
    <div class="header">
        <button class="image-logo">
            <img id="image-logo" src="assets/images/avatar.jpg" alt="">
        </button>
        <div class="navbar">
            <div class="dasdboard-navbar-search">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" name="" class="dasdboard-navbar-search-input" id="" placeholder="Search here...........">
            </div>
            <div class="information d-flex gap-5">
                <i class="fa-regular fa-bell mt-3"></i>
                <i class="fa-brands fa-rocketchat mt-3"></i>
                <i><img src="{{asset('assets/images/avatar1.jpg')}}" alt="" style="border-radius: 50%; width:50px"></i>
            </div>
        </div>
    </div>
    <div class="content row mt-3">
        <div class="sidebar col-md-2">
            <div class="dropdown">
                <i class="fa-solid fa-house"></i>
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Dashboard
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Classic</a></li>
                  <li><a class="dropdown-item" href="#">Minimal</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <i class="fa-solid fa-file"></i>
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Pages
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Classic</a></li>
                  <li><a class="dropdown-item" href="#">Minimal</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <i class="fa-solid fa-window-restore"></i>
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Applications
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Classic</a></li>
                  <li><a class="dropdown-item" href="#">Minimal</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <i class="fa-solid fa-house"></i>
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  UiComponent
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Classic</a></li>
                  <li><a class="dropdown-item" href="#">Minimal</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <i class="fa-solid fa-fill-drip"></i>
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 Widgets
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Classic</a></li>
                  <li><a class="dropdown-item" href="#">Minimal</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <i class="fa-solid fa-house"></i>
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Forms
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Classic</a></li>
                  <li><a class="dropdown-item" href="#">Minimal</a></li>
                </ul>
            </div>
            <div class="dropdown">
                <i class="fa-solid fa-chart-line"></i>
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Charts
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Classic</a></li>
                  <li><a class="dropdown-item" href="#">Minimal</a></li>
                </ul>
            </div>
        </div>
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
    </div>
    <footer>
        {{-- <h1>FOOTER</h1> --}}
    </footer>
</div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
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
</body>
</html>

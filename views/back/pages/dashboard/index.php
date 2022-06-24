<div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   </div>

   <!-- Alert -->
   

   <!-- Content Row -->
   <div class="row">

   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
         <div class="card-body"> 
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-s font-weight-bold text-danger text-uppercase mb-1">Quotes</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                     <!-- <?= $total_guru ?> -->
                  </div>
               </div>
               <div class="col-auto">
               <i class="fas fa-smile-wink fa-3x text-gray-300"></i>
               </div>
            </div>
         </div>
      </div>
	</div>
	
	<div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-s font-weight-bold text-primary text-uppercase mb-1">Background</div>
                  <div class="h mb-0 font-weight-bold text-gray-800">
							<?= $total_banner ?>	
                  </div>
               </div>
               <div class="col-auto">
                  <i class="fas fa-desktop fa-3x text-gray-300"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-s font-weight-bold text-success text-uppercase mb-1">Gallery</div>
                  <div class="h mb-0 font-weight-bold text-gray-800">
							<?= $total_fasilitas ?>
                  </div>
               </div>
               <div class="col-auto">
              <i class="fa thin fa-image fa-3x text-gray-300"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

   <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
         <div class="card-body">
            <div class="row no-gutters align-items-center">
               <div class="col mr-2">
                  <div class="text-s font-weight-bold text-warning text-uppercase mb-1">News & Events</div>
                  <div class="h mb-0 font-weight-bold text-gray-800">
							<?= $total_berita ?>
                  </div>
               </div>
               <div class="col-auto">
                  <i class="fas fa-newspaper fa-3x text-gray-300"></i>
               </div>
            </div>
         </div>
      </div>
   </div>

</div>

   <!-- Content Row -->

   <div class="row">

      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-12">
         <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <h6 class="m-0 font-weight-bold text-primary">MOTHER HAND GRAPH</h6>
            </div>
			<!DOCTYPE html>
<html lang="en-US">
<body>



<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Post', 'Post per day'],
  ['Background', <?= $total_banner ?>],
  ['Gallery', <?= $total_fasilitas ?>],
  ['News & Events', <?= $total_berita ?>],

  
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Post', 'width':700, 'height':500};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>

</body>
</html>

           <!DOCTYPE HTML>
<html>
<head>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Total Post"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				{ label: "Background", y: <?= $total_banner ?>	},
				{ label: "Gallery", y: 	<?= $total_fasilitas ?> },
				{ label: "News & Events", y: <?= $total_berita ?> },
				
			]
		}
		]
	});
	chart.render();
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
</html>
</body>
</html>

            <div class="card-body">
               <div class="chart-area">
                  <canvas id="myAreaChart" height="100vh"></canvas>
               </div>
            </div>
         </div>
      </div>

   </div>

</div>

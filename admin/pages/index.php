<?php // this page is for showing stats
session_start(); // start session

require('../../sql/connect.php');
if(!$_SESSION['logged']){
header("location: ../../login.php");
}

require('../../sql/connect.php');
// run select query to get members info
$stmt = $pdo->prepare("SELECT * FROM membership_form;");
$stmt->execute();
// intialize variables
$i=0;
$saudi= 0;
$non =0;
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
$i++;
// check if it's saudi or not
if(!strcasecmp($row['nationality'],'Saudi')){
  // if saudi increamnt $saudi
$saudi++;
}else{
   // increamnt $non
    $non++;
}
}
// intialize $totalVisitors to number of members which is $i
$totalVisitors = $i;
 // choose the x point and y point
$dataPoints = array(
	array("x"=> 1, "y"=> $totalVisitors, "indexLabel"=> "TotalRegisters" ),
	array("x"=> 2, "y"=> $saudi, "indexLabel"=> "Saudi Registers"),
    array("x"=> 3, "y"=> $non, "indexLabel"=> "Non Saudi Registers")
	
);
// intialaize variables
$total =0;
$age18=0;
$age22=0;
$age26=0;
$age30=0;
$other=0;

$stmt = $pdo->prepare("SELECT * FROM membership_form;");
$stmt->execute();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  // increamnt variable based on age range
    if(($row['age']>= 18) && ($row['age']< 22)){
      $age18++;
        $total++;
    }else if (($row['age']>= 22) && ($row['age']< 26)){
        $total++;
        $age22++;
    }
    else if (($row['age']>= 26) && ($row['age']< 30)){
        $total++;
        $age26++;
    }else if (($row['age']>= 30) && ($row['age']< 34)){
        $total++;
        $age30++;
    }else{
        $total++;
        $other++;
    }
    }
    // turn it in to a precentage
    $pAge18= ($age18/ $total)*100;
    $pAge22= ($age22/ $total)*100;
    $pAge26= ($age26/ $total)*100;
    $pAge30= ($age30/ $total)*100;
    $pAgeOther= ($other/ $total)*100;
  // assign lables and the percentages
$dataPoints1 = array( 
	array("label"=>"18<Age<22", "y"=>$pAge18),
	array("label"=>"22<Age<26", "y"=>$pAge22),
	array("label"=>"26<Age<30", "y"=>$pAge26),
	array("label"=>"30<Age<34", "y"=>$pAge30),
	array("label"=>"Age > 34 or < 18", "y"=>$pAgeOther),

)
 
?>
 

<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>General Table</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<script>
// load on start
window.onload = function () {
    // create a new chart
    var chart1 = new CanvasJS.Chart("chartContainer1", {
    animationEnabled: true,
    exportEnabled: true,
	title: {
		text: "Age of Registeres"
	},
	subtitles: [{
		text: ""
	}],
	data: [{
		type: "pie",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabel: "{label} ({y})",
        // enter the datapoints array as a parameter
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart1.render();
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Saudi and Non Saudi registers"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <?php require 'includes/navbar.php';?>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php require 'includes/side.html';?>
        <!-- end left sidebar -->
        <!-- ============================================================== -->
      
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Statistics </h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Statistics</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- basic table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Pie Chart</h5>
                                <div class="card-body">
                                <table class="table table-striped">
                                     
                                        <thead>
                                            <tr>
                                            <div id="chartContainer1" style="height: 370px; width: 100%;"></div>

                                            </tr>
                                            
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic table -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- striped table -->
                        <!-- ============================================================== -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Bar Chart</h5>
                                <div class="card-body">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr><div id="chartContainer" style="height: 370px; width: 100%;"></div>

</tr>
                                        </thead>
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end striped table -->
                        <!-- ============================================================== -->
                    </div>
                   
                        <!-- ============================================================== -->
                        <!-- end bordered table -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- hoverable table -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- end hoverable table -->
                        <!-- ============================================================== -->
                    </div>
                 
               
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/custom-js/jquery.multi-select.html"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>



</body>
 
</html>
<?php 
session_start();

require('../../sql/connect.php');
if(!$_SESSION['logged']){
header("location: ../../login.php");
}
?>


<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Data Tables</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">
    <link rel="icon" href="../../mages/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="../../images/client-logo/racinglabWhite.png" />

    <!-- PAGE TITLE HERE -->
    <title>Admin - Table</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">










    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="../../plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="../../plugins/revolution/revolution/css/navigation.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">








    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="../../plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="../../plugins/revolution/revolution/css/navigation.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Muli:wght@200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
         <!-- ============================================================== -->
         <?php require 'includes/navbar.php';?>

        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <?php require 'includes/side.html';?>

        <?php
// including the database connection file


if(isset($_POST['update']))
{	
	
	$username = $_POST['username'];
	$pass = $_POST['password'];
	$category = $_POST['category'];
   
	
	// checking empty fields
	if(empty($username) || empty($pass) || empty($category)) {	
			
		if(empty($username)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($pass)) {
			echo "<font color='red'>Second Name Field.</font><br/>";
		}
		
		if(empty($category)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		
		$stmt = $pdo->prepare("UPDATE adminTable SET username='$username', password='$pass', category='$category' WHERE username='$username';");
		$stmt->execute();
		header('Location: admin-tables.php');
		//redirectig to the display page. In our case, it is myinof.php
		
	}
}



//getting id from url
$uname = $_GET['username']; 
//selecting data associated with this particular id
try{


$stmt = $pdo->prepare("SELECT * FROM adminTable WHERE username='$username';");
$stmt->execute();

while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ 
	$username = $row['username'];
	$pass = $row['password'];
	$category = $row['category'];
	
	  
  
}

 
}catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
  }
?>
        <div class="container ">
                                              
                                              <!-- Button to Open the Modal -->
                                            
                                            
                                              <!-- The Modal -->
                                              <div class="modal fade" id="myModal1" >
                                                <div class="modal-dialog" >
                                                  <div class="modal-content">
                                                  
                                                    <!-- Modal Header -->
                                                    <div class="modal-header" >
                                                     
                                                      <h3 class="modal-title" >Edit</h3>
                                                        
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      
                                                    </div>
                                                    
                                                    <!-- Modal body -->
                                                    <div class="modal-body bg-white mt-4 z-index-2000000" >
                                            
                                                        <form action="admin-table.php" class="was-validated " method="POST">
                                                            <div class="form-group text-left">
                                                                <label for="uname" class="left">Username</label>
                                                                <input type="text" class="form-control border" id="uname" placeholder="Enter your name" name="username" value="<?php echo $username ?>" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                           
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Password</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter password" name="password" value="<?php echo $pass ?>" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                            <div class="form-group text-left">
                                                                <label for="pwd">Category</label>
                                                                <input type="text" class="form-control border" id="pwd" placeholder="Enter Category" name="category" value="<?php echo $category ?>" required>
                                                                <div class="valid-feedback">Valid.</div>
                                                                <div class="invalid-feedback">Please fill out this field.</div>
                                                            </div>
                                                           
                                                          
                                                          

                                                            <button type="submit" class="btn btn-primary text-dark text-center" style="background: inherit; border-color: red;" name="update">Send</button>
                                                        </form>
                                                    </div>
                                              
                                              
                                                      
                                                      </div>
                                                  
                                                 </div>
                                            </div>
        <!-- ============================================================== -->
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
                            <h2 class="pageheader-title">Data Tables</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
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
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Basic Table</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                <a  href="addmyinfo.php<?php echo $row['username'];?>" class="btn btn-success">Add</a>
                                    <table class="table table-striped table-bordered first">
                                    <thead>
                <tr>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Catagory</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    
               
                </tr>
            </thead>
            <tbody>
                <?php
                
                try{
                
              
                $stmt = $pdo->prepare("SELECT * FROM adminTable ORDER BY username;");
                $stmt->execute();
                
                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){ ?>
                   <tr>
                      
                       <td><?php echo $row["username"] ?></td>
                       <td><?php echo $row["password"] ?></td>
                       <td><?php echo $row["category"] ?></td>
                       
                      
                       <td><a href="editinfo-admin.php?username=<?php echo $row['username']; ?>" class="btn btn-primary text-white" >Edit</td>
                       <td><a onClick="return confirm('Do you want to delete?')" href="delete.php?username=<?php echo $row['username']; ?>" class="btn btn-danger">Delete</td> <!-- Task 3 -->
                   </tr>
                    
              <?php
                }
                }catch(PDOException $e) {
                    echo "Error: " . $e->getMessage();
                  }
                ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                </div>
              
                
                
                    <!-- ============================================================== -->
                    <!-- end data table multiselects  -->
                    <!-- ============================================================== -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>
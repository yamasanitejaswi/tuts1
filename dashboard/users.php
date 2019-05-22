
<?php
// Start the session
session_start();



if(isset($_SESSION['admin']))
{
    
     $adminlogin= $_SESSION["admin"] ;
        if($adminlogin==1)
        {
            
        }
        else
        {
      header("Location: index.php");
      exit;
        }
            
}
 else
        {
     header("Location: index.php");
     exit;
        }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  
		
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!-- Optional: include a polyfill for ES6 Promises for IE11 and Android browser -->
<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>



  <title>unik life - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.4.1.js"  
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="    crossorigin="anonymous"></script>
  
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  

  
  <style>
  form {
	width: 600px;
	margin: 0 auto;
	margin-top: 08em;
}

button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}



  </style>

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="home.html"></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

  
    <!-- Navbar -->
 <!-- Navbar -->
    <ul class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
  
    
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
      
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="sessiondestory.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
   
         
		  <li class="nav-item active">
        <a class="nav-link" href="#">
       <i class="fa fa-users" aria-hidden="true"></i>
          <span>Users Registration</span>
        </a>
      </li>
	  
    </ul>

      <div class="container">
               				  
					  <div class="row">  
						<div class="col-sm-2">
					<!-- 2 empty sections in the left -->
						</div>
						<div class="col-sm-8">
					<!--Your form goes here -->
					   <form id="imageupload1" enctype="multipart/form-data">
				
					        	
                            <div class="custom-file mb-3">
                              <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name" required="">
                              
                            </div>
					
								
                            <div class="custom-file mb-3">
                              <input type="text" class="form-control" id="password" name="password" placeholder="Enter password " required="">
                              
                            </div>
                       
							
                            <div class="custom-file mb-3">
                              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Enter fullname " required="">
                              
                            </div>
                           
                           	
                            <div class="custom-file mb-3">
                              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email " required="">
                              
                            </div>
                          
						
                             <input type="submit" value="SUBMIT" class="login100-form-btn">
                               
                        </form>
					
						</div> 
						<div class="col-sm-2">
					<!-- 2 empty sections in the right -->
						</div>

					</div>

   </div>  

      

      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © UNIK LIFE 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

 
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="sessiondestory.php">Logout</a>
        </div>
      </div>
    </div>
  </div>



  
 <script> 


            $(document).ready(function (e) {
            
                        
             $("#imageupload1").on('submit',(function(e) {
                 
                  e.preventDefault();
              $.ajax({
                url: "api/usersregistration.php",
               type: "POST",
               data:  new FormData(this),
               contentType: false,
                     cache: false,
               processData:false,
               beforeSend : function()
               {
                //$("#preview").fadeOut();
                $("#err").fadeOut();
               },
               success: function(data){
                     var result = data;
                    
                       
                    if(data.localeCompare("New user registered successfully")==0){
                     swal("Registered Successfully");
                     document.getElementById("imageupload1").reset();
                                }
                                else{
                        swal(data);
                    }              
                        }});                   
            
             }));
			 

            });
			</script>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
</body>

</html>

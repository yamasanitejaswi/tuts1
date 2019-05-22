<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>UNIK LIFE </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.4.1.js"   integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="    crossorigin="anonymous"></script>

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form id="imageupload1">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="mobile" name="mobile" class="form-control"   required="required" autofocus="autofocus">
              <label for="inputMobile">MobileNumber</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="passwword" name="password" class="form-control" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">	  
               <input type="submit" value="SUBMIT" class="login100-form-btn">
             </div>
			 
        </form>
       
      </div>
    </div>
  </div>
  
  
  
 <script> 


            $(document).ready(function (e) {
            
                        
             $("#imageupload1").on('submit',(function(e) {
                 
                  e.preventDefault();
              $.ajax({
                url: "api/login.php",
               type: "POST",
               data:  new FormData(this),
               contentType: false,
                     cache: false,
               processData:false,
               success: function(data){
                   
                     var result = data;
                     
                    if( result==1){
                    
                 window.location.href="users.php";
                                }
                                else{
                                    
                                    alert(data);
                      
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

</body>

</html>

<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true)
{
  header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Add Vivo</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Add Vivo</h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
          <form action="addproductvivo.php" method="POST" enctype="multipart/form-data">
              <div class="mb-3">
              <label class="control-label"> mã rạp</label>
              <input type="text" name="marap" id="marap" class="form-control"/>
            </div>

             <div class="mb-3">
              <label class="control-label">thoigian</label>
              <input type="text" name="thoigian" id="thoigian" class="form-control"/>
            </div>
      

            

            <div class="mb-3">
              <label for="maphim"> maphim</label>
              <div class="input-group">
                <input type="text" class="form-control" id="maphim" name="maphim" required>
              </div>
            </div>

              <div class="mb-3">  
              <div class="form-group">
              <label class="control-label">Ngày</label>
              <input type="text" name="ngay" id="ngay" class="form-control"/>
     
            </div></div>
    

      
      
			
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

  </body>
</html>
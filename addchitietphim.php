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

    <title>Add phim ở home</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Add chi tiết phim</h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
          <form action="addproduct3.php" method="POST" enctype="multipart/form-data">

            
      

            <div class="mb-3">
              <label for="name">Name</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="name">DaoDien</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>
			       
              <div class="mb-3">
              <label for="name">DienVien</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>
			       
              <div class="mb-3">
              <label for="name">TheLoai</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="name">ThoiLuong</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="name">Khoi Chieu</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="name">Ngon Ngu</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="name">Link</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="name">MoTa</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" required>
              </div>
            </div>

			<div class="mb-3">
              <label for="fileUpload">Image</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
              </div>
            </div>
			
			
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
<?php
  require_once('conn.php');
  

  $place = $_POST['place'];
  $FAX = $_POST['FAX'];
  $sdt = $_POST['sdt'];
  $target = "upload/" . $_FILES['fileUpload']['name'];
  move_uploaded_file($_FILES['fileUpload']['tmp_name'], $target);
  
  $sql = "INSERT INTO rap(place,FAX,sdt,image) VALUES(?,?,?,?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss",$place,$FAX,$sdt,$target);
    
  $isOK = $stmt->execute();
  
  $stmt->close();
  $conn->close();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Add rap </title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <?php if ($isOK) { ?>
      <div class="alert alert-success">
        rap added successfully. <br>
        Please <a href="list.php">click here</a> to add more.
      </div>
      <?php } else {?>
      <div class="alert alert-danger">
        Failed to add product.
      </div>
      <?php } ?>
      </div>
    </div>
  </body>
</html>
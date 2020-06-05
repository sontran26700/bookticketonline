<?php
require_once('conn.php');
  $id=isset($_POST['id']) ? $_POST['id'] : die('error: Không tìm thấy ID.');
  $thang = $_POST['thang'];
  $thu = $_POST['thu'];
  $ngay = $_POST['ngay'];
  $thoigian = $_POST['thoigian'];

if($_POST){
  $sql = "UPDATE lichchieu
          SET 
              thang=?,
              thu=?,
              ngay=?,
              thoigian=?
            WHERE id='".$id."'";
   $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $thang,$thu,$ngay,$thoigian);
  $isOK = $stmt->execute();
  
  
  $stmt->close();
  $conn->close();
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Edit Time</title>

    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <?php if ($isOK) { ?>
      <div class="alert alert-success">
       Edited successfully. <br>
        Please <a href="list.php">click here</a> to go back.
      </div>
      <?php } else {?>
      <div class="alert alert-danger">
        Failed to edit.
      </div>
      <?php } ?>
      </div>
    </div>
  </body>
</html>
<?php
require_once('conn.php');
	
	$thoigian = $_POST['thoigian'];
	$maphim= $_POST['maphim'];
	$ngay = $_POST['ngay'];
	
	
if($_POST){
  $sql = "UPDATE lichchieu
          SET 
          		
          	  thoigian =?,
          	  ngay = ?
          	 
          	  
           	WHERE maphim='".$maphim."'";
   $stmt = $conn->prepare($sql);
	$stmt->bind_param("ss",$thoigian,$ngay);
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

		<title>Edit Movie</title>

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		  <div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
			<?php if ($isOK) { ?>
			<div class="alert alert-success">
				Movie edited successfully. <br>
				Please <a href="list.php">click here</a> to go back.
			</div>
			<?php } else {?>
			<div class="alert alert-danger">
				Failed to edit movie.
			</div>
			<?php } ?>
		  </div>
		</div>
	</body>
</html>
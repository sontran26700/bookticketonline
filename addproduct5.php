<?php
	require_once('conn.php');//ket noi
	
	$rap = $_POST['rap'];
	$name = $_POST['name'];
	$ngay = $_POST['ngay'];
	$thoigian = $_POST['thoigian'];
	$sql = "INSERT INTO datve(rap,name,ngay,thoigian) VALUES(?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);//doi tuong prepare 
	$stmt->bind_param("ssss",$rap,$name,$ngay,$thoigian);//gan gia tri vao tham so
		
	$isOK = $stmt->execute(); //thuc thi truy van@
	// done giai phong thoat ket noi
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

		<title>Add product example</title>

		<!-- Bootstrap core CSS -->
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="container">
		  <div class="py-5 text-center">
			<img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
			<?php if ($isOK) { ?>
			<div class="alert alert-success">
				Product added successfully. <br>
				Please <a href="addve.php">click here</a> to add more.
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
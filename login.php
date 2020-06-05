<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form action="" method="POST" class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      
	  <input name="username" type="text" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
      
	  <label for="inputPassword" class="sr-only">Password</label>
      
	  <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <?php
		session_start();
		if (isset($_POST['username']) && isset($_POST['password'])) {
			require_once("conn.php");
			
			$username = $_POST['username'];
			
			$sql = "SELECT * FROM user WHERE username = '$username'";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			
			if ($_POST['password'] == $row['password']) {
				$_SESSION['isLoggedIn'] = true;
				header("Location: list.php");
			} else {
				echo "<div class='alert alert-danger'> Invalid username or password </div>";
			}
		}
		?>
	  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2018-2019</p>
    </form>
	
	
  </body>
</html>

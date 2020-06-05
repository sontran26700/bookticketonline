<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Edit Movie Calendar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body class="bg-light">
    <table cellpadding="10" cellspacing="10" border="0" style="border-collapse: collapse; margin: auto">

    <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
        <td colspan="4">
            <a href="list.php">LIST </a>
        </td>
    
    </tr>
  </table>
<div class="container">
  <div class="row">
     <?php 
    require_once('conn.php');
    
    $maphim = $_GET['maphim'];
    $sql = "SELECT * FROM lichchieu WHERE maphim = ".$maphim;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $conn->close();
    ?>
     <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Edit pdc</h2>
      </div>

      <div class="row">
        <div class="col-md order-md-1">
          <form action="editlichchieu.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="maphim" value="<?= $row['maphim'] ?>">
            
             <div class="mb-3">
              <label for="thoigian">Thời gian</label>
              <div class="input-group">
                <input type="text" class="form-control" id="thoigian" name="thoigian" value="<?=$row['thoigian']?>"required>
              </div>
            </div>

             <div class="mb-3">
              <label for="ngay">Ngày</label>
              <div class="input-group">
                <input type="text" class="form-control" id="ngay" name="ngay" value="<?=$row['ngay']?>"required>
              </div>
            </div>
             
              
             
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
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

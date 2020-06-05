  <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Edit PSC</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    
  </head>

  <body class="bg-light">
    <table cellpadding="10" cellspacing="10" border="0" style="border-collapse: collapse; margin: auto">

    <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
        <td colspan="4">
            <a href="listpsc.php">LIST </a>
        </td>
    
    </tr>
  </table>
<div class="container">
  <div class="row">
     <?php 
    require_once('conn.php');
    
    $id = $_GET['id'];
    $sql = "SELECT * FROM phimsapchieu WHERE id = ".$id;
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
          <form action="editpsc.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="id" value="<?= $row['id'] ?>">
            
             <div class="mb-3">
              <label for="name">name</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" value="<?=$row['name']?>"required>
              </div>
            </div>

             <div class="mb-3">
              <label for="Daodien">DaoDien</label>
              <div class="input-group">
                <input type="text" class="form-control" id="daodien" name="daodien" value="<?=$row['daodien']?>"required>
              </div>
            </div>
             
              <div class="mb-3">
              <label for="dienvien">DienVien</label>
              <div class="input-group">
                <input type="text" class="form-control" id="dienvien" name="dienvien" value="<?=$row['dienvien']?>" required>
              </div>
            </div>
             
              <div class="mb-3">
              <label for="TheLoai">TheLoai</label>
              <div class="input-group">
                <input type="text" class="form-control" id="TheLoai" name="TheLoai" value="<?=$row['TheLoai']?>"required>
              </div>
            </div>

             <div class="mb-3">
              <label for="ThoiLuong">ThoiLuong</label>
              <div class="input-group">
                <input type="text" class="form-control" id="ThoiLuong" name="ThoiLuong" value="<?=$row['ThoiLuong']?>" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="KhoiChieu">Khoi Chieu</label>
              <div class="input-group">
                <input type="text" class="form-control" id="KhoiChieu" name="KhoiChieu" value="<?=$row['KhoiChieu']?>" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="NgonNgu">Ngon Ngu</label>
              <div class="input-group">
                <input type="text" class="form-control" id="NgonNgu" name="NgonNgu" value="<?=$row['NgonNgu']?>" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="Link">Link</label>
              <div class="input-group">
                <input type="text" class="form-control" id="Link" name="Link" value="<?=$row['Link']?>" required>
              </div>
            </div>

             <div class="mb-3">
              <label for="Mota">MoTa</label>
              <div class="input-group">
                <input type="text" class="form-control" id="MoTa" name="MoTa" value="<?=$row['MoTa']?>"required>
              </div>
            </div>

      <div class="mb-3">
              <label for="fileUpload">Image</label>
              <div class="input-group">
                <input type="file" id="fileUpload" name="fileUpload" required>
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

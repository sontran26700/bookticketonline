<?php
session_start();
if (!isset($_SESSION['isLoggedIn']) || $_SESSION['isLoggedIn'] != true)
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>lịch chiếu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<table cellpadding="10" cellspacing="10" border="0" style="border-collapse: collapse; margin: auto">

    <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
        <td colspan="4">
            
        </td>
        <td>
            
        </td>
        <td>
            <a href="logout.php">Logout</a>
        </td>
    </tr>
    <tr class="header">
        
        <td>thời gian</td>
        <td>mã phim</td>
        <td>ngày</td>
        <td>Action</td>
       
        
    </tr>
    <?php 
    require_once('conn.php');
          
          $sql = "SELECT * FROM lichchieu";
          
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
    ?>
    <tr class="item">
        
        
        <td><?= $row['thoigian']?></td>
        <td><?= $row['maphim']?></td>
        <td><?= $row['ngay']?></td>
        
        <td><a href="editformlichchieu.php?maphim=<?= $row['maphim']?>"><button class="btn btn-warning">Edit</button></a> | 
            <a href="deletelich.php?maphim=<?= $row['maphim']?>" class="delete"><button class="btn btn-danger">Delete</button></a> 
            </a>
        </td>
    </tr>
    <?php }
    } ?>
    <tr class="control" style="text-align: right; font-weight: bold; font-size: 17px">
        <td colspan="5">
            <p>lichchieu: <?= $result->num_rows ?></p>
        </td>
    </tr>
</table>

<a href="list.php"><button class="btn btn-danger">back list</button></a>
</body>
</html>
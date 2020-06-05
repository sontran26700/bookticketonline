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
    <title>Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<table cellpadding="10" cellspacing="10" border="0" style="border-collapse: collapse; margin: auto">

    <tr class="control" style="text-align: left; font-weight: bold; font-size: 20px">
        <td colspan="4">
            <a href="add.php">Thêm Phim</a>
            <a href="addphimsapchieu.php"> phimsắpchiếu</a>
            <a href="addvivo.php">add vivo</a>
            <a href="add_theatre.php">add rap</a>
         
        </td>
		<td>
			<a href="logout.php">Logout</a>
		</td>
    </tr>
    <tr class="header">
        <td>image</td>
        <td>Name</td>
        <td>daodien</td>
        <td>dienvien</td>
        <td>TheLoai</td>
        <td>ThoiLuong</td>
        <td>KhoiChieu</td>
        <td>NgonNgu</td>
        <td>Link</td>
        <td>MoTa</td>
        <td>Action</td>
       
        
    </tr>
	<?php 
	require_once('conn.php');
		  
		  $sql = "SELECT maphim,name,daodien,dienvien,TheLoai,ThoiLuong,KhoiChieu,NgonNgu,Link,MoTa,image FROM product";
		  
		  $result = $conn->query($sql);
		  if ($result->num_rows > 0) {
			  while ($row = $result->fetch_assoc()) {
	?>
    <tr class="item">
        <td><img src="<?= $row['image']?>" style="max-height: 80px"></td>
        <td><?= $row['name']?></td>
        <td><?= $row['daodien']?></td>
        <td><?= $row['dienvien']?></td>
        <td><?= $row['TheLoai']?></td>
        <td><?= $row['ThoiLuong']?></td>
        <td><?= $row['KhoiChieu']?></td>
        <td><?= $row['NgonNgu']?></td>
        <td><?= $row['Link']?></td>
        <td><?= $row['MoTa']?></td>
        <td><a href="addlich.php?id=<?= $row['maphim']?>">add</a> <a href="editform.php?maphim=<?= $row['maphim']?>">Edit</a> | <a href="Delete.php?maphim=<?= $row['maphim']?>" class="delete">Delete</a></td>
    </tr>
	<?php }
    } ?>
    <tr class="control" style="text-align: right; font-weight: bold; font-size: 17px">
        <td colspan="5">
            <p>Số lượng phim dc : <?= $result->num_rows ?></p>
        </td>
    </tr>
</table>
<tr text-align="center">
    <td>
       <a href="listpsc.php"><button class="btn btn-warning" >listpsc</button></a> 
    </td>
    <td><a href="lichchieu.php"><button class="btn btn-warning">lichchieu</button></a></td>
</tr>

</body>
</html>
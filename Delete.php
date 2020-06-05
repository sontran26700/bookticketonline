
<?php
require_once('conn.php');


  
try {

      
   
    $maphim=isset($_GET['maphim']) ? $_GET['maphim'] : die('error: Không tìm thấy ID.');
  

    $query = "DELETE FROM product where maphim='".$maphim."'";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $maphim);
      
    if($stmt->execute()){
        header('Location: list.php?action=deleted');
   
    	echo "none";
    }else{
        die('....!');
    }
}
  

catch(PDOException $exception){
    die('LỖI: ' . $exception->getMessage());
}
?>

<?php
require_once('conn.php');


  
try {

      
   
    $id=isset($_GET['id']) ? $_GET['id'] : die('error: Không tìm thấy ID.');
  

    $query = "DELETE FROM phimsapchieu where id='".$id."'";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $id);
      
    if($stmt->execute()){
        header('Location: listpsc.php?action=deleted');
   
    	echo "none";
    }else{
        die('....!');
    }
}
  

catch(PDOException $exception){
    die('LỖI: ' . $exception->getMessage());
}
?>
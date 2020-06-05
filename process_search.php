<?php include('homepage1.php');
extract($_POST);
?>
</div>
<div class="content">
    
	<div class="wrap">
		<div class="content-top">
			<h3>Movies</h3>
			
			  <?php 
    require_once('conn.php');
    
    $maphim = $_GET['maphim'];
    $sql = "SELECT * FROM product WHERE maphim = ".$maphim;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $conn->close();
    ?>
                    
                    <div class="col_1_of_4 span_1_of_4">
					<div class="imageRow">
						  	<div class="single">
						  	
						  		<a href="chitietphim.php" rel="lightbox"><img src="<?= $row['image'] ?>" alt="" /></a>
						  	</div>
						  	<div class="movie-text">
						  		<h4 class="h-text"><a href="chitietphim.php" rel="lightbox"><?= $row['image'] ?></a></h4>
						  		Cast:<Span class="color2"><?= $row['dienvien'] ?></span><br>
						  		
						  	</div>
		  				</div>
		  		</div>
	
			</div>
				<div class="clear"></div>		
			</div>
			

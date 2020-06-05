<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang Chủ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>

   body{
    font-family: arial,helvetica,tahoma,verdana;
    background-color: #FDF7DD;

   }
    .hr1{
      border-top: 2px solid black;
    }

   .hr{
    border-top: 2px dashed red;
   }
    .navbar {
      background-color:#FDF7DD;
      margin-bottom: 0;
      border-radius: 0;
    }
    .lia{
      color: black;
    }
    .navbar-toggle{
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-right: 15px;
    margin-top: 8px;
    margin-bottom: 8px;
    background-color: none;
    background-image: none;
    border: 1px solid black;
    border-radius: 4px;
    }
    .icon-bar{
      background-color: red;
    }

 
    footer {
      background-color: #FDF7DD;
      padding: 25px;
    }
    .footer a{
      color :black ;
    }
    .body{
      background-color: #FDF7DD;
    }
    .dropbtn {

  display: inline-block ;
  
  justify-content: center;
  background-color: #FDF7DD;
  color: black;
  padding: 16px;
  font-size: 16px;
  border: 1px solid #FDF7DD;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
  align-items: center;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #EEEEEE;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color:black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;

}

.dropdown-content a:hover {background-color: #EEEEEE}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #EEEEEE; 
}
 .hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;
}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
position:relative;
-webkit-transition:all .4s linear;
transition:all .4s linear;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}

  </style>
</head>
<body>

<div class="navbar navbar-expand-sm ">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar" ></span>
        <span class="icon-bar"></span>  
        <span class="icon-bar"></span>                        
      </button>
      
      <a class="navbar-brand" href="homepage1.php"><img src="https://www.cgv.vn/skin/frontend/cgv/default/images/cgvlogo-small.png" alt="CGV Cinemas" class="responsive"></a>

    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="\CGV\homepage1.php" class="lia">Home</a></li>
        <li><a href="\CGV\contact.php" class="lia">Liên Hệ</a></li>
        <li><a href="\CGV\tuyendung.php" class="lia">Tuyển Dụng</a></li>
        <li><a href="#" class="lia">English</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="\CGV\register.php" class="lia"><span class="glyphicon glyphicon-user"></span>DangKi</a></li>
        <li><a href="\CGV\login1.php" class="lia"><span class="glyphicon glyphicon-log-in"></span>Đăng Nhập</a></li>
      </ul>

    </div>
  </div>
</div>




<nav class="body" >
      <div class="dropdown">
         <button class="dropbtn">TRANG CHỦ</button>
          <div class="dropdown-content">
          </div>
     </div>

    <div class="dropdown">
        <button class="dropbtn">PHIM</button>
          <div class="dropdown-content">
            <a href="\CGV\Phimdangchieu.php" >Phim Đang Chiếu</a>
            <a href="\CGV\Phimsapchieu.php" ">Phim Sắp Chiếu</a>
          </div>
     </div>

  <div class="dropdown">
    <button class="dropbtn">RẠP CGV</button>
    <div class="dropdown-content">
      <a href="\CGV\Tatcacacrap.php" >Tất Cả Các Rạp</a>
      <a href="#" ">Rạp Đặc Biệt</a>
      <a href="#" ">Rạp Sắp Mở</a>
    </div>
  </div>

   <div class="dropdown">
    <button class="dropbtn">THÀNH VIÊN</button>
    <div class="dropdown-content">
      <a href="#" >Tài Khoản</a>
      <a href="#" ">Quyền Lợi</a>
      
    </div>
  </div>

   <div class="dropdown">
    <button class="dropbtn">KHUYẾN MÃI</button>
    <div class="dropdown-content">
     
      <a href="#" ">SỰ KIỆN</a>
      <a href="#" ">ƯU ĐÃI</a>
    </div>
  </div>

 


  <div class="dropdown" style="float: right">
    <form class="form-inline my-2 my-lg-0" action="process_search.php">
      <input class="form-control mr-sm-2" type="search" placeholder="..." aria-label="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  <hr class="hr1">
  </nav>
 
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <a href="#"><img src="\CGV\anh\carousel0.jpg" alt="0 " style="width:100%;"></a>
      </div>

      <div class="item">
        <a href="#"><img src="\CGV\anh\carousel1.jpg" alt="1" style="width:100%;"> </a>
      </div>
      

   

    <div class="item">
      <a href="#">
        <img src="\CGV\anh\carousel4.jpg" alt="4" style="width:100%;"></a>
    </div>

    <div class="item">
      <a href="#">
        <img src="\CGV\anh\carousel5.jpg" alt="5" style="width:100%;"></a>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
  <br>

    <div class="container">
      <h4 style="text-decoration:underline;">PHIM ĐANG CHIẾU</h4>
      <?php 
  require_once('conn.php');
      
      $sql = "SELECT maphim,name,daodien,dienvien,TheLoai,ThoiLuong,KhoiChieu,NgonNgu,MoTa,image FROM product ";
      
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
  ?>
   <div class="col-sm-3">
    <div class="hovereffect">
        <img class="img-responsive" src="<?= $row['image'] ?>" alt="" style="width:242px; height:348px">
        <div class="overlay">
         
           <a class="info" href="chitietphim.php?maphim=<?= $row['maphim'] ?>">CHI TIẾT</a>
        </div>
        <p><?= $row['name'] ?></p>
    </div>
</div>
 <?php }
      } ?>
</div>

 
    <hr class="hr1"> 
   



<footer class="container-fluid text-center">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-12">
        <h4>GIỚI THIỆU</h4>
        <ul class="list-unstyled">
          <a href=""><li>Về Chúng Tôi</li></a>
          <a href=" "><li>Thỏa Thuận Sử Dụng</li></a>
          <a href=" "><li>Quy Chế Hoạt Động</li></a>
          <a href=" "><li>Chính Sách Bảo Mật</li></a>
        </ul>
      </div>

      <div class="col-sm-3 col-xs-12">
        <h4>GỐC ĐIỆN ẢNH </h4>
        <ul class="list-unstyled">
          <a href=" "><li>Thể Loại Phim</li></a>
          <a href=" "><li>Bình Luận Phim</li></a>
          <a href=" "><li>Blog Điện Ảnh</li></a>
          <a href=" "><li>Phim Hay Tháng</li></a>
          
        </ul>
      </div>

       <div class="col-sm-3 col-xs-12">
        <h4>HỖ TRỢ</h4>
        <ul class="list-unstyled">
          <a href=" "><li>Góp Ý</li></a>
          <a href=" "><li>Sale &Services</li></a>
          <a href=" "><li>Rạp / Giá Vé</li></a>
          <a href=" "><li>Tuyển Dụng</li></a>
          
        </ul>
      </div>

       <div class="col-sm-3 col-xs-12">
        <h4>KẾT NỐI CGV CINEMA</h4>
        <ul class="list-unstyled">
         <a href="  "> <li>FaceBook</li></a>
          <a href=" "><li>Youtube</li></a>
         <a href="  "> <li>Instagram</li></a> 
          
        </ul>
      </div>
      
    </div>
  </div>
    <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> All Rights Reserved | Trung Tam giai tri KSM <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://homepage1.php" target="_blank" >SonTran</a>
          
            </p>
          </div>
          
        </div>
</footer>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</body>
</html>

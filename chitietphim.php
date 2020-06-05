<!DOCTYPE php>
<php lang="en">
<head>
  <title>Chi tiết</title>
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

.button {
 
  border: black;
  color: white;
  padding: 12px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}
.button4 {
  background-color: white;
  color: black;
  border: 1px solid black;
}
.button4 a{
  color:black;
}
.theaters-cinema-index .tab-content, .showtimes-container .tab-content {
    overflow: hidden;
}
.theaters-cinema-index .tab-content, .showtimes-container .tab-content{
  overflow:visible;
}
.button4:hover {background-color: #e7e7e7;}


.container1 {
  position: relative;
  max-width: 800px;
  margin: 0 auto;
}

.container1 img {vertical-align: middle;}

.container1 .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}


.day {
  border: 1px solid red;
  border-radius: 5px;
  cursor: pointer;
  height: 48px;
  position: relative;
  width: 77px;
  padding: 10px 15px;
}
.day > span {
  color: black;
  font-size: 11px;
  left: 4px;
  position: absolute;
  top: 4px;
}
.day > em {
  color: black;
  font-size: 11px;
  font-style: normal;
  left: 4px;
  position: absolute;
  top: 20px;
}
.day > strong {
  color: black;
  font-size: 32px;
  font-weight: normal;
  left: 31px;
  line-height: 32px;
  position: absolute;
  top: 8px;
}

.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
    background-color: #FDF7DD;
}

.film-list{
  float:left;
  width: 100%;
}

.film-left{
  width: 40%;
}

.film-right{
  margin-top: 5px;
 float: right;
  width: 55%;
}
.film-poster img{
  width: 50%;
}
.item li{
border: 1px solid black;
color:black;
text-align: center;
}

li.item a span{
  color :black;
  clear: both;
  float:left;
  width: 100%;
}

.w3-content{
  width=1250px;
}

#link {
  color : black;
}
.w3-third{
  width:auto;
}

.breadcrumb{
  border: 1px solid black;
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="..." aria-label="search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
    <hr class="hr1">
  </nav>

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="\CGV\homepage1.php">Home</a></li>
     <li class="breadcrumb-item"><a href="\CGV\homepage1.php">Phim Đang Chiếu</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="text-decoration: underline">Tên Phim </li>
   
  </ol>
</nav>


   
  <br><br>
  <div class="container"> <div class=" col-sm-12" > 
<h2>  Nội Dung Phim</h2>
<hr style="border:1px solid red">
</div>

  </div>


<div class="container">
  <div class="row">
     <?php 
    require_once('conn.php');
    
    $maphim = $_GET['maphim'];
    $sql = "SELECT * FROM product WHERE maphim = ".$maphim;
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    $conn->close();
    ?>
    <div class="col-sm-3" id="margin">
      <div class="w3-third">
        <a href="#"><img src="<?= $row['image'] ?>" id="margin" style="width: 100%"></a>
      </div>
    </div>
    <div class="col-sm-9">
      <div class="w3-twothird w3-container">
        <a href=""> <h2><?= $row['name'] ?></h2></a>
        <hr style="border:0.5px solid black">
        <p>
          <b>Đạo diễn: <span> <?= $row['daodien'] ?></span></b> 
        </p>
        <p>
          <b>Diễn Viên: <span><?= $row['dienvien'] ?></span></b> 
        </p>
        <p>
          <b>Thể Loại: <span> <?= $row['TheLoai'] ?></span></b> 
        </p>
        <p>
          <b>Khởi Chiếu: <span> <?= $row['KhoiChieu'] ?></span></b> 
        </p>
        <p>
          <b>Thời Lượng: <span> <?= $row['ThoiLuong'] ?></span></b> 
        </p>
        <p>
          <b>Ngôn ngữ: <span> <?= $row['NgonNgu'] ?></span></b> 
        </p>
        
        <a href="chitietngay.php?maphim=<?= $row['maphim'] ?>"><button class="btn btn-success">Mua Vé</button></a>

      </div>
    </div>
  

<br>




   <div class="row"> 
  <iframe width="720" height="360" src="<?= $row['Link'] ?>">

</iframe>
    <br>
    <p font-size="16px"> <b> <?= $row['MoTa'] ?></b></p>
</div>

<div>
 
</div>
</div>
</div>



<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
    <div class="film-list">

      </div>
  
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>

</div>


        
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

</php>











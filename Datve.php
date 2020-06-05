<!DOCTYPE html>
<html lang="en">
<head>
  <title>Phim Đang Chiếu</title>
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
   a{
    color:black;
    font: 15px;
   }
    .hr1{
      border-top: 4px solid black;
    }
    .hr2{
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
  background-color: #EEEEEE; {}
}
.breadcrumb{
  border:1px solid black;
  background-color: #FDF7DD;
  color: black;
}
  .breadcrumb a{
    color:black;
  }

  #P{
    margin-top:1px;
    margin-bottom: 1px;

  }



#order {
  position: relative;
  top: 0;
  left: 0px;
  width: 100%;
  height: 100%;
  -webkit-transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
#order .order-content {
  background: #;
  padding: 80px 90px;
  min-height: 700px;
}
#order .order-content h2 {
  color: #000;
  font-family: 'Montserrat-light', serif;
  font-size: 16px;
  margin: 0;
  padding: 0;
  font-weight: 500;
  text-transform: uppercase;
  margin-bottom: 50px;
}
#order .order-content {
  /*order forum */
}
#order .order-content span {
  color: #000;
  font-family: 'Montserrat-light', serif;
  font-size: 16px;
  margin: 0;
  padding: 0;
  font-weight: 500;
  text-transform: uppercase;
}
#order .order-content .entry-order-content {
  width: 100%;
  position: relative;
}
#order .order-content .entry-order-content #msform {
  position: relative;
}
#order .order-content .entry-order-content #msform fieldset {
  background: #f5f5f5;
  box-sizing: border-box;
  width: 80%;
  position: absolute;
}
#order .order-content .entry-order-content #msform fieldset:not(:first-of-type) {
  display: none;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content {
  padding-right: 40px;
  background: #f5f5f5;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content h3 {
  font-style: normal;
  font-weight: 400;
  font-family: 'Roboto';
  font-size: 16px;
  text-transform: uppercase;
  color: #000;
  padding-top: 6px;
  padding-bottom: 15px;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-date {
  list-style-type: none;
  padding-left: 0;
  display: inline-block;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-date li {
  float: left;
  margin-right: 15px;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-date li a {
  text-decoration: none;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-date li a i {
  padding: 5px 10px ;
  font-size: 12px;
  color: #000;
  font-family: 'Open Sans';
  font-weight: 400;
  border-radius: 15px;
  border: 1px solid #000;
  -webkit-transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-date li a i:hover {
  background: #fb802d;
  border: 1px solid #fb802d;
  color: #fff;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-ticket {
  list-style-type: none;
  padding-left: 0;
  display: inline-block;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-ticket li {
  float: left;
  margin-right: 30px;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-ticket li span {
  font-weight: 500 !important;
  font-family: 'Roboto';
  font-size: 12px;
  color: #000;
  display: block;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-ticket li i {
  font-weight: 400;
  display: inline-block;
  position: absolute;
  font-size: 12px;
  margin-top: -10px;
}
#order .order-content .entry-order-content #msform fieldset .wpc-content .order-ticket li select {
  width: 48px;
  margin-top: 30px;
  background: url(../images/order-arrow.png) 85% no-repeat #f5f5f5;
}
#order .order-content .entry-order-content #msform fieldset.seat-content {
  width: 100%;
  background: #f5f5f5;
}
#order .order-content .entry-order-content #msform fieldset.seat-content .seat_title {
  text-align: center;
}
#order .order-content .entry-order-content #msform fieldset.seat-content .seat_title:after {
  width: 100%;
  margin: 25px 0 35px 0;
  height: 45px;
  background-image: url(../images/ScreenForSeating_450.png);
  background-repeat: no-repeat;
  display: block;
  content: '';
  background-position: center;
}
#order .order-content .entry-order-content #msform input,
#order .order-content .entry-order-content #msform textarea {
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
  margin-bottom: 10px;
  width: 60%;
  box-sizing: border-box;
  font-family: montserrat;
  color: #2C3E50;
  font-size: 13px;
}
#order .order-content .entry-order-content #msform input.datetime,
#order .order-content .entry-order-content #msform textarea.datetime {
  padding: 0 12px;
  width: 55%;
  border: 1px solid #999;
  background: transparent;
  color: #2C3E50;
  font-weight: 400;
}
#order .order-content .entry-order-content #msform select {
  background: transparent;
  width: 265px;
  padding: 5px 15px;
  font-size: 14px;
  font-style: italic;
  border: 1px solid #999;
  height: 40px;
  border-radius: 0;
  color: #000;
  font-weight: 400;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: url(../images/order-arrow.png) 96% no-repeat #f5f5f5;
}
#order .order-content .entry-order-content #msform .action-button {
  box-shadow: none;
  margin-top: 30px;
  color: #fff;
  width: initial;
  border: 1px solid #fb802d;
  display: inline-block;
  font-size: 10px;
  font-weight: 400;
  font-family: Roboto;
  font-style: normal;
  text-transform: uppercase;
  padding: 0 35px;
  border-radius: 30px;
  background-color: #fb802d;
  -webkit-transition: all 0.25s ease;
  -moz-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
#order .order-content .entry-order-content #msform .action-button:hover {
  background-color: transparent;
  color: #fb802d;
  border: 1px solid #fb802d;
}
#order .order-content .entry-order-content #msform .action-button.previous {
  margin-right: 10px;
}
#order .order-content .seatCharts-cell {
  color: #182C4E;
  line-height: 15px;
  padding: 2px 3px;
  margin: 3px;
  float: left;
  text-align: center;
  outline: none;
  font-size: 10px;
}
#order .order-content .seatCharts-seat {
  color: #fff;
  cursor: pointer;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
}
#order .order-content .seatCharts-row {
  height: 35px;
}
#order .order-content .seatCharts-seat.available {
  background: transparent;
  border: 1px solid #000;
  color: #000;
}
#order .order-content .seatCharts-seat.focused {
  border: 1px solid #fa3636;
  color: #fa3636;
}
#order .order-content .seatCharts-seat.selected {
  border: 1px solid #fa3636;
  color: #fa3636;
}
#order .order-content .seatCharts-seat.unavailable {
  background-color: #fa3636;
  padding: 2px 4px;
  color: #fff;
  line-height: 15px;
  margin: 3px;
  cursor: not-allowed;
}
#order .order-content .seatCharts-container {
  margin-bottom: 40px;
  padding-bottom: 30px;
  border-right: 1px solid #000;
  width: 100%;
  float: left;
}
#order .order-content .seatCharts-legend {
  padding-left: 0px;
  bottom: 16px;
}
#order .order-content ul.seatCharts-legendList {
  padding-left: 0px;
  list-style-type: none;
  display: block;
  position: absolute;
  bottom: 70px;
}
#order .order-content .seatCharts-legendItem {
  float: left;
  width: 90px;
  margin-top: 10px;
  line-height: 0;
}
#order .order-content .seatCharts-legendItem .seatCharts-cell {
  width: 15px;
  height: 15px;
}
#order .order-content span.seatCharts-legendDescription {
  margin-left: 5px;
  opacity: .4;
  line-height: 30px;
  text-transform: capitalize;
  font-size: 10px;
  margin-left: 30px;
  margin-top: -4px;
  display: block;
}
#order .order-content .checkout-button {
  display: block;
  width: 80px;
  height: 24px;
  line-height: 20px;
  margin: 10px auto;
  border: 1px solid #999;
  font-size: 14px;
  cursor: pointer;
}
#order .order-content #selected-seats {
  overflow-y: auto;
  overflow-x: auto;
  width: 100%;
}
#order .order-content #selected-seats li {
  float: left;
  width: 72px;
  height: 26px;
  line-height: 26px;
  border: 1px solid #d3d3d3;
  list-style-type: none;
  background: #f7f7f7;
  margin: 6px;
  font-size: 14px;
  font-weight: bold;
  text-align: center;
}

.ph0 {
  padding-left: 0px !important;
  padding-right: 0px !important;
}

@media screen and (max-width: 767px) {
 
  #order .order-content .entry-order-content #msform fieldset {
    width: 100%;
  }
  #order .order-content .entry-order-content #msform input.datetime {
    width: 100%;
  }
  #order .order_sidebar {
    position: inherit;
  }
  #order .order-content {
    padding: 0 30px;
  }
 
  
}

.sc1{
  background-color: success;

}

.sc1 h2{
color: blue;
}

.order-date i{
background: none;
border :1px solid red;
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
        <li><a href="\CGV\Signup.php" class="lia"><span class="glyphicon glyphicon-user"></span>DangKi</a></li>
        <li><a href="\CGV\Signup.php" class="lia"><span class="glyphicon glyphicon-log-in"></span>Đăng Nhập</a></li>
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
            <a href="\CGV\Phimsapchieu.php ">Phim Sắp Chiếu</a>
          </div>
     </div>

  <div class="dropdown">
    <button class="dropbtn">RẠP CGV</button>
    <div class="dropdown-content">
      <a href="\CGV\Tatcacacrap.php" >Tất Cả Các Rạp</a>
      <a href="\CGV\Rapdacbiet.php" ">Rạp Đặc Biệt</a>
      <a href="\CGV\Rapsapmo.php ">Rạp Sắp Mở</a>
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
  <hr class="hr2">
</nav>

    
    
  

  <div class="container sc1 ">
    
    <div class="row">
      <?php 
  require_once('conn.php');
      
      $sql = "SELECT * FROM datve ";
      
      $result = $conn->query($sql);
      if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
  ?>
      <h2 align="center">Đặt Vé</h2>
      <div class="col-sm-12">
        
          <h4>Rạp:<span><?= $row['rap'] ?></span></h4>
           <h4>Tên Phim:<span><?= $row['name'] ?></span></h4>
           <h4 class="sc1">Date <span><li><?= $row['ngay'] ?></li></span> </h4>
            <h4 class="sc1">TIME</h4>
                <ul class="order-date">
                  <li><a href="javascript:;"><i><?= $row['thoigian'] ?></i></a></li>
                </ul>

                <a href="datghe.php?maphim=<?= $row['maphim'] ?>"><input type="button" name="next" class="next action-button" value="Next" ></a> 
        </div>
       
        <?php }
      } ?>
      </div>
     
    </div>


  </div>



    <hr class=" col-sm-12 hr2">




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
  

    
   
  </body>
</html>
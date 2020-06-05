<!DOCTYPE html>
<html lang="en">
<head>
  <title>LIEN HE</title>
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
  .jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 1px;
padding-bottom: 1px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
.hr1{
      border-top: 2px solid black;
    }
   .hr{
    border-top: 2px dashed red;
    width: 30%;
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

.dropdown-content a:hover {background-color: #darkorange}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #EEEEEE; 
}  
.header-title-page{
  color:red;
  text-align: center;
  background-color: #FDF7DD;
  margin: auto;
  position: relative;
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
        <li><a href="Signup.php" class="lia"><span class="glyphicon glyphicon-user"></span>DangKi</a></li>
        <li><a href="#" class="lia"><span class="glyphicon glyphicon-log-in"></span>Đăng Nhập</a></li>
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
      <a href="\CGV\Rapdacbiet.php ">Rạp Đặc Biệt</a>
      <a href="\CGV\Rapsapmo.php">Rạp Sắp Mở</a>
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
  
  <div class="container">
    <div class="text-center">
    <h4 style="color:red">LIEN HE VOI CHUNG TOI</h4>
    </div>
    <div class="map">
    <a href="https://goo.gl/maps/J7eAiH51cwK2"></a>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.9174260278533!2d106.70017291464677!3d10.740847392345716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f9f3904fc6d%3A0xf8eedeab7440a13a!2sLotte+Cinema!5e0!3m2!1sen!2s!4v1554187441157!5m2!1sen!2s" width="100%" height="400px"  frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
 
  <div class="container">
  <div class="col-sm-4 alert alert-success" >
    <h4>TRỤ SỞ CHÍNH</h4>
    <p>Tầng 2, Rivera Park Saigon - Số 7/28 Thành Thái, P.14, Q.10, Thành phố Hồ Chí Minh.</p>
  </div>

  <div class="col-sm-4 alert alert-success">
    <h4>Dịch Vụ Khách Hàng</h4>
    <p>Hotline:1900 6017</p>
    <p>Giờ Làm Việc :8:00 -22:00</p>
    <p>Tất cả ngày bao gồm cả lễ tết</p>
    <p>email hỗ trợ: hoidap@cgv.vn</p>
  </div>

    <div class="col-sm-4 alert alert-success">
    <h4> Liên Hệ Quảng Cáo</h4>
    <p>Phòng kinh doanh: +84-28-3636 57 57</p>

    <p>Ext: 278 (Ms. Như An) </p>

    <p>Hotline: 0981005390</p>

    <p>Email: ad.cgv@cj.net</p>
    
  </div>

     <div class="col-sm-4 alert alert-success">
    <h4>VÉ NHÓM, KHUYẾN MÃI & TỔ CHỨC SỰ KIỆN</h4>
    <p>Phòng Group Sales: +84-28-3636 57 57</p>

    <p>Ext: 238 (Ms. Phương) </p>

    <p>Hotline: 0981005390</p>

    <p>Email: groupsales@cgv.vn</p>
    
  </div>

  <div class="col-sm-4 alert alert-success">
    <h4>LIÊN HỆ HỢP TÁC TRUYỀN THÔNG & TÀI TRỢ</h4>
    <p>Phòng truyền thông: +84-28-3636 57 57</p>

    <p>Ext: 119 (Ms. Thúy An) </p>

    <p>Email: thuyan.doan@cj.net </p>
    
  </div>

   <div class="col-sm-4 alert alert-success">
    <h4>VỀ CÁC RẠP CGV</h4>
    <p>Chi tiết về các rạp CGV (địa chỉ, giá vé), vui lòng nhấn vào đây.</p>
    
  </div>


  </div>




    <div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1"></h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="process_contact.php" method="POST" name="formct" >
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required name="name" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                              
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required name="email" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Chọn yêu cầu:</option>
                                <option value="service">Bộ Phận chăm sóc khách hàng</option>
                                <option value="suggestions">Bộ phận hỗ trợ 24/24</option>
                                <option value="product">Hỗ trợ sản phẩm</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Văn Phòng Đại Diện</strong><br>
                Tầng 2, Rivera Park Saigon - Số 7/28 Thành Thái, P.14, Q.10, Thành phố Hồ Chí Minh<br>
                <abbr title="Phone">
                    P:</abbr>
                1900 1067
            </address>
            <address>
                <strong>Mail Liên Hệ</strong><br>
                <a href="mailto:#">CGV@gmail.com</a>
            </address>
            </form>
        </div>
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
</html>
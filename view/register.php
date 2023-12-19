<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Movie Design</title>
</head>

<body>
    <header>  
            
            <div class="logo"><a href="#"><img class="" src="../img/logo.png" alt=""></a></div>
            <div class="search-box">
                <form action="">
                        <input type="text" name="search" id="srch" placeholder="Search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    
                </form>
            </div>
            <ul>
                        <li>
                            <a href="#"><i class="far fa-list-alt"></i> THỂ LOẠI</a>
                            <ul class="drop-menu">
                                    <li><a href="#">Thể loại 1</a></li>
                                    <li><a href="#">Thể loại 2</a></li>
                                    <li><a href="#">Thể loại 3</a></li>
                                    <li><a href="#">Thể loại 4</a></li>
                                    <li><a href="#">Thể loại 5</a></li>
                                    <li><a href="#">Thể loại 6</a></li>
                                    <li><a href="#">Thể loại 7</a></li>
                                    <li><a href="#">Thể loại 8</a></li>
                                    <li><a href="#">Thể loại 9</a></li>
                                    <li><a href="#">Thể loại 10</a></li>
                                    
                            </ul>

                        </li>

                        <li><a href="#">Lịch Sử</a></li>
                        <li><a href="#"><i class="fa fa-sign-in"></i>  ĐĂNG NHẬP</a></li>
                        <li><a href="#"><i class="fa fa-user-plus"></i>  ĐĂNG KÝ</a></li>
                        <!-- <li><a href="#"><i class="fa fa-user"></i> User</a></li> -->

            </ul>
            <!-- <div class="menu">
                    <label for="chk1"><i class="fa fa-bars"></i></label>
            </div> -->
    </header>
    <form action="/user/signin" method="POST" class="form" id="form-2">
          <h3 class="heading">Đăng ký</h3>
          
          <div class="form-group">
            <label for="usename" class="form-label">Tên đăng nhập</label>
            <input id="usename" name="tendn" type="text" placeholder="Nhập tên đăng nhập" class="form-control">
            <span class="form-message"></span>
          </div>
          <div class="form-group">
            <label for="sodienthoai" class="form-label">Số điện thoại</label>
            <input id="sodienthoai" name="sodt" type="text" placeholder="Số điện thoại" class="form-control">
            <span class="form-message"></span>
          </div>
  
          <div class="form-group">
            <label for="password" class="form-label">Nhập mật khẩu</label>
            <input id="password" name="matkhau" type="password" placeholder="Nhập mật khẩu" class="form-control">
            <span class="form-message"></span>           
          </div> 
          <div class="form-group">
            <label for="password" class="form-label">Nhập lại mật khẩu</label>
            <input id="password" name="matkhau2" type="password" placeholder="Nhập lại mật khẩu" class="form-control">
            <span class="form-message"></span>           
          </div> 
          <button class="form-submit">Đăng ký</button>
          
            <p class="desc">Already have an acount? <a href="#"> Login</a>❤️</p>
    </form>       
    <script src="../js/app.js"></script>
   
</body>

</html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <title>Movie Design</title>
</head>

<body>
    <header>  
            
            <div class="logo"><a href="/user/home"><img class="" src="../../img/logo.png" alt=""></a></div>
            <div class="search-box">
                <form action="/user/timkiem" method="post">
                        <input type="text" name="search" id="srch" placeholder="Search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    
                </form>
            </div>
            <ul>
                        <li>
                            <a href="#"><i class="far fa-list-alt"></i> THỂ LOẠI</a>
                            <ul class="drop-menu">
                            <?php foreach ($loai as $Loai){?> 
                                    <li><a href="#"><?php echo $Loai["TenLoai"]?></a></li>
                            <?php }?>  
                               
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
    <div class="detail">
        <div class="detail-body">
                <div class="detail-img">

                
                    <img class="" src="<?php echo '../'. $ctphim['Anh'] ?>" alt=""> 
                </div>
                <div class="detail-icon">
                    <a href="/user/xemphim/<?= $ctphim['MaPhim'] ?>"><i class="fas fa-play"></i> Xem ngay</a>
                    <a href=""><i class="fa-regular fa-plus"></i> Danh sách</a>
                    
                </div>
                <h2><?php echo $ctphim['TenPhim'] ?></h2>
        </div>
    </div>
   
</body>
</html>

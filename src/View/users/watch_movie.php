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
                                <li><a href="/user/phimtheoma/<?= $Loai["MaLoai"] ?>"> <?php echo $Loai["TenLoai"]?> </a></li>
                            <?php }?>  
                                    
                            </ul>

                        </li>

                        <?php 
                        session_start();
                            if(isset($_SESSION['currentUser'])) {
                        ?>
                            <li><a href="/user/getyeuthich/<?= $_SESSION['currentUser']['Id']?>"><i class="fas fa-heart"></i> Phim yêu thích</a></li>
                            <li>
                                <a href="#"><i class="fa fa-user"></i> <?php echo  $_SESSION['us'] ?></a>

                                <ul class="dropmenu1">
                                <li><a href="/user/doimatkhau/<?php echo  $_SESSION['us'] ?>"> Đổi Mật Khẩu</a></li>
                                </ul>

                            </li>
                            <li><a href="/user/logout"><i class="fa-solid fa-right-from-bracket"></i> ĐĂNG XUẤT</a></li>
                        <?php } else {?>
                            <li><a href="/user/login"><i class="fas fa-heart"></i> Phim yêu thích</a></li>
                            <li><a href="/user/login"><i class="fa fa-sign-in"></i>  ĐĂNG NHẬP</a></li>
                            <li><a href="/user/register"><i class="fa fa-user-plus"></i>  ĐĂNG KÝ</a></li>
                        <?php }?>

            </ul>
            <!-- <div class="menu">
                    <label for="chk1"><i class="fa fa-bars"></i></label>
            </div> -->
    </header>
        <div class="container">
            <div class="vd_holder"></div>
            <video width="320" height="240" controls>
                <source src="<?php echo'../'. $ctphim['LinkPhim'] ?>" type="video/mp4">
            </video>
        </div>
        <div class="class_title">
            
                <h2><?php echo $ctphim['TenPhim'] ?></h3>
                
                <p><?php echo $ctphim['NoiDung'] ?>
                </p>


                <h1>Đề xuất cho bạn</h1>
        </div>
        <div class="wrapper">       
            <?php 
            foreach($phim as $Phim){
                ?>
                    <div class="box">
                        <a href="/user/detail/<?= $Phim['MaPhim'] ?>"><i class="fas fa-play"></i></a>
                        <img class="" src="<?php echo '../'. $Phim["Anh"]?>" alt="">
                        <h4><?php echo $Phim["TenPhim"]?></h4>
                    </div>
                    <?php 
            }
            ?>     
        
    </div>  
    <div class="footer">
        <div class="footer_">
        <a><i class="fas fa-laptop-code"></i> Nguyễn Khánh Huy</a> <br>
        <a ><i class="fas fa-envelope-open-text"></i>@husc.edu.vn</a></p>
        </div>
<div class="footer_">
        <a><i class="fas fa-palette"></i> Hoàng Thị Lin</a> <br>
  <a ><i class="fas fa-envelope-open-text"></i>@husc.edu.vn</a></p>
</div>
<div class="footer_">
    <a><i class="fas fa-database"></i> Hoànng Trọng Quốc Tiến</a> <br>
  <a ><i class="fas fa-envelope-open-text"></i>@husc.edu.vn</a></p>
</div>
</div>  
    <script src="../js/app.js"></script>  
</body>

</html>

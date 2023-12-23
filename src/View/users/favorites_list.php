<!DOCTYPE html>
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
            
            <div class="logo"><a href=""><img class="" src="../img/logo.png" alt=""></a></div>
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

                        <li><a href="#"><i class="fas fa-heart"></i> Phim yêu thích</a></li>
                        
                        <?php 
                        session_start();
                            if(isset($_SESSION['currentUser'])) {
                        ?>
                            <li><a href="#"><i class="fa fa-user"></i> <?php echo  $_SESSION['us'] ?></a></li>
                            <li><a href="/user/logout"><i class="fa-solid fa-right-from-bracket"></i> ĐĂNG XUẤT</a></li>
                        <?php } else {?>
                            <li><a href="/user/login"><i class="fa fa-sign-in"></i>  ĐĂNG NHẬP</a></li>
                            <li><a href="/user/register"><i class="fa fa-user-plus"></i>  ĐĂNG KÝ</a></li>
                        <?php }?>
    

            </ul>
            <!-- <div class="menu">
                    <label for="chk1"><i class="fa fa-bars"></i></label>
            </div> -->
    </header>
</body>
</html>
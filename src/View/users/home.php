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
                <form action="/user/timkiem">
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
    <div class="center slider"></div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NEW PHIM</h1>
                <div class="movie-list-wrapper">       
                    <div class="movie-list">
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="../img/1.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                        <img class="movie-list-item-img" src="../img/2.jpg" alt="">
                             
                            <span class="movie-list-item-title">Star Wars</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="../img/3.jpg" alt="">
                            <span class="movie-list-item-title">Storm</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="../img/4.jpg" alt="">
                            <span class="movie-list-item-title">1917</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="../img/5.jpg" alt="">
                            <span class="movie-list-item-title">Avengers</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="../img/1.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="../img/2.jpg" alt="">
                            <span class="movie-list-item-title">Her</span>
                            <p class="movie-list-item-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. At
                                hic fugit similique accusantium.</p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
                    </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        <div><h2>DANH SÁCH PHIM</h2></div>
        <br>
        <div class="wrapper">            

            <div class="box"> 
                <a><i class="fas fa-play"></i></a>
                <img class="" src="../img/1.jpg" alt="">
                <h4>Hương mật tựa khói sương</h4>
            </div>
            <div class="box"> 
                <a><i class="fas fa-play"></i></a>
                <img class="" src="../img/2.jpg" alt="">
                <h4>Hương mật tựa khói sương</h4>
            </div>
            <div class="box">
                <a><i class="fas fa-play"></i></a>
                <img class="" src="../img/3.jpg" alt="">
                <h4>Hương mật tựa khói sương</h4>
            </div>
            <div class="box">
                <a><i class="fas fa-play"></i></a>
                <img class="" src="../img/5.jpg" alt="">
                <h4>Hương mật tựa khói sương</h4>
            </div>
            <div class="box">
                <a><i class="fas fa-play"></i></a>
                <img class="" src="../img/4.jpg" alt="">
                <h4>Hương mật tựa khói sương</h4>
            </div>
            <div class="box">
                <a><i class="fas fa-play"></i></a>
                <img class="" src="../img/2.jpg" alt="">
                <h4>Hương mật tựa khói sương</h4>
            </div>
            <div class="box">
                <a><i class="fas fa-play"></i></a>
                <img class="" src="../img/1.jpg" alt="">
                <h4>Hương mật tựa khói sương</h4>
            </div>
            <div class="box">
                <a><i class="fas fa-play"></i></a>
                <img class="" src="../img/5.jpg" alt="">
                <h4>Hương mật tựa khói sương</h4>
            </div>
        </div>  
            
    
  
    <script src="../js/app.js"></script>
   
</body>

</html>

<?php 
session_start();
require_once("function/connection.php");
$query = $db ->query("SELECT * FROM product_categories");
$category=$query ->fetchAll(PDO::FETCH_ASSOC);
$query1=$db->query("SELECT * FROM news ORDER BY published_at DESC limit 4");
$news=$query1->fetchAll(PDO::FETCH_ASSOC);
$query2=$db->query("SELECT * FROM products ORDER BY created_at DESC LIMIT 8");
$products=$query2->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Present Winery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC&display=swap" rel="stylesheet">
    <link href="css/aos/styles.css" rel="stylesheet">
    <link href="css/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <div>
        <header>
            <div id="wine" data-aos="zoom-out" data-aos-duration="2000">
                <a href="index.php">
                    <img src="images/01.png" alt="winery">
                </a>
            </div>
            <div class="all-menu">
                <div class="menu-wrap">
                    <div class="menu-outer">
                        <div class="menu">
                            <div class="menu-inner">
                                <div class="menulogo">
                                    <a href="index.php">
                                        <img src="images/logofull-150.png" alt="logo">
                                    </a>
                                </div>
                                <ul class="menulist">
                                    <li><a href="index.php">首頁</a></li>
                                    <li><a href="frontend/about.php">關於我們</a></li>
                                    <li><a href="frontend/newslist.php">最新消息</a></li>
                                    <li><a href="frontend/productlist.php">線上購買</a></li>
                                    <li><a href="frontend/information.php">資料來源</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bar" data-aos="fade-left">
                    <div class="web-logo">
                        <div class="logo-block">
                            <a href="index.php">
                                <img src="images/logo-150.png" alt="logo">
                                <img id="logo1" src="images/logow.png" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="icontool">
                        <div class="cart">
                            <a href="frontend/basket.php"><i class="fa fa-shopping-cart fa-2x"
                                    aria-hidden="true"></i></a>
                        </div>
                        <div class="user">
                            <?php if(isset($_SESSION['member']) && $_SESSION['member'] != null ){ ?>
                            <a href="frontend/customer-account.php"><i class="fa fa-user fa-2x"
                                    aria-hidden="true"></i></a>
                            <?php }else{ ?>
                            <a href="frontend/register.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
                            <?php } ?>
                        </div>
                        <div class="menubox" onclick="myFunction(this)">
                            <div class="menu1"></div>
                            <div class="menu2"></div>
                            <div class="menu3"></div>
                        </div>
                    </div>

                </div>
            </div>

        </header>
        <section>
            <div class="ns-block">
                <div class="ns-title" data-aos="fade-up">
                    <img class="ns-titleimg" src="images/news2.png" alt="news">
                    <!-- <span>最 新 消 息</span> -->
                </div>
                <div class="ns-content">
                
                    <div id="newsimg" class="news-item" data-aos="fade-right">
                    <a href="frontend/news.php?newsID=<?php echo $news[0]["newsID"]; ?>">
                        <img id="newribbon" src="images/newribbon1.png" alt="newribbon">
                        <img src="uploads/news/<?php echo $news[0]['picture'];?>"
                            style="width:100%;max-height:60vh;object-fit: cover;">
                        <div class="newstext">
                           
                        <p class="newstitle"><?php echo $news[0]['title'];?></p>
                        <p><?php echo mb_strimwidth(strip_tags($news[0]['content']), 0 , 150, "...");?></p>
                        
                        </div>
                        </a>
                    </div>
                    
                    
                    <div class="news-item">
                        <Ol class="list">
                            <li class="item" data-aos="fade-left" data-aos-delay="200">
                                <a href="frontend/news.php?newsID=<?php echo $news[1]["newsID"]; ?>">
                                <h2 class="headline"><?php echo $news[1]['title'];?></h2>
                                <span><?php echo mb_strimwidth(strip_tags($news[1]['content']), 0 , 150, "...");?></span>
                                </a>
                            </li>
                            <li class="item" data-aos="fade-left" data-aos-delay="400">
                            <a href="frontend/news.php?newsID=<?php echo $news[2]["newsID"]; ?>">
                                <h2 class="headline"><?php echo $news[2]['title'];?></h2>
                                <span><?php echo mb_strimwidth(strip_tags($news[2]['content']), 0 , 150, "...");?></span>
                            </a>
                            </li>
                            <li class="item" data-aos="fade-left" data-aos-delay="600">
                            <a href="frontend/news.php?newsID=<?php echo $news[3]["newsID"]; ?>">
                                <h2 class="headline"><?php echo $news[3]['title'];?></h2>
                                <span><?php echo mb_strimwidth(strip_tags($news[3]['content']), 0 , 150, "...");?></span>
                            </a>
                            </li>
                            <!-- <li class="item">
                            <h2 class="headline"></h2>
                            <span></span>
                        </li> -->
                        </Ol>
                    </div>
                    <div class="clear-both"></div>
                    <div class="learnmore clear-both" data-aos="fade-up">
                        <!-- <div class="newsbtn"> -->
                        <a href="frontend/newslist.php"><button class="btn draw-border">了解更多</button></a>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <div class="product">
                <div class="ns-title" data-aos="fade-up">
                    <img class="ns-titleimg" src="images/hotproducts.png" alt="hotproducts">
                </div>
                <div class="pd-content">
                    <div class="multiple-items clear-both">
                        <?php foreach($products as $product){ 
                            $query3 = $db ->query("SELECT category FROM product_categories WHERE product_categoryID=".$product["product_categoryID"]);
                            $category_name=$query3 ->fetch(PDO::FETCH_ASSOC);
                            ?>
                        <div class="productinfo" data-aos="fade-up">
                            <form action="frontend/cart/add_cart_demo.php" method="post">

                                <a
                                    href="frontend/product.php?categoryID=<?php echo $product["product_categoryID"]; ?>&productID=<?php echo $product["productID"]; ?>">
                                    <img src="uploads/products/<?php echo $product["picture"]; ?>">
                                </a>
                                <div data-aos="fade-up">
                                    <h2><?php echo $product["name"]; ?></h2>
                                    <?php if ($product["vintage"] != null){ ?>
                                    <p>年份:<?php echo $product["vintage"]; ?></p>
                                    <?php } ?>
                                    <?php if ($category_name["category"] != null){ ?>
                                    <p>產地:<?php echo $category_name['category'];?></p>
                                    <?php } ?>
                                    <?php if ($product["bottle_size"] != null){ ?>
                                    <p>容量:<?php echo $product["bottle_size"]; ?></p>
                                    <?php } ?>
                                    <?php // if ($product["varietal"] != null){ ?>
                                    <!-- <p>葡萄品種:<?php // echo $product["varietal"]; ?></p> -->
                                    <?php // } ?>
                                    <?php if ($product["alcohol"] != null){ ?>
                                    <p>酒精濃度:<?php echo $product["alcohol"]; ?></p>
                                    <?php } ?>
                                   
                                </div>
                                <div class="btn-bottom">
                                        <input type="hidden" name="pic" value="<?php echo $product["picture"]; ?>">
                                        <input type="hidden" name="product_name"
                                            value="<?php echo $product["name"]; ?>">
                                        <input type="hidden" name="price" value="<?php echo $product["price"]; ?>">
                                        <input type="hidden" name="productID"
                                            value="<?php echo $product["productID"]; ?>">
                                        <input type="hidden" name="categoryID"
                                            value="<?php echo $product["product_categoryID"]; ?>">
                                        <input type="hidden" name="vintage" value="<?php echo $product["vintage"]; ?>">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn draw-border">加入購物車</button>

                                        <a
                                            href="frontend/product.php?categoryID=<?php echo $product["product_categoryID"]; ?>&productID=<?php echo $product["productID"]; ?>">
                                            <button type="button" class="btn draw-border">更多 → </button></a>
                                    </div>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="clear-both"></div>
                    <div class="learnmore clear-both" data-aos="fade-up">
                        <!-- <div class="newsbtn"> -->
                        <a href="frontend/productfilter.php"><button class="btn draw-border">了解更多</button></a>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
    </div>

    </section>
    <footer>
        <div class="footer" data-aos="fade-up" data-aos-delay="200">
            <div class="subscription">
                <form action="">
                    <label for="subscription">訂閱電子報
                    </label>
                    <input id="subscription" name="subscription" type="text">
                    <button class="btn draw-border">訂閱</button>
                </form>
            </div>
            <div class="footcolor">
                <div class="ft-center">
                    <div class="group">
                        <div class="ft-item">
                            <h4>會員專區</h4>
                            <ul>
                                <?php if(isset($_SESSION['member']) && $_SESSION['member'] !=null) { ?>
                                <li><a href="frontend/customer-account.php">會員專區</a></li>
                                <li><a href="frontend/logout.php">登出</a></li>
                                <?php }else{ ?>
                                <li><a href="frontend/register.php">加入會員</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#login-modal">會員登入</a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <div class="ft-item">
                            <h4>產品分類</h4>
                            <ul>
                                <li><a href="productfilter.php?categoryID=<?php echo $category[0]['product_categoryID'] ?>">德國</a>
                                </li>
                                <li><a href="productfilter.php?categoryID=<?php echo $category[1]['product_categoryID'] ?>">西班牙</a></li>
                                <li><a href="productfilter.php?categoryID=<?php echo $category[2]['product_categoryID'] ?>">法國</a></li>
                                <li><a href="productfilter.php?categoryID=<?php echo $category[3]['product_categoryID'] ?>">義大利</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="group">
                        <div class="ft-logo">
                            <a href="index.php">
                                <img src="images/logofull-150.png" alt="">
                            </a>
                            <div class="fb">
                                <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="ig">
                                <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="tw">
                                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        </div>
        <div class="clear-both"></div>
        <div class="design">
            <div class="design-center">
                <div class="copyright">
                    Copyright © 2020 PRESENT WINERY All Right Reserved.
                </div>
                <div class="designby">
                    此為學習用的測試網站，無商業行為
                </div>
            </div>
        </div>
    </footer>
    </div>

    <div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="info" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">訊息</h4>
                </div>
                <div class="modal-body text-center">
                    <p class="text-center text-muted changeword">成功更新數量!</p>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">確定</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">會員登入</h4>
                </div>
                <div class="modal-body">
                    <form action="frontend/check_login.php" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" id="email-modal" placeholder="email"
                                name="account">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password-modal" placeholder="password"
                                name="password">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> 登入</button>
                        </p>

                    </form>

                    <p class="text-center text-muted">尚未註冊會員?</p>
                    <p class="text-center text-muted"><a href="frontend/register.php"><strong>立即註冊</strong></a></p>

                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="js/aos.js"></script>

    <?php if(isset($_GET['Existed']) && $_GET["Existed"] == "true"){ ?>
    <script>
        $(function () {
            $(".changeword").html("此商品已存在購物車，請至「我的購物車」修改數量。");
            $("#info-modal").modal();
        });
    </script>
    <?php }else if(isset($_GET['Existed']) && $_GET["Existed"] == "false"){ ?>
    <script>
        $(function () {
            $(".changeword").html("成功加入購物車!");
            $("#info-modal").modal();
            setTimeout(function () {
                $("#info-modal").modal("hide");
            }, 2000);
        });
    </script>

    <?php } ?>

    <script type="text/javascript">
        // $('.multiple-items').slick({
        //   infinite: true,
        //   slidesToShow: 2,
        //   slidesToScroll: 1
        // });
        $('.multiple-items').slick({
            infinite: true,
            centerMode: true,
            autoplay: true,
            autoplaySpeed: 2500,
            dots: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>
    <script>
        AOS.init({
            duration: "1500",
        });
    </script>
    <script>
        function myFunction(x) {
            x.classList.toggle("change");
        };
        $(function () {
            $(".menubox").click(function () {
                $(".menu-wrap").slideToggle(1000);
                $(".logo-block").slideToggle(1000);
            });
        });
    </script>

    <!-- <script>
const $body = (window.opera) ? (document.compatMode == "CSS1Compat" ? $('html') : $('body')) : $('html,body'),
      $section = $('.section');

var numOfPages = $section.length - 1, //取得section的數量
    curPage = 0, //初始頁
    scrollLock = false;

function scrollPage() {
  //滑鼠滾動
  $(document).on("mousewheel DOMMouseScroll", function(e) {
    if (scrollLock) return;
    if (e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0)
      navigateUp();
    else
      navigateDown();
  });
  //鍵盤上下鍵
  $(document).on("keydown", function(e) {
    if (scrollLock) return;
    if (e.which === 38)
      navigateUp();
    else if (e.which === 40)
      navigateDown();
  });
}

function pagination() {
  scrollLock = true;
  $body.stop().animate({
    scrollTop: $section.eq(curPage).offset().top
  }, 1000, 'swing', function(){
    scrollLock = false;
  });
};

function navigateUp () {
  if (curPage === 0) return;
  curPage--;
  pagination();
};

function navigateDown() {
  if (curPage === numOfPages) return;
  curPage++;
  pagination();
};


$(function() {
  scrollPage();
});
</script> -->

</body>

</html>
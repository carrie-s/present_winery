<?php 
session_start();
require_once("function/connection.php");
$query = $db ->query("SELECT * FROM product_categories");
$category=$query ->fetchAll(PDO::FETCH_ASSOC);
$query1=$db->query("SELECT * FROM news ORDER BY published_at DESC limit 4");
$news=$query1->fetchAll(PDO::FETCH_ASSOC);
$query2=$db->query("SELECT * FROM products ORDER BY created_at DESC LIMIT 10");
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

    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> 
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div >
    <header  >
    <div class="web-logo">
        <div class="logo-block">
        <img src="images/logo-150.png" alt="logo">
        </div>
    </div>
    <div class="menu-wrap">
        <div class="menu-outer">
            <div class="menu">
                <div class="menu-inner">
                    <div class="menulogo">
                     <img src="images/logofull-150.png" alt="logo">
                    </div>
                    <ul class="menulist">
                        <li><a href="index.php">首頁</a></li>
                        <li><a href="frontend/about.php">關於我們</a></li>
                        <li><a href="frontend/newslist.php">最新消息</a></li>
                        <li><a href="frontend/productlist.php">線上購買</a></li>
                        <li><a href="frontend/contact.php">聯絡我們</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bar" data-aos="fade-left">
        <div class="icontool">
            <div class="cart">
                <a href="frontend/basket.php"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="user">
            <a href="frontend/register.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
            </div>
            <div class="menubox" onclick="myFunction(this)">
                <div class="menu1"></div>
                <div class="menu2"></div>
                <div class="menu3"></div>
            </div>
        </div>
     </div>
     <div id="wine" data-aos="zoom-out" data-aos-duration="2000">
        <img src="images/01.png" alt="winery">
    </div>
    </header>
    <section>
        <div class="ns-block" >
            <div class="ns-title" data-aos="fade-up">
                <img class="ns-titleimg" src="images/news2.png" alt="news">
                <!-- <span>最 新 消 息</span> -->
            </div>
            <div class="ns-content" >
                <div id="newsimg" class="news-item" data-aos="fade-right">
                    <img id="newribbon" src="images/newribbon1.png" alt="newribbon">
                    <img src="uploads/news/<?php echo $news[0]['picture'];?>" style="width:100%;max-height:50vh;object-fit: cover;">
                </div>
                <div class="newstext">
                    <p class="newstitle"><?php echo $news[0]['title'];?></p>
                    <p><?php echo mb_strimwidth(strip_tags($news[0]['content']), 0 , 150, "...");?></p>
                </div>
                <div class="news-item">
                    <Ol class="list">
                        <li class="item" data-aos="fade-left" data-aos-delay="200">
                            <h2 class="headline"><?php echo $news[1]['title'];?></h2>
                            <span><?php echo mb_strimwidth(strip_tags($news[1]['content']), 0 , 150, "...");?></span>
                        </li>
                        <li class="item" data-aos="fade-left" data-aos-delay="400">
                            <h2 class="headline"><?php echo $news[2]['title'];?></h2>
                            <span><?php echo mb_strimwidth(strip_tags($news[2]['content']), 0 , 150, "...");?></span>
                        </li>
                        <li class="item" data-aos="fade-left" data-aos-delay="600">
                            <h2 class="headline"><?php echo $news[3]['title'];?></h2>
                            <span><?php echo mb_strimwidth(strip_tags($news[3]['content']), 0 , 150, "...");?></span>
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
                <?php foreach($products as $product){ ?>
                    <div  class="productinfo" data-aos="fade-up">
                    <a href="frontend/product.php?categoryID=<?php echo $product["product_categoryID"]; ?>&productID=<?php echo $product["productID"]; ?>">
                        <img src="uploads/products/<?php echo $product["picture"]; ?>" width="100">
                    </a>
                        <div data-aos="fade-up">
                            <h2><?php echo $product["name"]; ?></h2>
                            <p>年份:<?php echo $product["vintage"]; ?></p>
                            <p>產地:西班牙</p>
                            <p>容量:<?php echo $product["bottle_size"]; ?></p>
                            <p>葡萄品種:<?php echo $product["varietal"]; ?></p>
                            <p>酒精濃度:<?php echo $product["alcohol"]; ?></p>
                            <p>酒莊:Cristo de le Vega</p>
                            <button class="btn draw-border">加入購物車

                            </button> <a href="frontend/product.php?categoryID=<?php echo $product["product_categoryID"]; ?>&productID=<?php echo $product["productID"]; ?>"><button class="btn draw-border">更多 → </button></a>
                        </div>
                    </div>
                <?php } ?>
                    <div  class="productinfo" data-aos="fade-up">
                        <img src="images/02.png" width="100">
                        <div data-aos="fade-up">
                            <h2>Valderba TM 2014</h2>
                            <p>年份:2014</p>
                            <p>產地:西班牙</p>
                            <p>容量:750ml</p>
                            <p>葡萄品種:50% Tempanillo & 50% Merlot</p>
                            <p>酒精濃度:12.5%vol</p>
                            <p>酒莊:Cristo de le Vega</p>
                            <button class="btn draw-border">加入購物車</button> <button class="btn draw-border">更多 → </button>
                        </div>
                    </div>
                    <div  class="productinfo" data-aos="fade-up">
                        <img src="images/03.png" width="100">
                        <div data-aos="fade-up">
                        <h2>Camina Tempanillo</h2>
                            <p>年份:2015</p>
                            <p>產地:西班牙</p>
                            <p>容量:750ml</p>
                            <p>葡萄品種:Tempanillo</p>
                            <p>酒精濃度:12.5%vol</p>
                            <p>酒莊:Cristo de le Vega</p>
                            <button class="btn draw-border">加入購物車</button> <button class="btn draw-border">更多 → </button>
                        </div>    
                    </div>
                    <div  class="productinfo" data-aos="fade-up">
                        <img src="images/04.png" width="100">
                        <div data-aos="fade-up">
                            <h2>Valderba TM 2014</h2>
                            <p>年份:2014</p>
                            <p>產地:西班牙</p>
                            <p>容量:750ml</p>
                            <p>葡萄品種:50% Tempanillo & 50% Merlot</p>
                            <p>酒精濃度:12.5%vol</p>
                            <p>酒莊:Cristo de le Vega</p>
                            <button class="btn draw-border">加入購物車</button> <button class="btn draw-border">更多 → </button>
                        </div>
                    </div>
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
    <footer data-aos="fade-up" data-aos-delay="200" >
        
        <div class="footer"  >
        <div class="subscription" data-aos="fade-up" >
            <form action="">
            <label for="subscription" >訂閱電子報：
            </label>      
            <input id="subscription" name="subscription" type="text">
            <button class="btn draw-border">訂閱</button>
            </form>
        </div>
            <div class="footcolor">
            <div class="ft-center">
                <div class="ft-item">
                    <h4>會員專區</h4>
                    <ul>
                        <li><a href="frontend/register.php">加入會員</a></li>
                        <li><a href="">會員登入</a></li>
                    </ul>
                </div>
                <div class="ft-item">
                    <h4>產品分類</h4>
                    <ul>
                        <li><a href="productfilter.php?categoryID=<?php echo $category[0]['product_categoryID'] ?>">德國</a></li>
                        <li><a href="">西班牙</a></li>
                        <li><a href="">法國</a></li>
                        <li><a href="">義大利</a></li>
                    </ul>
                </div>
                <div class="ft-item">
                <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
            </div>
            <div class="clear-both"></div>
                <div class="ft-logo">
                    <img src="images/logofull-150.png" alt="">
            </div>
            </div>
            
        </div>
        </div>
        <div class="clear-both"></div>
        <div class="design" >
            <div class="design-center">
                <div class="copyright">
                Copyright © 2020 PRESENT WINERY All Right Reserved.
                </div>
                <div class="designby">
                Designed by Carrie
                </div>
            </div>
        </div>
    </footer>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script src="js/aos.js"></script>

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
  dots: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 900,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
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
    duration:"1500",
  });
</script>
<script>
function myFunction(x) {
  x.classList.toggle("change");
};
$(function(){
    $(".menubox").click(function(){
        $(".menu-wrap").slideToggle(1500);
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






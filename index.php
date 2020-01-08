<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Present Winery</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">  
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> 
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
<div >
    <header >
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
    <div class="bar">
        <div class="icontool">
            <div class="cart">
                <a href="frontend/basker.php"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
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
     <div id="wine">
        <img src="images/01.png" alt="winery">
    </div>
    </header>
    <section>
        <div class="ns-block" >
            <div class="ns-title">
                <img class="ns-titleimg" src="images/news2.png" alt="news">
                <!-- <span>最 新 消 息</span> -->
            </div>
            <div class="ns-content">
                <div id="newsimg" class="news-item">
                    <img id="newribbon" src="images/newribbon1.png" alt="newribbon">
                    <img src="images/02.jpg" width="100%" height="auto">
                </div>
                <div class="newstext">
                    <p class="newstitle">2020終極大福箱</p>
                    <p>酒瓶子一年一度最大盛事，大福箱開始預購！越是不景氣，越要反向操作，去年大福箱獎品總額15萬，今年直接拉到20萬，老樣子，大家開心最重要！</p>
                </div>
                <div class="news-item">
                    <Ol class="list">
                        <li class="item">
                            <h2 class="headline">2020尾牙春酒精選</h2>
                            <span>單瓶滿12瓶免運，或與其他活動或組合合購，滿12瓶也可以享箱價優惠唷！</span>
                        </li>
                        <li class="item">
                            <h2 class="headline">絕版熟成聖夜喬治一級園</h2>
                            <span>絕版酒不是重點，而是現在07年熟得完美！鮮明的紅花香，紅莓、黑莓香氣交錯，口感飽滿完整，12年熟成的細緻口感，加上回味的礦石感與細緻香料提示，好一支巔峰熟成的勃根地~</span>
                        </li>
                        <li class="item">
                            <h2 class="headline">夏日白酒節組</h2>
                            <span>每年夏天酒瓶子都會推出白酒組，每年都受到各位酒友的好評，再次感謝大家，今年的白酒節再升級！</span>
                        </li>
                        <!-- <li class="item">
                            <h2 class="headline"></h2>
                            <span></span>
                        </li> -->
                    </Ol>
                </div>
                <div class="clear-both"></div>
                <div class="learnmore clear-both"><div class="newsbtn"><a href="javascript:;">了解更多</a></div></div>
            </div>
        </div>
        <div class="product">
            <div class="ns-title">
                <img class="ns-titleimg" src="images/hotproducts.png" alt="hotproducts">
            </div>
            <div class="pd-content">
                <!-- <div class="pd-item" style="text-align: right;">
                    <span style="font-size:7rem;position:absolute;font-weight:bold;left:15%;opacity:0.2;z-index:-1;font-family:Arial Black;">BEST<br>SELLER</span>
                    <img src="images/01.png" width="20%">
                </div>
                <div class="pd-item">
                    <h2>Camina Tempanillo</h2>
                    <p>年份:2015</p>
                    <p>產地:西班牙</p>
                    <p>容量:750ml</p>
                    <p>葡萄品種:Tempanillo</p>
                    <p>酒精濃度:12.5%vol</p>
                    <p>酒莊:Cristo de le Vega</p>
                    <button>加入購物車</button>
                </div> -->
                <!-- <div id="main-product" class="clear-both " style="">
                    <span style="font-size:7rem;position:absolute;font-weight:bold;left:15%;opacity:0.2;z-index:-1;font-family:Arial Black;text-align:right;">BEST<br>SELLER</span>
                    <div class="slider-for">
                        <div class="productinfo">
                            <img src="images/01.png" width="100">
                            <div>
                                <h2>Camina Tempanillo</h2>
                                <p>年份:2015</p>
                                <p>產地:西班牙</p>
                                <p>容量:750ml</p>
                                <p>葡萄品種:Tempanillo</p>
                                <p>酒精濃度:12.5%vol</p>
                                <p>酒莊:Cristo de le Vega</p>
                                <button>加入購物車</button>
                            </div>
                        </div>
                        <div class="productinfo">
                            <img src="images/02.png" width="100">
                            <div>
                                <h2>--------</h2>
                                <p>年份:2015</p>
                                <p>產地:西班牙</p>
                                <p>容量:750ml</p>
                                <p>葡萄品種:Tempanillo</p>
                                <p>酒精濃度:12.5%vol</p>
                                <p>酒莊:Cristo de le Vega</p>
                                <button>加入購物車</button>
                            </div>
                        </div>
                        <div><img src="images/03.png" width="100"></div>
                        <div><img src="images/04.png" width="100"></div>
                    </div>
                </div> -->
                <!-- <div class="pd-item">
                    <h2>Camina Tempanillo</h2>
                    <p>年份:2015</p>
                    <p>產地:西班牙</p>
                    <p>容量:750ml</p>
                    <p>葡萄品種:Tempanillo</p>
                    <p>酒精濃度:12.5%vol</p>
                    <p>酒莊:Cristo de le Vega</p>
                    <button>加入購物車</button>
                </div> -->
                <div class="multiple-items clear-both">
                    <div  class="productinfo">
                        <img src="images/01.png" width="100">
                        <div>
                            <h2>Camina Tempanillo</h2>
                            <p>年份:2015</p>
                            <p>產地:西班牙</p>
                            <p>容量:750ml</p>
                            <p>葡萄品種:Tempanillo</p>
                            <p>酒精濃度:12.5%vol</p>
                            <p>酒莊:Cristo de le Vega</p>
                            <button>加入購物車</button> <button>更多 → </button>
                        </div>
                    </div>
                    <div  class="productinfo">
                        <img src="images/02.png" width="100">
                        <div>
                            <h2>Valderba TM 2014</h2>
                            <p>年份:2014</p>
                            <p>產地:西班牙</p>
                            <p>容量:750ml</p>
                            <p>葡萄品種:50% Tempanillo & 50% Merlot</p>
                            <p>酒精濃度:12.5%vol</p>
                            <p>酒莊:Cristo de le Vega</p>
                            <button>加入購物車</button> <button>更多 → </button>
                        </div>
                    </div>
                    <div  class="productinfo">
                        <img src="images/03.png" width="100">
                        <h2>Camina Tempanillo</h2>
                            <p>年份:2015</p>
                            <p>產地:西班牙</p>
                            <p>容量:750ml</p>
                            <p>葡萄品種:Tempanillo</p>
                            <p>酒精濃度:12.5%vol</p>
                            <p>酒莊:Cristo de le Vega</p>
                            <button>加入購物車</button> <button>更多 → </button>
                    </div>
                    <div  class="productinfo">
                        <img src="images/04.png" width="100">
                        <div>
                            <h2>Valderba TM 2014</h2>
                            <p>年份:2014</p>
                            <p>產地:西班牙</p>
                            <p>容量:750ml</p>
                            <p>葡萄品種:50% Tempanillo & 50% Merlot</p>
                            <p>酒精濃度:12.5%vol</p>
                            <p>酒莊:Cristo de le Vega</p>
                            <button>加入購物車</button> <button>更多 → </button>
                        </div>
                    </div>
                </div>
                <div class="clear-both"></div>
                <div class="learnmore clear-both"><div class="newsbtn"><a href="javascript:;">了解更多</a></div></div>
            </div>
            </div>
        </div>

    </section>
    <footer >
        
        <div class="footer">
        <div class="subscription">
            <form action="">
            <label for="subscription">訂閱電子報：
            </label>      
            <input id="subscription" name="subscription" type="text">
            <button>訂閱</button>
            </form>
        </div>
            <div class="footcolor">
            <div class="ft-center">
                <div class="ft-item">
                    <h4>會員專區</h4>
                    <ul>
                        <li><a href="">加入會員</a></li>
                        <li><a href="">會員登入</a></li>
                    </ul>
                </div>
                <div class="ft-item">
                    <h4>產品分類</h4>
                    <ul>
                        <li><a href="">德國</a></li>
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
        <div class="design">
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
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
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






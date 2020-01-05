<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present Winery</title>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div>
    <header>
     <div class="menubox" onclick="myFunction(this)">
        <div class="menu1"></div>
        <div class="menu2"></div>
        <div class="menu3"></div>
     </div>
     <div>
     </div>
        <img src="images/01.png" alt="winery">
        <div id="three-container"></div>
    </header>
    <section>
        <div class="ns-block">
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
                <div class="pd-item clear-both " style="text-align: right;">
                    <span style="font-size:7rem;position:absolute;font-weight:bold;left:15%;opacity:0.2;z-index:-1;font-family:Arial Black;">BEST<br>SELLER</span>
                    <div class="slider-for">
                    <div><img src="images/01.png" width="100"></div>
                    <div><img src="images/newribbon.png" width="100"></div>
                    <div><img src="images/redwine.png" width="100"></div>
                    </div>
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
                </div>
                <!-- <div class=""><img src="images/01.png" width="100"></div> -->
                <div class="slider-nav clear-both">
                    <div><img src="images/01.png" width="100"></div>
                    <div><img src="images/newribbon.png" width="100"></div>
                    <div><img src="images/redwine.png" width="100"></div>
                    
                </div>
                
            </div>
        </div>

    </section>
    <footer></footer>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true,
  autoplay:true,
});
  </script>

<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>

</body>
</html>






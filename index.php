<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present Winery</title>
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
    </header>
    <section>
        <div class="news">
            <div class="title">
            <img class="titleimg" src="images/title.png" alt="news">
            <span>最 新 消 息</span>
            </div>
            <div class="newscontent">
                <div class="newsimg">
                    <img src="images/02.jpg" width="500">
                </div>
                <div class="newstext">
                    <p>酒瓶子一年一度最大盛事，大福箱開始預購！越是不景氣，越要反向操作，去年大福箱獎品總額15萬，今年直接拉到20萬，老樣子，大家開心最重要！</p>
                    
                </div>
                <div class="newsbg"></div>
            </div>
        </div>
        <div class="product clear-both">
            <div class="title">
                <img class="titleimg" src="images/title.png" alt="">
                <span>熱 銷 商 品</span>
            </div>


        </div>

    </section>
    <footer></footer>
</div>

<script>
function myFunction(x) {
  x.classList.toggle("change");
}
</script>
</body>
</html>
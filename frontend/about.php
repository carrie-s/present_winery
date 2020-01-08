<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present Winery</title>
    <?php include_once("template/head_file.php");?>
</head>
<body>
<!-- <div> -->
<?php include_once("template/navbar.php");?>

<header style="background-image: url('../images/ab.jpg');">
<div class="toolbar">
    <div class="toolbar-center">
        <div class="customer">
        <a>會員登入</a> | <a>加入會員</a> | <a>聯絡我們</a>
        </div>
    </div>
</div>
<div class="web-logo">
    <div class="logo-block">
        <img src="../images/logo-150.png" alt="logo">
    </div>
</div>
<div id="title-center">
<div class="pagetitle">
    <h2>關於我們</h2>

    <!-- breadcrumb -->
<section class="header">

  <div class="logo-and-nav-wrap">
			
      <!-- <div class="logo-wrap">
				<a href="#/global"></a>
			</div> -->
      
			<div class="site-nav-wrap">
         <nav class="nav-breadcrumb">
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="../index.php">HOME</a></span>
						</div>
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="about.php">ABOUT</a></span>
						</div>
						
				</nav>
			</div>
		</div>
    </section>
    <!-- breadcrumb end -->
    </div>
    </div>
</header>
    <div class="position">
        <!-- <div class="title">
                <img class="titleimg" src="../images/about.png" alt="about">
        </div> -->
        <section class="intro">
            <div class="left">
                <div>
                <p class="">
                本公司主要進口優質且價格合理的德國高級葡萄酒．由德國當地酒莊的專業人士精心挑選及推薦而引進，以德國萊茵黑森產區為主，等級有德國法定地區葡萄酒(QbA)及最優質葡萄酒(QmP)。本公司進口之葡萄酒採用低溫方式保存儲藏，品質值得信賴保證．</p><br>
                <p class="">
                我們提供各種的紅酒.白酒.冰酒及貴腐酒等，口味從較不甜到香甜都有，在年節送禮方面我們特別設計精美的禮盒搭配各種的萄葡酒，更襯托您的高品味與對好東西的堅持。海燕葡萄酒非常適合個人飲用或公司團體年節贈禮的最佳選擇，有需要者非常歡迎洽詢本公司。</p><br>

                <p class="">
                我們會將葡萄酒知識於網路上與大家一起分享，並提供更豐富的資訊與活動，和各位同好一起認識及享受葡萄酒，以期服務更多對葡萄酒有興趣的朋友。
                </p>

                </div>
            </div>
            <div class="slider">
                <ul>
                <li style="background-image:url('../images/abn(7).jpg');">
                </li>
                <li style="background-image:url('../images/abn(3).jpg')">
                </li>
                <li style="background-image:url('../images/abn(5).jpg')">
                </li>
                </ul>
                <ul>
                <nav class="dot">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </nav>
                </ul>
            </div>
        </section>
        <div class="about">
            <div class="ab-item">
				<!-- <p class="">
                本公司主要進口優質且價格合理的德國高級葡萄酒．由德國當地酒莊的專業人士精心挑選及推薦而引進，以德國萊茵黑森產區為主，等級有德國法定地區葡萄酒(QbA)及最優質葡萄酒(QmP)。本公司進口之葡萄酒採用低溫方式保存儲藏，品質值得信賴保證．

                我們提供各種的紅酒.白酒.冰酒及貴腐酒等，口味從較不甜到香甜都有，在年節送禮方面我們特別設計精美的禮盒搭配各種的萄葡酒，更襯托您的高品味與對好東西的堅持。海燕葡萄酒非常適合個人飲用或公司團體年節贈禮的最佳選擇，有需要者非常歡迎洽詢本公司。

                我們會將葡萄酒知識於網路上與大家一起分享，並提供更豐富的資訊與活動，和各位同好一起認識及享受葡萄酒，以期服務更多對葡萄酒有興趣的朋友。
                </p> -->
            </div>
        </div>
    </div>


    <?php include_once("template/footer.php");?>
    <!-- </div> -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
    </script>
</body>
</html>
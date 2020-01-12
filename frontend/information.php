<?php
session_start();
?>
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

<header  data-aos="fade-down" style="background-image: url('../images/header.jpg');">
<?php include_once("template/navbar.php");?>

<div id="title-center" data-aos="fade-down">
<div class="pagetitle">
    <h2>資料來源</h2>

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
                            <span class="breadcrumb"><a href="../index.php">首頁</a></span>
						</div>
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="information.php">資料來源</a></span>
						</div>
						
				</nav>
			</div>
		</div>
    </section>
    <!-- breadcrumb end -->
</div>
</div>
</header>
<div class="news-container">
    <div style="line-height:3rem;text-align:center;">
    <h4>網站圖片來源：</h4><a href="https://unsplash.com/">Unsplash</a><br>
    <h4>最新消息-資料來源(圖+文)：</h4><a href="http://www.winehouse.com.tw/">大宅酒窖</a><br>
    <h4>關於我們-文字來源：</h4><a href="http://www.hiyen.com.tw/">海燕葡萄酒</a><br><br>

<h4>產品資料來源(圖+文)：</h4>
<ul>
    <li><a href="http://www.hiyen.com.tw/">海燕葡萄酒</a></li>
    <li><a href="http://www.drfrankwines.com/">Dr. Frank Wines</a></li>
</ul>
</div>
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
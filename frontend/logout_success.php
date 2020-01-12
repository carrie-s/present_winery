<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="3; url=../index.php">
    <title>Present Winery</title>
    <?php include_once("template/head_file.php");?>
</head>
<body>

<header  data-aos="fade-down" style="background-image: url('../images/header.jpg');">
<?php include_once("template/navbar.php");?>

<div id="title-center" data-aos="fade-down">
<div class="pagetitle">
    <h2>登出成功</h2>

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
                            <span class="breadcrumb"><a href="logout-success.php">登出成功</a></span>
						</div>
						
				</nav>
			</div>
		</div>
    </section>
    <!-- breadcrumb end -->
</div>
</div>
</header>
<div class="news-container" >
    <div class="centerbox">
        <h2>登出成功</h2>
        <p>3秒後將跳轉回首頁</p><p>或可點選按鈕至產品專區進行選購</p>       
        <a href="productlist.php"><button class="btn draw-border"><i class="fa fa-home"></i> 瀏覽產品</button></a>
    </div>
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
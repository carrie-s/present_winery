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
<?php include_once("template/navbar.php");?>
<header style="background-image: url('../images/ab-1.jpg');">
<div class="toolbar">
    <div class="toolbar-center">
        <div class="customer">
        <a>會員登入</a> | <a href="register.php">加入會員</a> | <a href="contact.php">聯絡我們</a>
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
    <h2>產品</h2>

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
                            <span class="breadcrumb"><a href="productlist.php">PRODUCT</a></span>
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

      <div class="filter">
          <ul class="sidebar">
          <h4>產品分類</h4>
              <li><a href="">德國系列</a></li>
              <li><a href="">法國系列</a></li>
              <li><a href="">義大利系列</a></li>
          </ul>
      </div> 
      <div class="productlist">
        <div class="product-left">
          <img src="../images/01.png" alt="">
        </div>
        <div class="product-right">
          <h1>酒的名字</h1>
          <p>資訊一</p>
          <p>資訊二</p>
        </div>
        <div class="clear-both"></div>
      <div class="product-intro">
        <h2>商品介紹</h2>
        這裡是產品描述與更多資訊
        相關資訊
      </div>
      </div>
      
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
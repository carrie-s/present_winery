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
<?php include_once("template/navbar.php");?>.
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
                            <span class="breadcrumb"><a href="contact.php">CONTACT</a></span>
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
        <div class="product-outer">
          <div class="product">
            <div class="product-img">
              <a href="product.php">              
                <img src="../images/01.png" alt="">
              </a>
            </div>
            <div class="product-content">
              <h2>文章標題</h2>    
              <p>文章內容在這裡</p>
              <button>加入購物車</button>
            </div>
            <div class="clear-both"></div>
          </div>
        </div>
        <div class="product-outer">
          <div class="product">
            <div class="product-img">
              <img src="../images/01.png" alt="">
            </div>
            <div class="product-content">
              <h2>文章標題</h2>    
              <p>文章內容在這裡</p>
            </div>
          </div>
        </div>
        <div class="product-outer">
          <div class="product">
            <div class="product-img">
              <img src="../images/01.png" alt="">
            </div>
            <div class="product-content">
              <h2>文章標題</h2>    
              <p>文章內容在這裡</p>
            </div>
          </div>
        </div>
        <div class="product-outer">
          <div class="product">
            <div class="product-img">
              <img src="../images/01.png" alt="">
            </div>
            <div class="product-content">
              <h2>文章標題</h2>    
              <p>文章內容在這裡</p>
            </div>
          </div>
        </div>
      </div>
        
          
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present Winery</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic">
    <?php include_once("template/head_file.php");?>
    
</head>
<body>
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
    <h2>產品類別</h2>

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
<div class="product_category">
  <div class="category" style="background-image:url('../images/germany1.jpg');">
  <div class="center-y">
  <a href="productfilter.php">
    <h1>GERMANY</h1>
    <h2>德國系列</h2>
    </a>
    </div>
  </div>

  <div class="category" style="background-image:url('../images/spain.jpg');">
  <div class="center-y">
  <a href="productfilter.php">
    <h1>SPAIN</h1>
  <h2>西班牙系列</h2>
</a>
  </div>
  </div>
  <div class="category" style="background-image:url('../images/france2.jpg');">
  <div class="center-y">
  <a href="productfilter.php">
  <h1>FRANCE</h1>
  <h2>法國系列</h2>
  </a>
  </div>
  </div>
  <div class="category" style="background-image:url('../images/italy1.jpg');">
  <div class="center-y">
  <a href="productfilter.php">
  <h1>ITALY</h1>
  <h2>義大利系列</h2>
  </a>
  </div>
  </div>
  <button>看全部產品 →</button>
</div>

<?php include_once("template/footer.php");?>
</body>
</html>
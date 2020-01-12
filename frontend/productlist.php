<?php 
session_start();
require_once("../function/connection.php");
$query = $db ->query("SELECT * FROM product_categories");
$category=$query ->fetchAll(PDO::FETCH_ASSOC);
// print_r($category);
?>
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

<header  data-aos="fade-down" style="background-image: url('../images/header.jpg');">
<?php include_once("template/navbar.php");?>

<div id="title-center" data-aos="fade-down">
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
                            <span class="breadcrumb"><a href="../index.php">首頁</a></span>
						</div>
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="productlist.php">產品系列</a></span>
						</div>
						
				</nav>
			</div>
		</div>
    </section>
    <!-- breadcrumb end -->
</div>
</div>
</header>
<div class="product_category" >
<div class="text-right">
  <a href="productfilter.php"><button class="btn draw-border">看全部產品 →</button></a>
  </div>
  <div class="category" style="background-image:url('../images/germany1.jpg');">
  <div class="center-y">
  <a href="productfilter.php?categoryID=<?php echo $category[0]['product_categoryID'] ?>">
    <h1>GERMANY</h1>
    <h2>德國系列</h2>
    </a>
    </div>
  </div>

  <div class="category" style="background-image:url('../images/spain.jpg');">
  <div class="center-y">
  <a href="productfilter.php?categoryID=<?php echo $category[1]['product_categoryID'] ?>">
    <h1>SPAIN</h1>
  <h2>西班牙系列</h2>
</a>
  </div>
  </div>
  <div class="category" style="background-image:url('../images/france2.jpg');">
  <div class="center-y">
  <a href="productfilter.php?categoryID=<?php echo $category[2]['product_categoryID'] ?>">
  <h1>FRANCE</h1>
  <h2>法國系列</h2>
  </a>
  </div>
  </div>
  <div class="category" style="background-image:url('../images/italy1.jpg');">
  <div class="center-y">
  <a href="productfilter.php?categoryID=<?php echo $category[3]['product_categoryID'] ?>">
  <h1>ITALY</h1>
  <h2>義大利系列</h2>
  </a>
  </div>
  </div>
  
</div>

<?php include_once("template/footer.php");?>
</body>
</html>
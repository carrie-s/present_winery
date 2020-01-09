<?php 
session_start();
require_once("../function/connection.php");
$query = $db ->query ("SELECT * FROM products WHERE productID=".$_GET["productID"]) ;
$one_product=$query ->fetch(PDO::FETCH_ASSOC);
// $query1 = $db ->query("SELECT category FROM product_categories JOIN products ON product_categories.product_categoryID=products.product_categoryID WHERE products.productID=".$_GET["productID"]);
// $category_name=$query1 ->fetch(PDO::FETCH_ASSOC);
$query1 = $db ->query("SELECT * FROM product_categories");
$category=$query1 ->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Present Winery</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <?php include_once("template/head_file.php");?>
</head>
<body>
<?php include_once("template/navbar.php");?>
<header  data-aos="fade-down" style="background-image: url('../images/ab-1.jpg');">
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
  <div id="title-center" data-aos="fade-down">
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
              <li><a href="productfilter.php?categoryID=<?php echo $category[0]['product_categoryID'] ?>">德國系列</a></li>
              <li><a href="">法國系列</a></li>
              <li><a href="">義大利系列</a></li>
          </ul>
      </div> 
      <div class="productlist">
      <form action="cart/add_cart.php" method="post">
        <div class="product-left">
          <img src="../uploads/products/<?php echo $one_product["picture"]; ?>" alt="<?php echo $one_product["name"]; ?>">
        </div>
        <div class="product-right">

          <h1><?php echo $one_product["name"]; ?></h1>

          <p>年份：<?php echo $one_product["vintage"]; ?></p>
          <p>品種：<?php echo $one_product["varietal"]; ?></p>
          <p>容量：<?php echo $one_product["bottle_size"]; ?></p>
          <p>酸度：<?php echo $one_product["acid"]; ?></p>
          <p>PH值<?php echo $one_product["ph"]; ?></p>
          <p>酒精濃度：<?php echo $one_product["alcohol"]; ?></p>
          <p>殘留糖量：<?php echo $one_product["residual_sugar"]; ?></p>
          <p>$NT <?php echo $one_product["price"]; ?></p>
          <p>數量：<input min="1" type="number" name="quantity" value="1"></p>

          <input type="hidden" name="pic" value="<?php echo $one_product["picture"]; ?>">
          <input type="hidden" name="product_name" value="<?php echo $one_product["name"]; ?>">
          <input type="hidden" name="price" value="<?php echo $one_product["price"]; ?>">
          <input type="hidden" name="productID" value="<?php echo $one_product["productID"]; ?>">
          <input type="hidden" name="categoryID" value="<?php echo $one_product["product_categoryID"]; ?>">
          
          <button class="btn draw-border">加入購物車</button>
        </div>
      </form>
        <div class="clear-both"></div>
      <div class="product-intro">
        <h2>商品介紹</h2>
        <?php echo $one_product["description"]; ?>
      </div>
      </div>
      
</div>

<?php include_once("template/footer.php");?>
<script src="../js/bootstrap.min.js"></script>
<div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="info" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">訊息</h4>
            </div>
            <div class="modal-body text-center">
                <p class="text-center text-muted changeword">成功更新數量!</p>
                <button type="button" class="btn btn-primary" data-dismiss="modal">確定</button>
            </div>
        </div>
    </div>
</div>      

<?php if(isset($_GET['Existed']) && $_GET["Existed"] == "true"){ ?>
    <script>
    $(function(){
        $(".changeword").html("此商品已存在購物車，請至「我的購物車」修改數量。");
        $("#info-modal").modal();
    });
    </script>
<?php }else if(isset($_GET['Existed']) && $_GET["Existed"] == "false"){ ?>
    <script>
    $(function(){
        $(".changeword").html("成功加入購物車!");
        $("#info-modal").modal();
        setTimeout(function(){
           $("#info-modal").modal("hide");
        }, 2000);
    });
    </script>

<?php } ?>
</body>
</html>
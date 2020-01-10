<?php 
session_start();
require_once("../function/connection.php");
if (isset($_GET["categoryID"]) && $_GET["categoryID"] != null){
$query = $db ->query("SELECT * FROM products WHERE product_categoryID=".$_GET["categoryID"]." ORDER BY created_at DESC");
$products=$query ->fetchAll(PDO::FETCH_ASSOC);
}else{
$query = $db ->query("SELECT * FROM products ORDER BY created_at DESC");
$products=$query ->fetchAll(PDO::FETCH_ASSOC);
}
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
    <?php include_once("template/head_file.php");?>
</head>
<body>
<?php include_once("template/navbar.php");?>.
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
              <li><a href="productfilter.php?categoryID=<?php echo $category[0]['product_categoryID'] ?>">德國系列</a></li>
              <li><a href="">法國系列</a></li>
              <li><a href="">義大利系列</a></li>
          </ul>
      </div> 
      <div class="productlist">
      <?php foreach($products as $one_product){ ?>
        <div class="product-outer">
        <form action="cart/add_cart.php" method="post">
            <div class="product">
              <div class="product-img">
                <a href="product.php?categoryID=<?php echo $one_product['product_categoryID'] ?>&productID=<?php echo $one_product['productID'] ?>">              
                  <img src="../uploads/products/<?php echo $one_product["picture"]; ?>" alt="<?php echo $one_product["name"]; ?>">
                </a>
              </div>
              <div class="product-content">
                <h2><?php echo $one_product["name"]; ?></h2>    
                <h3><?php echo $one_product["vintage"]; ?></h3>

                <input type="hidden" name="pic" value="<?php echo $one_product["picture"]; ?>">
                <input type="hidden" name="product_name" value="<?php echo $one_product["name"]; ?>">
                <input type="hidden" name="price" value="<?php echo $one_product["price"]; ?>">
                <input type="hidden" name="productID" value="<?php echo $one_product["productID"]; ?>">
                <input type="hidden" name="categoryID" value="<?php echo $one_product["product_categoryID"]; ?>">
                <input type="hidden" name="vintage" value="<?php echo $one_product["vintage"]; ?>">
                <input type="hidden" name="quantity" value="1">
                <button type="submit" class="btn draw-border">加入購物車</button>
              </div>
            </div>
        </form>
          <div class="clear-both"></div>
        </div>
        <?php } ?>
        
        <!-- <div class="product-outer">
          <div class="product">
            <div class="product-img">
              <img src="../images/01.png" alt="">
            </div>
            <div class="product-content">
              <h2>文章標題</h2>    
              <p>文章內容在這裡</p>
            </div>
          </div>
          <div class="clear-both"></div>
        </div> -->
        
          
</div>
<?php include_once("template/footer.php");?>

<div class="modal fade" id="info-modal" tabindex="-1" role="dialog" aria-labelledby="info" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">訊息</h4>
            </div>
            <div class="modal-body text-center">
                <p class="text-center text-muted changeword">成功更新數量!</p>
                <button style="background:#800020;" type="button" class="btn btn-primary" data-dismiss="modal">確定</button>
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
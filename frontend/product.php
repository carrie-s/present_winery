<?php 
session_start();
require_once("../function/connection.php");
$query = $db ->query ("SELECT * FROM products WHERE productID=".$_GET["productID"]) ;
$one_product=$query ->fetch(PDO::FETCH_ASSOC);
// $query1 = $db ->query("SELECT category FROM product_categories JOIN products ON product_categories.product_categoryID=products.product_categoryID WHERE products.productID=".$_GET["productID"]);
// $category_name=$query1 ->fetch(PDO::FETCH_ASSOC);
$query1 = $db ->query("SELECT * FROM product_categories");
$category=$query1 ->fetchAll(PDO::FETCH_ASSOC);
$query2 = $db ->query("SELECT * FROM products WHERE productID !=".$_GET["productID"]." limit 6");
$other_product=$query2 ->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Present Winery</title>

  <?php include_once("template/head_file.php");?>
  <!-- <link rel="stylesheet" href="../slick/slick-theme.css"> -->
  <link rel="stylesheet" href="../slick/slick.css">
</head>

<body>
  <header data-aos="fade-down" style="background-image: url('../images/header.jpg');">
    <?php include_once("template/navbar.php");?>

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
                  <span class="breadcrumb"><a href="../index.php">首頁</a></span>
                </div>
                <div class="single-breadcrumb-wrap">
                  <span class="sep"><i class="fa fa-caret-right"></i></span>
                  <span class="breadcrumb"><a href="productlist.php">產品系列</a></span>
                </div>
                <div class="single-breadcrumb-wrap">
                  <span class="sep"><i class="fa fa-caret-right"></i></span>
                  <span class="breadcrumb"><a href="productfilter.php">產品列表</a></span>
                </div>
                <div class="single-breadcrumb-wrap">
                  <span class="sep"><i class="fa fa-caret-right"></i></span>
                  <span class="breadcrumb"><a href="product.php">產品</a></span>
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
    <div class="menu-dwon">產品分類 <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
    <div class="filter bar-small">
      <ul class="sidebar">
        <li><a href="productfilter.php?categoryID=<?php echo $category[0]['product_categoryID'] ?>">德國系列</a></li>
        <li><a href="productfilter.php?categoryID=<?php echo $category[1]['product_categoryID'] ?>">西班牙系列</a></li>
        <li><a href="productfilter.php?categoryID=<?php echo $category[2]['product_categoryID'] ?>">法國系列</a></li>
        <li><a href="productfilter.php?categoryID=<?php echo $category[3]['product_categoryID'] ?>">義大利系列</a></li>
      </ul>
    </div>
    <div class="productlist list-big">
      <form id="pr-tb" action="cart/add_cart.php" method="post">
        <div class="product-left">
          <img src="../uploads/products/<?php echo $one_product["picture"]; ?>"
            alt="<?php echo $one_product["name"]; ?>">
        </div>
        <div class="product-right">

          <h1><?php echo $one_product["name"]; ?></h1>

          <?php if ($one_product["vintage"] != null){ ?>
          <p>年份：<?php echo $one_product["vintage"]; ?></p>
          <?php } ?>
          <?php if ($one_product["varietal"] != null){ ?>
          <p>品種：<?php echo $one_product["varietal"]; ?></p>
          <?php } ?>
          <?php if ($one_product["bottle_size"] != null){ ?>
          <p>容量：<?php echo $one_product["bottle_size"]; ?></p>
          <?php } ?>
          <?php if ($one_product["acid"] != null){ ?>
          <p>酸度：<?php echo $one_product["acid"]; ?></p>
          <?php } ?>
          <?php if ($one_product["ph"] != null){ ?>
          <p>PH值<?php echo $one_product["ph"]; ?></p>
          <?php } ?>
          <?php if ($one_product["alcohol"] != null){ ?>
          <p>酒精濃度：<?php echo $one_product["alcohol"]; ?></p>
          <?php } ?>
          <?php if ($one_product["residual_sugar"] != null){ ?>
          <p>殘留糖量：<?php echo $one_product["residual_sugar"]; ?></p>
          <?php } ?>


          <p>數量：<input min="1" type="number" name="quantity" value="1"></p>
          <div class="price">
            <h2>$NT <?php echo $one_product["price"]; ?></h2>
          </div>
          <input type="hidden" name="pic" value="<?php echo $one_product["picture"]; ?>">
          <input type="hidden" name="product_name" value="<?php echo $one_product["name"]; ?>">
          <input type="hidden" name="price" value="<?php echo $one_product["price"]; ?>">
          <input type="hidden" name="productID" value="<?php echo $one_product["productID"]; ?>">
          <input type="hidden" name="categoryID" value="<?php echo $one_product["product_categoryID"]; ?>">
          <input type="hidden" name="vintage" value="<?php echo $one_product["vintage"]; ?>">
          <button type="submit" class="btn draw-border">加入購物車</button>
        </div>
      </form>
      <div class="clear-both"></div>
      <div class="product-intro">
        <h2>商品介紹</h2>
        <?php echo $one_product["description"]; ?>
      </div>
      <div class="other-pr">
      <h3 class="other-product">其他產品</h3>
    <div class="slick-pr responsive">
    <?php foreach($other_product as $data){ ?>
      <div>
        <a href="product.php?categoryID=<?php echo $data['product_categoryID'] ?>&productID=<?php echo $data['productID'] ?>">
        <img src="../uploads/products/<?php echo $data["picture"]; ?>" alt="<?php echo $data["name"]; ?>">
        </a>
      </div>
<?php } ?>
    </div>
    </div>
    </div>

  </div>

  <?php include_once("template/footer.php");?>
  <script src="../slick/slick.js"></script>

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
<script>
$('.responsive').slick({
  centerMode: true,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});</script>
  <?php if(isset($_GET['Existed']) && $_GET["Existed"] == "true"){ ?>
  <script>
    $(function () {
      $(".changeword").html("此商品已存在購物車，請至「我的購物車」修改數量。");
      $("#info-modal").modal();
    });
  </script>
  <?php }else if(isset($_GET['Existed']) && $_GET["Existed"] == "false"){ ?>
  <script>
    $(function () {
      $(".changeword").html("成功加入購物車!");
      $("#info-modal").modal();
      setTimeout(function () {
        $("#info-modal").modal("hide");
      }, 2000);
    });
  </script>

  <?php } ?>
  <script>
    $(function () {
      $(".menu-dwon").click(function () {
        $(".filter").slideToggle("slow");
      });
    });
  </script>
</body>

</html>
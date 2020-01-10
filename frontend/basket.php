<?php
session_start();
require_once("../function/connection.php");

$is_updated = "false";
if(isset($_POST["quantity"]) && $_POST["quantity"] != null){
    for($i=0; $i <count($_SESSION["cart"]); $i++){
        $_SESSION['cart'][$i]["quantity"] = $_POST["quantity"][$i];
    }
    $is_updated = "true";
}

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
<?php include_once("template/navbar.php");?>

<header  data-aos="fade-down" style="background-image: url('../images/abn(4).jpg');">
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
    <h2>購物車</h2>

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
                            <span class="breadcrumb"><a href="basket.php">購物車</a></span>
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
<div class="basket">
    <form method="post" action="basket.php">
        <h2>我的購物清單</h2>
        <?php if(isset($_SESSION['cart']) && $_SESSION['cart'] != null){ ?>
        <p >目前有<?php echo count($_SESSION['cart']); ?>個未結帳商品</p>
        <table width="100%" style="text-align: left;" >
            <tr>
                <th>圖片</th>
                <th>名稱</th>
                <th>數量</th>
                <th>價格</th>
                <th>小計</th>
                <th></th>
            </tr>
            <?php $total_price = 0; ?>
            <?php for($i=0; $i<count($_SESSION['cart']); $i++){ ?>
            <tr>
                <td class="gray">
                    <img src='../uploads/products/<?php echo $_SESSION['cart'][$i]["pic"]; ?>' height="250" alt="<?php echo $_SESSION['cart'][$i]["product_name"]; ?>">
                </td>
                <td class="gray">
                    <h3><?php echo $_SESSION['cart'][$i]["product_name"]; ?>
                    </h3>年份:<?php echo $_SESSION['cart'][$i]["vintage"]; ?>
                </td>
                <td class="gray">
                    <input type="number" min="1" value="<?php echo $_SESSION['cart'][$i]["quantity"]; ?>" name="quantity[]" style="width:20%">
                </td>
                <td class="gray">
                    $NT <?php echo $_SESSION['cart'][$i]["price"]; ?>
                </td>
                <td class="gray">
                    $NT <?php $sub_total=$_SESSION['cart'][$i]["quantity"]* $_SESSION['cart'][$i]["price"]; echo $sub_total; ?>
                </td>
                <td class="gray">
                    <a href="cart/cart_delete.php?index=<?php echo $i; ?>">
                        <i class="fa fa-trash-o fa-2x" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            <?php $total_price += $sub_total; }?>
            <?php $_SESSION["order"]['sub_total']=$total_price; ?>
            <!-- <tr>
                <td class="gray"><img src='../images/01.png' height="250"></td>
                <td class="gray"><h3>商品名稱這裡</h3>年份:1995</td>
                <td class="gray"><input type="number" style="width:20%"></td>
                <td class="gray">$NT 2600</td>
                <td class="gray">$NT 13000</td>
                <td class="gray"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></td>
            </tr> -->
            <tr>
                <td colspan="3"></td>
                <td ><h2>總金額</h2></td>
                <td colspan="2"><h2>$NT <?php echo $total_price; ?></h2></td>
            </tr>
        </table>
  
        <div class="text-right">
            <a href="productlist.php">
                <button type="button" class="btn draw-border">
                    <i class="fa fa-chevron-left"></i> 繼續購物 
                </button>
            </a>
            <button type="submit" class="btn draw-border">
                <i class="fa fa-refresh"></i> 更新購物車 
            </button>
            <?php if(isset($_SESSION['member']) && $_SESSION['member'] != null ){ ?>
            <a href="check.php">
                <button type="button" class="btn draw-border">
                    結帳去 <i class="fa fa-chevron-right"></i></button>
            </a>
            <?php }else{ ?>
            <a href="register.php?url=basket">
                <button type="button" class="btn draw-border">
                    結帳去 <i class="fa fa-chevron-right"></i></button>
            </a>
            <?php } ?>
        </div>
    </form>
    <?php } else { ?>  
        <br>
        <h4>目前購物車沒有商品，請至<a href="productlist.php">產品專區</a>進行購物。</h4>  
        <a href="productlist.php"><button type="button" class="btn draw-border">購物去</button></a>       
    <?php } ?>
</div>
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
                <p class="text-center text-muted changeword">更新成功!</p>
                <button style="background:#800020;" type="button" class="btn btn-primary" data-dismiss="modal">確定</button>
            </div>
        </div>
    </div>
</div>      
 <?php if($is_updated == "true"){ ?>
    <script>
    $(function(){
        $("#info-modal").modal();
        setTimeout(() => {
            $("#info-modal").modal("hide");
        }, 2000);
    });
    </script>
 <?php $is_updated = "false"; } ?>

 <?php if(isset($_GET["Del"]) && $_GET['Del'] == 'true'){ ?>
    <script>
    $(function(){
        $(".changeword").html("已成功移除此商品！");
        $("#info-modal").modal();
        setTimeout(() => {
            $("#info-modal").modal("hide");
        }, 2000);
    });
    </script>
 <?php  } ?>
</body>
</html>
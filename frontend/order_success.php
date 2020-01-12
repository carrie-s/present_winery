<?php
session_start();
require_once("is_login.php");
require_once("../function/connection.php");
if($_POST['delivery'] == 100){
    $receive_method ="宅配";
}elseif($_POST['delivery'] == 150){
    $receive_method ="超商取貨付款";
}

$sql="INSERT INTO customer_orders (memberID, status, order_no, order_date, name, mobile, zipcode, county, district, address, total, shipping, pay_method, receive_method, created_at) VALUES (:memberID, :status, :order_no, :order_date, :name, :mobile, :zipcode, :county, :district, :address, :total, :shipping, :pay_method, :receive_method, :created_at)";
$sth = $db ->prepare($sql);
$sth ->bindparam(":memberID",$_SESSION['member']['memberID'],PDO::PARAM_INT);
$sth ->bindparam(":status",$_POST['status'],PDO::PARAM_INT);
$sth ->bindparam(":order_no",$_POST['order_no'],PDO::PARAM_STR);
$sth ->bindparam(":order_date",$_POST['order_date'],PDO::PARAM_STR);
$sth ->bindparam(":name",$_POST['name'],PDO::PARAM_STR);
$sth ->bindparam(":mobile",$_POST['mobile'],PDO::PARAM_STR);
$sth ->bindparam(":zipcode",$_POST['zipcode'],PDO::PARAM_STR);
$sth ->bindparam(":county",$_POST['county'],PDO::PARAM_STR);
$sth ->bindparam(":district",$_POST['district'],PDO::PARAM_STR);
$sth ->bindparam(":address",$_POST['address'],PDO::PARAM_STR);
$sth ->bindparam(":total",$_SESSION['order']['sub_total'],PDO::PARAM_STR);
$sth ->bindparam(":shipping",$_POST['delivery'],PDO::PARAM_STR);
$sth ->bindparam(":pay_method",$_POST['payment'],PDO::PARAM_STR);
$sth ->bindparam(":receive_method",$receive_method,PDO::PARAM_STR);
$sth ->bindparam(":created_at",$_POST['created_at'],PDO::PARAM_STR);
$sth->execute();

$query=$db->query("SELECT * FROM customer_orders ORDER BY created_at DESC");
$latest=$query->fetch(PDO::FETCH_ASSOC);

for($i=0; $i<count($_SESSION['cart']); $i++){
$sql2="INSERT INTO order_details (customer_orderID, productID, picture, name, price, quantity, created_at) VALUES (:customer_orderID, :productID, :picture, :name, :price, :quantity, :created_at)";
$sth2 = $db ->prepare($sql2);
$sth2 ->bindparam(":customer_orderID",$latest['customer_orderID'],PDO::PARAM_INT);
$sth2 ->bindparam(":productID",$_SESSION['cart'][$i]['productID'],PDO::PARAM_INT);
$sth2 ->bindparam(":picture",$_SESSION['cart'][$i]['pic'],PDO::PARAM_STR);
$sth2 ->bindparam(":name",$_SESSION['cart'][$i]['product_name'],PDO::PARAM_STR);
$sth2 ->bindparam(":price",$_SESSION['cart'][$i]['price'],PDO::PARAM_STR);
$sth2 ->bindparam(":quantity",$_SESSION['cart'][$i]['quantity'],PDO::PARAM_STR);
$sth2 ->bindparam(":created_at",$latest['created_at'],PDO::PARAM_STR);
$sth2->execute();

}
unset($_SESSION['cart']);

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
    <h2>結帳成功</h2>

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
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="check.php">結帳流程</a></span>
                        </div>
                        <div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="order-success.php">結帳成功</a></span>
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
        <h2>結帳成功</h2>
        
        <p>您已成功完成購物，<br>您可前往<a href="customer-orders.php">我的訂單</a>查詢出貨進度或<a href="productlist.php">繼續購物</a>。</p>
        <p>PRESENT WINERY感謝您的支持。</p>
    </div>
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
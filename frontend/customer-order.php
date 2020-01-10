<?php
session_start();
require_once("is_login.php");
require_once("../function/connection.php");
$query2=$db->query("SELECT * FROM customer_orders WHERE customer_orderID=".$_GET['customer_orderID']);
$order=$query2->fetch(PDO::FETCH_ASSOC);
$query=$db->query("SELECT * FROM order_details WHERE customer_orderID=".$_GET['customer_orderID']);
$order_details=$query->fetchAll(PDO::FETCH_ASSOC);
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

<header  data-aos="fade-down" style="background-image: url('../images/abn(4)-1.jpg');">
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
    <h2>會員專區</h2>

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
                            <span class="breadcrumb"><a href="customer-orders.php">我的訂單</a></span>
                        </div>
                        <div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="customer-order.php">訂單</a></span>
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
                <li><a href="customer-account.php">我的基本資料</a></li>
                <li><a href="customer-orders.php">我的訂單</a></li>
                <li><a href="logout.php">登出</a></li>
            </ul>
    </div>
    <div class="productlist">
        <div class="margin-bt">
            <h1>訂單 <?php echo $_GET['no'];?></h1>
            <p>此訂單於<strong> <?php  echo $order['order_date'];?></strong>訂購，目前狀態為：
                 <?php  if ($order['status']==0){ ?>
                <td><strong>待付款</strong>
                 <?php  }elseif($order['status']==1){ ?>
                <strong>交易完成</strong>
                 <?php  }elseif($order['status']==2){ ?>
                <strong>運送中</strong>
                 <?php  }elseif($order['status']==3){ ?>
                <strong>出貨中</strong>
                 <?php  }elseif($order['status']==99){ ?>
                <strong>取消訂單</strong>
                 <?php  } ?>.</p>
            <p>若有任何問題請至 <a href="contact.php">聯絡我們</a>填寫表單.</p>
            <a href="customer-orders.php"><button type="button" class="btn draw-border">回上一頁</button></a>        
            <div class="block">
                <table width="100%">
                    <thead>
                        <tr>
                            <th>產品圖片</th>
                            <th>產品名稱</th>
                            <th>數量</th>
                            <th>單價</th>
                            <th>小計</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php $total_price=0; ?>
        
                         <?php foreach($order_details as $order_detail){?>
                            
                            
                        
                        <tr>
                            <td class="gray">
                                <img height="200" src="../uploads/products/<?php  echo $order_detail['picture'];?>" alt=" <?php // echo $order_detail['name'];?>">
                            </td>
                            <td class="gray"> <?php echo $order_detail['name'];?>
                            </td>
                            <td class="gray"> <?php echo $order_detail['quantity'];?></td>
                            <td class="gray">$NT <?php echo $order_detail['price'];?></td>
                            <td class="gray">$NT <?php $sub_total=$order_detail['quantity']*$order_detail['price']; echo $sub_total ;?></td>
                        </tr>
                         <?php  $total_price+= $sub_total; ?>
                         <?php  } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-right">總金額(未含運)</td>
                            <td>$NT  <?php  echo $total_price;?></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right">運費</td>
                            <td>$NT  <?php  echo $order['shipping'];?></td>
                        </tr>
                        <tr>
                            <td colspan="4" class="text-right">總金額</td>
                            <td>$NT  <?php  echo $total_price+$order['shipping'];?></td>
                        </tr>
                    </tfoot>
                </table>
                <table width="100%">
                    <h2>收件人資料</h2>
                    <thead>
                        <tr>
                        <th>姓名</th>
                        <th>聯絡電話</th>
                        <th>收件地址</th>
                        <th>運送方式</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="gray"> <?php  echo $order['name'];?></td>
                        <td class="gray"> <?php  echo $order['mobile'];?></td>
                        <td class="gray"> <?php  echo $order['address'];?></td>
                        <td class="gray"> <?php  echo $order['receive_method'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>

</div>
 <?php include_once("template/footer.php");?>
</body>
</html>
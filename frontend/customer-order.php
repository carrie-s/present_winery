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
     <style>
    table.two-axis tr td:first-of-type {
  background: transparent;
}

@media only screen and (max-width: 568px) {
  table.two-axis tr td:first-of-type,
  table.two-axis tr:nth-of-type(2n+2) td:first-of-type {
      border-top:1px solid #FFF;
    /* background-color: hsla(345, 100%, 25%, 0.6); */
    /* color: #ffffff; */
  }

  table.two-axis tr td:first-of-type {
    /* border-bottom: 1px solid #e4ebeb; */
  }

  table.two-axis tr td:first-of-type:before {
    padding-bottom: 10px;
  }
}

    </style>
</head>
<body>

<header  data-aos="fade-down" style="background-image: url('../images/header.jpg');">
<?php include_once("template/navbar.php");?>

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
                            <span class="breadcrumb"><a href="customer-orders.php">我的訂單紀錄</a></span>
                        </div>
                        <div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="customer-order.php?customer_orderID=<?php echo $order['customer_orderID'];?>&no=<?php echo $order['order_no'];?>"><?php echo $_GET['no'];?></a></span>
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
<div class="menu-dwon">會員專區 <i class="fa fa-angle-double-down" aria-hidden="true"></i></div>
    <div class="filter bar-small">
            <ul class="sidebar">
                <li><a href="customer-account.php">會員資料</a></li>
                <li><a href="customer-orders.php">訂單紀錄</a></li>
                <li><a href="logout.php">登出會員</a></li>
            </ul>
    </div>
    <div class="productlist list-big">
        <div class="margin-bt">
            <h2>訂單 <?php echo $_GET['no'];?></h2>
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
                <table id="myorder" class="table-vcenter two-axis" style="text-align: left;" width="100%">
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
                            <td class="gray"> <?php echo $order_detail['quantity'];?> 瓶</td>
                            <td class="gray">$NT <?php echo $order_detail['price'];?>/瓶</td>
                            <td class="gray">$NT <?php $sub_total=$order_detail['quantity']*$order_detail['price']; echo $sub_total ;?></td>
                        </tr>
                         <?php  $total_price+= $sub_total; ?>
                         <?php  } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="text-right">總金額(未含運)</td>
                            <td colspan="3" class="text-right">$NT  <?php  echo $total_price;?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right">運費</td>
                            <td colspan="3" class="text-right">$NT  <?php  echo $order['shipping'];?></td>
                        </tr>
                        <tr>
                            <td colspan="2" class="text-right"><h3>總金額</h3></td>
                            <td colspan="3" class="text-right"><h3>$NT  <?php  echo $total_price+$order['shipping'];?></h3></td>
                        </tr>
                    </tfoot>
                </table>
                <table id="receive" class="table-vcenter" style="text-align: left;" width="100%">
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
 
 <script>
$("#myorder,#receive").basictable();
$(function(){
$(".menu-dwon").click(function(){
    $(".filter").slideToggle("slow");
  });});
</script>
</script>
</body>
</html>
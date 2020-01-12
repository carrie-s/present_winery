<?php
session_start();
require_once("is_login.php");
require_once("../function/connection.php");
$query=$db->query("SELECT * FROM customer_orders WHERE memberID='".$_SESSION['member']['memberID']."' ORDER BY created_at DESC");
$orders=$query->fetchAll(PDO::FETCH_ASSOC);
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
        <?php if (count($orders)>0){ ?>
            <h1>我的訂單紀錄</h1>
            <p>以下為您的所有訂單紀錄</p>
            <p>若有任何問題請至 <a href="contact.php">聯絡我們</a>填寫表單.</p>
        
        <div class="block">
            <table id="myorders" class="table-vcenter two-axis" style="text-align: left;" width="100%">
                <thead>
                    <tr>
                        <th>訂單編號</th>
                        <th>訂購日期</th>
                        <th>總金額</th>
                        <th>訂單狀態</th>
                        <th>訂單明細</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($orders as $order){ ?>
                    <tr>
                        <td><?php  echo $order['order_no'];?></td>
                        <td><?php  echo $order['order_date'];?></td>
                        <td>$NT <?php  echo $order['total']+$order['shipping'];?></td>
                        <?php  if ($order['status']==0){ ?>
                        <td><span>待付款</span>
                        <?php  }elseif($order['status']==1){ ?>
                        <span>交易完成</span>
                        <?php  }elseif($order['status']==2){ ?>
                        <span>運送中</span>
                        <?php  }elseif($order['status']==3){ ?>
                        <span >出貨中</span>
                        <?php  }elseif($order['status']==99){ ?>
                        <span >取消訂單</span>
                        <?php  } ?>
                        </td>
                        <td>
                            <a href="customer-order.php?customer_orderID=<?php echo $order['customer_orderID'];?>&no=<?php echo $order['order_no'];?>">
                            <button style="z-index: 0;" class="btn draw-border">觀看詳細</button>
                        </a>
                        </td>
                    </tr>
                    <?php  } ?>
                </tbody>
            </table>
        </div>
        <?php  }else{ ?>    
            <h2>目前沒有訂單，請至<a href="productlist.php">產品專區</a>進行購物。</h2>
            <p>若有任何問題，請至 <a href="contact.php">聯絡我們</a>填寫表單。</p>
        <?php  } ?>
        </div>
    </div>
</div>

</div>
<?php include_once("template/footer.php");?>
<script>
$(function(){
    $("#twzipcode").twzipcode({
       // 'zipcodeSel'  : '<?php //echo $_SESSION["member"]["zipcode"] ?>',     // 此參數會優先於 countySel, districtSel
      //  'countySel'   : '<?php //echo $_SESSION["member"]["county"] ?>',
       // 'districtSel' : '<?php //echo $_SESSION["member"]["district"] ?>'
    });
    $("#twzipcode").find("input[name='zipcode']").eq(1).remove();
    $("#twzipcode").find("select[name='county']").eq(1).remove();
    $("#twzipcode").find("select[name='district']").eq(1).remove();
});
</script>
   <script>
$("#myorders").basictable();
$(function(){
$(".menu-dwon").click(function(){
    $(".filter").slideToggle("slow");
  });});
</script>
</script>
</body>
</html>
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

<header style="background-image: url('../images/abn(4)-1.jpg');">
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
<div id="title-center">
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
            <h1>我的訂單</h1>
            <?php //if (count($orders)>0){ ?>
            <p>以下為您的所有訂單紀錄</p>
            <p>若有任何問題請至 <a href="contact.php">聯絡我們</a>填寫表單.</p>
        
        <div class="block">
            <table>
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
                    <?php //foreach($orders as $order){ ?>
                    <tr>
                        <td><?php// echo $order['order_no'];?></td>
                        <td><?php// echo $order['order_date'];?></td>
                        <td>$NT <?php// echo $order['total']+$order['shipping'];?></td>
                        <?php// if ($order['status']==0){ ?>
                        <td><span class="label label-info">待付款</span>
                        <?php// }elseif($order['status']==1){ ?>
                        <span class="label label-success">交易完成</span>
                        <?php// }elseif($order['status']==2){ ?>
                        <span class="label label-danger">運送中</span>
                        <?php// }elseif($order['status']==3){ ?>
                        <span class="label label-warning">出貨中</span>
                        <?php// }elseif($order['status']==99){ ?>
                        <span class="label label-warning">取消訂單</span>
                        <?php// } ?>
                        </td>
                        <td><a href="customer-order.php?customer_orderID=<?php //echo $order['customer_orderID'];?>&no=<?php echo $order['order_no'];?>" class="btn btn-primary btn-sm">觀看詳細</a>
                        </td>
                    </tr>
                    <?php// } ?>
                </tbody>
            </table>
        </div>
        <?php// }else{ ?>    
            <p>目前沒有訂單，請至<a href="productlist.php">產品專區</a>進行購物。</p>
            <p>若有任何問題，請至 <a href="contact.php">聯絡我們</a>填寫表單。</p>
        <?php// } ?>
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
</body>
</html>
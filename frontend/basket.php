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

<header style="background-image: url('../images/abn(4).jpg');">
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
    <h2>我的購物清單</h2>
    <table width="100%" >
        <tr>
            <th>圖片</th>
            <th>名稱</th>
            <th>數量</th>
            <th>價格</th>
            <th>小計</th>
            <th></th>
        </tr>
        <tr>
            <td class="gray"><img src='../images/01.png' height="250"></td>
            <td class="gray"><h3>商品名稱這裡</h3>年份:1995</td>
            <td class="gray"><input type="number" style="width:20%"></td>
            <td class="gray">$NT 2600</td>
            <td class="gray">$NT 13000</td>
            <td class="gray"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td class="gray"><img src='../images/01.png' height="250"></td>
            <td class="gray"><h3>商品名稱這裡</h3>年份:1995</td>
            <td class="gray"><input type="number" style="width:20%"></td>
            <td class="gray">$NT 2600</td>
            <td class="gray">$NT 13000</td>
            <td class="gray"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td ><h2>總金額</h2></td>
            <td><h2>$NT 13000</h2></td>
            <td></td>
        </tr>
    </table>
    <div class="text-right">
        <button class="btn draw-border">繼續購物</button>
        <button class="btn draw-border">更新購物車</button>
        <a href="check.php"><button class="btn draw-border">結帳去</button></a>
    </div>
</div>
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
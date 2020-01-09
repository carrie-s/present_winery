<?php
session_start();
require_once("../function/connection.php");
$sql ="INSERT INTO members (account, password, name, created_at) VALUES (:account, :password, :name, :created_at)";
$sth = $db ->prepare($sql);
$sth->bindParam(":account",$_POST['account'],PDO::PARAM_STR);
$sth->bindParam(":password",$_POST['password'],PDO::PARAM_STR);
$sth->bindParam(":name",$_POST['name'],PDO::PARAM_STR);
$sth->bindParam(":created_at",$_POST['created_at'],PDO::PARAM_STR);
$result=$sth->execute();
$query=$db->query("SELECT * FROM members WHERE account='".$_POST['account']."' AND password='".$_POST['password']."'");
$member=$query->fetch(PDO::FETCH_ASSOC);
$_SESSION['member']=$member;
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
    <h2>註冊會員</h2>

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
                            <span class="breadcrumb"><a href="register.php">加入會員</a></span>
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
    <div class="centerbox">
    <?php if($result){ 
        if(isset($_POST['url']) && $_POST['url']== "basket"){?>
        <script>
        window.location="checkout1.php";
        </script>
<?php }else{ ?>
        <h2>註冊成功</h2>
        <h3>恭喜您加入會員</h3>
        <p>您可前往產品頁面瀏覽商品。</p>
            <a href="productlist.php"><button class="btn draw-border">前往購物</button></a>

        <a href="../index.php"><button class="btn draw-border"><i class="fa fa-home"></i> 回首頁</button>
        </p>
        <?php } ?>
        <?php }else{ ?>
            <h2>註冊失敗</h2>
        <p>請聯繫客服或前往註冊頁面重新註冊</p>

        <a href="register.php"><button class="btn draw-border">回註冊頁面</button>
        </p>
        <?php } ?>
    </div>
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
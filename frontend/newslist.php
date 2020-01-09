<?php 
session_start();
require_once("../function/connection.php");
$query=$db->query("SELECT * FROM news ORDER BY published_at DESC");
$news=$query->fetchAll(PDO::FETCH_ASSOC);
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

<header  data-aos="fade-down" style="background-image: url('../images/ab-1.jpg');" >
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
    <h2>最新消息</h2>

<!-- breadcrumb -->
<section class="header">
  <div class="logo-and-nav-wrap">  
			<div class="site-nav-wrap">
         <nav class="nav-breadcrumb">
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="../index.php">HOME</a></span>
						</div>
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="newslist.php">NEWS</a></span>
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
<!-- <div class="ns-title">
        <img class="ns-titleimg" src="../images/news2.png" alt="news">
    </div> -->
    <!-- <div class="filter">
        
        <ul class="sidebar">
            <li><a href="">門市活動</a></li>
            <li><a href="">會員專屬</a></li>
            <li><a href="">網路活動</a></li>
        </ul>
    </div> -->
    <div class="news-content">
    <?php foreach($news as $data){ ?>
        <div class="one-news">
            <div class="news-img">
                <img src="../uploads/news/<?php echo $data["picture"]; ?>" alt="news-img">
            </div>
            <div class="news-info">
            <p><?php echo $data["published_at"] ?></p>
            <h2><?php echo $data["title"] ?></h2>
            <br>
            <a href="news.php?newsID=<?php echo $data["newsID"]; ?>"><button class="btn draw-border">閱讀更多</button></a>
            </div>
        </div>
    <?php } ?>   
        <!-- <div class="one-news">
            <div class="news-img">
                <img src="../images/ab1.jpg" alt="news-img">
            </div>
            <div class="news-info">
            
            <p>2020/01/07</p>
            <h2>文章標題</h2>
            
            <br>
            <button class="btn draw-border">閱讀更多</button>
            </div>
        </div> -->
    </div>
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
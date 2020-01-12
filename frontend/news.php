<?php 
session_start();
require_once("../function/connection.php");
$query = $db ->query("SELECT * FROM news WHERE newsID=".$_GET["newsID"]);
$one_news = $query -> fetch(PDO::FETCH_ASSOC);
$query1 = $db ->query("SELECT * FROM news WHERE newsID!=".$_GET["newsID"]." limit 3");
$other_news = $query1 -> fetchAll(PDO::FETCH_ASSOC);
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
    <h2>最新消息</h2>

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
                <span class="breadcrumb"><a href="newslist.php">最新消息列表</a></span>
            </div>
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="news.php?newsID=<?php echo $one_news["newsID"]; ?>"><?php echo $one_news["title"]; ?></a></span>
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

      <div class="news-outer">
        <div class="news-image">
          <img src="../uploads/news/<?php echo $one_news["picture"]; ?>" alt="">
        </div>
        <div class="newscontent">
          <h2><?php echo $one_news["title"]; ?></h2>
          <p><?php echo $one_news["published_at"]; ?></p>
          
          <p><?php echo $one_news["content"]; ?></p>
          <a href="newslist.php"><button class="btn draw-border">回上一頁</button></a>
        </div>
      </div>
      <div class="filter-right">
          <h4 class="filter-title">相關消息</h4>
          <ul class="sidebar-right">
            <?php foreach($other_news as $other){ ?>
              <li>
              <a href="news.php?newsID=<?php echo $other["newsID"]; ?>">
                <img src="../uploads/news/<?php echo $other["picture"]; ?>" alt=""></a>
                <a href="news.php?newsID=<?php echo $other["newsID"]; ?>"><?php echo $other["title"]; ?></a>
              </li>
            <?php } ?>  
          </ul>
      </div> 
    </div>
<?php include_once("template/footer.php");?>
</body>
</html>
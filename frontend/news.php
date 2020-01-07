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
    <div class="news-container">
    <div class="filter">
        <h4>其他消息</h4>
        <ul class="sidebar">
            <li><a href="">文章標題</a></li>
            <li><a href="">文章標題</a></li>
            <li><a href="">文章標題</a></li>
        </ul>
    </div> 
    <div class="news-outer">
      <div class="news-image">
        <img src="../images/abn(6).jpg" alt="">
      </div>
      <div class="newscontent">
        <h2>文章標題</h2>
        <p>2020/01/07</p>
        
        <p>文章內容在這裡</p>
      </div>
    </div>
    </div>
<?php include_once("template/footer.php");?>
</body>
</html>
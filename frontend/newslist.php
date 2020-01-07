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
    <div class="ns-title">
        <img class="ns-titleimg" src="../images/news2.png" alt="news">
    </div>
<div class="news-container">
    <!-- <div class="filter">
        
        <ul class="sidebar">
            <li><a href="">門市活動</a></li>
            <li><a href="">會員專屬</a></li>
            <li><a href="">網路活動</a></li>
        </ul>
    </div> -->
    <div class="news-content">
        <div class="one-news">
            <div class="news-img">
                <img src="../images/ab1.jpg" alt="news-img">
            </div>
            <div class="news-info">
            <p>2020/01/07</p>
            <h2>文章標題</h2>
            <br>
            <button><a href="news.php">閱讀更多</a></button>
            </div>
        </div>
        <div class="one-news">
            <div class="news-img">
                <img src="../images/ab1.jpg" alt="news-img">
            </div>
            <div class="news-info">
            
            <p>2020/01/07</p>
            <h2>文章標題</h2>
            
            <br>
            <button>閱讀更多</button>
            </div>
        </div>
        <div class="one-news">
            <div class="news-img">
                <img src="../images/ab1.jpg" alt="news-img">
            </div>
            <div class="news-info">
            <p>2020/01/07</p>
            <h2>文章標題</h2>
            <br>
            <button>閱讀更多</button>
            </div>
        </div>
    </div>
</div>
<?php include_once("template/footer.php");?>
</body>
</html>
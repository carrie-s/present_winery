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
        <a>會員登入</a> | <a>加入會員</a> | <a>聯絡我們</a>
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
    <h2>註冊/登入會員</h2>

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
                            <span class="breadcrumb"><a href="register.php">註冊/登入</a></span>
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
<div class="product-left">
<div class="box">
<h2>註冊會員</h2>
        <form data-toggle="validator" action="register_success.php " method="post">
            <div class="form-group">
                <label for="name">姓名</label>
                <input type="text" class="form-control" id="name" name="name" data-error="請輸入名字" required>
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="account">帳號(Email)</label>
                <input type="email" class="form-control" id="account" data-error="請以Email做為帳號" name="account" required>
                <div class="help-block with-errors is_repeat"></div>
            </div>
            <div class="form-group">
                <label for="password">密碼</label>
                <input type="password" data-minlength="6" class="form-control" data-error="請輸入至少6個字元的密碼" id="password" name="password" required>
                <input type="hidden" name="url" value="<?php echo $_GET['url']; ?>">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label for="comfirm_password">確認密碼</label>
                <input type="password" class="form-control" id="comfirm_password" name="comfirm_password" data-match="#password" data-error="與密碼不符，請檢查" required>
                
                <div class="help-block with-errors"></div>
            </div>
            <div class="text-center">
            <input type="hidden" name="created_at" value="<?php echo date("Y-m-d H:i:s"); ?>">
                <button type="submit" id="button1" class="btn btn-primary"><i class="fa fa-user-md"></i> 註冊</button>
            </div>
        </form>
        </div>
        </div>
        <div class="product-left">
                    <div class="box">
                        <h1>會員登入</h1>

                        <form  data-toggle="validator" action="check_login.php" method="post">
                            <div class="form-group">
                                <label for="login_account">帳號(Email)</label>
                                <input type="email" class="form-control" id="login_account" data-error="請輸入帳號" name="account" required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group">
                                <label for="login_password">密碼</label>
                                <input type="password" class="form-control" id="login_password" data-error="請輸入密碼" name="password" required>
                                <input type="hidden" name="url" value="<?php echo $_GET['url']; ?>">
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> 登入</button>
                            </div>
                        </form>
                    </div>
                </div>

</div>
<?php include_once("template/footer.php");?>

</body>
</html>
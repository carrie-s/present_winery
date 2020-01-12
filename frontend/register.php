<?php
session_start();
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
<div class="news-container" >
    <div class="product-left">
        <div class="box">
            <div style="text-align:center;">
                <h2>註冊會員</h2>
            </div>
            <form data-toggle="validator" role="form" id="myForm" action="register_success.php " method="post">
                <div class="form-group" >
                    <label for="name">姓名</label><div class="help-block with-errors"></div><br>
                    <input type="text" id="name" name="name" data-error="*請輸入名字" required>
                    
                </div>
                <div class="form-group">
                    <label for="birthday">生日</label><div class="help-block with-errors"></div><br>
                    <input type="text" id="birthday" name="birthday" data-error="*請輸入生日" required>
                    
                </div>
                <div class="form-group">
                    <label for="account">帳號(Email)</label><div class="help-block with-errors is_repeat"></div><br>
                    <input type="email" id="account" data-error="*請以Email做為帳號" name="account" required>
                    
                </div>
                <div class="form-group">
                    <label for="password">密碼</label><div class="help-block with-errors"></div><br>
                    <input type="password" data-minlength="6"  data-error="*請輸入至少6個字元的密碼" id="password" name="password" required>
                    <input type="hidden" name="url" value="<?php echo $_GET['url']; ?>">
                    
                </div>
                <div class="form-group">
                    <label for="comfirm_password">確認密碼</label><div class="help-block with-errors"></div><br>
                    <input type="password"  id="comfirm_password" name="comfirm_password" data-match="#password" data-error="*與密碼不符，請檢查" required>
                    
                    
                </div>
                <div style="text-align:center;">
                <input type="hidden" name="created_at" value="<?php echo date("Y-m-d H:i:s"); ?>">
                    <button class="btn draw-border" type="submit" id="button1" ><i class="fa fa-user-md"></i> 註冊</button>
                </div>
            </form>
        </div>
    </div>
    <div class="product-left">
        <div class="box">
            <div style="text-align:center;">
                <h2>會員登入</h2>
            </div>
            <form  data-toggle="validator" action="check_login.php" method="post">
                <div class="form-group">
                    <label for="login_account">帳號(Email)</label><div class="help-block with-errors"></div><br>
                    <input type="email"  id="login_account" data-error="*請輸入帳號" name="account" required>
                    
                </div>
                <div class="form-group">
                    <label for="login_password">密碼</label><div class="help-block with-errors"></div><br>
                    <input type="password"  id="login_password" data-error="*請輸入密碼" name="password" required>
                    <input type="hidden" name="url" value="<?php echo $_GET['url']; ?>">
                    
                </div>
                <div style="text-align:center;">
                    <button class="btn draw-border" type="submit"><i class="fa fa-sign-in"></i> 登入</button>
                </div>
            </form>
        </div>
    </div>

</div>
<?php include_once("template/footer.php");?>

<script>
$(function(){
  $( "#birthday" ).datepicker({
    changeYear:true,
    changeMonth:true,
    dateFormat:"yy-mm-dd",      //中間用,(逗號)分開
    yearRange:"1930:2002",
  });
});
$(function(){
    $("#password").focus(function(){
        $.ajax({
            type:"post",
            url:"check_email.php",
            dataType:"text",
            data:{
            account:$("#account").val(),
            },
            success:function(data){
                if(data == "repeat"){
                    $(".is_repeat").parent().addClass("has-error has-danger");
                    $(".is_repeat").html("*此帳號已使用過，請重新輸入");
                }else if(data == "no_repeat"){
                    $(".is_repeat").html("");

                }else if(data == "empty"){
                    $(".is_repeat").html("*請輸入email做為帳號");

                }
            }

        });
    });
});

</script>
	<?php  if(isset($_GET["MSG"]) && $_GET['MSG'] == "please_login"){ ?>
	<script>
	$(function(){
		$("#pleaselogin").modal();
	});
	</script>
	<?php } ?>
</body>
</html>
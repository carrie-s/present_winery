<?php
session_start();
require_once("is_login.php");
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
                            <span class="breadcrumb"><a href="customer-accoubt.php">會員基本資料</a></span>
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
        <h1>會員基本資料</h1>
        <p>編輯您的會員資料</p>
        <p>此資料協助我們寄送產品與提供更多優惠訊息，請務必填寫真實資料</p>
        <?php if(isset($_GET['MSG']) && $_GET['MSG'] != null){ ?>
                        <div class="alert alert-success" style="width: 80%">
                            <strong>更新成功!</strong>
                        </div>
                        <?php } ?>
    </div>

    <form data-toggle="validator" action="change_password.php" method="post">
        <div class="block" >
        <h2>變更密碼</h2>
            <div >
                 <div class="form-group">
                    <label for="password_old">舊密碼</label>
                    <input type="password"  data-match="#password_hidden" data-error="密碼錯誤" id="password_old" name="password_old">
                    <input type="hidden"  id="password_hidden" name="password_hidden" value="<?php echo $_SESSION['member']['password']; ?>">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        
        <div>
            <div>
                <div class="form-group">
                    <label for="password_1">新密碼</label>
                    <input type="password" data-minlength="6" data-error="至少輸入六個字元" id="password_new" name="password_new">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div>
                <div class="form-group">    
                    <label for="password_2">再次輸入新密碼</label>
                    <input type="password" data-match="#password_new" data-error="與新密碼不符，請檢查" id="password_check" name="password_check">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
        </div>
        <input type="hidden" name="updated_at" value="<?php echo date("Y-m-d H:i:s") ?>">    
        <div >
            <button class="btn draw-border" type="submit" class="btn btn-primary"><i class="fa fa-save"></i> 修改密碼</button>
        </div>
        </div>
    </form>
    <div class="block" >
        <h2>個人資料</h2>
        <form action="update_member.php" method="post">
            <div class="two">
                <div>
                    <label for="firstname">姓名</label>
                    <input type="text" id="name" name="name" value="<?php echo $_SESSION['member']['name']; ?>">
                </div>
                <div>
                    <label>性別</label>
                    <input style="margin-left:1rem;margin-right:0.5rem;" type="radio" name="gender" value="1" >男
                    <input style="margin-left:1rem;margin-right:0.5rem;" type="radio" name="gender" value="0" >女
                </div>
                <div>
                    <label for="company">生日</label>
                    <input type="text" id="birthday" name="birthday" value="<?php echo $_SESSION['member']['birthday']; ?>">
                </div>
                <div >
                    <div>
                        <label for="phone">家用電話</label>
                        <input type="text"   id="phone" name="phone" value="<?php echo $_SESSION['member']['phone']; ?>">
                    </div>
                </div>
                <div >
                    <div >
                        <label for="phone">行動電話</label>
                        <input type="text" id="mobile" name="mobile" value="<?php echo $_SESSION['member']['mobile']; ?>">
                    </div>
                </div>
            </div>
            <div class="two">
                <div id="twzipcode">
                    <div  >
                        <div  >
                            <label for="zipcode">郵遞區號</label>
                            <input type="text"   id="zipcode" name="zipcode" value="<?php echo $_SESSION['member']['zipcode']; ?>">
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="county">城市</label>
                            <div class="select">
                            <select   id="county" name="county">
                                <option value="<?php echo $_SESSION['member']['county']; ?>"></option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div>
                            <label for="district">地區</label>
                            <div class="select">
                            <select   id="district" name="district">
                            <option value="<?php echo $_SESSION['member']['district']; ?>"></option>
                            </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div>
                        <label for="city">地址</label>
                        <input type="text"   id="address" name="address" value="<?php echo $_SESSION['member']['address']; ?>">
                    </div>
                </div>
                <div >
                    <div>
                        <label for="email">備用Email</label>
                        <input type="text" id="email" name="email" value="<?php echo $_SESSION['member']['email']; ?>">
                    </div>
                </div>
            </div>
            <div class="clear-both"></div>
            <div>
                    <input type="hidden" name="updated_at" value="<?php echo date("Y-m-d H:i:s") ?>">
                    <input type="hidden" name="EditForm" value="UPDATE">
                    <button class="btn draw-border" type="submit"><i class="fa fa-save"></i> 更新資料</button>
            </div>
        </form>
    </div>
</div>

</div>
<?php include_once("template/footer.php");?>
<script>
$(function(){
    $("#twzipcode").twzipcode({
        'zipcodeSel'  : '<?php echo $_SESSION["member"]["zipcode"] ?>',     // 此參數會優先於 countySel, districtSel
        'countySel'   : '<?php echo $_SESSION["member"]["county"] ?>',
        'districtSel' : '<?php echo $_SESSION["member"]["district"] ?>'
    });
    $("#twzipcode").find("input[name='zipcode']").eq(1).remove();
    $("#twzipcode").find("select[name='county']").eq(1).remove();
    $("#twzipcode").find("select[name='district']").eq(1).remove();
});
$(function(){
    $("#birthday").datepicker({
        dateFormat:"yy-mm-dd",
        changeYear:true,
        changeMonth:true,
        yearRange:"1930:2002",
    });
});
<?php if(isset($_SESSION["member"]["gender"]) && $_SESSION["member"]["gender"] != null){ ?>
<?php if($_SESSION["member"]["gender"] == "0"){ ?>
    $(function(){
    $("input[name='gender'][value='0']").attr("checked", true);
    });
<?php } else if($_SESSION["member"]["gender"] == "1") { ?>
    $(function(){
    $("input[name='gender'][value='1']").attr("checked", true);
    });
<?php } ?>
<?php } ?>
</script>
</body>
</html>
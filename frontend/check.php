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
    <h2>結帳流程</h2>

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
                            <span class="breadcrumb"><a href="basket.php">購物車</a></span>
						</div>
						<div class="single-breadcrumb-wrap">
                            <span class="sep"><i class="fa fa-caret-right"></i></span>
                            <span class="breadcrumb"><a href="check.php">結帳</a></span>
						</div>
				</nav>
			</div>
		</div>
    </section>
    <!-- breadcrumb end -->
</div>
</div>
</header>
<form method="post" action="order_success.php">
    <div class="news-container">
            <div class="product-left">
                <div class="box">
                    <div style="text-align:center;">
                        <h2>Step 1 - 填寫收件人資料</h2>
                    </div>
                    <div>
                        <label for="name">姓名</label>
                        <input type="text" id="name" name="name" value="<?php echo $_SESSION["member"]["name"] ?>">
                    </div>
                    <div>
                        <label for="mobile">行動電話</label>
                        <input type="text" id="mobile" name="mobile" value="<?php echo $_SESSION["member"]["mobile"] ?>">
                    </div>
                    <div id="twzipcode">
                        <div>
                            <label for="zipcode">郵遞區號</label>
                            <input type="text" id="zipcode" name="zipcode">
                        </div>
                        <div>
                            <label for="county">城市</label>
                            <div class="select">
                            <select id="county" name="county"></select>
                            </div>
                            <label for="district">地區</label>
                            <div class="select">
                            <select id="district" name="district"></select>
                        </div>
                        </div>
                    </div>
                    <div>
                            <label for="address">地址</label>
                            <input type="text" id="address" name="address" value="<?php echo $_SESSION["member"]["address"] ?>">
                        </div>
                </div>
            </div>
            <div class="product-left">
                <div class="box">
                    <div style="text-align:center;">
                        <h2>Step 2 - 選擇取貨方式</h2>
                    </div>
                        <div>
                            <input style="width:20px;" type="radio" name="delivery" value="100" checked>
                            <strong>宅配</strong>
                            <span> - 本店使用黑貓宅配配送，採用冷藏低溫配送</span>
                        </div>
                        <div>
                            <input style="width:20px;" type="radio" name="delivery" value="150">
                            <strong>超商取貨付款</strong>
                            <span> - 選擇超商與指定門市收貨</span>
                        </div>
                    </div>
                    <div class="box">
                    <div style="text-align:center;">
                        <h2>Step 3 - 選擇付款方式</h2>
                    </div>
                        <div>
                            <input style="width:20px;" type="radio" name="payment" value="信用卡" checked>
                            <strong>信用卡付款</strong>
                            <span> - 只限VISA 或 Mastercard</span>
                        </div>
                        <div>
                            <input style="width:20px;" type="radio" name="payment" value="ATM轉帳">
                            <strong>ATM轉帳</strong>
                            <span> - 付款後請於訂單備註回覆帳號後5碼以利對帳</span>
                        </div>
                        <div>
                            <input style="width:20px;" type="radio" name="payment" value="貨到付款">
                            <strong>貨到付款</strong>
                            <span> - 選擇超商取貨，請選此項</span>
                        </div>
                    </div>
                </div>
            </div>
    </div>   
    <div class="clear-both"></div>     
    <div class="design-center" style="margin-top: 2rem;">    
        <!-- <div class="product-left"> -->
            <div class="step4">
                <div style="text-align:center;">
                    <h2>Step 4 - 確認訂單</h2>
                </div>
                <div class="basket">
                    <table width="100%" >
                        <tr>
                            <th>圖片</th>
                            <th>名稱</th>
                            <th>數量</th>
                            <th>價格</th>
                            <th>小計</th>
                        </tr>
                        <?php for($i=0; $i<count($_SESSION['cart']);$i++){ ?>
                        <tr>
                            <td class="gray">
                                <img src='../uploads/products/<?php echo $_SESSION['cart'][$i]['pic'];?>' height="200" alt="<?php echo $_SESSION['cart'][$i]['product_name'];?>">
                            </td>
                            <td class="gray">
                                <h3><?php echo $_SESSION['cart'][$i]['product_name'];?></h3>
                                年份:<?php echo $_SESSION['cart'][$i]['vintage'];?>
                            </td>
                            <td class="gray"><?php echo $_SESSION['cart'][$i]['quantity'];?>瓶</td>
                            <td class="gray">$NT <?php echo $_SESSION['cart'][$i]['price'];?></td>
                            <td class="gray">$NT <?php echo $_SESSION['cart'][$i]['quantity']*$_SESSION['cart'][$i]['price'];?></td>
                        </tr>
                        <?php }?>
                        <!-- <tr>
                            <td class="gray"><img src='../images/01.png' height="200"></td>
                            <td class="gray"><h3>商品名稱這裡</h3>年份:1995</td>
                            <td class="gray">7瓶</td>
                            <td class="gray">$NT 2600</td>
                            <td class="gray">$NT 13000</td>
                        </tr> -->
                        <tr>
                            <td colspan="3"></td>
                            <td ><h3>金額(未含運)</h3></td>
                            <td><h3>$NT <?php echo $_SESSION["order"]['sub_total']; ?></h3></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td ><h3>運費</h3></td>
                            <td><h3 >$NT <span id="radio">100</span></h3></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                            <td ><h2>總金額</h2></td>
                            <td><h2 >$NT <span id="total_price"><?php echo $_SESSION["order"]['sub_total']+100; ?></span></h2></td>
                        </tr>
                    </table>
                </div>
                <div class="text-right">
                    <input type="hidden" name="status" value="0">  
                    <input type="hidden" name="order_no" value="<?php echo "PW".date('YmdHis'); ?>">  
                    <input type="hidden" name="order_date" value="<?php echo date('Y-m-d'); ?>">
                    <input type="hidden" name="created_at" value="<?php echo date('Y-m-d H:i:s'); ?>">
                    <button type="submit" class="btn draw-border">確定結帳</button>
                </div>
            </div>
        <!-- </div> -->
    </div>
</form>
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
</script>
  <script>
$(function(){
    $("input:radio[name=delivery]").change(function(){
        $.ajax({
            type:"post",
            url:"test_radio.php",
            dataType:"text",
            data:{
            delivery:$("input:radio[name=delivery]:checked").val(),
            },
            success:function(data){
                $("#radio").html($("input:radio[name=delivery]:checked").val());
                if(data == "value1"){
                    $("#total_price").html("<?php echo $_SESSION["order"]['sub_total']+150; ?>");
                }else if((data == "value2")){
                    $("#total_price").html("<?php echo $_SESSION["order"]['sub_total']+100; ?>");
                }

                    // $("#radio").html($("input:radio[name=delivery]:checked").val());
                    //  if(data == "success"){
                    //     $("#radio").html("success");
                    //  }
            }
        });
    });
});
  </script>
</body>
</html>
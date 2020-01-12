<?php 
require_once("../function/connection.php");
$query = $db ->query("SELECT * FROM product_categories");
$category=$query ->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="clear-both"></div>
<footer >

        <div class="footer" data-aos="fade-up" data-aos-delay="200" >
        <div class="subscription">
            <form action="">
            <label for="subscription">訂閱電子報
            </label>      
            <input id="subscription" name="subscription" type="text">
            <button class="btn draw-border">訂閱</button>
            </form>
        </div>
            <div class="footcolor">
            <div class="ft-center">
                <div class="group">
                    <div class="ft-item">
                        <h4>會員專區</h4>
                        <ul>
                        <?php if(isset($_SESSION['member']) && $_SESSION['member'] !=null) { ?>
                            <li><a href="customer-account.php">會員專區</a></li>
                            <li><a href="logout.php">登出</a></li>
                            <?php }else{ ?>
                            <li><a href="register.php">加入會員</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal">會員登入</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                    <div class="ft-item">
                        <h4>產品分類</h4>
                        <ul>
                            <li><a href="productfilter.php?categoryID=<?php echo $category[0]['product_categoryID'] ?>">德國</a></li>
                            <li><a href="productfilter.php?categoryID=<?php echo $category[1]['product_categoryID'] ?>">西班牙</a></li>
                            <li><a href="productfilter.php?categoryID=<?php echo $category[2]['product_categoryID'] ?>">法國</a></li>
                            <li><a href="productfilter.php?categoryID=<?php echo $category[3]['product_categoryID'] ?>">義大利</a></li>
                        </ul>
                    </div>
                </div>
                <div class="group">
                    <div class="ft-logo">
                        <a href="../index.php">
                            <img src="../images/logofull-150.png" alt="">
                        </a>    
                        <div class="fb">
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="ig">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                            </div>
                            <div class="tw">
                            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="clear-both"></div>
        <div class="design">
            <div class="design-center">
                <div class="copyright">
                Copyright © 2020 PRESENT WINERY All Right Reserved.
                </div>
                <div class="designby">
                此為學習用的測試網站，無商業行為
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog modal-sm">

        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="Login">會員登入</h4>
            </div>
            <div class="modal-body">
                <form action="check_login.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email-modal" placeholder="email" name="account">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password-modal" placeholder="password" name="password">
                    </div>

                    <p class="text-center">
                        <button class="btn btn-primary"><i class="fa fa-sign-in"></i> 登入</button>
                    </p>

                </form>

                <p class="text-center text-muted">尚未註冊會員?</p>
                <p class="text-center text-muted"><a href="register.php"><strong>立即註冊</strong></a></p>

            </div>
        </div>
    </div>
</div>

    <script src="../js/jquery-1.11.0.min.js"></script>

    <script src="../js/jquery-ui/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/validator.min.js"></script>
    <script src="../js/jquery.twzipcode.min.js"></script>
    <script src="../js/jquery.basictable.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react/15.6.1/react-dom.min.js"></script> -->
<script src="../js/aos.js"></script>
<!-- <script src="../js/scripts.js"></script> -->

<script>
  AOS.init({
    duration:"1500",
  });
</script>
<script>
function myFunction(x) {
  x.classList.toggle("change");
};
$(function(){
    $(".menubox").click(function(){
        $(".menu-wrap").slideToggle(1000);
        $(".logo-block").slideToggle(1000);
    });
});
</script>

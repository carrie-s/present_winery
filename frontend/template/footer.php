<?php 
require_once("../function/connection.php");
$query = $db ->query("SELECT * FROM product_categories");
$category=$query ->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="clear-both"></div>
<footer data-aos="fade-up" data-aos-delay="200" >

        <div class="footer">
        <div class="subscription" data-aos="fade-up">
            <form action="">
            <label for="subscription">訂閱電子報：
            </label>      
            <input id="subscription" name="subscription" type="text">
            <button class="btn draw-border">訂閱</button>
            </form>
        </div>
            <div class="footcolor">
            <div class="ft-center">
                <div class="ft-item">
                    <h4>會員專區</h4>
                    <ul>
                        <li><a href="register.php">加入會員</a></li>
                        <li><a href="">會員登入</a></li>
                    </ul>
                </div>
                <div class="ft-item">
                    <h4>產品分類</h4>
                    <ul>
                        <li><a href="productfilter.php?categoryID=<?php echo $category[0]['product_categoryID'] ?>">德國</a></li>
                        <li><a href="">西班牙</a></li>
                        <li><a href="">法國</a></li>
                        <li><a href="">義大利</a></li>
                    </ul>
                </div>
                <div class="ft-item">
                <i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i>
                <i class="fa fa-instagram fa-3x" aria-hidden="true"></i>
                <i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i>
            </div>
            <div class="clear-both"></div>
                <div class="ft-logo">
                    <img src="../images/logofull-150.png" alt="">
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
                Designed by Carrie
                </div>
            </div>
        </div>
    </footer>


    <script src="../js/jquery-1.11.0.min.js"></script>

    <script src="../js/jquery-ui/jquery-ui.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/validator.min.js"></script>
    <script src="../js/jquery.twzipcode.min.js"></script>

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
        $(".menu-wrap").slideToggle(1500);
        $(".logo-block").slideToggle(1000);
    });
});
</script>

<!-- toolbar -->
<div class="toolbar">
    <div class="toolbar-center">
        <div class="customer">
        <?php if(isset($_SESSION['member']) && $_SESSION['member'] !=null) { ?>
        <span style="letter-spacing: 1px;">Hello, <?php echo $_SESSION['member']['name']; ?>.</span> <a href="customer-account.php">會員專區</a> | <a href="logout.php">登出</a>
        <?php }else{ ?>
        <a href="#" data-toggle="modal" data-target="#login-modal">會員登入</a> | <a href="register.php">加入會員</a>
        <?php } ?>
         | <a href="information.php">資料來源</a>
        </div>
    </div>
</div>
<!-- toolbar end -->
<!-- navbar -->
<div class="all-menu">
    <div class="menu-wrap" data-aos="zoom-out-up">
        <div class="menu-outer">
            <div class="menu">
                <div class="menu-inner">
                    <div class="menulogo">
                    <a href="../index.php">
                     <img src="../images/logofull-150.png" alt="logo">
                    </a>
                    </div>
                    <ul class="menulist">
                        <li><a href="../index.php">首頁</a></li>
                        <li><a href="about.php">關於我們</a></li>
                        <li><a href="newslist.php">最新消息</a></li>
                        <li><a href="productlist.php">線上購買</a></li>
                        <li><a href="information.php">資料來源</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="bar" data-aos="fade-left">
        <div class="toolbar-center">
            <div class="web-logo">
                <div class="logo-block">
                    <a href="../index.php">
                    <img id="logo1" src="../images/logow.png" alt="logo">
                    <img id="logo2" src="../images/logo-150.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="icontool">
                <div class="cart">
                    <a href="basket.php"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i></a>
                </div>
                <div class="user">
                <?php if(isset($_SESSION['member']) && $_SESSION['member'] != null ){ ?>
                    <a href="customer-account.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
                <?php }else{ ?> 
                    <a href="register.php"><i class="fa fa-user fa-2x" aria-hidden="true"></i></a>
                <?php } ?>
                </div>
                <div class="menubox" onclick="myFunction(this)">
                    <div class="menu1"></div>
                    <div class="menu2"></div>
                    <div class="menu3"></div>
                </div>
            </div>
        </div>
     </div>
     
</div>
<!-- navbar end -->
<?php
session_start();
require('../function/connection.php');
$query = $db->query("SELECT * FROM pages WHERE pageID=1");
$about = $query->fetch(PDO::FETCH_ASSOC);
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
<!-- <div> -->
<header style="background-image: url('../images/header.jpg');" data-aos="fade-down">
<?php include_once("template/navbar.php");?>
<div id="title-center" data-aos="fade-down">
    <div class="pagetitle">
        <h2>關於我們</h2>

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
                            <span class="breadcrumb"><a href="about.php">ABOUT</a></span>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
      <!-- breadcrumb end -->
    </div>
</div>
</header>
<div class="news-container tb" >
        <!-- <div class="title">
                <img class="titleimg" src="../images/about.png" alt="about">
        </div> -->
        <!-- <section class="intro">
            <div class="left" data-aos="fade-right">
                <div>
                
                </div>
            </div>
            <div class="slider" data-aos="fade-left">
                <ul>
                <li style="background-image:url('../images/abn(7).jpg');">
                </li>
                <li style="background-image:url('../images/abn(3).jpg')">
                </li>
                <li style="background-image:url('../images/abn(5).jpg')">
                </li>
                </ul>
                <ul>
                <nav class="dot">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </nav>
                </ul>
            </div>
        </section> -->
        <div class="vc">
            <div class="about">
                <div class="ab-item">
                    <?php echo $about["content"]; ?>
                </div>
            </div>
        </div>
        <div class="vc ">
            <img src="../images/abn(7).jpg" alt="">
        </div>
    </div>


    <?php include_once("template/footer.php");?>
    <!-- </div> -->
    <!-- <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
                console.log("OK");
            } else {
                $('.nav').removeClass('affix');
            }
        });
        {
	class SliderClip {
		constructor(el) {
			this.el = el;
			this.Slides = Array.from(this.el.querySelectorAll('li'));
			this.Nav = Array.from(this.el.querySelectorAll('nav a'));
			this.totalSlides = this.Slides.length;
			this.current = 0;
			this.autoPlay = true; //true or false
			this.timeTrans = 4000; //transition time in milliseconds
			this.IndexElements = [];

			for(let i=0;i<this.totalSlides;i++) {
				this.IndexElements.push(i);
			}

			this.setCurret();
			this.initEvents();
		}
		setCurret() {
			this.Slides[this.current].classList.add('current');
			this.Nav[this.current].classList.add('current_dot');
		}
		initEvents() {
			const self = this;

			this.Nav.forEach((dot) => {
				dot.addEventListener('click', (ele) => {
					ele.preventDefault();
					this.changeSlide(this.Nav.indexOf(dot));
				})
			})

			this.el.addEventListener('mouseenter', () => self.autoPlay = false);
			this.el.addEventListener('mouseleave', () => self.autoPlay = true);

			setInterval(function() {
				if (self.autoPlay) {
					self.current = self.current < self.Slides.length-1 ? self.current + 1 : 0;
					self.changeSlide(self.current);
				}
			}, this.timeTrans);

		}
		changeSlide(index) {

			this.Nav.forEach((allDot) => allDot.classList.remove('current_dot'));

			this.Slides.forEach((allSlides) => allSlides.classList.remove('prev', 'current'));

			const getAllPrev = value => value < index;

			const prevElements = this.IndexElements.filter(getAllPrev);

			prevElements.forEach((indexPrevEle) => this.Slides[indexPrevEle].classList.add('prev'));

			this.Slides[index].classList.add('current');
			this.Nav[index].classList.add('current_dot');
		}
	}

	const slider = new SliderClip(document.querySelector('.slider'));
}
    </script> -->
</body>
</html>
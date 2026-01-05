<?php

$data = implode("\n", $_POST);

$domain = $_SERVER['HTTP_HOST'];
$to = "lead@".$domain; 
$subject = "Lead";
$message = $data;
$headers = "From: sender@".$domain;

if(mail($to, $subject, $message, $headers)) {
    //echo "Письмо успешно отправлено!";
}

?>


 <!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <script src="theme/modules_java/swiper.js"></script>
      <title>CashLuxoria : Your request has been accepted!</title>
      <meta name="robots" content="index, follow">
      <meta property="og:title" content="CashLuxoria : Your request has been accepted!" />
      
      <meta property="og:description" content="CashLuxoria : Your request has been accepted!" />
      <meta name="description" content="CashLuxoria : Your request has been accepted!" />
      <link href="https://fonts.googleapis.com" rel="stylesheet">
      <link rel="stylesheet" href="theme/components_scss/normalize.css" />
      <link rel="stylesheet" href="theme/components_scss/bootstrap.css" />
      <link rel="stylesheet" href="theme/components_scss/swiper.css" />
      

      <link rel="shortcut icon" href="pixelpantry/logo-67a2856edd7aa.png" type="image/x-icon" />
      <link rel="stylesheet" href="style.css?rev=6400" />
      <style>
         
      </style>
      
   </head>
   <body>
      <header class="header" id="header">
         <div class="container">
            <div class="header-logo">
               <div class="logo-thumb">
                  <a id="logo" href="./">
                  <img class="logo" src="pixelpantry/logo-67a2856edd7aa.png" alt="" />
                  </a>
               </div>
               <div class="logo-title"><a href="./">CashLuxoria</a></div>
            </div>
            <div class="">
               <nav class="">
                  <ul class="nav-table">
                     <li>
                        <a class="mesanu-itedm_liank" href="./#hero"> Home </a>
                     </li>
                     <li>
                        <a class="mesanu-itedm_liank" href="about-us.html">Our Journey</a>
                     </li>
                     <li>
                        <a class="mesanu-itedm_liank" href="category-game.html">Explore games</a>
                     </li>
                     <li>
                        <a class="mesanu-itedm_liank" href="our-contacts.html">Contacts</a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="mobile-menu">
               <div class="menu-btn navbar-toggle" id="menu-btn">
                  <span class="span-btn"></span>
                  <span class="span-btn"></span>
                  <span class="span-btn"></span>
               </div>
               <div class="logo-mobile"><a id="logo" href="./">
                  <img class="" src="pixelpantry/logo-67a2856edd7aa.png" alt="" />
                  </a>
               </div>
            </div>
         </div>
         <div class="menu bg-menu" >
            <nav>
               <ul class="msenu-box-modbile">
                  <li>
                     <a class="mesanu-itedm_liank" href="./#hero">Home</a>
                  </li>
                  <li>
                     <a class="mesanu-itedm_liank"
                        href="about-us.html">Our Journey</a>
                  </li>
                  <li>
                     <a
                        class="mesanu-itedm_liank"
                        href="category-game.html">Explore games</a>
                  </li>
                  <li>
                     <a class="mesanu-itedm_liank"
                        href="our-contacts.html">Contacts</a>
                  </li>
               </ul>
            </nav>
         </div>
      </header>
      <section class="section-heroqq">
         <div class="container">
            <div class="hero-content">
               <div class="hero-box">
                  <h1>CashLuxoria offers you the most exciting and dynamic games. Forward to new victories and achievements.</h1>
                   <a href="category-game.html" class="custom-btn button-2">
                  Start winning today
                  <span></span>
                  <span></span>
                  <span></span>
                  <span></span>
                  </a> 
               </div>
               <div class="hero-box1">
                  <div class="row">
                     <div class="col-12">
                        <h3 class="text-center">Trending</h3>
                        <div class="swiper-container">
                           <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                 <img src="service-images/casino-37679-1.png" alt="Jungle Gorilla™ Adventure" class="img img-fluid">
                                 <div class="slider-content-absl">
                                    <a href="jungle-gorilla-adventure.html"
                                       >
                                       <h4>Jungle Gorilla™ Adventure</h4>
                                    </a>
                                    <a href="jungle-gorilla-adventure.html" class="custom-btn button-2">
                                    Play
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    </a>
                                 </div>
                              </div> 
                              <div class="swiper-slide">
                                 <img src="service-images/charono-7245e-2.png" alt="Mighty Kong™ Unleashed">
                                 <div class="slider-content-absl">
                                    <a href="mighty-kong-unleashed.html"
                                       >
                                       <h4>Mighty Kong™ Unleashed</h4>
                                    </a>
                                    <a href="mighty-kong-unleashed.html" class="custom-btn button-2">
                                    Play
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    </a>
                                 </div>
                              </div> 
                              <div class="swiper-slide">
                                 <img src="service-images/charono_b3338_3.png" alt="Gorilla Mayhem™ Rampage">
                                 <div class="slider-content-absl">
                                    <a href="gorilla-mayhem-rampage.html"
                                       >
                                       <h4>Gorilla Mayhem™ Rampage</h4>
                                    </a>
                                    <a href="gorilla-mayhem-rampage.html" class="custom-btn button-2">
                                    Play
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    </a>
                                 </div>
                              </div> 
                              <div class="swiper-slide">
                                 <img src="service-images/charono_2025-01-26_4.png" alt="Jane Hunter and the Mask of Montezuma™ Adventure">
                                 <div class="slider-content-absl">
                                    <a href="jane-hunter-and-the-mask-of-montezuma-adventure.html"
                                       >
                                       <h4>Jane Hunter and the Mask of Montezuma™ Adventure</h4>
                                    </a>
                                    <a href="jane-hunter-and-the-mask-of-montezuma-adventure.html" class="custom-btn button-2">
                                    Play
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    </a>
                                 </div>
                              </div> 
                           </div>
                           <div class="swiper-button-prev"></div>
                           <div class="swiper-button-next"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      


<style>
	* {
		padding: 0;
		margin: 0;
	}
	#mainWrapp-accountiz--header{
		margin: 0px;
		padding: 0px;
		font-family: 'Reddit Sans', sans-serif;
		width: 100%;
		font-size: 16px;
		padding: 262px 0px;
	}
	.bodyClass1-accountiz--header{
		background: #f5f4f4;
		color: #000000;
	}
	.bodyClass2-accountiz--header{
		background: #f6dfeb;
		color: #fff;
	}
	.bodyClass3-accountiz--header{
		background: #fff;
		color: #111;
	}
	.wrapage-block-accountiz--header{
		background-size: 100%;
		width: 100%;
	}
	.box_main-accountiz--header{
		width: 100%;
		margin: 0 auto;
		text-align: center;
		display: flex;
		justify-content: center;
		align-self: center;
		align-items: center;
	}
	.box_main-accountiz--header h2{
		font-size: 24px;
		padding: 0px 0px 25px;
	}
	.box_main-accountiz--header p{
		font-weight: 500;
		font-size: 18px;
	}
	p{
		margin-bottom: 10px;
	}
	.mainBlock-accountiz--header{
		text-align: start;
	}
	.mainBlock-accountiz--header ul{
		text-align: start;
		padding: 20px;
		display: flex;
		flex-direction: column;
		gap: 15px;
	}
	.mainBlock-accountiz--header ul>li span{
		font-weight: bold;
	}
	.mainBlock-accountiz--header{
		max-width: 882px;
		margin: 0 auto;
		padding: 40px;
		background: #7b7d008c;
		border-radius: 20px;
	}
	.mainBlock-accountiz--header .cBlock-accountiz--header{
		text-align: start;
	}

	.bodyClass3-accountiz--header .mainBlock-accountiz--header{
		background: none;
		border-top: 2px dotted #f6dfeb;
		border-bottom: 2px dotted #f6dfeb;
	}
	.bodyClass2-accountiz--header .mainBlock-accountiz--header{
		background: #161616;
		color: #fff !important;
		box-shadow: 0px 0px 20px #161616;
	}
	.bodyClass2-accountiz--header .mainBlock-accountiz--header p{
		color: #fff !important;
	}
	.bodyClass1-accountiz--header .mainBlock-accountiz--header{
		background: #ffffff;
		color: #000000;
		border-left: 2px solid #53354A;
	}
	.bodyClass1-accountiz--header .mainBlock-accountiz--header p{
		color: #000000 !important;
	}
	.order-accountiz--header{
		font-size: 21px !important;
	}

	  @media screen and (max-width: 639px) {
		  .box_main-accountiz--header p{
			padding: 0px 15px;
		  }
		  .box_main-accountiz--header h2{
			  padding: 0px 10px 15px;
		  }
		.mainBlock-accountiz--header{
			padding: 15px;
		}


	}
	@media screen and (max-width: 480px) {
		#mainWrapp-accountiz--header{
			height: 100%;
		}
	}
</style>
<div class="bodyClass2-accountiz--header" id="mainWrapp-accountiz--header">


	<div class="wrapage-block-accountiz--header">
		<div class="box_main-accountiz--header">
			<div class="mainBlock-accountiz--header">
				<p>Dear Valued Client,</p>
<p>Your confidence in our services is deeply valued. We've successfully received your inquiry and are currently addressing it with the utmost care.</p>
<p>Be assured that our expert team is now diligently working to fulfill your request. Striving for excellence in servicing your needs, our primary aim is to deliver outstanding quality and achieve your complete satisfaction.</p>
<p>Should you have any further questions or need additional support, please feel free to reach out via your preferred method of communication. We cherish each client and are always here to provide assistance.</p>
<p class="cBlock-accountiz--header">Warmest regards, The Team!</p>
			</div>
		</div>
	</div>


</div>



      
      <footer class="section footer-07sa">
         <div class="container">
            <div class="footer-thumsasab">
               <div class="footer-menu">
                  <a href="privacy.html">Privacy policy</a>
                  <a href="terms-use.html">Terms & Conditions</a>
                  <a href="legal-disclaimer.html">Disclaimer</a>
                  <a href="our-journey.html">Code of Conduct</a>
                  
                  <a href="responsible.html">Responsible Social Gaming</a>
                  
               </div>
               <div class="">
                  <ul class="ftco-footer-social p-0">
                     <div class="main-privacy__img">
                        
                        <div style="width: 75px;
                           height: 75px;"><img  src="pixelpantry/img-18-67a2856edd815.svg" alt="" /></div>
                        
                     </div>
                  </ul>
               </div>
            </div>
            
         <section class="section ">
            <div class="container">
               <h2 style="text-align: center;" class="title">Disclaimer</h2>
               <div class="disclaimer-thumb">
                  <div class="diassclaimer-box ">
                     <p>The games on our site are only available to users over the age of 18. Remember that they are made for fun, not for real winnings. Enjoy the game!</p>
                  </div>
               </div>
            </div>
         </section>
         
            <div class="row mt-5 imgtl-gallery">
               <div class="col-md-12 text-center">
                  <p class="copyright">
                     Copyright © 2025   
                     CashLuxoria
                  </p>
               </div>
            </div>
         </div>

         

      </footer>

      <script>
         document.querySelectorAll(".msenu-box-modbile a").forEach(function(link) {
           link.addEventListener("click", function() {
               if (window.getComputedStyle(document.querySelector(".navbar-toggle")).display !== "none") {
                   document.querySelector(".navbar-toggle").click();
               }
           });
         });
         
         let menuBtn = document.querySelector(".menu-btn");
         let menu = document.querySelector(".menu");
         
         menuBtn.addEventListener("click", function() {
           menuBtn.classList.toggle("active");
           menu.classList.toggle("active");
         });
         
         
      </script>
      <script>
         var mySwiper = new Swiper ('.swiper-container', {
           
             loop: true,
             effect: 'cube',
             cubeEffect: {
               slideShadows: false,
               shadow: false,
             },
         	 autoplay: {
            delay: 5000,
          },
         
          
             navigation: {
               nextEl: '.swiper-button-next',
               prevEl: '.swiper-button-prev',
             },
         
           
           })
      </script>
      <script>
         function toggleDisplay() {
         	const block1 = document.querySelectorAll(".block1");
         	const block2 = document.querySelectorAll(".block2");
         	const isBlock1Displayed = Array.from(block1).some(
         		(el) => getComputedStyle(el).display === "block"
         	);
         	block2.forEach((el) => {
         		el.style.display = isBlock1Displayed ? "none" : "block";
         	});
         }
         window.addEventListener("DOMContentLoaded", toggleDisplay);
      </script> 

      

</body>
</html>

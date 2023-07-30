<header>
		<nav>
<div class="slideshow-container">
            	<div class="load">
			<div class="row">
				<ul class="main-nav animated slideInDown"
				id="check-class">
				  <li><a href="<?= BASEURL; ?>/home">HOME</a></li>
					<li><a href="<?= BASEURL; ?>/project">PROJECTS</a></li>
					<li><a href="<?= BASEURL; ?>/about">ABOUT</a></li>
					<li><a href="<?= BASEURL; ?>/services">SERVICE</a></li>
					<li><a href="<?= BASEURL; ?>/contact">CONTACT US</a></li>
				</ul>
           
				<a href="#" class="mobile-icon" 
				onclick="slideshow()"><i class="fa fa-bars"></i></a>
			</div>
		</div>
		    </div>
		     <div class="mySlides fade">
                   <div class="numbertext">1/6</div>
                <img src="images/image_5.jpg" style="width: 100%">
            </div>
			<div class="mySlides fade">
                 <div class="numbertext">2/6</div>
                 <img src="images/image_6.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <div class="numbertext">3/6</div>
                <img src="images/image_3.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                   <div class="numbertext">4/6</div>
                <img src="images/ab.jpg" style="width: 100%">
		    </div>
		    <div class="mySlides fade">
                   <div class="numbertext">5/6</div>
                <img src="images/bedroom-design9.jpg" style="width: 100%">
		    </div>
		    
	</div>
</nav>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
 <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
		<div class="main-content-header">
		<h1><span>WELCOME</span> TO <span>INTERIOR DESIGNING </span>WORLD </span></h1>
    <h3>Be faithful to your own taste, <br>because nothing you really like is <br>ever out of style</h3>
  </div>
</header>

 <script type="text/javascript">
 	function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
 	var slideIndex = 0;
showSlides();  
 	 function slideshow(){
 	 	var x= document.getElementById('check-class');
 	 	if(x.style.display==="none"){
 	 		x.style.display="block";
 	 		}else{
 	 			x.style.display="none";
 	 		} 	 
 	 	}
</script>

<div>
    <div class="counting-sec">
      <div class="inner-width">
        <div class="col">
          <i class="far fa-smile-wink"></i>
          <div class="num">1246</div>
          Happy Customers
        </div>

        <div class="col">
          <i class="fas fa-briefcase"></i>
          <div class="num">19</div>
          Services
        </div>

        <div class="col">
          <i class="far fa-money-bill-alt"></i>
          <div class="num">687</div>
          Sells
        </div>

        <div class="col">
          <i class="far fa-object-group"></i>
          <div class="num">87</div>
          Designs
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript">
    $(".num").counterUp({delay:100,time:600});
  </script>
	
	<footer class="footer-distributed">

		<div class="footer-left">

			<h3>HAUSU<span>INTERIOR DESIGNERS</span></h3>

			<p class="footer-links">
				<a href="homepage.html">Home</a>
				·
				<a href="project.html">Projects</a>
				·
				<a href="about.html">About</a>
				·
				<a href="service.html">Services</a>
				·
				<a href="contact.html">Contact Us</a>
				·
	
			</p>

			<p class="footer-company-name">HAUSU &copy; 2023</p>
		</div>

		

			<div class="footer-icons">

				<a href="https://www.facebook.com/Friana.ichirou0106"><i class="fab fa-facebook"></i></a>
				<a href="https://www.instagram.com/ichirou_0106/"><i class="fab fa-instagram"></i></a>
				<a href="#"><i class="fab fa-linkedin"></i></a>

			</div>

		</div>

	</footer>


  </body>
</html>		
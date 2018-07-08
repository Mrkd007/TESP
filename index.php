<?php
session_start();
?>
<!DOCTYPE HTML>


<html>
	<head>
		<title>Tesp</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<style type="text/css">#rcorners1 {
    border-radius: 25px;
   
    padding: 20px; 
    width: 200px;
    height: 150px;    
}
	.alert {
    padding: 30px;
    padding-left: 50px; 
     background: rgba(76, 175, 80, 0.05);
    color: white;
}

.closebtn {
    margin-right: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 60px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}</style>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="logo"><a href="index.php">Technical expertise solution provider</a></div>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li>
				</ul>
			</nav>

		<!-- Banner -->
		<!--
			Note: To show a background image, set the "data-bg" attribute below
			to the full filename of your image. This is used in each section to set
			the background image.
		-->
			<section id="banner" class="bg-img" data-bg="banner1.jpg">
				<div class="inner">
					<header>
						<h1 style="color: #e6e6e"  ><span id="rcorners1" class="w3-padding w3-white w3-opacity-min">&nbsp&nbspTESP&nbsp&nbsp</u></span></h1>
						</strong><?php if (isset( $_SESSION["name"])){?>
  <div class="alert">
  <h3><span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
<?php echo $_SESSION["name"]." "."tesp is thanking you for your comments" ;?></a></li>
       <?php } else { ?>

         
       <?php } ?>

  
</div>
</h3>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

		<!-- One -->
			<section id="one" class="wrapper post bg-img" data-bg="web1.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>WEB DEVELOPMENT</h2>
							
						</header>
						<div class="content">
							<p>“We love what we do and we do,We personally take care of your project. All projects are taken from the scratch to completion with attention to details.</p>
						</div>
						<footer>
							<a href="about.php" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#two" class="more">Learn More</a>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper post bg-img" data-bg="creativity5.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>CREATIVITY</h2>
							<p>12.21.2016</p>
						</header>
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						</div>
						<footer>
							<a href="about.php" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#three" class="more">Learn More</a>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper post bg-img" data-bg="partnership.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>PERTERNERSHIP</h2>
							<p>11.11.2016</p>
						</header>
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						</div>
						<footer>
							<a href="about.php" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#four" class="more">Learn More</a>
			</section>

		<!-- Four -->
			<section id="four" class="wrapper post bg-img" data-bg="cybersecurity4.jpg">
				<div class="inner">
					<article class="box">
						<header>
							<h2>SECURITY</h2>
							<p>10.30.2016</p>
						</header>
						<div class="content">
							<p>Scelerisque enim mi curae erat ultricies lobortis donec velit in per cum consectetur purus a enim platea vestibulum lacinia et elit ante scelerisque vestibulum. At urna condimentum sed vulputate a duis in senectus ullamcorper lacus cubilia consectetur odio proin sociosqu a parturient nam ac blandit praesent aptent. Eros dignissim mus mauris a natoque ad suspendisse nulla a urna in tincidunt tristique enim arcu litora scelerisque eros suspendisse.</p>
						</div>
						<footer>
							<a href="about.php" class="button alt">Learn More</a>
						</footer>
					</article>
				</div>
				<a href="#footer" class="more">Learn More</a>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">

					<h2>Contact us</h2>

					<form action="feedback.php" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" required type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" required type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea required name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<button class="w3-button w3-black w3-section" type="submit" >
        <i class="fa fa-paper-plane"></i>send message
      </button>
					</form>
					 

					<ul class="icons">
						<li><a href="#" class="icon round fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon round fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon round fa-linkedin"><span class="label">Linkedin</span></a></li>
					</ul>

					<div class="copyright">
						&copy; Design: <a href="http://localhost/tesp/index.html">TESP</a>
					</div>

				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php
session_destroy()
?>


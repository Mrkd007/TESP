<!DOCTYPE HTML>
<!--
  Road Trip by TEMPLATED
  templated.co @templatedco
  Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<style>
* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 500px) {
    .column {
        width: 100%;
    }
}
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
  <head>
    <title>Tesp</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <body class="subpage">

    <!-- Header -->
      <header id="header" class="alt">
        <div class="logo"><a href="index.php">Technical expertise solution provider</a></div>
        <a href="#menu"><span>Menu</span></a>
      </header>

    <!-- Nav -->
      <nav id="menu">
        <ul class="links">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="elements.html">Portfolio</a></li>
        </ul>
      </nav><br></br>


    <!-- Content -->
    <!--
      Note: To show a background image, set the "data-bg" attribute below
      to the full filename of your image. This is used in each section to set
      the background image.
    -->
      
            <div class="row">
  <div class="column">
    <img  id="myImg" src="images/screenshot_3.png" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="images/screenshot_3.png" alt="Forest" style="width:100%">
  </div>
  
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>


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
            &copy; Design: <a href="http://localhost/tesp/index.php">TESP</a>
          </div>

        </div>
      </footer>

    <!-- Scripts -->
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>

   <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>

  </body>
</html>
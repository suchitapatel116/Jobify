<html>
<head>
<title>JOBIFY </title>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="login.php"><span>Login</span></a></li>
          <li><a href="reg.php"><span>Registration</span></a></li>
		  <li><a href="about.php"><span>About Us</span></a></li>
          <li class="active"><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.php">JOB<span>IFY</span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"> <a href="#"><img src="images/mys1.jpg" width="960" height="360"></a>
		<a href="#"><img src="images/mys2.jpg" width="960" height="360"></a>
		<a href="#"><img src="images/mys3.jpg" width="960" height="360"></a>
		<a href="#"><img src="images/mys4.jpg" width="960" height="360"></a>
		<a href="#"><img src="images/mys5.jpg" width="960" height="360"></a>
		</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content" style="backgroud-color:yellow">
    <div class="content_resize">
      <div class="mainbar"style="backgroud-color:yellow">
        <div class="article" >
		  <h2><span>Contact</span></h2>
          <div class="clr"></div>
          <p>you can contact us for any queries.</p>

        <p class="contact_info"> <span>Address:</span> 14, AR appt, OP road, Vadodara<br />
          <span>Telephone:</span> 0265-2459823<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">mail@yoursitename.com</a> </p>     	
		</div>
        <div class="article">
          <h2><span>Send us</span> mail</h2>
          <div class="clr"></div>
          <form action="#" method="post" id="sendemail">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="5" cols="25"></textarea>
              </li>
              <li><br>
                <input type="button" value="send">
                <div class="clr"></div>
              </li>
            </ol>
          </form>
        </div>
	  </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="gadget">
          <h2 class="star"><span>Schema</span></h2>
          <div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="company.php">Top Companies</a></li>
            <li><a href="#">Recent job offers</a></li>
            <li><a href="samres.docx">Sample Resume</a></li>
            <li><a href="login.php">Upload Resume</a></li>
            
          </ul>
        </div>		
		</div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
	  <br>
	  <marquee behaviour=alternate>Find the suitable job</marquee>
	  <br>
	  </div>
	  <br><br>
    </div>
  </div>
</div>
</body>
</html>

<html>
<head>
<title>JOBIFY</title>
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
          <li><a href="contact.php"><span>Contact Us</span></a></li>
        </ul>
      </div>
      <div class="logo">
        <h1><a href="index.php">JOB<span>IFY</span></a></h1>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
		<a href="#"><img src="images/mys1.jpg" width="960" height="360" alt="" /></a> 
		<a href="#"><img src="images/mys2.jpg" width="960" height="360" alt="" /></a> 
		<a href="#"><img src="images/mys3.jpg" width="960" height="360" alt="" /></a> 
		<a href="#"><img src="images/mys4.jpg" width="960" height="360" alt="" /><span></a>
		<a href="#"><img src="images/mys5.jpg" width="960" height="360" alt="" /><span></a>
		</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">

	  
  <?php

		session_start();
		if($_SESSION['new']=="no")
		{
		header("location:index.php");
		}
	
?>

<form name="flogout" action="logchk.php" align="right">
<input type="submit" id="lo" name="lout" value="logout">
</form>


	  <div class="article">
          
          <div class="clr"></div>
          <h2><span>WELCOME..!!</span></h2>
		
		  <br>
          <ul class="sb_menu">
	<li><a href="#"><strong>view applicants</strong></a></li>
	<li><a href="#"><strong>Send notifications</strong></a></li>
          </ul>
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
            <li><a href="sampleres.php">Sample Resume</a></li>
            <li><a href="#">Upload Resume</a></li>
            
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

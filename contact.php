<?php session_start() ?>

<!DOCTYPE html>
  <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="..\responsive-portfolio\assets\css\file.css">

<title>Sharif Wilson Portfolio</title>

<body>

<div class="wrapper">
<nav>

  	<h1 id="name"><br>Sharif Wilson</h1>
  


	<br>
	<div id="links">
		<ul>
			<li id="about">
				<a href="file:///C:/Users/Kimdenning/Documents/responsive-portfolio/index.html">About</a>
			</li>
			
			<li id="portfolio">
				<a href="file:///C:/Users/Kimdenning/Documents/responsive-portfolio/portfolio.html">Portfolio</a>
			</li>
			
			<li id="contacts">
				<a href="file:///C:/Users/Kimdenning/Documents/responsive-portfolio/contact.html">Contact</a>
			</li>
		</ul>
	</div>

</nav>

<ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
    <li id="info">There were some problems with your form submission:</li>
    <?php 
    if(isset($cf['errors']) && count($cf['errors']) > 0) :
        foreach($cf['errors'] as $error) :
    ?>
    <li><?php echo $error ?></li>
    <?php
        endforeach;
    endif;
    ?>
</ul>
<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message!</p>


<div id="contact">

	<h1 id="contactHeader">Contact</h1>
 <form method="post" action="process.php">
 	<?php
//init variables
$cf = array();
$sr = false;
 
if(isset($_SESSION['cf_returndata'])){
    $cf = $_SESSION['cf_returndata'];
    $sr = true;
}
?>
	<!-- <form action="mailto:seytorin@yahoo.com">

		Name: <br><input id="nameInput" type="text" name="name" placeholder="John Smith">
		<br>
		Email: <br><input id="email" type="text" name="email" placeholder="example@gmail.com">
		<br>
		Message: <br><textarea id="message" type="text" name="message" rows="14" col="10" maxlength="300"></textarea>
		<br>
		<input id="submit" type="submit" name="Submit"> -->
		<form method="post" action="process.php">
        <label for="name">Name: <span class="required">*</span></label>
        <input type="text" id="nameInput" name="name" value="" placeholder="John Doe" required="required" autofocus="autofocus" />
         
        <label for="email"><br>Email Address: <span class="required">*</span></label>
        <input type="email" id="email" name="email" value="" placeholder="johndoe@example.com" required="required" />
         
        <label for="telephone"><br>Telephone: </label>
        <input type="tel" id="telephone" name="telephone" value="" />
      <div>         
        <label for="message"><br>Message: <span class="required">*</span></label>
        <br><textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"></textarea>
      </div>   
        <span id="loading"></span>
        <input type="submit" value="Submit!" id="submit-button" />
        <p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
    </form>
	</form>
</div>

	<div class="socialLinks">

		<h2>Connect with Me</h2>

		<ul>
			<li>
				<br>
				<a href= "https://github.com/seytorin">
					<img id="github" src="C:\users\kimdenning\documents\responsive-portfolio\assets\images\github image.png">
				</a>
			</li>

			<li>
				<br>
				<a href="https://www.linkedin.com/in/sharif-wilson-a41b5237">
					<img id="linkedin" src="C:\users\kimdenning\documents\responsive-portfolio\assets\images\linkedin.png">
				</a>
			</li>

			<li>
				<br>
				<a href="https://stackoverflow.com/users/8486319/seytorin">
					<img id="stack" src="C:\users\kimdenning\documents\responsive-portfolio\assets\images\stack.png">
				</a>	
			</li>
		</ul>
	</div>

<section>
	<footer id="footer"><br>Copyright © Sharif Wilson</footer>
</section>
</div>

  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>
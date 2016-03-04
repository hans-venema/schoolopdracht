<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script type"text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<script> 
    $(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top - 0
            }, 1000);
            return false;
          }
        }
      });	
    });    
</script>

</head>
<body>

<input type="checkbox" id="toggle-1">

<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="images/logo.png" class="menu_logo">
				<nav>
					<ul>
						<a href="#content_biografie"><li>About</li></a>
						<a href="#projects"><li>Projects</li></a>
						<a href="#contact"><li>Contact</li></a>
					</ul>
				</nav>
				<label for="toggle-1" class="mobiel_logo"><i class="fa fa-bars fa-3x"></i></label>	
			</div>
		</div>
	</div>
</header>

<div id="menu_content">
	<ul>
		<a href="#content_biografie"><li>About</li></a>
		<a href="#projects"><li>Projects</li></a>
		<a href="#contact_left"><li>Contact</li></a>
	</ul>
</div>

<div id="header_container">
	<div id="header_image">
		<div id="header_face">
			
		</div>
		<div id="header_tekst">
			<h1>Hans Venema</h1>
			<h2>Design & Code</h2>
		</div>
	</div>
</div>

<div id="content_biografie">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="about">
					<div id="form_icon" class="icon_container"></div>
					<h3>Responsive Webdesign</h3>
					<p>
						When designing and building a website I focus on producing a solution that achieves your goals at the same time as offering quality user experience. This involves producing a website that can be accessed and used on any device.
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="about">
					<div id="website_icon" class="icon_container"></div>
					<h3>Front-end Development</h3>
					<p>
						I produce visually appealing websites with a focus on strong user experience through functional design and technology applied progressively. I like to use meaningful animation where appropriate.	
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="about">
					<div id="cms_icon" class="icon_container"></div>
					<h3>Back-end</h3>
					<p>
						I provide clients, I often integrate these into WordPress, to allow for easy yet powerful content management.
					</p>
				</div>
			</div>
		</div> 
		<hr>
	</div>
</div>/

<section id="projects" class="bar">
	<div class="container text-center">
	<h1> Projects </h1>

	</div>
</section>

<div id="content_projects">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Beurs4B</h3>
				<a href="http://www.beurs4b.nl/"><img src="images/projects1.png" class="project_image"></a>
			</div>
			<div class="col-md-4">
				<h3>InEibergen</h3>
				<a href="http://www.ineibergen.nl/"><img src="images/projects2.png" class="project_image"></a>
			</div>
			<div class="col-md-4">
				<h3>Stichting Munira</h3>
				<a href="http://www.stichtingmunira.nl/"><img src="images/projects3.png" class="project_image"></a>
			</div>
		</div> 

		<div class="row">
			<div class="col-md-4">
				<h3>Arriva</h3>
				<a href="http://www.arriva.nl/"><img src="images/projects4.png" class="project_image"></a>
			</div>
			<div class="col-md-4">
				<h3>Bol.com</h3>
				<a href="http://www.bol.com/"><img src="images/projects5.png" class="project_image"></a>
			</div>
			<div class="col-md-4">
				<h3>Ophetinternet.nu</h3>
				<a href="http://www.ophetinternet.nu/"><img src="images/projects6.png" class="project_image"></a>
			</div>
		</div>
	</div>
</div>


<section id="contact" class="bar">
	<div class="container text-center">
	<h1> Contact </h1>

	</div>
</section>

<div id="content_contact">
	<div id="image_contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
				  <form role="form" action="" method="post" >
				    <div class="col-lg-6">
				      <div class="form-group">
				        <label for="InputName">Your Name</label>
				        <div class="input-group">
				          <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
				          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
				      </div>
				      <div class="form-group">
				        <label for="InputEmail">Your Email</label>
				        <div class="input-group">
				          <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
				          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
				      </div>
				      <div class="form-group">
				        <label for="InputMessage">Message</label>
				        <div class="input-group">
				          <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
				          <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span></div>
				      </div>
				      <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
				    </div>
				  </form>
				  <hr class="featurette-divider hidden-lg">
				  <div class="col-lg-5 col-md-push-1">
				    <address>
				    <h3>Office Location</h3>
				    <p class="lead">Office location<br>
				    	Street: Gruttostraat 4<br>
				    	City: Lichtenvoorde<br>
				    	Country: The Netherlands<br>

				    	Phone: 0544-377566
				    </p>
				    </address>
				  </div>
			</div> 
		</div>
	</div>
</div>


</body>
</html>
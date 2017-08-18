<!DOCTYPE html>
<html>
<head>
	<title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
#top
{
	color:white;
	background-color:rgb(65,65,64);
	height:100px;
	font-size:20px;
	border-bottom:1px solid grey;
}
#email
{
	color:white;
	right:470px;
	position: relative;
}
#mobno
{
	right:450px;
	position: relative;
}
.navbar
{
	max-height:150px;

}
#brand
{
	color:white;
	font-size:28px;
	margin-left:300px;
}
#design
{
	font-family:initial; 
	color:white;
	margin-left:300px;
}

.navigationbar
{
	bottom:80px;
	position: relative;
	right:200px;
}
#black
{
	width:100%;
	height:75%;
}
</style>

</head>
<body>
	<div id="top" class="text-right">
		<br/>
		<a id="email" href="mailto:rajan@rajandilipmehta.com?Subject=%20" target="_top">rajan@rajandilipmehta1.com</a>
		<a id="mobno" href="tel:+919870018605">+919870018605</a><br/>
		<a id="mobno" href="tel:+91224001020">+91224001020</a>
	</div>
	<div style="background-color:rgb(65,65,64);" class="navbar navbar-inverse ">
		<div class="container">
				<a href="#" class="navbar-brand">
				    <img  src="RD.png" width="40%" height="350%">
					<p style="margin-left:180px;margin-top:-50px;" id="brand">RAJAN & DILIP<br/><br/>MEHTA</p>
					<p style="margin-left:180px;" id="design">Architects & Interior<br/>Designers</p>
				</a>
				<br/><br/><br/><br/><br/>
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="navigationbar">
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li><br/></li>
						<li><a class="active" style="color:white;font-size:18px" href="index.html">Home</a></li>
						<li ><a style="color:white;font-size:18px" href="aboutus.html" >About Us</a></li>
						<li><a class="dropdown-toggle" data-toggle="dropdown" style="color:white;font-size:18px" href="projects.html">Projects</a>
							<ul class="dropdown-menu">
       						 <li><a style="background-color:rgb(65,65,64);color:white" href="projects.html">Residential Projects</a></li>
          					 <li><a style="background-color:rgb(65,65,64);color:white;" href="projects.html">Corporate projects</a></li>
          					 <li><a style="background-color:rgb(65,65,64);color:white;" href="projects.html">Other Projects</a></li>
       						</ul>
						</li>
						<li><a style="color:white;font-size:18px" href="contactus.html">Contact Us</a></li>
					</ul>
					<br/>
				</div>
				</div>
				
		</div>
	</div>
	
	  		<div id="myCarousel" class="carousel slide">
    	<!-- Indicators -->
    		<ol class="carousel-indicators">
      			<li class="item1 active"></li>
      			<li class="item2"></li>
      			<li class="item3"></li>
      			<li class="item4"></li>
      			<li class="item5"></li>
      			<li class="item6"></li>
      			<li class="item7s"></li>
      			
    		</ol>

    		<!-- Wrapper for slides -->
    	<div class="carousel-inner" role="listbox">
    	      <div class="item active">
        		<img src="1_rev.jpg" alt="Chania" width="1800px" height="500px">
        		<div class="carousel-caption">
        	
          		</div>
      </div>

      <div class="item">
        <img src="2_rev.jpg" alt="Chania" width="1800px" height="50px">
        <div class="carousel-caption">
          
         </div>
      </div>
    
      <div class="item">
        <img src="3_rev.jpg" alt="Flower" width="1800px" height="50px">
        <div class="carousel-caption">
                   </div>
      </div>

      <div class="item">
        <img src="4_rev.jpg" alt="Flower" width="1800px" height="50px">
        <div class="carousel-caption">
          </div>
      </div>
      <div class="item">
        <img src="5_rev.jpg" alt="Chania" width="1800px" height="5px">
        <div class="carousel-caption">
         
         </div>
      </div>
      <div class="item">
        <img src="6_rev.jpg" alt="Chania" width="1800px" height="50px">
        <div class="carousel-caption">
          
         </div>
      </div>
      <div class="item">
        <img src="7_rev.jpg" alt="Chania" width="1800px" height="50px">
        <div class="carousel-caption">
          
         </div>
      </div>
 

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<script type="text/javascript">

	$(document).ready(function(){
		
		$(window).scroll(function(){
			$(".aboutus").slideDown(4000);
			$("#workpara").slideDown(4000);		
			$(".recentpro").slideDown(5000);
			$("#contactus").slideDown(8000);
		
			$("#left1").fadeIn(5000).animate({
				left:'300px'
			});
			$("#right2").fadeIn(6500).animate({
				right:'300px'
			});
			$("#left3").fadeIn(7000).animate({
				left:'300px'
			});
			$("#right1").fadeIn(5500).animate({
				right:'300px'
			});
			$("#left2").fadeIn(6000).animate({
				left:'300px'
			});
			$("#right3").fadeIn(7500).animate({
				right:'300px'
			});
		});	

	});
</script>
<div style="background-color:rgb(65,65,64);">
	<h1 class="aboutus" style="text-align:center;display:none;color: white">ABOUT US</h1>
	<h3 class="aboutus" style="text-align:center;display:none;color: white">Our Work</h3>
	<div id="workpara" style="color: white;position: relative;display:none;font-size:20px;margin-left:400px;margin-right:400px">Rajan & Dilip Mehta was founded in 1973 and has since grown into a firm that believes in creating inspirational projects. Through our designs, we strive to find the perfect balance between comfort, practicality and beauty. Our goal is not only to create stunning spaces, but to improve lives. Contact us to learn what we're able to accomplish.
	<br/>
	<br>
	<button style="border-radius:25px;margin-left:350px;background-color: white;color:black" type="button">Read More</button>
	<br/>
	<br/>
	</div>
</div>
<div>
	<br/>
	<h1 class="recentpro" style="color: black;text-align: center;">RECENT PROJECTS</h1>
	<h3 class="recentpro" style="text-align:center;color: black">Explore Our Work</h3>
	<br/>
</div>
<div style="background-color:rgb(65,65,64);">
	<br/><br/><br/>
	<div id="left1" style="display:none;margin-left:100px;margin-right:900px;position:relative;color:white;font-size:25px;font-family:Courier">RESIDENTIAL PROJECT
	<br/>
	<br/>
	&nbspJanuary 25, 2017
	</div>
	<div id="right1" style="position:relative;display:none;margin-left:1200px;margin-top:-168px"><img id="resproject" src="1_rev.jpg" width="500px" height="350px" alt="image"></div>
</div>
<div style="background-color:rgb(65,65,64);">
	<div id="left2" style="position:relative;display:none;margin-left:100px;margin-right:2000px"><img id="officerenovation" src="1_rev.jpg" width="500px" height="350px" alt="image"></div>
	<div id="right2" style="display:none;position:relative;font-family:Courier;font-size:25px;margin-left:1300px;margin-top:-350px;height: 350px;color: white;">
	<br/><br/>OFFICE RENOVATION
	<br/>
	<br/>
	&nbspJanuary 25, 2017

	</div>
	
</div>
<div style="background-color:rgb(65,65,64);">
	<br/><br/><br/>
	<div id="left3" style="display:none;position:relative;margin-left:100px;margin-right:900px;position:relative; color:white;font-size:25px;font-family:Courier">&nbsp&nbspRETAIL OUTLET
	<br/>
	<br/>
	&nbspJanuary 25, 2017
	</div>
	<div id="right3" style="position:relative;display:none;margin-left:1200px;margin-top:-168px"><img id="retailout" src="1_rev.jpg" width="500px" height="350px" alt="image"></div>
</div>
<div id="contactus" style="text-align:center;position:relative;display:none;font-family: sans-serif;font-size: 35px">CONTACT US</div>
 <div style="height: 500px;width: 50%;margin-left:450px;" id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDutRO6j9RA1_ZhgWZ1nZcCteitLxglByM&callback=initMap">
    </script>
    <div>
    <br/>
 	<span style="margin-left:350px">
 		<input style="font-size:20px" type="text" size="50" placeholder="Name">
 	</span>
 	&nbsp&nbsp<span>
 		<input style="font-size:20px" type="email" size="50" placeholder="Email">
 	</span><br/><br/>
 	<span style="margin-left:350px">
 		<input style="font-size:20px" type="text" size="107" placeholder="Subject">
 	</span><br/><br/>
 	<span style="margin-left:350px">
 	<input style="font-size:20px" type="tel" size="107" placeholder="Phone">
 	</span><br/><br/>
 	<span style="margin-left:350px">
 	<input style="font-size:20px" type="text" size="107" placeholder="Address">
 	</span><br/><br/>
 	<span style="margin-left:350px">
 	<textarea rows=4 cols=110 style="font-size:20px">Message
 	</textarea>
 	</span><br/><br/>
 	<div style="margin-left:350px;width:1000px;background-color:black">
 	<input class="btn" style="margin-left:450px;font-size:20px;background-color:black;color: white" type="submit" value="Send">
 	</div><br/><br/>
 </div>

 <div style="background-color:rgb(65,65,64);">
<div style="margin-left:600px;font-family: sans-serif;font-size:20px;color: white"> 	
<br>rajan@rajandilipmehta.com<br>+91 9870018605<br>711, Tulsiani Chambers,<br>Nariman Point, Mumbai- 400021, Maharashtra,<br>India.<br><br>
</div>

 </div>
 <div style="background-color:white;margin-left:450px;font-family: sans-serif;font-size:16px;">
 &copy 2017 BY RAJAN & DILIP MEHTA ARCHITECTS & INTERIOR DESIGNERS. CREATED BY <a href="#">DIGITAL RAVEN</a>

</div>
<script>
$(document).ready(function(){
    // Activate Carousel
    $("#myCarousel").carousel();
    
    // Enable Carousel Indicators
    $(".item1").click(function(){
        $("#myCarousel").carousel(0);
    });
    $(".item2").click(function(){
        $("#myCarousel").carousel(1);
    });
    $(".item3").click(function(){
        $("#myCarousel").carousel(2);
    });
    $(".item4").click(function(){
        $("#myCarousel").carousel(3);
    });
    
    // Enable Carousel Controls
    $(".left").click(function(){
        $("#myCarousel").carousel("prev");
    });
    $(".right").click(function(){
        $("#myCarousel").carousel("next");
    });
});
</script>

</body>
</html>
<?php
 $to = "somebody@example.com";
 $subject = "My subject";
 $txt = "Hello world!";
 $headers = "From: webmaster@example.com" . "\r\n" .
 "CC: somebodyelse@example.com";

 mail($to,$subject,$txt,$headers);
 ?> 
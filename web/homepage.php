<!DOCTYPE HTML>
<html lang="en-us">
<head>

<title>CS 313 Homepage</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" > </script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript" src="homepageJs.js"></script>
<link rel="stylesheet" type="text/css" href="homepage_style.css">
</head>
<body > 
  <div class="container-fluid" id="main">
  <h1>Coleen Hull</h1><br><br>
    <div class="row">
      <div class="col-md-4"> 
	    <p id="Me" >About Me</p>
		<script>
		  document.getElementById("Me").onclick = function() {myFunction()};
		</script>
	  </div>
      <div class="col-md-4">
        <img class="img-responsive" src="/Mom.jpg" alt="Me"style="max-height:425px" >
      </div>
      <div class="col-md-4">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
		  <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
		  <li data-target="#myCarousel" data-slide-to="5"></li>
		  <li data-target="#myCarousel" data-slide-to="6"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
		  <div class="item active">
            <img src="/Jared.jpg" alt="Los Angeles" style="width:70%;">
            <div>
		      <p>Jared</p>
			</div>
		  </div>

          <div class="item">
            <img src="/Kristine.jpg" alt="Los Angeles" style="width:70%;">
            <div>
		      <p>Kristine</p>
			</div>
		  </div>

          <div class="item">
            <img src="/Ashley.jpg" alt="Chicago" style="width:70%;">
		    <div>
		      <p>Ashley</p>
		    </div>
          </div>
    
          <div class="item">
            <img src="/Katelynn3.jpg" alt="New york" style="width:70%;">
		    <div>
		      <p>Katelynn</p>
			</div>
          </div>
		  
		  <div class="item">
            <img src="/Scott1.JPG" alt="Chicago" style="width:70%;">
		    <div>
		      <p>Scott</p>
			</div>
          </div>
    
          <div class="item">
            <img src="/Sara.JPG" alt="New york" style="width:70%;">
		    <div>
		      <p>Sara</p>
			</div>
          </div>
		
		  <div class="item">
            <img src="/Emily.JPG" alt="New york" style="width:70%;">
		    <div>
		      <p>Emily</p>
			</div>
          </div>
		
        </div>
	    <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a> 
	  </div>
    </div>
    </div> <br><br>
    <div id="time">
     <?php
     date_default_timezone_set("America/New_York");
     echo "The time is " . date("h:i:sa");
     ?>
    </div>
  </div>
</body>
</html>
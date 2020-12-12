<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="css/form.css"> 
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<nav class="navbar navbar-expand-lg navbar-dark  bg-dark">
  <a class="navbar-brand" href="#"><h4>Shri. Durga Comp.Coaching Center.</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/yashpro/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="services.php" >Services</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Us</a>
      </li>
  
      
    </ul>

    <form class="form-inline my-2 my-lg-0" maction="" method="POST" target="_blank">
      <input class="form-control mr-sm-2" type="search" placeholder="Search here" aria-label="Search" name="keywords" required="">
     
	 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="keys_submit">Search
	  <?php   
		$base="Sh. Durga Computer Coaching."; // Change base here 
		$search_URL="http://www.google.com/search?q="; // Google Search Query URL  
		if(isset($_POST['keys_submit'])){ 
		echo $keywords=$_POST['keywords'];
		header("location: ".$search_URL.$keywords.' '.$base );

	}
		?>
	 
	  
	  
	  </button>
    </form>
  </div>
</nav>



<section class="my-5">
<div class ="py-5 ">
<h2 class="text-center"> Our Services </h2>  
</div> 
	<div class="container-fluid">
		<div class="row">
			
			
			
			<div class="col-lg-4 col -md 4 col - 12">
				<div class="card" >
					<img class="card-img-top" src="c++.jpg" alt="Card image">
						<div class="card-body">
						<h4 class="card-title"class="text-center">"C++"
						</h4>
						<p class="card-text">Programming Language.
						</p>
						<a href="c++.pdf" class="btn btn-primary">See Contents
						</a>
						
						</div>
				</div>
			</div>
			
			
			
			<div class="col-lg-4 col -md 4 col - 12">
				<div class="card" >
					<img class="card-img-top" src="505.jpg" alt="Card image">
						<div class="card-body">
						<h4 class="card-title">"JAVA"
						</h4>
						<p class="card-text">Programming Language.
						</p>
						<a href="java.pdf" class="btn btn-primary" >See Contents
						</a>
						
						</div>
				</div>
			</div>
			
			
			
			<div class="col-lg-4 col -md 4 col - 12">
				<div class="card" >
					<img class="card-img-top" src="507.jpg" alt="Card image">
						<div class="card-body">
						<h4 class="card-title">"PYTHON"
						</h4>
						<p  text-centerclass="card-text">Programming Language.
						</p>
						<a href="python.pdf" class="btn btn-primary">See Contents
						</a>
			     		</div>
				</div>
			</div>
		</div>	
		
	</div>
	</section>
	<footer>
	<p class="p-3 bg-dark text-white text-center">@ShriDurgaTechnicalProduction</p>
</footer>	


</html>

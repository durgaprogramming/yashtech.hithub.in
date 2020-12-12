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

	
	<section class="my-5"></br>	
	</br>	
	</br>	
<div class ="py-1 ">
<h2 class="text-center"> Contact Us</h2>  
</div> 
<div>
<h3 class="text-center"><b><u>Shri. Durga Computer Coaching Center</b></u></h3> 
<h4 class="text-center">Near Turi Bazaar,</h4> 
<h4 class="text-center">Mandir Devidawara,</h4>
<h4 class="text-center">Firozepur City,</h4>
<h4 class="text-center">PUNJAB:152002(Ind.)</h4>
<h4 class="text-center">E-mail: yashdevgan60@gmail.com</h4>
<h4 class="text-center">Mobile:89680-81681,62805-52601</h4>


<p class="text-center"> This is <b>"Sh. Durga Computer Coaching Center".</b>
		Pillar of Computer Education. Here you can achieve 
		reliability and Quality of education. At this time 
		you can learn no. of languages </br>like:-
		<b>VB , C , C++ , JAVA ,PYTHON WITH MYSQL , HTML , PHP.</b>
		So don't waste time, Lets Start.
		</p>
</div>
</div>
</br>
</br>
</br>
</br>
<footer>
	<p class="p-3 bg-dark text-white text-center">@ShriDurgaTechnicalProduction</p>
</footer>	
</body>
</html>

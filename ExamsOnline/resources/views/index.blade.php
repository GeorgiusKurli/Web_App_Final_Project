@extends('layouts.master')

@section('content')
	<script type="text/javascript">
		document.getElementById('nav_home').className= "nav-item active";
	</script>

	
	
	<div style="background-color: lightgrey">

	<div class="bd-example">
	  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-pause="false">
	    <ol class="carousel-indicators">
	      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	    </ol>
	    <div class="carousel-inner">
	      <div class="carousel-item active">
	        <img src="IMG/quote1.jpg" class="d-block w-100">
	        <div class="carousel-caption d-none d-md-block">
	        </div>
	      </div>
	      <div class="carousel-item">
	        <img src="IMG/quote2.jpg" class="d-block w-100" >
	        <div class="carousel-caption d-none d-md-block">
	        </div>
	      </div>
	      <div class="carousel-item">
	        <img src="IMG/quote3.jpg" class="d-block w-100">
	        <div class="carousel-caption d-none d-md-block">
	        </div>
	      </div>
	    </div>
	    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	      <span class="carousel-control-next-icon" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>

	  </div>
	</div>


	<img class="mx-auto d-block" style= "width: 100%; height: auto " src="IMG/Blue EO.png">



		<h1 class="mt-4" style="color: #1475CF; text-align: center">Who is Exams Online for?</h1>
		<br>
		<h2 style="text-align: center; font-family: comic sans; font-size: 35px">Exams Online was designed for everybody in the World Wide Web who keeps failing on an exam. However, it was mainly targeted for those who are nervous or scared before taking an exam without the awareness of what are the possibly asked question in that specific topic of an exam. On Exams Online, we allow the user to choose any topic possible to make or take the exams.</h2>	
		<br>



	<img class="mx-auto d-block" style= "width: 100%; height: auto " src="IMG/Blue EO.png">


		<h1 class="mt-4" style="color: #1475CF; text-align: center">Our Vision and Mission</h1>
		<br>
		<div style="text-align: center; font-family: comic sans; font-size: 35px">Exams Online believes that every student or person has some potential of suceeding anything in the world, and by seeing those potentials, we also believe that we can help everyone who are struggling on taking any test by providing this kind of service online for free to deliver them to their success. </div>	
		<br>



	<img class="mx-auto d-block" style= "width: 100%; height: auto " src="IMG/Blue EO.png">	


		<h1 class="mt-4" style="color: #1475CF; text-align: center">What Are You Waiting For?</h1>
		<br>
		<div style="text-align: center; font-family: comic sans; font-size: 35px">Join the Exams Online community to discover the freedom of taking an exam online. We are here to help you discover more about the questions coming up on your exam.</div>
		<br>

		<img class="mx-auto d-block" style= "width: 100%; height: auto " src="IMG/Blue EO.png">	
		
		<h1 class="mt-4" style="color: #1475CF; text-align: center">Sign Up Now!</h1>
		<br>
		<div style="text-align: center; font-family: comic sans; font-size: 35px; font-weight: bold;">Sign up and become a member (it's free) and you'll get unlimited access to our questions available online.</div>
		<br>		
		<br>
		<img class="mt-3" src="IMG/quizicon.png" style="width: 10%; height: 30%; float:left; margin-left: 15%; margin-right: auto;">
		<br>
		<h3>Here's what you will get if you sign up to Exams Online:</h3>
		<h5>Unlimited access of the contents<br>Create new test<br>Take a test</h5>
		<br>
		<br>
		<img class="mx-auto d-block" style= "width: 100%; height: auto " src="IMG/Blue EO.png">	
		<h1 class="mt-4" style="text-align: center; color: #1475CF;" >Ready to take your exams?</h1>
		<br>
		<h2 style="text-align: center"> Sign Up now!</h2>
		<img class="my-5" style="display:block; margin-left: auto; margin-right: auto; width: 40%;" src="https://media1.giphy.com/media/12vJgj7zMN3jPy/giphy.gif?cid=3640f6095c9373d368563067737c3697"> 
		<div>
			<br>
		</div>
	</div>

@include('includes.foot')
@stop
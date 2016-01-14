<?php
	$input = strtolower($_GET['input']);
	if(substr($input, 0, 7)==="who is ")
	{
		$newinput = substr($input, 7);
		header( 'Location: http://en.wikipedia.org/wiki/'.$newinput ) ;
	}
	else if(substr($input, 0, 8)==="who was ")
	{
		$newinput = substr($input, 8);
		header( 'Location: http://en.wikipedia.org/wiki/'.$newinput ) ;
	}
	else if(substr($input, 0, 9)==="where is ")
	{
		$newinput = substr($input, 9);
		header( 'Location: https://www.google.com/maps/place/'.$newinput ) ;	
	}
	else if(substr($input, 0, 5)==="open " && strpos($input,'.')===false)
	{
		if(strpos($input," ")===true)
		{
			$newinput = str_replace(" ", "",$input);
		}
		$newinput = substr($input, 5);
		header( 'Location: http://'.$newinput.'.com') ;	
	}
	else if(substr($input, 0, 5)==="open " && strpos($input,'http://')===true)
	{
		$newinput = substr($input, 5);
		header( 'Location: '.$newinput) ;	
	}
?>	

<html>
	<head>
		<title>qksrch</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="shortcut icon" href="http://hackgician.net/img/Logo.png">
		<script src="js/typed.js"></script>
		<script src="js/jQuery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scrolling.js"></script>
		
	</head>

	<body>
	<div class="jumbotron" align="center">
			<h1>Albert</h1>
			<form class="form-inline" role="form" method="get" name="inputform">
				<input type="text" class="form-control" id="exampleInputEmail2" placeholder="Search input" name="input" size="50%">
				<button type="submit" class="btn btn-default">Search</button>
			</form>
			<script>
  				$(function(){
      				$(".swag").typed({
        				strings: ["First sentence.", "Second sentence."],
        				typeSpeed: 0
      				});
  				});

  	</script>
			<h2>Not getting instant answers? See what you can search <span><button id="swag" class="btn btn-default">Click Me</button></span></h2>
			<div id="list">
			<h4 id="1">Where is Ann Arbor</h4>
			<h4 id="2">Define awesome</h4>
			<h4 id="3">Who is DJ Khaled</h4>
			<h4 id="4">Where can I find an Oculus VR</h4>
			<h4 id="5">Open quora.com</h4>
			<h4 id="6">Open Facebook</h4>
			<h4 id="7">Play music</h4>
			<h4 id="8">Search Youtube for Cat videos</h4>
			<h4 id="9">Go to Google Drive (only Google Products so far, i.e. Classroom, maps, mail, photos etc)</h4>
			</div>
			<h4>You can replace Google automatic search in your browser as well! In your browser settings, add a new search engine, and for the name, it's qksrch, for the keyword</h4>
		</div>

	<!-- WOW.js -->
		<script type="text/javascript">
		$("#list").hide();
		$("#swag").click(function(){
			$("#list").show();
		});
		</script>
		<script src="js/WOW.js"></script>
		<script type="text/javascript">new WOW().init();</script>
		<script type="text/javascript">
			function validation()
			{
				var x = document.forms["inputForm"]["input"].value;
				alert(x);
			}
		</script>
	</body>
</html>
	
	</body>

</html>

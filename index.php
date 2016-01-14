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

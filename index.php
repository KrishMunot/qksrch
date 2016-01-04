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
		
	</head>

	<body>
	
	</body>

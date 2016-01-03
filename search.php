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
?>	

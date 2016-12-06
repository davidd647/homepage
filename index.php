<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>D-D-Dev's Home Page</title>
</head>
<body>
	<div style="height: 300px; overflow:scroll; border: solid red 5px;">
		<?php 
			//woah! you can get the entire contents of a webpage like this!
			$content = file_get_contents('https://www.reddit.com/r/spacex');
	 
	 		//regex is weird, but we can use it to extract the part of the webpage we want!
			preg_match_all("/<table><thead>\n<tr>\n<th align=\"center\">NET Date(.*?)<\/table>/ms", $content, $match);

			//I don't know why I have a two-dimensional array, but whatever. this prints the extracted stuff on screen!
			echo $match[0][0];
	
		?>

	</div>
</body>
</html>




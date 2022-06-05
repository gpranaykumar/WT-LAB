<html>
	<head>
		<title> WT LAB </title>
	</head>
	<body>
		<?php
			$s = "hello Web technology";
			echo "The string length is ".strlen($s)."<br>";
			echo "The number of words in string are ".str_word_count($s)."<br>";
			echo "The replaced string is ".str_replace("Web technology","pranay",$s)."<br>";
			echo "The string position is ".strpos($s,"Web")."<br>";
			echo "The reverse string is ".strrev($s)."<br>";
		?>
	</body>
</html>
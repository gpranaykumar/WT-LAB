<html>
	<head> 
			<title> WT_LAB </title>
	</head>
	<body>
		<?php 
			$myfile = "file1.txt";
			$myfilelink = fopen($myfile,'r');
			$myfilecontents = fread($myfilelink,filesize($myfile));
			fclose($myfilelink);
			echo $myfilecontents;
			
			$myfile2 = "file2.txt";
			$myfilelink2 = fopen($myfile2,'wr') or die("can't open file");
			$newcontents = $myfilecontents;
			fwrite($myfilelink2,$newcontents);
			fclose($myfilelink2);
		?>
	</body>
</html>
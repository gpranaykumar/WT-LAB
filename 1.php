<html>
	<body>
		<h1> Program for prime numbers </h1>
		<?php
			$count = 0;
			$num = 2;
			while($count<=50){
				$divisor = 0;
				for($i=1;$i<=$num;$i++){
					if(($num%$i) == 0){
						$divisor++;
					}
				}
				if($divisor <3){
					echo $num.' ';
				}
				$num = $num +1;
				$count = $count +1;
			}
		?>
	</body>
	
</html>
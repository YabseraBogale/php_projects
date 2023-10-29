<html>
	<head>
	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
		for($i =1;$i<12;$i++){
			echo "<div class='main'>";
			for($j =1;$j<12;$j++){
				$mu=$j*$i;
				$isPrime=true;
				for($k=2;$k<=(Integer)sqrt($mu);$k++){
					switch($mu){
						case $mu==4:
							$isPrime=false;
							break;
						case $mu==6:
							$isPrime=false;
							break;
						case $mu==9:
							$isPrime=false;
							break;
						case $mu%$k==0:
							$isPrime=false;
							break;	
					}
				}
				if($mu==1){
					$isPrime=false;
				}
				if($isPrime==true){
					echo "<div class='prime'></div>";
				}
				else{
					echo "<div class='notPrime'></div>";
				}
				
			}
			echo "</div>";
		}
		?>
	
	</body>
	</html>

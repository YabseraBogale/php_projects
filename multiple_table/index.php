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
				for($k=2;$k<(Integer)sqrt($mu);$k++){
					switch($mu){
						case $mu==1:
							isPrime=false;
							break;
						case $mu==2:
							break;
						case $mu==3:
							break;
						case $mu==5:
							break;
						case $mu==7:
							break;
						case $mu%$k==0:
							isPrime=false;
							break;	
					}
				}
				if($isPrime==true){
					echo "<div class='prime'>$mu</div>";
				}
				else{
					echo "<div class='notPrime'>$mu</div>";
				}
				
			}
			echo "</div>";
		}
		?>
	
	</body>
	</html>

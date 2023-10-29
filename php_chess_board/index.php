<html>
	<head>
		<link rel="stylesheet" href="style.css">
		</head>
		<title>Chess Board</title>
		<body>
		<?php
			
			for($i=0;$i<8;$i++){
				for($j=0;$j<8;$j++){
					
					if(($i+$j)%2==0){
						echo '<div class="item_red"></div>';
					}
					
				}
				echo "<br>";
			}
		
		?>
		</body>
	</html>

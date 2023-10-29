<html>
	<head>
		<link rel="stylesheet" href="style.css">
		</head>
		<title>Chess Board</title>
		<body>
		<?php
			
			for($i=0;$i<8;$i++){
				?>
				<div class="main">
				<?php
				for($j=0;$j<8;$j++){
					
					if(($i+$j)%2==0){
						echo '<div class="item_red"></div>';
					}
					else{
						echo '<div class="item_blue"></div>';
					}
					
				}
				?>
				</div>
				<?php
			}
		
		?>
		</body>
	</html>

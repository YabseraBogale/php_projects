<?php
	$numbers=[1,2,3,4,5,6,7,8,9,0];
	$operation=['+','-','*','/'];
?>

<html>
	<body>
		<form method="post">
			<?php
				for($i=0;$i<3;$i++){
					echo "<button>$numbers[$i]</button>";
				}
				
			?>
		</form>
		</body>
	</html>

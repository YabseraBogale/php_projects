<?php
	$numbers=[1,2,3,4,5,6,7,8,9,0];
	$operation=['+','-','*','/'];
?>

<html>
	<body>
		<form method="post">
			<?php
				foreach($numbers as $i){
					echo "<button>$i<button>";
				}
				
			?>
		</form>
		</body>
	</html>

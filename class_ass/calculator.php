<html>
	<head>
		<link rel="stylesheet" href="./calculator_static/style.css">
		<title>simple calcultor</title>
		</head>
		<body>
			<?php
				$result=0;
				
			 ?>
			<div class="form">
			<div class="result">
			<?php
				echo "$result";
			?></div>
			<form method="post" action ="./calculator.php">
				<div class="look">
					<div class="f1">
						<button value="1" name="1">1</button>
						<button value="2" name="1">2</button>
						<button value="3" name="1">3</button>
					</div>
					<div class="f2">
						<button value="4" name="1">4</button>
						<button value="5" name="1">5</button>
						<button value="6" name="1">6</button>
					</div>
					<div class="f3">
						<button value="7" name="1">7</button>
						<button value="8" name="1">8</button>
						<button value="9" name="1">9</button>
					</div>
					<div class="f4">
						<button value="0" name="1">0</button>
						<button value="+" name="1">+</button>
						<button value="-" name="1">-</button>
					</div>
					<div class="f5">
						<button value="/" name="1">/</button>
						<button value="*" name="1">*</button>
						<button value="√" name="1">√x</button>
					</div>
				</div>
				<input type="submit" value="Enter">
				<input type="reset" value="Cancel">
			</form>
			</div>
		</body>
	</html>

<?php
	switch(){
		
	}

?>

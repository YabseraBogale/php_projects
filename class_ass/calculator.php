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
						<button value="1">1</button>
						<button value="2">2</button>
						<button value="3">3</button>
					</div>
					<div class="f2">
						<button value="4">4</button>
						<button value="5">5</button>
						<button value="6">6</button>
					</div>
					<div class="f3">
						<button value="7">7</button>
						<button value="8">8</button>
						<button value="9">9</button>
					</div>
					<div class="f4">
						<button value="0">0</button>
						<button value="+">+</button>
						<button value="-">-</button>
					</div>
					<div class="f5">
						<button value="/">/</button>
						<button value="*">*</button>
						<button value="√">√x</button>
					</div>
				</div>
				<input type="submit" value="Enter">
				<input type="reset" value="Cancel">
			</form>
			</div>
			<script src="./calculator_static/app.js"></script>
		</body>
	</html>

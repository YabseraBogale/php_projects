
<html>
	<head>
		<link rel="stylesheet" href="./image.css">
		</head>
		<body>
			<?php 
				$page=['home'=>'home.php',
						'about'=>'about.php',
						'login'=>'login.php',
						'signup'=>'sign.php'];
			?>
			<nav>
				<h3>Welcome</h3>
				<ul>
					<?php
						foreach($page as $key=>$value){
							?>
							<li><a href="./<?php
								echo $value;
							?>"><?php
							echo $key;
							?>
							</a></li>
							<?php
						}
					?>
					</ul>
				</nav>
			
			
			
			<div class="main-img">
				<?php for($i=1;$i<=5;$i++){
					?><img src="./image/<?php
					echo "$i.jpeg";
				?>"><?php
					echo "<br>";}
				?>
				</div>
			</body>
	</html>

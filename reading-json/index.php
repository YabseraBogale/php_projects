
// this worked fine but the time-space complexity kills the pc with its n^2
<html>
	<head>
		<link rel="stylesheet" href="./style.css">
		<title>Reading Json</title>
		</head>
		<body>
			<?php
				$json=file_get_contents('freelance_ethio_messages.json');
				$json_data=json_decode($json,true);
				foreach($json_data as $key=>$value){
					?>
						
						<br>
						<div class="array"><?php 
							foreach($value as $_key=>$_value){
								?>
	
								<br>
								<p><?php 
									if($_value["message"]!=""){
										?>
										<h5><?php echo $_key;?></h5>
										<?php
										echo $_value["message"];
									}
								
								?></p>
								<br>
								<?php
							}
						?></div>	
						<br>
					<?php		
				}
			?>
		</body>
	</html>

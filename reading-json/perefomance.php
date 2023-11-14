
// this worked fine but the time-space complexity kills the pc with its n^2
<html>
	<head>
		<link rel="stylesheet" href="./style.css">
		<title>Reading Json</title>
		</head>
		<body>
			<?php
				$json=file_get_contents('smu_cs_club_messages.json');
				$json_data=json_decode($json,true);
				foreach($json_data as $key=>$value){
					?>
						<p><?php echo var_dump(); ?></p>
						<br>						
					<?php		
				}
			?>
		</body>
	</html>

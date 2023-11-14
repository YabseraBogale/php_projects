/*
 this worked fine but the time-space complexity kills the pc with its O(n^2).
 has gone down one level to O(n)
*/<html>
	<head>
		<link rel="stylesheet" href="./style.css">
		<title>Reading Json</title>
		</head>
		<body>
			<?php
				$json=file_get_contents('freelance_ethio_messages.json');
				$json_data=json_decode($json,true);
				$count=0;
				foreach($json_data["messages"] as $key=>$value){
					?>
						<p><?php 
							if(substr($json_data["messages"][$key]["message"],"#Software_design_and_Development")>0){
								echo $json_data["messages"][$key]["message"];
							} else{
								echo $json_data["messages"][$key]["message"];
							}
						
						 ?></p>
						<br>						
					<?php		
					$count+=1;
					if($count==100){
						break;
					}
				}
			?>
		</body>
	</html>

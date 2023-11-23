<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
    <nav>
        <ul>
            <?php
                $pages=[
                    ['home'=>'home.php'],
                    ['login'=>'login.php'],
                    ['regsister'=>'regsister.php'],
                ];
                foreach($pages as $page){
                    foreach($page as $key=>$value){
                        ?>
                        <li><a href="<?php echo $value?>"><?php echo $key;?></a></li>
                        <?php
                    }
                }
            ?>
        </ul>
    </nav>
    <div class="body">
        <h2>
            What is CarTrace ?
        </h2>
        <p>
            A car tracking application is a software application that uses GPS technology to track the location of a vehicle. Car tracking applications can be used for a variety of purposes, including:
        </p>
        <ul>
            <li>
            Stolen vehicle recovery: Car tracking applications can be used to track the location of a stolen vehicle, which can help police recover the vehicle and arrest the thief.
            </li>
            <li>
            Fleet management: Car tracking applications can be used to track the location of a fleet of vehicles, which can help businesses optimize their routes and save money on fuel
            </li>
            <li>
            Personal use: Car tracking applications can be used by individuals to track the location of their own vehicles, which can be helpful for finding a parked car or for tracking the progress of a road trip.
            </li>
        </ul>
    </div>
</body>
</html>
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
</body>
</html>
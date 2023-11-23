<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                    ?>
                    <li><a href="<?php echo $page['home']; ?>"><?php echo ?></a></li>
                    <?php
                }
            ?>
        </ul>
    </nav>
</body>
</html>
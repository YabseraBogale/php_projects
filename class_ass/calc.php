<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Div</title>
    <style>
        body{
            width:100%;
            height:100vh;
        }
        h1{
            text-align:center;
        }
        .container{
            width:100%;
            min-height:250px;
            background:gray;
            display:grid;
            grid-template-columns: auto auto auto auto;
            
        }

        .container .item{
            width:220px;
            height:220px;
            margin:1rem;
            background: #fff;
            padding: 20px;
        }
    </style>
</head>
<body>
    <h1>Dynamic Page using For loop</h1>
    <div class="container">
        
        <?php
        $items = [1,2,3,4,5,6,7,8,9];
        foreach($items as $item){
            ?>
            <div class="item">
                <?php echo $item; ?>
            </div>

        <?php
        }
        ?>
    </div>
</body>
</html>

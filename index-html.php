<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and HTML</title>
    <style>
        .wrapper {
            text-align: center;
            background-color: gray;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1><?php

            $name = isset($_GET['name']) ? $_GET['name'] : null;
            // $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : null;

            if($name) {
                echo "Hello {$name}";
            }

        ?></h1>
    </div>
</body>
</html>
<?php require_once 'Application/functions.php' ?>

<!- html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="Application/Style/style.css">
    <title>Photos</title>
</head>
<body>
    <main>
        <?php 
            require_once 'Application/Templates/header.html';
            $jsonfile = file_get_contents("Application/Datas/photos.json");
            if(isset($_GET["page"]))
            {
                $page = $_GET["page"];
                switch ($page) 
                {
                    case 'home':
                        require_once 'Application/Core/home.php';
                        break;
                    
                    case 'upload':
                        require_once 'Application/Core/add.php';
                        break;
                    default:
                        include 'Application/Core/home.php';
                        break;
                }
            }
            else 
            {
                echo "<br />Nincs értékadás az index.php-ban.";
            }
        ?>
    </main>
</body>
</html>
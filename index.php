<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
    <div class='row'>
        <?php
            $res = file_get_contents("https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json");
            $result = json_decode($res);
            foreach($result->tracks->items as $spotify){
                $img = $spotify->album->images[0]->url;
                $name = $spotify->album->name;
                echo "<div class='col-4 card'><img src='$img' class='card-img-top' alt='Card image cap'><h3>$name</h3>";
                $artist = $spotify->artists[0]->name;
                $date = $spotify->album->release_date;
                echo "<h>Artist : $artist</h><h>Release date : $date</h>";
                $number = sizeof($spotify->album->available_markets);
                echo "<h>Avaliable : $number</h></div>";
            }
        ?>
    </div>
    </div>
</body>
</html>

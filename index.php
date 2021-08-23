<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>


    <div class="content">
    <?php
	// Открываем документ с данными товаров
    if (($file = fopen('price.csv', 'r')) !== false) {
        while(($data = fgetcsv($file, 1000, ";")) !== false) {
   
        $picture = $_SERVER['DOCUMENT_ROOT'] . '/img/AS00E/AS00E-1.jpg';
    ?>        
            

            <div class="card">
                <div class="card-img" style="background-image: url(img/<?php echo (preg_replace('/[\x{feff}-\x{ffff}]/u', '', $data[0]));?>/<?php echo (preg_replace('/[\x{feff}-\x{ffff}]/u', '', $data[0])) ;?>-1.jpg); background-size: contain; background-repeat: no-repeat;"></div>
            <div class="card-info">
                <div class="articles">
                    <div class="turkish-articles"><?php echo $data[0] ?></div>
                    <div class="euro-articles"><?php if ($data[4] != 0) { echo $data[4]; } else { echo ''; } ?></div>
                </div>
                <div class="names">
                    <p class="post posts">• <?php echo $data[1] ?></p>
                    <p class="post posts">• <?php echo $data[2] ?></p>
                    <p class="posts">• <?php echo $data[3] ?></p>
                </div>
                <div class="desc">
                    <div class="desk-text"><?php echo $data[6] ?></div>
                    <div class="desk-img" style="background-image: url(<?php echo "img/logo/$data[5].png" ?>); background-size: contain; background-repeat: no-repeat;"></div>
                </div>
            </div>
        </div>
    <?php
        }
    }

    $json = json_encode($data, true, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);
    ?>

    <div class="list"></div>

    <div class="list2"></div>
    <div class="list3"></div>
    </div>



        <div class="result wrap">

        </div>
   

    <script src="script.js"></script>
</body>
</html>
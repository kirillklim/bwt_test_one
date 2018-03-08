<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Погода</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/style-weather.css">

    <link href="./css/style-register.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/register-ajax.js"></script>

    <meta name="description" content="Погода">
    <meta name="keywords" content="Погода">
</head>
<body>

<!-- menu -->

 <?php
   require_once(ROOT . '/views/menu/menu.php');
 ?>
<div class="container">
        <div class="row">
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-6">
                    <div class="weather">
                        <h3 class="p-city"><?php  echo "Вы смотрите погоду в городе ".$city ?></h3>
                        <p>Температура: <span><?php echo $temp ?></span></p>
                        <p>Облачность: <span><?php echo $cloudness ?></span></p>
                        <p>Ветер: <span><?php echo $wind ?></span></p>
                        <p>Давление: <span><?php echo $bar ?></span></p>
                    </div>
                </div>  
                <div class="col-md-3">

                </div>
        </div>
    </div>


</body>
</html>
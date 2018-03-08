<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link href="../css/style-feedback.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width">
  <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/register-ajax.js"></script>
    <script type="text/javascript" src="../js/send-feedback-ajax.js"></script>

    <meta name="description" content="Обратная связь">
    <meta name="keywords" content="Обратная связь"/>
</head>
<body>
<!-- menu -->

 <?php
   require_once(ROOT . '/views/menu/menu.php');
 ?>

<h1>Обратная связь</h1>

<div style="color: red; font-size: 14px; padding: 20px; margin: 0 auto; display: block; width:400px;" class="error-warning">
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>


   <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                       <form action="" method="post" class="form-feedback">
                        <input type="text" name="name" placeholder="Имя" class="name input-feedback name-feedback" value="<?php echo $name; ?>"/>
                        <input type="text" name="email" placeholder="E-mail" class="email input-feedback email-feedback" value="<?php echo $email; ?>"/>
                        <textarea class="form-control text-user border-in-input message-feedback" rows="10" placeholder="текст..." name="text-messg" ></textarea>
                        <div class="captcha-center">
                       <!-- добавление элемента div -->
                            <div class="g-recaptcha" data-sitekey="6LeolkoUAAAAAPQvDp5TskAYwSYi_HBDWG2pAnZp"></div>
                             
                            <!-- элемент для вывода ошибок -->
                            <div class="text-danger" id="recaptchaError"></div>
                             
                            <!-- js-скрипт гугл капчи -->
                            <script src='https://www.google.com/recaptcha/api.js'></script>
                        </div>

                        <input type="submit" name="submit" class="send-feedback button-feedback"  value="Отправить" />
                       
                        
                      </form>
                </div>
               
            </div>

        </div>

</body>
</html>
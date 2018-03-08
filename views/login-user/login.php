<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link href="./css/style-register.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width">
  <script type="text/javascript" src="./js/jquery.min.js"></script>
    <script type="text/javascript" src="./js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/register-ajax.js"></script>


    <meta name="description" content="Авторизация">
    <meta name="keywords" content="Авторизация"/>
</head>
<body>

      <div style="color: red; font-size: 14px; padding: 20px; margin: 0 auto; display: block; width:400px;">
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
                
                <div class="col-md-2">
                <?php if (User::isGuest()): ?>     
            <form action="" method="post" class="form-login" style="display: block; width: 200px; margin: 0 auto;  padding: 20px; text-align: center;">
            <center><h2>Авторизация</h2></center><br>
            <input type="text" name="email" placeholder="E-mail" class="email-user-login" value="<?php echo $email; ?>"/><br><br><br>
            <input type="password" name="password" placeholder="Пароль" class="pass-user-login" value="<?php echo $_POST['password']; ?>"/><br><br><br>
            <div class="os"></div>
            <input type="submit" name="submit" class="btn btn-default button-login" style="width: 120px;" value="Вход" />
            <div class="os"></div>
            <div style="font-size: 14px; color: #777;">
                Еще не зарегистрированы?<a href="/bwt_test/user/register.php">зарегистрируйтесь</a>
            </div>
        </form>
        <?php else: ?>
            <div style="display: block; width: 400px; margin: 0 auto; background: #f2f1f0; padding: 20px; color:#555; text-align: center;">
                <center><h2 style="color:#555;">Вы уже были авторизированы </h2></center>
            </div>
        <?php endif; ?>
                </div>
               
            </div>

        </div>






</body>
</html>
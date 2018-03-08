<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <link href="../css/style-register.css" rel="stylesheet" type="text/css" />
    <meta name="viewport" content="width=device-width">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/register-ajax.js"></script>


    <meta name="description" content="Регистрация">
    <meta name="keywords" content="Регистрация"/>
</head>
<body>

 <div class="error" style="color: red; font-size: 14px; padding: 20px; margin: 0 auto; display: block; width:400px;">
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
                    <div class="registration-users-bwt">
                        <h2>Регистрация</h2>
                        
                         <form action="" method="post" class="form-login"> 
                            <p><label for="user_login" class="name-user">Имя опльзователя<br>
                            <input class="input input-style username" id="username" name="login" size="20" type="text" value="<?php echo $login; ?>" placeholder="name"></label></p>
                             <p><label for="user_email" class="email-user name-user">E-mail<br>
                            <input class="input input-style email" id="email" name="email" size="20" type="text" value="<?php echo $email; ?>" placeholder="email"></label></p>
                            <p><label for="user_pass" class="name-pass">Пароль<br>
                            <input class="input input-style password" id="password" name="password" size="20" type="password" value="<?php echo $_POST['password']; ?>" placeholder="pass"></label></p> 
                                <div class="radio-btn">
                                    <p>Пол</p>
                                  <input type="radio" class="radio"  name="gender" value="1"  checked> мужской<br>
                                  <input type="radio" class="radio"  name="gender" value="0"  > женский<br>
                                  <script>



                               
                                         $(document).ready(function () {
                                              $('.radio').click(function () {

                                                   var gender=$('input[name=gender]:checked').val();
                                                   alert(gender);
                                             });
                                          }); 
                                       

                                  </script>
                                </div>
                            <div class="box-for-select">
                                 <p>Дата рождения</p>
                                <select class="select-rb select-left" name="day">
                                  <?php
                                    
                                    for($option=1;$option<32;$option++) {
                                        echo " <option value='$option'>".$option."</option>";
                                    }

                                  ?>
                                </select>

                                <select class="select-rb" name="month">
                                  

                                  <option value="01">январь</option>
                                  <option value="02">февраль</option>
                                  <option value="03">март</option>
                                  <option value="04">апрель</option>
                                  <option value="05">май</option>
                                  <option value="06">июнь</option>
                                  <option value="07">июль</option>
                                  <option value="08">август</option>
                                  <option value="09">сентябрь</option>
                                  <option value="10">октябрь</option>
                                  <option value="11">ноябрь</option>
                                  <option value="12">декабрь</option>
                                </select>
                                <select class="select-rb" name="year">
                                  <?php
                                    
                                    for($option=1900;$option<2220;$option++) {

                                        echo " <option value='$option' >".$option."</option>";
                                    }

                                  ?>
                                </select>
                            </div>
                            <input class="button registr-button back-button" name="submit" type= "submit" id="reg1" value="Регистрация">
                            <!-- <input class="button back-button " name="submit-login" type= "submit" id="reg" value="Вход"> -->

                            <a href="/bwt_test/" class="button-login">Вход</a>
                    </form>
                    </div>
                </div>
            </div>

        </div>
</body>
</html>
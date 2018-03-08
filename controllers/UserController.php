<?php

require_once(ROOT.'/models/User.php');

class UserController {

public function actionRegister()
{
    
    $index['title'] = 'Регистрация';


    $login = false;
    $email = false;
    $password = false;
    $gender= false;

    $birthday=false;
    $day=false;
    $month=false;
    $year=false;

    // Обработка формы
    if (isset($_POST['submit']))
    {
       
        @$login = $_POST['login']; 
        @$email = $_POST['email'];
        @$password = $_POST['password'];
        //@$gender = $_POST['gender'];
        @$birthday=$_POST['birthday'];
        @$day=$_POST['day'];
        @$month=$_POST['month'];
        @$year=$_POST['year'];
        @$birthday = $day.' : '.$month.' : '.$year;
        

        if (!User::checkPassword($password))  $errors[] = 'Вы не ввели пароль, пароль меньше 5-ти символов';
        else if (!User::checkName($login))  $errors[] = 'Логин меньше 3-х символов';
        else if (!User::checkEmail($email)) $errors[] = 'Не верно указан E-mail';
        else
        {

            // Проверяем существует ли пользователь
            $checkEmail = User::checkUserEmail($email);
            $checkLogin = User::checkUserLogin($login);
            if ($checkLogin == true)  $errors[] = 'Пользователь с таким Логином, уже зарегистрирован, введите другой Логин';
            if ($checkEmail == true)  $errors[] = 'Пользователь с таким E-mail, уже зарегистрирован, введите другой E-mail';
            else
            {

                 if (!User::register($login, $email, $password, $gender,$birthday)) $errors[] = 'Ошибка Базы Данных';
                 
            }
        }
    }
    
    // Подключаем вид
    require_once(ROOT . '/views/register-user/register.php');
    return true;
    
}


public function actionLogin()
{
    $email = false;
    $password = false;
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $errors = false;

    if (!User::checkPassword($password)) {
        $errors[] = 'Пароль не должен быть короче 5-ти символов';
    }
    $check = User::checkUserDataHash($email);
    $hashed_password = $check['password'];
    $userId = $check['id'];

    if ($this->verify($password, $hashed_password) && $password!="") {
            User::auth($userId);
            require_once(ROOT . '/views/cabinet/cabinet.php');

            return true;
    } else $errors[] = 'Неправильные данные для входа на сайт';
    }
    
    require_once(ROOT . '/views/login-user/login.php');
    return true;

}
    

public function actionLogout()
{
    
    session_start();
    unset($_SESSION["user"]);
    session_destroy();
    header("Location: /bwt_test/");
    return true;

}

public function verify($password, $hashedPassword) {
    
    return $password== $hashedPassword ? true:false;
}



}


  

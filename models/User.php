<?php

class User
{

    public static function checkName($name)
	{
        
	    if(strlen($name) >= 2) return true;

	    else return false;
	}
	public static function checkPassword($password)
	{
        
	    if(strlen($password) >= 5) return true;
	    else return false;
	}
	public static function checkEmail($email)
	{
        
	    if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
	    else return false;
	}
	
    public static function checkUserEmail($email)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM bwt_users WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();
        $user = $result->fetch();
        if ($user) return true;
        else return false;
    }

    public static function checkUserLogin($login)
    {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM bwt_users WHERE login = :login';
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->execute();
        $user = $result->fetch();
        if ($user) return true;
        else return false;
    }


    public static function register($login, $email,$password,$gender,$birthday)
    {


        $db = Db::getConnection();
        $sql = 'INSERT INTO bwt_users (login, email, password, sex, birthday) VALUES (:login, :email, :password, :gender, :birthday)';
        // Получение и возврат результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':login', $login, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':gender', $gender, PDO::PARAM_STR);
        $result->bindParam(':birthday', $birthday, PDO::PARAM_STR);
        return $result->execute();
    }



    public static function checkUserDataHash($email)
    {
        // Соединение с БД
        $db = Db::getConnection();
        // Текст запроса к БД
        $sql = 'SELECT * FROM bwt_users WHERE email = :email';
        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        // Указываем, что хотим получить данные в виде массива
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        return $result->fetch();
    }

    public static function auth($userId)
    {
        session_start();
        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
    }

    public static function isGuest()
    {
        
        if (isset($_SESSION['user'])) return false;
        else return true;
    }


}


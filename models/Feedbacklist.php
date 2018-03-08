<?php

class Feedbacklist
{


    public static function showFeedbackList()
    {


        $db = Db::getConnection();
        $sql = 'SELECT name, message,dwhen from bwt_feedback WHERE name=name ORDER BY dwhen DESC';
        
        $result = $db->query($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':message', $message, PDO::PARAM_STR);
        $result->bindParam(':dwhen', $dwhen, PDO::PARAM_STR);

        require_once(ROOT . '/views/feedbacklist/feedbacklist.php');


        return $result->execute();
    }


   public static function isGuest()
    {
        session_start();
        if (isset($_SESSION['user'])) return false;
        else return true;
    }

}


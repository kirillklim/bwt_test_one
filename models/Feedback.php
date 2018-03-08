<?php

class Feedback
{

    public static function checkFeedbackName($name)
    {
        
        if(strlen($name) >= 1) return true;

        else return false;
    }
    
    public static function checkFeedbackEmail($email)
    {

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) return true;
        else return false;
    }

    public static function checkFeedbackMessage($message)
    {
        if ($message!="") return true;
        else return false;
    }

    public static function checkCaptcha($captha){
              
    if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {

            $secret = '6LeolkoUAAAAAKAUEyvMzu4EBDfO5G65OFWQM5gZ';
            $ip = $_SERVER['REMOTE_ADDR'];
            $response = $_POST['g-recaptcha-response'];
            $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
          
            $captha = json_decode($rsp, TRUE);
            if($captha['success']){

                return true;
            }
            else {
                return false;
            }

    }
}

    public static function sendFeedbackToDB($name, $email,$message,$dwhen)
    {


        $db = Db::getConnection();
        $sql = 'INSERT INTO bwt_feedback (email, name, message,dwhen) VALUES (:name, :email, :message, :dwhen)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':message', $message, PDO::PARAM_STR);
        $result->bindParam(':dwhen', $dwhen, PDO::PARAM_STR);
        return $result->execute();
    }
    

    public static function sendFeedback($recipient, $subject, $message, $mail_header)
    {
            
               if (mail($recipient, $subject, $message, $mail_header)){
                  
                    echo '<script type="text/javascript">alert("Письмо отправлено успешно");</script>'; 
               }
               else echo '<script type="text/javascript">alert("Письмо не отправлено");</script>'; 
            
         return true;
        
    }


    public static function isGuest()
    {
        session_start();
        if (isset($_SESSION['user'])) return false;
        else return true;
    }
}


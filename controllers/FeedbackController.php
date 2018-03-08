<?php

require_once(ROOT.'/models/Feedback.php');

class FeedbackController {


    public function actionFeedback()
    {


    $name = false;
    $email = false;
    $message = false;
    $captha=false;
        
        if (!Feedback::isGuest()) {
           

                // Обработка формы
                if (isset($_POST['submit']))
                {
                    
                    @$name = $_POST['name']; 
                    @$email = $_POST['email'];
                    @$message = $_POST['text-messg'];
                    @$captha=$_POST['g-recaptcha-response'];
                    
                    

                    if (!Feedback::checkFeedbackName($name))  $errors[] = 'Имя меньше 2-х символов';
                    else if (!Feedback::checkFeedbackEmail($email))  $errors[] = 'Не верно указан E-mail';
                    else if (!Feedback::checkFeedbackMessage($message)) $errors[] = 'Вы не ввели сообщение';
                    else if (!Feedback::checkCaptcha($captha))  $errors[] = 'Не выбралим капчу';
                    else
                    {

                            $headers  = 'MIME-Version: 1.0' . "\r\n";
                            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                            $headers .='From: '.$name.' '.$email.'' . "\r\n" .
                                'Reply-To:'.$email.''."\r\n" .
                                'X-Mailer: PHP/' . phpversion();
                                
                Feedback::sendFeedback("lmr.kirill.klimovich@gmail.com","bwt_test",$message,$headers);
                            
                             if (!Feedback::sendFeedbackToDB($email, $name, $message, date("Y-m-d H:i:s"))) $errors[] = 'Ошибка Базы Данных';
                             
                        
                    }
                }
    
            // Подключаем вид
            require_once(ROOT . '/views/feedback/feedback.php');
            return true;
        }
        else {
            header("Location: /bwt_test/");
        }
        
        return true;

    }
}




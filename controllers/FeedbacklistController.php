<?php

require_once(ROOT.'/models/Feedbacklist.php');

class FeedbacklistController {

    public function actionFeedbacklist()
    {


        if (!Feedbacklist::isGuest()) {

            Feedbacklist::showFeedbackList();
            
            return true;

        }
        else {
            header("Location: /bwt_test/");
        }

        
    }

}




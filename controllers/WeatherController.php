<?php

require_once(ROOT.'/models/Weather.php');

class WeatherController {

    public  static function actionWeather()
    {
        
        if (!Weather::isGuest()) {
            Weather::get_weather();
        }
        else {
            header("Location: /bwt_test/");
        }
        
        return true;
    }
}




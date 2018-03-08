<?php
require '/library/simple-html-dom/simple_html_dom.php';

class Weather
{

    public static function get_weather()
	{
            $html = file_get_html('http://gismeteo.ua/city/daily/5093/');
            $html->find('.higher');

                    $city = $html->find('.typeM')[0]->plaintext;                  
                    $temp = $html->find('.temp dd')[0]->plaintext;         
                    $cloudness = $html->find('.cloudness td')[0]->plaintext;      
                    $wind = $html->find('.wind dd')[0]->plaintext;             
                    $bar = $html->find('div[title=Давление] dd')[0]->plaintext;

                    require_once(ROOT . '/views/weather/weather.php');

            return array('city' => $city,'temp' => $temp,'cloudness' => $cloudness,'wind' => $wind,'bar' =>$bar);
	}


    public static function isGuest()
    {
        session_start();
        if (isset($_SESSION['user'])) return false;
        else return true;
    }
	

}

<?php
class weatherguzzle{

    
    public $url="http://api.openweathermap.org/data/2.5/weather?q={{cityid}}&units=metric&APPID=773014a8fbb5ebdabd5f9236a47af88b";

    function get_weather_guzzle($city_name){
        $this->url=str_replace("{{cityid}}",$city_name,$this->url);
        $client=new \GuzzleHttp\Client();
        $response=$client->get($this->url);
        return json_decode($response->getBody(),true);

    }
}
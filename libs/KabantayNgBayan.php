<?php

class KabantayNgBayan
{
    private $_apiKey;
    private $_apiBaseUrl;

    public function __construct()
    {
        $this->_apiBaseUrl = 'http://api.kabantayngbayan.ph';
        $this->_apiKey = '5286f1675e13db255f873f05';
    }

    public function get($section, $param)
    {
        //&limit=10
        $apiUrl = $this->_apiBaseUrl . '/' . $section . '/?app_id=' .
            $this->_apiKey . $param;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiUrl);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode(trim($result));
    }

    public function getPager($section, $skip)
    {

    }
}
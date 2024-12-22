<?php
    function get($key, $defaultValue) {
        $value  = isset($_GET[$key]) ?  $_GET[$key] : $defaultValue;
        return $value;
    }

    function getData($dictonary, $key, $defaultValue) {
        $value  = isset($dictonary[$key]) ?  $dictonary[$key] : $defaultValue;
        return $value;
    }

    function qpa($data){
        $number = (float)$data;
        $format = number_format($number, 2, '.', ',');
        return $format;
      }
    
      function money($data){
        $number = (float)$data;
        $format = number_format($number, 2, '.', ',');
        return $format;
      }
    
      function money_in_billions($data){
        $number = (float)$data / 1_000_000_000;
        $format = number_format($number, 5, '.', ',');
        return $format;
      }

?>
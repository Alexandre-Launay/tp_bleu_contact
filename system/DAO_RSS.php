<?php

class DAO_RSS implements DAO {

    
        function requete($rss)
    {
        $xml = simplexml_load_file($rss,'SimpleXMLElement', LIBXML_NOCDATA);
        $array = json_decode(json_encode($xml), TRUE);
        
        // -------------------------------------------------- //
        
        if (!$array)
        {
            return false;
        }
        else {
            // return json_decode($array, true);
            return $array;
        }

    }
}
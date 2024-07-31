<?php
class Model
{
    function xmlToArray($rss)
    {
        // echo ($rss);

        $xml = simplexml_load_file($rss, "SimpleXMLElement", LIBXML_NOCDATA);
            // $xml = file_get_contents($rss);
            // $rss = new SimpleXMLElement($xml);
            $array = json_decode(json_encode($rss), TRUE);
        
        var_dump($array);

        // -------------------------------------------------- //

        if (!$array) {
            return false;
        } else {
            // return json_decode($array, true);
            return $array;
        }
    }
}

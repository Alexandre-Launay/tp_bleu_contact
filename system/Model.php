<?php

class Model
{
    /**
     * function to convert xml to array
     * @param mixed $xml
     */
    function xmlToArray(mixed $xml)
    {
        $array = json_decode(json_encode($xml), TRUE);

        if (!$array) {
            return false;
        } else {
            return $array;
        }
    }
}

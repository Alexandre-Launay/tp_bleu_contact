<?php

class Model
{
    function xmlToArray($xml)
    {
        $array = json_decode(json_encode($xml), TRUE);

        if (!$array) {
            return false;
        } else {
            return $array;
        }
    }
}

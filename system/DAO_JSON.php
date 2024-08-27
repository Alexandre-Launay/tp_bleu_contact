<?php

class DAO_JSON implements DAO {

    /** function to request a json
     * @param string $url
     */
    function requete(string $url)
    {
        $json = @file_get_contents($url);
        if (!$json)
        {
            return false;
        }
        else {
            return json_decode($json, true);
        }
    }
}
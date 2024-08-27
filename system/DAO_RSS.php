<?php
class DAO_RSS implements DAO
{
    /**
     * function to request a xml
     * @param string $xml
     */
    function requete(string $xml)
    {
        // $xmlObject = file_get_contents($xml);
        // $xmlObject = str_replace('media:content', 'mediaContent', $xmlObject);
        // $xmlObject = simplexml_load_string($xmlObject, "SimpleXMLElement", LIBXML_NOCDATA);
        // var_dump($xmlObject);
        // die();
        $xmlObject = simplexml_load_file($xml, "SimpleXMLElement", LIBXML_NOCDATA);

        return $xmlObject;
    }
}

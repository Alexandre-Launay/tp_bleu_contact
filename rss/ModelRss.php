<?php 

class ModelRss
{
    private $dao;
    function __construct()
    {
        $this->dao = new DAO_RSS();
    }

    function selectRss()
    {
        $array = $this->dao->requete(Conf::$rss);

        // -------------------------------------------------- //

        if ($array != false) {
            return $array;
        }
        else {
            return false;
        }
    }
}
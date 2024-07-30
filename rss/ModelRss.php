<?php 

class ModelRss
{
    private $dao;
    function __construct()
    {
        $this->dao = new DAO_RSS();
    }

    function selectRss($url)
    {
        if ($url == "ActusJeux") {
            $url = Conf::$fluxRss['ActusJeux'];
        } else if ($url == "ActusPS5") {
            $url = Conf::$fluxRss['ActusPS5'];
        } else if ($url == "NewsJO") {
            $url = Conf::$fluxRss['NewsJO'];
        } else {
            return false;
        }

        $array = $this->dao->requete($url);

        // -------------------------------------------------- //

        if ($array != false) {
            return $array;
        }
        else {
            return false;
        }
    }
}
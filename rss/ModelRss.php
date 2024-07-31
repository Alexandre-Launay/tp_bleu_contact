<?php 


class ModelRss
{
    private $daoSQL;
    
    function __construct()
    {
        $this->daoSQL = new DAO_MySqli();
    }


    function selectRss($rss)
    {
        if (isset(Conf::$fluxRss[$rss])) {
            $url = Conf::$fluxRss[$rss];
        } else {
            return false;
        }

        $array = $this->daoSQL->requete($url);

        // -------------------------------------------------- //

        if ($array != false) {
            return $array;
        }
        else {
            return false;
        }
    }

    function selectRssById($id)
    {
        $result = $this->daoSQL->requete("SELECT * FROM `rss` WHERE id_rss=$id ;");
        return $result->fetch_assoc();
    }

    function selectAllRss()
    {
        $result = $this->daoSQL->requete("SELECT * FROM `rss`;");
        $fluxRss = [];
        for ($row_no = 0; $row_no < $result->num_rows; $row_no++) {
            $result->data_seek($row_no);
            $row = $result->fetch_assoc();
            $fluxRss[] = $row;
        }
        return $fluxRss;
    }

    function inserer($enreg)
    {
        return $this->daoSQL->requete("INSERT INTO `rss` (`titre`, `xml_path`) VALUES ('{$enreg['titre']}', '{$enreg['xml_path']}')");
    }

    function delete($id)
    {
        return $this->daoSQL->requete("DELETE FROM rss WHERE id_rss=$id");
    }


}

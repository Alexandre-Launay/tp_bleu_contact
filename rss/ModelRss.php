<?php 


class ModelRss extends Model
{
    private $dao;
    
    function __construct()
    {
        $this->dao = new DAO_MySqli();
    }

    function selectRssById($id)
    {
        $result = $this->dao->requete("SELECT * FROM `rss` WHERE id_rss=$id ;");
        return $this->xmlToArray($result->fetch_assoc()['xml_path']);
    }

    function selectAllRss()
    {
        $result = $this->dao->requete("SELECT * FROM `rss`;");
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
        return $this->dao->requete("INSERT INTO `rss` (`titre`, `xml_path`) VALUES ('{$enreg['titre']}', '{$enreg['xml_path']}')");
    }

    function delete($id)
    {
        return $this->dao->requete("DELETE FROM rss WHERE id_rss=$id");
    }


}

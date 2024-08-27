<?php

class ModelRss extends Model
{
    /**
     * @var DAO_MySqli
     */
    private $daoSQL;

    /**
     * @var DAO_RSS
     */
    private $daoRss;

    /**
     * ModelRss constructor.
     */
    function __construct()
    {
        $this->daoSQL = new DAO_MySqli();
        $this->daoRss = new DAO_RSS();
    }

    /**
     * Function used to select a rss by id from the database
     * @param string $id
     */
    function selectRssById(string $id)
    {
        $data = [];
        $mediaObject = [];

        $xmlPath = $this->daoSQL->requete("SELECT * FROM `rss` WHERE id_rss=$id ;");
        $xmlObject = $this->daoRss->requete($xmlPath->fetch_assoc()['xml_path']);

        if ($xmlObject->channel->item->children("media", true) == !null) {
            foreach ($xmlObject->channel->item as $child) {
                $mediaObject[] = $child->children("media", true)->attributes();
            }
            // var_dump($mediaObject);
            $data = [
                'media' => $this->xmlToArray($mediaObject),
                'rss' => $this->xmlToArray($xmlObject)
            ];
            // var_dump($data);
        } else {
            
            $data = [
                'rss' => $this->xmlToArray($xmlObject)
            ];
            // var_dump($data);
        }

        return $data;
    }


    /**
     * Function used to select all rss from the database
     */
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

    /**
     * Function used to insert an rss in the database
     * @param array $enreg
     */
    function inserer(array $enreg)
    {
        return $this->daoSQL->requete("INSERT INTO `rss` (`titre`, `xml_path`) VALUES ('{$enreg['titre']}', '{$enreg['xml_path']}')");
    }

    /**
     * Function used to delete an rss from the database
     * @param string $id
     */
    function delete(string $id)
    {
        return $this->daoSQL->requete("DELETE FROM rss WHERE id_rss=$id");
    }
}

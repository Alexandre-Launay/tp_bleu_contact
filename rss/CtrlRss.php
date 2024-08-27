<?php 

class CtrlRss
{
    /**
     * @var ModelRss
     */
    private $model;

    /**
     * @var ViewRss
     */
    private $vue;

    /**
     * CtrlRss constructor.
     */
    function __construct()
    {
        $this->model = new ModelRss();
        $this->vue = new ViewRss();
    }

    /**
     * Function used to get a rss from database and display it
     * @param string $id
     */
    function getRss(string $id)
    {
        $data = $this->model->selectRssById($id);
        // var_dump($data['xml_path']);
        // -------------------------------------------------- //
        if ($data) {
            $this->vue->afficherRss($data);
        } else {
            $this->vue->afficherErrorRss();
        }
    }

    /**
     * Function used to get all rss from database and display them
     */
    function afficherListRss()
    {
            $listRss = $this->model->selectAllRss();
            $this->vue->afficherListRss($listRss);
    }

    /**
     * Function used to display the form
     */
    function getForm()
    {
        $this->vue->afficherForm();
    }

    /**
     * Function used to insert a rss in database with a message to know if it's ok or not
     */
    function enregForm()
    {
        $r = $this->model->inserer($_POST);
        if ($r) {
            $this->vue->afficherFormOk();
        } else {
            $this->vue->afficherFormNotOk();
        }
    }

    /**
     * Function used to delete a rss
     * @param string $id
     */
    function delete(string $id)
    {
        $valid = isset($_POST['valid']) ? $_POST['valid'] : false;
        if ($valid === $id) {
            $retour = $this->model->delete($id);
        }
        $this->afficherListRss();
    }
        
}

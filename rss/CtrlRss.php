<?php 

class CtrlRss
{
    private $model;
    private $vue;
    function __construct()
    {
        $this->model = new ModelRss();
        $this->vue = new ViewRss();
    }

    function getRss($id)
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

    function afficherListRss()
    {
            $listRss = $this->model->selectAllRss();
            $this->vue->afficherListRss($listRss);
    }

    function getForm()
    {
        $this->vue->afficherForm();
    }

    function enregForm()
    {
        $r = $this->model->inserer($_POST);
        if ($r) {
            $this->vue->afficherFormOk();
        } else {
            $this->vue->afficherFormNotOk();
        }
    }

    function delete($id)
    {
        $valid = isset($_POST['valid']) ? $_POST['valid'] : false;
        if ($valid === $id) {
            $retour = $this->model->delete($id);
        }
        $this->afficherListRss();
    }
        
}

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

    function getRSS()
    {
        $data = $this->model->selectRss();
        var_dump($data['channel']);
        // -------------------------------------------------- //

        if ($data) {
            $this->vue->afficherRss($data);
        } else {
            $this->vue->afficherErrorRss();
        }
    }
}
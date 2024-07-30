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

    function getRSS($flux)
    {
        $data = $this->model->selectRss($flux);
        // var_dump($data);
        // -------------------------------------------------- //

        if ($data) {
            $this->vue->afficherRss($data, $flux);
        } else {
            $this->vue->afficherErrorRss();
        }
    }
}
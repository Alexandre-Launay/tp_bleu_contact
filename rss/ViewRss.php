<?php 

class ViewRss {

    private $partials = "rss/partials/";
    function afficherRss($data){
        $partial = $this->partials . "rss.html";
        include Conf::$templates . "template.html";
    }

    function afficherErrorRss(){
        $partial = $this->partials . "rssError.html";
        include Conf::$templates . "template.html";
    }
    
    function afficherListRss($fluxRss)
    {
        $partial = $this->partials . "listRss.html";
        include Conf::$templates . "template.html";
    }
    
    function afficherForm($error = false)
    {
        $partial = $this->partials . "form.html";
        include Conf::$templates . "template.html";

    }
    function afficherFormOk()
    {
        $partial = $this->partials . "formok.html";
        include Conf::$templates . "template.html";
    }
    function afficherFormNotOk()
    {
        $partial = $this->partials . "formnotok.html";
        include Conf::$templates . "template.html";
    }
}
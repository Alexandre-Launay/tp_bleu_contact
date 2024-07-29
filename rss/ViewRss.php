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
}
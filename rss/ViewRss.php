<?php 

class ViewRss {

    private $partials = "rss/partials/";

    /**
     * Function used to display the rss
     * @param array $data
     */
    function afficherRss(array $data){
        $partial = $this->partials . "rss.html";
        include Conf::$templates . "template.html";
    }

    /**
     * Function used to display the error when the rss is not found
     */
    function afficherErrorRss(){
        $partial = $this->partials . "rssError.html";
        include Conf::$templates . "template.html";
    }
    
    /**
     * Function used to display the list of rss
     * @param array $fluxRss
     */
    function afficherListRss(array $fluxRss)
    {
        $partial = $this->partials . "listRss.html";
        include Conf::$templates . "template.html";
    }
    
    /**
     * Function used to display the form to add a new rss
     * @param bool $error
     */
    function afficherForm(bool $error = false)
    {
        $partial = $this->partials . "form.html";
        include Conf::$templates . "template.html";

    }

    /**
     * Function used to display a message when the form is ok
     */
    function afficherFormOk()
    {
        $partial = $this->partials . "formok.html";
        include Conf::$templates . "template.html";
    }

    /**
     * Function used to display a message when the form is not ok
     */
    function afficherFormNotOk()
    {
        $partial = $this->partials . "formnotok.html";
        include Conf::$templates . "template.html";
    }
}
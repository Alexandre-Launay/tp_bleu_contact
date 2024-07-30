<?php
class Conf
{

    public static $civilite_femme = 1;
    public static $civilite_homme = 2;
    public static $civilite_mademoiselle = 3;

    public static $bdd = array(
        'host' => "ct01.afpa-balma.fr",
        'user' => "td_bleu",
        'pass' => "TuRfkYzBhBsxrFtW",
        'database' => "td_bleu_contact",
    );

    public static $modules = array(
        "contact",
        "system",
        "page",
        "authentification",
        "meteo",
        "rss"
    );

    public static $templates = "templates/";

    public static $salt = "Ceci est moN Grian de Sel";

    public static $url = "https://www.prevision-meteo.ch/services/json/";

    public static $fluxRss = array(
        "ActusJeux" => "https://www.jeuxvideo.com/rss/rss.xml",
        "ActusPS5" => "https://www.jeuxvideo.com/rss/rss-ps5.xml",
        "NewsJO" => "https://www.francetvinfo.fr/les-jeux-olympiques.rss"
    );
}
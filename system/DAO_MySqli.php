<?php
class DAO_MySqli implements DAO
{
    
    /**
     * @var object $mysqli
     */
    private object $mysqli;

    /**
     * MySqli's constructor
     */
    function __construct()
    {
        $this->mysqli = new mysqli(Conf::$bdd['host'], Conf::$bdd['user'], Conf::$bdd['pass'], Conf::$bdd['database']);
    }

    /**
     * function to request in sql DB
     * @param string $sql
     */
    function requete(string $sql)
    {
        // echo $sql;
        try {
            return $this->mysqli->query($sql);
        } catch (Exception) {
            return false;
        }
    }
}

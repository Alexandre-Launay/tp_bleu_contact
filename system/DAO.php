<?php
/**
 * Interface DAO 
 */
interface DAO {

    /**
     * function used to etablish a request
     * @param string $req
     */
    public function requete(string $req);
}
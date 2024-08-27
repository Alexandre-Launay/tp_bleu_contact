<?php
class Session
{
    /**
     * Function used to set the user in the session
     * @param object $u
     */
    public static function setUser(object $u)
    {
        $_SESSION['user'] = serialize($u);
    }

    /**
     * Function used to get the user in the session
     */
    public static function getUser()
    {
        if (isset($_SESSION['user'])) {
            return unserialize($_SESSION['user']);
        } else {
            return false;
        }
    }

    /**
     * Function used to destroy the user in the session
     */
    public static function destroyUser()
    {
        unset($_SESSION['user']);
    }

    /**
     * Function used to set the meteo in the session
     * @param bool $heure
     */
    public static function getMeteo(bool $heure = false)
    {
        if (isset($_SESSION['meteo'])) {
            $meteo = unserialize($_SESSION['meteo']);
            if ($heure === false) {
                return $meteo;
            } else {
                return array('ville'=> $meteo['ville']['name'], 'heure' => $meteo['heures'][$heure]);
            }
        } else {
            return false;
        }
    }

    /**
     * Function used to set the meteo in the session
     * @param array $meteo
     */
    public static function setMeteo(array $meteo)
    {
        $_SESSION['meteo'] = serialize($meteo);
    }

    /**
     * Function used to destroy the meteo in the session
     */
    public static function destroyMeteo()
    {
        unset($_SESSION['meteo']);
    }
}

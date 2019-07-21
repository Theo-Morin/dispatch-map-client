<?php

class Patrouilles
{
    public static function findUndefPatrouilles()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM patrouilles WHERE zoneid IS NULL');
        $req->execute();

        return $req->FetchAll();
    }

    public static function findNordPatrouilles()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM patrouilles WHERE zoneid = 1');
        $req->execute();

        return $req->FetchAll();
    }

    public static function findOuestPatrouilles()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM patrouilles WHERE zoneid = 2');
        $req->execute();

        return $req->FetchAll();
    }

    public static function findEstPatrouilles()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM patrouilles WHERE zoneid = 3');
        $req->execute();

        return $req->FetchAll();
    }

    public static function findSudOuestPatrouilles()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM patrouilles WHERE zoneid = 4');
        $req->execute();

        return $req->FetchAll();
    }

    public static function findSudEstPatrouilles()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM patrouilles WHERE zoneid = 5');
        $req->execute();

        return $req->FetchAll();
    }

    public static function findSudPatrouilles()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM patrouilles WHERE zoneid = 6');
        $req->execute();

        return $req->FetchAll();
    }

    public static function moove($id,$zone)
    {
        if($zone == "null")
            $zone = null;
        $req = MySQL::getInstance()->prepare('UPDATE patrouilles SET zoneid = ? WHERE nom = ?');
        $req->execute(array($zone,$id));

        return true;
    }
}

?>
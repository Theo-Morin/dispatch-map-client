<?php

class Punaises
{
    public static function findPunaises()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM punaises');
        $req->execute();

        return $req->FetchAll();
    }

    public static function add($id, $x, $y, $texte)
    {
        $req = MySQL::getInstance()->prepare('INSERT INTO punaises(punaid,emplacementx,emplacementy,texte) VALUES(?,?,?,?)');
        $req->execute(array($id,$x,$y,$texte));

        return true;
    }

    public static function delete($id)
    {
        $req = MySQL::getInstance()->prepare('DELETE FROM punaises WHERE punaid = ?');
        $req->execute(array($id));
        
        return true;
    }
}

?>
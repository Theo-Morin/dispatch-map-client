<?php

class Punaises
{
    public static function findPunaises()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM punaises');
        $req->execute();

        return $req->FetchAll();
    }

    public static function add($id, $x, $y, $texte,$color)
    {
        $req = MySQL::getInstance()->prepare('INSERT INTO punaises(punaid,emplacementx,emplacementy,texte,color) VALUES(?,?,?,?,?)');
        $req->execute(array($id,$x,$y,$texte,$color));

        return $color;
    }

    public static function delete($id)
    {
        $req = MySQL::getInstance()->prepare('DELETE FROM punaises WHERE punaid = ?');
        $req->execute(array($id));
        
        return true;
    }
}

?>
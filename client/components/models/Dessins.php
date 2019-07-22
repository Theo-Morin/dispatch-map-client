<?php

class Dessins
{
    public static function add($image)
    {
        $req = MySQL::getInstance()->prepare('INSERT INTO dessins(image) VALUES(?)');
        $req->execute(array($image));

        return true;
    }
    public static function findAll()
    {
        $req = MySQL::getInstance()->prepare('SELECT * FROM dessins');
        $req->execute();

        return $req->FetchAll();
    }
    public static function clear()
    {
        $req = MySQL::getInstance()->prepare('DELETE FROM dessins');
        $req->execute();

        return true;
    }
}

?>
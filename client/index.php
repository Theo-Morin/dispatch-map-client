<?php
session_start();
$_SESSION['map'] = "false"; // isset($_SESSION['map']) ? $_SESSION['map'] : "false";
$nomap = true; //isset($_SESSION['map']) && $_SESSION['map'] == "false" ? true : false;

include('components/models/_mysql.php');
/*include('components/models/Patrouilles.php');
include('components/models/Zones.php');*/
include('components/models/Punaises.php');

/*
$var = "338,95,322,112,310,118,306,131,297,147,293,164,292,170,276,184,255,192,252,200,232,215,214,233,198,248,187,260,177,290,170,308,159,317,140,317,137,327,144,337,154,350,163,362,159,393,157,403,138,416,133,442,137,456,499,469,513,484,525,462,526,439,527,416,532,395,525,371,529,351,536,336,544,323,551,311,553,300,554,286,553,273,548,255,541,229,531,201,525,181,519,160,508,142,495,132,487,121,469,112,452,106,435,106,409,104,390,103,379,95,365,86,352,84";
$array = explode(",", $var);
$x = 130;
$y = 80;
for($i = 0; $i < count($array); $i++)
{
    if($i % 2 == 0)
    {
        echo $array[$i] - $x . ",";
    }
    else
    {
        echo $array[$i] - $y . ",";
    }
}
*/

$uc1 = isset($_GET['uc1']) ? htmlspecialchars($_GET['uc1']) : "home";
switch($uc1)
{
    case "home":
        $include = "components/views/home.php";
        /*$undefPatr = Patrouilles::findUndefPatrouilles();
        $nordPatr = Patrouilles::findNordPatrouilles();
        $sudPatr = Patrouilles::findSudPatrouilles();
        $estPatr = Patrouilles::findEstPatrouilles();
        $ouestPatr = Patrouilles::findOuestPatrouilles();
        $sudestPatr = Patrouilles::findSudEstPatrouilles();
        $sudouestPatr = Patrouilles::findSudOuestPatrouilles(); */

        $punaises = Punaises::findPunaises();

        //$map = $nomap ? "Afficher les zones" : "Masquer les zones";
    break;
    case "newKey":
        $id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : exit();
        $x = isset($_POST['x']) ? htmlspecialchars($_POST['x']) : exit();
        $y = isset($_POST['y']) ? htmlspecialchars($_POST['y']) : exit();
        $texte = !empty($_POST['texte']) ? htmlspecialchars($_POST['texte']) : null;
        $color = !empty($_POST['color']) ? htmlspecialchars($_POST['color']) : null;

        exit(Punaises::add($id,$x,$y,$texte,$color));
    break;
    case "deleteKey":
        $id = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : exit();

        if(Punaises::delete($id))
        {
            exit("success");
        }
    break;
    /*case "moovePatrouille":
        $patrouille = isset($_POST['id']) ? htmlspecialchars($_POST['id']) : exit();
        $zone = isset($_POST['zone']) ? htmlspecialchars($_POST['zone']) : exit();

        if(Patrouilles::moove($patrouille,$zone))
        {
            exit("success");
        }
    break;
    case "map":
        if($_GET['uc2'] == "true" || $_GET['uc2'] == "false")
            $_SESSION['map'] = htmlspecialchars($_GET['uc2']);
        exit(header('Location: /client/home'));
    break;*/
}

include('components/views/header.php');
include($include);
include('components/views/footer.php');

?>
<?php
session_start();

$_SESSION['map'] = isset($_SESSION['map']) ? $_SESSION['map'] : "true";

$nomap = isset($_SESSION['map']) && $_SESSION['map'] == "false" ? true : false;

/*
$var = "154,403,147,408,138,417,132,431,133,445,134,458,131,470,126,485,125,498,130,512,135,527,131,544,136,554,150,564,162,567,175,578,188,583,194,586,202,575,214,580,224,586,233,581,237,575,246,569,248,562,249,552,259,546,281,547,293,547,306,545,319,542,327,543,329,532,331,515,334,497,333,479,336,450,337,429,338,403,347,374,355,352,360,343,341,353,326,360,309,362,287,368,284,373,265,380,260,386,247,391,231,390,217,395,203,398,187,403,177,403,166,400";
$array = explode(",", $var);
$x = 125;
$y = 340;
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
}*/

$uc1 = isset($_GET['uc1']) ? htmlspecialchars($_GET['uc1']) : "home";
switch($uc1)
{
    case "home":
        $include = "components/views/home.php";
    break;
    case "newKey":
    break;
    case "deleteKey":
    break;
    case "movePatrol":
    break;
    case "map":
        if($_GET['uc2'] == "true" || $_GET['uc2'] == "false")
            $_SESSION['map'] = htmlspecialchars($_GET['uc2']);
        exit(header('Location: /client/home'));
    break;
}

include('components/views/header.php');
include($include);
include('components/views/header.php');

?>
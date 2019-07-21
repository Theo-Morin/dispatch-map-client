<?php
session_start();

$_SESSION['map'] = isset($_SESSION['map']) ? $_SESSION['map'] : "true";

$nomap = isset($_SESSION['map']) && $_SESSION['map'] == "false" ? true : false;

/*
$var = "361,342,356,350,350,371,344,383,341,394,339,406,336,424,336,437,335,454,333,474,333,491,332,506,330,531,326,541,345,544,362,549,392,559,411,568,424,581,435,587,451,591,475,591,496,592,510,590,522,581,527,564,531,546,531,531,531,515,524,500,516,487,510,478,492,462,485,455,478,454,467,459,462,468,462,477,454,469,454,463,451,454,448,444,445,435,439,431,423,421,408,413,397,401,389,402,382,397,370,384,367,371,365,354";
$array = explode(",", $var);
$x = 325;
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
}
*/
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
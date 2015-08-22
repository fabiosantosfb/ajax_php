<?php

require_once("composerData.php");

session_start();

   echo "autoComplete";

$composerData = new composerData();
$composers = $composerData->composers;
$results = array();
$namesAdded = false;

// simple matching for start of first or last name, or both
if (isset($_GET['action']) && $_GET['action'] == "complete") {
    echo "<br>";
    echo "Entrou no complete 'autoComplete'!";
    foreach ($composers as $composer) {
        if (!is_numeric($_GET['id']) && (stripos($composer->firstName, $_GET['id']) === 0 || stripos($composer->lastName, $_GET['id']) === 0) || stripos($composer->firstName . " " . $composer->lastName, $_GET['id']) === 0) {
            $results[] = $composer;
        }
    }
// prepare xml data
    if (sizeof($results) != 0) {
        echo "<br>";
        echo "Entrou no result !=0 'autoComplete'!";
        header('Content-type: text/xml');
        echo "<composers>";
        foreach ($results as $result) {
            echo "<composer>";
            echo "<id>" . $result->id . "</id>";
            echo "<firstName>" . $result->firstName . "</firstName>";
            echo "<lastName>" . $result->lastName . "</lastName>";
            echo "</composer>";
        }
        echo "</composers>";
    }
}
// if user chooses from pop-up box
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == "lookup") {
    echo "<br>";
    echo "Entrou no lookup 'autoComplete'!";
    foreach ($composers as $composer) {
        if ($composer->id == $_GET['id']) {
            $_SESSION ["id"] = $composer->id;
            $_SESSION ["firstName"] = $composer->firstName;
            $_SESSION ["lastName"] = $composer->lastName;
            $_SESSION ["category"] = $composer->category;
            echo "<br>";
            echo "Entrou no foreach 'autoComplete'!";
            //header("Location: autocompletaView.php");
        }
    }
}
<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);

//we are going to use session variables so we need to enable sessions
session_set_cookie_params(0);
session_start();

// alerts
include 'components/alert/error.php';
include 'components/alert/succes.php';

// getters
include 'components/getters/getFood.php';
include 'components/getters/getFields.php';

include 'components/fieldValidator.php';
include 'components/arrivalTime.php';
include 'components/totalValue.php';

function whatIsHappening() {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    var_dump($_SESSION);
}

//your products with their price.
$products = [];

getFood($products);

$totalValue = 0;
$newTotal = 0;

if(count($_SESSION) > 0){
    if(isset($_SESSION["input5"]) && is_array($_SESSION['input5']) && count($_SESSION['input5']) > 0){
        total($_SESSION['input5'], $products, $newTotal);
    }
    $address = $_SESSION['input1'] . " " . $_SESSION['input2'] . " - ". $_SESSION['input3'] . " " . $_SESSION['input4']; 
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    validateField(getFields());
}

if(isset($_COOKIE['total'])){
    $totalValue = $_COOKIE['total'];
}

require 'form-view.php';
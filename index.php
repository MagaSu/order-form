<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);

//we are going to use session variables so we need to enable sessions
session_set_cookie_params(0);
session_start();

include 'components/alert/error.php';
include 'components/alert/succes.php';

include 'components/getters/getFood.php';
include 'components/getters/getFields.php';

include 'components/fieldValidator.php';
include 'components/arrivalTime.php';

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

require 'form-view.php';
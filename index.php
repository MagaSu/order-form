<?php
//this line makes PHP behave in a more strict way
declare(strict_types=1);

//we are going to use session variables so we need to enable sessions
session_start();

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
$products = [
    ['name' => 'Club Ham', 'price' => 3.20],
    ['name' => 'Club Cheese', 'price' => 3],
    ['name' => 'Club Cheese & Ham', 'price' => 4],
    ['name' => 'Club Chicken', 'price' => 4],
    ['name' => 'Club Salmon', 'price' => 5]
];

$products = [
    ['name' => 'Cola', 'price' => 2],
    ['name' => 'Fanta', 'price' => 2],
    ['name' => 'Sprite', 'price' => 2],
    ['name' => 'Ice-tea', 'price' => 3],
];


$totalValue = 0;

$isValid = false;

// $fields = [
//     'email' => [
//         'field_name' => 'email',
//         'required' => 1,
//     ],
//     'city' => [
//         'field_name' => 'city',
//         'required' => 1,
//     ],
//     'zipcode' => [
//         'field_name' => 'street',
//         'required' => 1,
//     ],
//     'street' => [
//         'field_name' => 'street',
//         'required' => 1,
//     ],
//     'streetnumber' => [
//         'field_name' => 'streetnumber',
//         'required' => 1,
//     ],
// ];


function validator(){
    $isValid = true;
    if(!empty($_POST['email'])){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
        }
        else {
            $email = 'Your email is not correct!';
            $isValid = false;
        }
        echo $email;
    } else { $isValid = false; }
    if(!empty($_POST['street'])){
        $street = $_POST['street'];
        echo $street;
    } else { $isValid = false; }
    if(!empty($_POST['streetnumber'])){
        if(filter_var($_POST['streetnumber'], FILTER_VALIDATE_INT)){
            $streetnumber = $_POST['streetnumber'];
        } else {
            $streetnumber = 'Street number cant contain letters!';
            $isValid = false;
        }
        echo $streetnumber;
    } else { $isValid = false; }
    if(!empty($_POST['city'])){
        $city = $_POST['city'];
        echo $city;
    } else { $isValid = false; }
    if(!empty($_POST['zipcode'])){
        if(filter_var($_POST['zipcode'], FILTER_VALIDATE_INT)){
            $zipcode = $_POST['zipcode'];
        } else {
            $zipcode = 'Zipcode cant contain letters!';
            $isValid = false;
        }
        echo $zipcode;
    } else { $isValid = false; }
    if ($isValid == false){
        // exit();
    }
}
validator();

require 'form-view.php';
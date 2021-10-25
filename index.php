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

require 'form-view.php';

// whatIsHappening();

function validator(){
    if(!empty($_POST['email'])){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $email = $_POST['email'];
        }
        else {
            $email = 'Your email is not correct!';
        }
        echo $email;
    }
    if(!empty($_POST['street'])){
        if(!filter_var($_POST['street'], FILTER_VALIDATE_INT)){
            $street = $_POST['street'];
        } else {
            $street = 'Street is not correct!';
        }
        echo $street;
    }
    if(!empty($_POST['streetnumber'])){
        if(filter_var($_POST['streetnumber'], FILTER_VALIDATE_INT)){
            $streetnumber = $_POST['streetnumber'];
        } else {
            $streetnumber = 'Street number cant contain letters!';
        }
        echo $streetnumber;
    }
    if(!empty($_POST['city'])){
        if(!filter_var($_POST['city'], FILTER_VALIDATE_INT)){
            $city = $_POST['city'];
        } else {
            $city = 'City cant contain numbers!';
        }
        echo $city;
    }
    if(!empty($_POST['zipcode'])){
        if(filter_var($_POST['zipcode'], FILTER_VALIDATE_INT)){
            $zipcode = $_POST['zipcode'];
        } else {
            $zipcode = 'Zipcode cant contain letters!';
        }
        echo $zipcode;
    }
}
validator();

// if (!empty($_POST['email']) && !empty($_POST['street']) && !empty($_POST['streetnumber']) && !empty($_POST['city']) && !empty($_POST['zipcode'])){
//     if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
//         $email = $_POST['email'];
//         echo $email;
//     }
//     if(filter_var($_POST['streetnumber'], FILTER_VALIDATE_INT)){
//         $streetnumber = $_POST['streetnumber'];
//         echo $streetnumber;
//     }
//     if(filter_var($_POST['zipcode'], FILTER_VALIDATE_INT)){
//         $zipcode = $_POST['zipcode'];
//         echo $zipcode;
//     }
//     $street = $_POST['street'];
//     $city = $_POST['city'];

//     echo $street;
//     echo $city;
// }
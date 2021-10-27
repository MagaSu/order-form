<?php
  function result($arr, $products, $totalValue){
    foreach($arr as $key){
      $totalValue = $totalValue + ($products[$key[0]]['price'] * intval($key[1]));
    }

    if(array_key_last($_POST) == 'express delivery'){
      $totalValue = $totalValue + $_POST["express_delivery"];
    }
  }
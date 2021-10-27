<?php
  function getFood(&$arr){
    if(isset($_GET['food'])){
      if($_GET['food'] == 0){
        $arr = [
          ['name' => 'Cola', 'price' => 2],
          ['name' => 'Fanta', 'price' => 2],
          ['name' => 'Sprite', 'price' => 2],
          ['name' => 'Ice-tea', 'price' => 3],
        ];
      }
      else {
        $arr = [
          ['name' => 'Club Ham', 'price' => 3.20],
          ['name' => 'Club Cheese', 'price' => 3],
          ['name' => 'Club Cheese & Ham', 'price' => 4],
          ['name' => 'Club Chicken', 'price' => 4],
          ['name' => 'Club Salmon', 'price' => 5]
        ];
      }
    }
    else {
        $arr = [
          ['name' => 'Cola', 'price' => 2],
          ['name' => 'Fanta', 'price' => 2],
          ['name' => 'Sprite', 'price' => 2],
          ['name' => 'Ice-tea', 'price' => 3],
        ];
    }
  }
?>
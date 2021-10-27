<?php
  function getFields(){
    $userinfo = ['email', 'street', 'streetnumber', 'city', 'zipcode'];
    $arrFields = [];
    $errors = [];

    foreach ($userinfo as $field){
      if($_POST['field'] != ''){
        array_push($arrFields, $field);
      } else {
        array_push($error, ucfirst("$field is required!" . "<br>"));
      }
    }
    
    if(isset($_POST['products']) && is_array($_POST['products']) && count($_POST['products']) > 0){
      array_push($arrFields, $_POST['products']);
    } else {
      array_push($errors, "No product selected!" . "<br>");
    }

    if(isset($_POST['express_delivery'])){
      array_push($arrFields, "express_delivery");
    }

    return array('arrFieldsName' => $arrFields, 'arrErros' => $errors);
  }
?>
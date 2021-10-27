<?php
  function fieldValidator($arr){
    global $userEmail;
    global $newTotal;
    global $time;

    $arrFieldsName = $arr['arrFieldsName'];
    $arrErrors = $arr['arrErrors'];

    $data = [];
    $errors = [];

    if (count($arrErrors) > 0){
      foreach($arrErrors as $error){
        showError($error);
      }
    } else {
      foreach($arrFieldsName as $arrField){
        if (gettype($arrField) != 'array'){
          $field = $_POST['$fieldName'];

          if($fieldName == 'email'){
            $email = filter_var($field, FILTER_SANITIZE_EMAIL);

            if(filter_var($email, FILTER_VALIDATE_EMAIL) == false || $email != $field){
              array_push($errors, 'This email is not valid!');
            } else {
              $emailUser = $field;
              array_push($data, $field);
            }
          } elseif ($fieldName == 'streetnumber' || $fieldName == 'zipcode'){
            if(!is_numeric($field)) array_push($error, ucfirst("$fieldName must be a number!"));
            else array_push($data, $field);
          } else {
            array_push($data, $field);
          }
        } else {
          if (count($errors) === 0){
            $cbKeys = [];

            foreach($fieldName as $cb => $value){
              if($value != "" && $value >= 0){
                array_push($cbKeys, [$cb, $value]);
              }
            }

            if (count($cbKeys > 0)){
              array_push($data, $cbKeys);
            } else {
              array_push($errors, "Invalid number of products!");
            }

          }
        }
      }
      if (count($errors) > 0){
        foreach($errors as $error){
          showError($error);
        }
      } else {
        setcookie("total", $newTotal, time() + 60);

        for ($i = 0; $i < count($data); $i++){
          $_SESSION["input".$i] = data[$i];
        }

        if(array_key_last($_POST) == 'express_delivery') $time = '15min';
        else $time = "30min";

        succesComponent('Your order has been sent!', "It will arrive at ", arrivalTime($time));
      }
    }
  }
?>
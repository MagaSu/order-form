<?php
  function arrivalTime($timeValue){
    if ($timeValue == "15min"){
      return date('H:i', time() + 900);
    } else {
      return date('H:i', time() + 1800);
    }
  }
?>
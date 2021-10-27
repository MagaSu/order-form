<?php
  function succesComponent($sent, $time){
    echo `
      <div class="succes-block">
        <h4>$sent</h4>
        <p>$time</p>
      </div>
    `;
  }
?>
<?php
  function showError($error){
    echo `
      <div class="error-block">
        <h4>$error</h4>
        <p>Try Again!</p>
      </div>
    `;
  }
?>
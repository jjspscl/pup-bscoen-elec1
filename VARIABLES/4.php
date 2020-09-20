<!-- VARIABLE SCOPE --!>
<?php
    $name = 'JUPERT';
    function getName(){
      global $name;
      echo $name;
    }
    getName();
 ?>

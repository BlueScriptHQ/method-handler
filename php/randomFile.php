<?php

  require "parserClass.php";


  function getName() {
    return "test";
  }

  function getAge(){
    return 20;
  }

  // Aan het einde van de pagina
  $parser->sendResult();

?>

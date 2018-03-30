<?php
    $lang = $_GET['q'];
    if($lang == "eng") {
      $table = "text_ing";
    } else {
      $table = "text_port";
    } 
  

  $pdo = new PDO('mysql:host=localhost;dbname=TQS_Leads', 'root', 'root');

  $sql = $pdo -> prepare("SELECT `text` FROM $table");

  $sql -> execute();

  $result = $sql -> fetchAll(PDO::FETCH_COLUMN, 0);
  // $compHist = $sql -> fetchAll();

  // print_r($compHist);
  $resultJSON = json_encode($result);
  echo $resultJSON;

  /*foreach($compHist as $value) {
     //echo $value['text'];
     // echo "<pre>";
     // print_r($value);
     // echo "</pre";
  }*/

?>
<?php

if(isset($_POST['insert'])) {
    $vak = htmlspecialchars $_POST['vak'];
    $les_ID = htmlspecialchars $_POST['les_ID'];

function check_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  $insert_data = mysql_query('INSERT INTO lessen VALUES("$vak", "$les_ID")');
?>
<?php 

$vakErr = $student_idErr = $les_idErr = $cijferErr = "";
$vak = $student_id = $les_id = $cijfer = $succes = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["vak"])) {
    $vakErr = "Invoerveld vak mag niet leeg zijn";
  } else {
    $vak = test_input($_POST["vak"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$vak)) {
      $vakErr = "Only letters and white space allowed"; 
    }
  }

if (empty($_POST['student_id'])) {
    $student_idErr = "Student ID moet ingevuld worden";
} else {
    $student_id = test_input($_POST["student_id"]);
    //als id geen integer is geef fout weer
if (!is_int($student_id)) {
    $student_idErr = "Student Id kan alleen uit getallen bestaan";
}
}

if (empty($_POST['les_id'])) {
    $les_idErr = "les ID moet ingevuld worden";
} else {
    $les_id = test_input($_POST["les_id"]);
    if (!is_int($les_id)) {
        $les_idErr = "Les Id kan alleen uit getallen bestaan";
    }
}

if (empty($_POST['cijfer'])) {
    $cijferErr = "Cijfer moet ingevuld worden";
} else {
    $cijfer = test_input($_POST["cijfer"]);
    if (!is_int($cijfer)) {
        $cijferErr = "Cijfer kan alleen uit getallen bestaan";

  // Cleanup sectie, 
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;

  ?>
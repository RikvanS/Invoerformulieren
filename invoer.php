<?php 
$vakErr = "";
$vak = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["vak"])) {
        $vakErr = "Vak is een verplicht invoerveld";
    }else {
            $vak = data_input($_POST["vak"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$vak)) {
                $nameErr = "Alleen letters en blanco invoer toegestaan";
        }
    }
}

?>

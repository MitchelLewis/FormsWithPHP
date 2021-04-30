<?php
    include_once("connectdb.php");
    $vehicleReg = htmlspecialchars($_POST["reg_no"]);   
    $vehicleBrand = htmlspecialchars($_POST["brand"]);
    $vehicleDailyRate = htmlspecialchars($_POST["daily_rate"]);
    
    if(empty($vehicleReg)) {
        echo "<h1>Vehicle reg was not entered</h1>";
    } elseif(empty($vehicleBrand)) {
        echo "<h1>Vehicle brand was not entered</h1>";
    } elseif(empty($vehicleDailyRate)) {
        echo "<h1>Vehicle daily rate was not entered</h1>";
    } elseif(empty($_POST["type_of_vehicle"])) {
        echo "<h1>Type of vehicle was not entered</h1>";
    } elseif(!is_numeric($vehicleDailyRate)) {
        echo "<h1>Vehicle daily rate was not valid</h1>";
    } else {
        $typeOfVehicle = htmlspecialchars($_POST["type_of_vehicle"]);
        $sql = "INSERT INTO vehicles VALUES ('$vehicleReg', '$typeOfVehicle', '$vehicleBrand', ' ', $vehicleDailyRate)";
        $stmt = $pdo->prepare($sql);
        $stmt -> execute();
        if($stmt) {
            echo "<h1>Vehicle added</h1>";
        } else {
            echo "<h1>Something went wrong.</h1>";
        }
    }
?>
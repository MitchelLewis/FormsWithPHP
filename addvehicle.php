<?php
    include_once("connectdb.php");
    $vehicleReg = htmlspecialchars($_POST["reg_no"]);
    $vehicleBrand = htmlspecialchars($_POST["brand"]);
    $vehicleDailyRate = htmlspecialchars($_POST["daily_rate"]);
    $typeOfVehicle = htmlspecialchars($_POST["type_of_vehicle"]);
    if(!is_numeric($vehicleDailyRate)) {
        echo "<h1>Vehicle daily rate was not valid</h1>";
    } else {
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
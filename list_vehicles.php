<?php
    include_once("connectdb.php");
    $sql = "SELECT COLUMN_NAME\n"

    . "  FROM INFORMATION_SCHEMA.COLUMNS\n"

    . "  WHERE TABLE_NAME = 'vehicles'";
    $colStmt = $pdo->prepare($sql);
    $colStmt -> execute();
    $result = "<table><tr>";
    while($row = $colStmt->fetch()){
        foreach($row as $key => $value) {
            $result = $result . "<th>$value</th>";
         }
        
    }
    $result = $result . "</tr>";
    $selectSQL = "SELECT * FROM vehicles";
    $selectStmt = $pdo->prepare($selectSQL);
    $selectStmt -> execute();
    while($row = $selectStmt->fetch()) {
        $result = $result . "<tr>";
        foreach($row as $key => $value) {
           $result = $result . "<td>$value</td>";
        }
        $result = $result . "</tr>";
    }
    echo $result;
    $pdo = null;
?>
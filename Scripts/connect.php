<?php
// PHP Data Objects(PDO) Sample Code:
echo "suod";

try {
    $conn = new PDO("sqlsrv:server = tcp:hatorders.database.windows.net,1433; Database = Orders", "sean", "{shushk!7}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
    echo "died";
}


// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "sean@hatorders", "pwd" => "{shushk!7}", "Database" => "Orders", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:hatorders.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

/*
$statement = $conn->prepare("INSERT INTO dbo.Details(Id, ProductType, Colors, Description, Size)
    VALUES(?, ?, ?, ?, ?)");
    
$statement->execute(array("1", "Hat", "Gray", "Super cool", "medium"));


echo "succes";
echo "chuckle";
*/
?>/

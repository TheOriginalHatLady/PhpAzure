<html>
<body>
<?php
// PHP Data Objects(PDO) Sample Code:
echo "suod";

try {
    $conn = new PDO("sqlsrv:server = tcp:hatorders.database.windows.net,1433; Database = Orders", "sean", "{shushk!7}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connect";
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
    echo "died";
}

echO "connection ran";
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "sean@hatorders", "pwd" => "{shushk!7}", "Database" => "Orders", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:hatorders.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
echo "before";
try{
$conn = new PDO("sqlsrv:server = tcp:hatorders.database.windows.net,1433; Database = Orders", "sean", "{shushk!7}");
echo "we in ";
$statement = $conn->prepare("INSERT INTO dbo.Details(Id, ProductType, Colors, Description, Size)
    VALUES(?, ?, ?, ?, ?)");
echo "statement";
//$statement->execute(array(2, "Hat", "Gray", "Super cool", "medium"));
$statement->execute(array(2, (string)$_POST["type"], (string)$_POST["color"], (string)$_POST["description"], (string)$_POST["size"]));
echo " after insert";
var_dump($_POST["color"])
echo "var"

}
catch (Exception $e) {
    die("Oh noes! There's an error in the query!");
}

?>/
</body>
</html>

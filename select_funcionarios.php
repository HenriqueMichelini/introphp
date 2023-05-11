<?php

include('mysql_connection.php');

$sql = "SELECT * FROM funcionarios";
$result = mysqli_query($conn, $sql);

?>
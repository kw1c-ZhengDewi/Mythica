<!-- 
Auteur: Dewi Hu
Datum: 09-06-2025 
Omschrijving: Praktijk Projectopdracht T04
-->

<!-- Use this video tutorial: 
 1. https://www.youtube.com/watch?v=-1DTYAQ25bY&t=112s
 2. https://www.youtube.com/watch?v=tq0ghtZsHJ0


-->


<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "example_db";

$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "Could not connect";
}

if ($conn) {
    echo "<p class='ColorGuideLine'>you are connected!</p>";
}


?>
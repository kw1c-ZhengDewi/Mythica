<!-- 
Auteur: Dewi Hu
Datum: 09-06-2025 
Omschrijving: Praktijk Projectopdracht T04
-->

<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "mythica";

$conn = "";

try {
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
} catch (mysqli_sql_exception) {
    echo "Could not connect";
}

// Testen of de code werkt
//if ($conn) {
//    echo "<p class='ColorGuideLine'>you are connected!</p>";
//}

global $conn;
$sql = "SELECT * FROM `users`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . $row["User_ID"] . "<br>";
        echo $row["User_Email"] . "<br>";
        echo $row["User_Password"] . "<br>";
        echo $row["Reg_Date"] . "<br>";
    }
} else {
    echo "No users found";
}
mysqli_close($conn);

?>
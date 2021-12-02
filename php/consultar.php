<?php
$servername = "localhost";
$username = "prueba";
$password = "c8u$7ShG";
$dbname = "cb_mantenimiento";

// Create connection
$connection = mysqli_connect($servername, $username, $password,$dbname);

// failed
if(mysqli_connect_errno()){
    die("conection failed: ")
    . mysqli_connect_errnor()
    . "(". mysqli_connect_errno()
    .  ")");
} 

//
$result = msyqli_query($connection,"SELECT * FROM registro");
$all_property = array();

//
echo <'table class ="data-table">
    <tr class = "data-heading">';
while ($property = mysqli_fetch_field($result)){
    echo'<td>' . $property->name . '/td';
    array_push($all_property, $property->name);
}
echo '</tr>';


//
while($row = mysqli_fetch_array($result)){
    echo '<tr>';
    foreach($all_property as $item){
        echo '<td>' . $row[$item] . '</td>';
    }
    echo '</tr>';
}
echo"</table>";



?>
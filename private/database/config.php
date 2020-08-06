<?php 
 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'weightlosstracker');
define('DB_PASSWORD', 'weightlosstracker');
define('DB_DATABASE', 'weightlosstracker');

//connect script
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if(!$conn){
    echo "<h1>Error: Failed to connect to database! \n : </h1>".mysqli_connect_error();
}

?>
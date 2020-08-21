<?php
include('config.php');

function getFood($conn){
    // !REFACTOR AND COMMENT
    $food = array();
    $res = $conn->query("SELECT * From food");
    if ($res) {
        while($rows = mysqli_fetch_assoc($res)){
            array_push(
                $food,
                array($rows['food_name'], $rows['calories'])
            );
        }
    } else {
        echo "<h3 style='color:red'>ERROR! $res <br>".$conn->error."</h3><br>";
    }
    return $food;
}
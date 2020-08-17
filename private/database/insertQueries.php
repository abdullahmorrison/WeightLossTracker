<?php
include('config.php');
/**
 * The IDs of food are auto incremented, so in order to find the next id to be inserted
 * you must find the largest id. This function does that and return the value + 1.
 */
function findNewId($conn, $id)
{
    $res = $conn->query(
        "SELECT max($id)"
    );
    if ($res) {
        return $res+1;
    } else {
        return 1;
    }
}
function addFood($conn, $food_name, $calories)
{
    $res = $conn->query("SELECT NOW() as result");
    if ($res) {
        $rows = mysqli_fetch_assoc($res);
        $date = htmlspecialchars($rows['result']);
    } else {
        echo "<h3 style='color:red'>ERROR! $res <br>".$conn->error."</h3><br>";
    }

    $query = "INSERT INTO eats VALUES (1,".findNewId($conn, 'food_id').");";
    $res = $conn->query($query);
    if (!$res) {
        echo "<h3 style='color:red'>ERROR! $query <br>".$conn->error."</h3><br>";
    }
    
    $query = "INSERT INTO food(food_name, date, calories) VALUES('$food_name', '$date', $calories);";
    $res = $conn->query($query);
    if (!$res) {
        echo "<h3 style='color:red'>ERROR! $query <br>".$conn->error."</h3><br>";
    }
}

function addProgress($conn, $weight_kg)
{//!NOT WORKING
    /*Retriving the current date and time*/
    $res = $conn->query("SELECT NOW() as result");
    if ($res) {
        $rows = mysqli_fetch_assoc($res);
        $date = htmlspecialchars($rows['result']);
    } else {
        echo "<h3 style='color:red'>ERROR! $res <br>".$conn->error."</h3><br>";
    }

    /*Inseting into the relationship makes*/
    $query = "INSERT INTO makes VALUES (1,".findNewId($conn, 'progress_id').");";
    $res = $conn->query($query);
    if (!$res) {
        echo "<h3 style='color:red'>ERROR! $query <br>".$conn->error."</h3><br>";
    }

    /* Inserting wieght into progess table*/
    $query = "INSERT INTO progress(date, weight_kg, weight_lbs) VALUES('$date', $weight_kg, $weight_lbs);";
    $res = $conn->query($query);
    if (!$res) {
        echo "<h3 style='color:red'>ERROR! $query <br>".$conn->error."</h3><br>";
    }
}

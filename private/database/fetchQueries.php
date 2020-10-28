<?php
include('config.php');

/**
 * Description: This function retrieves all data form the food table.
 * @param food_id: if this is set (not null) it will only retieve the food data from that food_id
 */
function getFood($conn, $food_id = null)
{
    // !REFACTOR AND COMMENT
    $food = array();
    if ($food_id != null) {
        $res = $conn->query("SELECT * From food WHERE food_id = $food_id");
    } else {
        $res = $conn->query("SELECT * From food");
    }
    if ($res) {
        while ($rows = mysqli_fetch_assoc($res)) {
            array_push(
                $food,
                array($rows['food_id'], $rows['food_name'], $rows['calories'])
            );
        }
    } else {
        echo "<h3 style='color:red'>ERROR! $res <br>".$conn->error."</h3><br>";
    }
    return $food;
}

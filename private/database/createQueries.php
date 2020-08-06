<?php
    include('config.php');
    
    $createQueries = array(
        "person" =>
            "CREATE TABLE person(
                person_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
                first_name varchar(255),
                last_name varchar(255)
            );",
        "tracker" =>
            "CREATE TABLE tracker(
                tracker_id int PRIMARY KEY NOT NULL AUTO_INCREMENT REFERENCES uses(person_id) ON DELETE CASCADE,
                date date,
                calorieIntake int,
                weight int,
                foodName varchar(255)
            );",
        "uses" =>
            "CREATE TABLE uses(
                person_id int,
                tracker_id int,
                FOREIGN KEY(person_id) REFERENCES person(person_id) ON DELETE CASCADE
            );"
    );
    foreach ($createQueries as $tables) {
        $tableName = array_search($tables, $createQueries);
        $res = $conn->query($createQueries[$tableName]);
        if ($res) {
            echo "<h1 style='color:green'>The $tableName table created successfully!</h1>";
        } else {
            echo "<h1 style='color:red'>Error occurred creating the $tableName table: ".$conn->error."</h1>";
        }
    }

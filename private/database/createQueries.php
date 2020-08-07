<?php
    include('config.php');
    
    $createQueries = array(
        "person" =>
            "CREATE TABLE person(
                person_id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
                first_name varchar(255),
                last_name varchar(255)
            );",
        "progress" =>
            "CREATE TABLE progress(
                progress_id int PRIMARY KEY NOT NULL AUTO_INCREMENT REFERENCES makes(progess_id) ON DELETE CASCADE,
                date date,
                weight_kg int,
                weight_lbs int
            );",
        "makes" =>
            "CREATE TABLE makes(
                person_id int,
                progress_id int,
                FOREIGN KEY(person_id) REFERENCES person(person_id) ON DELETE CASCADE,
                FOREIGN KEY(progress_id) REFERENCES progress(progress_id) ON DELETE CASCADE
            );",
        "food" =>
            "CREATE TABLE food(
                food_id int PRIMARY KEY NOT NULL AUTO_INCREMENT REFERENCES eats(food_id) ON DELETE CASCADE,
                date date,
                weight_kg int,
                weight_lbs int
            );",
        "eats" =>
            "CREATE TABLE eats(
                person_id int,
                food_id int,
                FOREIGN KEY(person_id) REFERENCES person(person_id) ON DELETE CASCADE,
                FOREIGN KEY(food_id) REFERENCES food(food_id) ON DELETE CASCADE
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

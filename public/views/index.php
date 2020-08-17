<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css"/><!--STYLES-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"><!--FONTS-->

    <?php
        include('../../private/database/insertQueries.php');
    ?>

    <title>Weight Loss Tracker</title>
</head>
<body>
    <header>
        <h1>Weight Loss Tracker</h1>
    </header>
    <main>
        <form  action="" method="post">
            <label for="food">Food Name</label>
            <input id='food' name="food_name" type="text" placeholder="*required" required/>

            <label for="calories">Calories of Food</label>
            <input id='calories' name="calories" inputmode="numeric" placeholder="*required" required/> 

            <input type="submit" name="food" value="Input Food Eaten"/><!-- DISABLE BUTTON ONCE CLICKED-->
        </form>
        <form>
            <label for="wieght">Weight</label>
            <input id='wieght' type="text" placeholder="*required"/>
            <input type="submit" name="wieght" value="Input Weight"/><!-- DISABLE BUTTON ONCE CLICKED-->
        </form>
    </main>
    <footer>
        Contact: abdullahmorrison@gmail.com
    </footer>
</body>
</html>
<?php
    /**
     * TODO: allow user to choose between kg and lbs. Convert it in the front-end.
     */
    if (array_key_exists('food', $_POST)) {
        addFood($conn, $_POST['food_name'], $_POST['calories']);
    }
    if (array_key_exists('weight', $_POST)) {
        addProgress($conn, $_POST['weight'], 12);
    }
?>
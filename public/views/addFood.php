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

    <title>Graphed Data</title>
</head>
<body>
    <?php include('pageComponents/header.php'); ?>
    <form  action="" method="post">
        <label for="food">Food Name</label>
        <input id='food' name="food_name" type="text" placeholder="*required" required/>

        <label for="calories">Calories of Food</label>
        <input id='calories' name="calories" inputmode="numeric" placeholder="*required" required/> 

        <label for="foodPicture">Picture of Food</label>
        <input id='foodPicture' class='picture' name="foodPicture"/> 

        <label for="labelPicture">Picture of Food Label</label>
        <input id='labelPicture' class='picture' name="labelPicture"/> 

        <input type="submit" name="food" value="Input Food Eaten"/><!-- DISABLE BUTTON ONCE CLICKED-->
    </form>
    <?php
        /**
         * TODO: allow user to choose between kg and lbs. Convert it in the front-end.
         */
        if (array_key_exists('food', $_POST)) {
            addFood($conn, $_POST['food_name'], $_POST['calories']);
        }
    ?>
    <?php include('pageComponents/footer.php'); ?>
</body>
</html>
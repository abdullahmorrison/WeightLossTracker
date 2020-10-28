<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css"/><!--STYLES-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"><!--FONTS-->

    <?php
        include('../../private/database/fetchQueries.php');
    ?>

    <title>Weight Loss Tracker</title>
</head>
<body>
    <?php
        include('pageComponents/header.php');
        include('../components/modal.php'); //modal (dialog box) for selecting food
    ?>
    <form>
        <label for="wieght">Weight</label>
        <input id='wieght' type="text" placeholder="*required" required/>
        <input type="submit" name="wieght" value="Input Weight"/><!-- DISABLE BUTTON ONCE CLICKED-->
    </form>
    <?php
        //checking button click for weight
        if (array_key_exists('weight', $_POST)) {
            addProgress($conn, $_POST['weight'], 12);
        }
    ?>
    <main>
        <h3>Track Food Eaten</h3>
        <?php
            $food = getFood($conn); //getting all food from database
            foreach ($food as $f) { //looping through each food
                //displaying food name (f[1]) and its calories (f[2])
                echo
                "<div id=\"".$f[0]."\" class=\"foodSelection\" onclick=displayModal(".$f[0].")>"
                    .$f[1]."  (".$f[2]." cal)
                </div>";
            }
        ?>
        <a href="addFood.php">
            <div class="foodSelection">
                + Add New Food
            </div>
        </a>
    </main>
    <?php include('pageComponents/footer.php'); ?>
</body>
</html>
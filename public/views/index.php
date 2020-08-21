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
    <?php include('pageComponents/header.php'); ?>
    <main>
        <h3>Track Food Eaten</h3>
        <?php
            // !COMMENT CODE
            $food = getFood($conn);
            foreach ($food as $f) {
                echo
                "<div class=\"foodSelection\">"
                    .$f[0]."  (".$f[1]." cal)
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
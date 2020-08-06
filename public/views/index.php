<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="styles.css?"/><!--STYLES-->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"><!--FONTS-->

    <title>Weight Loss Tracker</title>
</head>
<body>
    <header>
        <h1>Weight Loss Tracker</h1>
    </header>
    <main>
        <form  action="" method="post">
            <label for="student_num">Calorie Intake</label>
            <input id='student_num' inputmode="numeric" placeholder="*required" required/>  
            <input type="submit" value="Input Calorie"/><!-- DISABLE BUTTON ONCE CLICKED-->

            <label for="team">Food Eaten</label>
            <input id='team' type="text" placeholder="*required" required/>
            <input type="submit" value="Input Food Eaten"/><!-- DISABLE BUTTON ONCE CLICKED-->

            <label for="team">Weight</label>
            <input id='team' type="text" placeholder="*required" required/>
            <input type="submit" value="Input Weight"/><!-- DISABLE BUTTON ONCE CLICKED-->
        </form>
    </main>
    <footer>
        Contact: abdullahmorrison@gmail.com
    </footer>
</body>
</html>
<?php
    if ($_GET) {
        if (isset($_POST['insert'])) {
            echo "worked";
        } else {
            echo "fail";
        }
    }
?>
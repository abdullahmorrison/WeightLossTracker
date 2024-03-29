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

    <title>Graphed Data</title>
</head>
<body>
    <?php include('pageComponents/header.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <div class="graphContainer">
        <canvas id="myChart" width="400" height="200"></canvas>
        <?php
            $food = getFood($conn); //getting all food from database
            $foodCalories = array();
            $foodDate = array();
            foreach ($food as $f) { //looping through each food
                //food date eaten (f[3]) and its calories (f[2])
                array_push($foodDate, "'".$f[3]."'"); //x-axis
                array_push($foodCalories, $f[2]); //y-axis
            }
            $foodDateString = implode(', ' , $foodDate);
            $foodCaloriesString = implode(', ' , $foodCalories);
        ?>
        <script>
            var ctx = document.getElementById('myChart');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php echo $foodDateString ?>],
                    datasets: [{
                        label: 'Calories',
                        data: [<?php echo $foodCaloriesString ?>],
                        backgroundColor: 'rgb(255, 0, 0)',
                        fill: false,
                        lineTension: 0,
                        pointRadius: 10,
                        pointHoverRadius: 12
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    },
                    title: {
                        display: true,
                        text: 'Calories Eaten within a day'
                    },
                    legend: {
                        display: false
                    }
                }
            });
        </script>
    </div>
    <?php include('pageComponents/footer.php'); ?>
</body>
</html>
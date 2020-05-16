<!DOCTYPE html>

<html lang="en">
    <?php 
        include "layout.php";
        include_once 'includes/database.inc.php';
    ?>

    <head>
        <script src="./js/chart.js"></script>
    </head>
    <body>
        <div class="chart-container">
            <canvas id="myChart" width="100" height="100"></canvas>
        </div>
        <script>
            <?php
                $query = $connection->prepare("SELECT `min_temp`,`max_temp`,`date` FROM " . $table . " ORDER BY date LIMIT 10");
                $query->execute();

                $min_temps = "[";
                $max_temps = "[";
                $dates = "[";

                while ($row = $query->fetch()) {
                    if($min_temps == "[") {
                        $min_temps .= $row['min_temp']; 
                    }else {
                        $min_temps .= "," . $row['min_temp']; 
                    }
                    if($max_temps == "[") {
                        $max_temps .= $row['max_temp']; 
                    }else {
                        $max_temps .= "," . $row['max_temp']; 
                    }
                    if($dates == "[") {
                        $dates .= "'" . $row['date'] . "'"; 
                    }else {
                        $dates .= ",'" . $row['date'] . "'"; 
                    }
                }

                echo "var min = " . $min_temps . "];";
                echo "var max = " . $max_temps . "];";
                echo "var dates = " . $dates . "];";
            ?>

            generateChart(min, max, dates);
        </script>
    </body>
</html>
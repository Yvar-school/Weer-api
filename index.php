<!DOCTYPE html>

<html lang="en">
    <head>
        <?php 
            include "head.php";
            include "./includes/production.php";
            include_once 'includes/database.inc.php';
        ?>
    </head>
    <body>
        <?php include 'layout.php'; ?>
        <div id="content">
            <?php
                // routing
                if (isset($_GET['page'])) {
                    // include $_GET['page'].'.php';
                    switch ($_GET['page']) { // beter voor de security ;-)
                        case 'graphs': include 'graphs.php'; break;
                        case 'map': include 'map.php'; break;
                        case 'buien': include 'buien.php'; break;
                        default: include 'temp.php'; break;
                    }
                } else
                    include 'temp.php';
                if ($error!="") echo '<BR>'.$error;
            ?>
        </div>
    </body>
</html>

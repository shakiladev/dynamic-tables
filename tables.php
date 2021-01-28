<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Tables</title>
</head>
<body>
    <?php
        //Generate an Html table
        // 3 rows, 4 columns

        echo "<table id=\"first\">";

        for ($row=1; $row<4; $row++){

            echo "<tr>";

            for ($col=1; $col<5; $col++) {
                
                echo "<td>Row $row, Column $col</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>
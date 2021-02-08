<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Dynamic Tables</title>
</head>
<body>
    <h2>Dynamics Tables</h2><br>
    <?php
        //Generate a Company Table

        echo "<table id=\"company\">";

        echo "<tr>";
        
        for ($titles=1; $titles<5; $titles++){

            echo "<th>Title $titles </th>";
        }

        echo "</tr>";

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
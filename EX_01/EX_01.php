<html>
<head>
    <h1>bienvenidos</h1>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 50%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        }
    </style>
</head>
<body>
<?php
$position = "1";
?>
<table>
    <tr>
        <?php
        $position = 1;
        for ($position; $position <= 10; $position++) {
            echo "<tr>
    <td>$position estamos en segundo de DAW</td>
  </tr>";
        }
        ?>
    </tr>
</table>
</body>
</html>


<html>
<head>

    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 75%;
        }
        td, th {
            border: 3px solid #000000;
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
        <td>
        <?php

        $language = array('ESP' => ['name' => 'España', 'code' => '724'], 'AND' => ['name' => 'Andorra', 'code' => '020'],
            'ANG' => ['name' => 'Angola', 'code' => '024'], 'CUB' => ['name' => 'Cuba', 'code' => '192'],
            'EGY' => ['name' => 'Egipto', 'code' => '818'], 'FIN' => ['name' => 'Finlandia', 'code' => '246'],
            'LIB' => ['name' => 'Libia', 'code' => '434'], 'UAE' => ['name' => 'Emiratos_Árabes_Unidos', 'code' => '784'],
            'SWE' => ['name' => 'Suecia', 'code' => '752'], 'MRI' => ['name' => 'Mauricio', 'code' => '480']);


        foreach ($language as $code3 => ["name" => $name, "code" => $code]) {
            echo 'El pais ' . $name . ' con el code ' . $code . ' con 3 letras es ' . $code3 . '<br>';
        }


        ?>
        </td>
    </tr>
</table>
</body>
</html>
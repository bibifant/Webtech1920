<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Aufgabe5</title>
    <style>
        tbody{
            color: rebeccapurple;
        }
        td:hover{
            background-color: #a94442;
        }

    </style>
    <?php
    function zufzahl($max, $anzahl, $stellen){
        echo "<table class='table table-striped table-hover'>";
        echo "<thead> <tr>
        <th>Zufallszahl</th>";
    for($j=1; $j<=$stellen; $j++){
            echo "<th> gerundet $j </th>";
        }
    echo "</tr> </thead> <tbody>";
        for($i=1; $i<$anzahl; $i++) {
            $zzahl = rand(1, $max);
                echo "<tr>";

            /*$gerundet2 = abschneiden($zzahl, 2);
            $gerundet3 = abschneiden($zzahl, 3);
            echo $zzahl, $gerundet2, $gerundet3."<br>";
            */
            if ($zzahl > 1000)
            echo "<td style='background-color: #9fcdff'>$zzahl</td>";
            elseif ($zzahl > 500)
                echo "<td style='background-color: burlywood'>$zzahl</td>";

            else echo "<td style='background-color: darkseagreen'>$zzahl</td>";
            for ($j = 1; $j <= $stellen; $j++) {
                if($zzahl >1000)
                echo "<td style='background-color: #9fcdff'>" . abschneiden($zzahl, $j) . "</td>";
                elseif ($zzahl >500)
                    echo "<td style='background-color: burlywood'>" . abschneiden($zzahl, $j) . "</td>";
                else
                    echo "<td style='background-color: darkseagreen'>" . abschneiden($zzahl, $j) . "</td>";
            }
            echo "</tr>";
        }
   echo " </tbody></table>";
    }

    function abschneiden($zahl, $stellen=2){
        $base = pow(10, $stellen);
        return $zahl - ($zahl % $base);
    }


    ?>

</head>
<body>
<h1>Zufallszahlen</h1>
<div>
    <?php
    zufzahl(2000, 20, 3);?>
</div>
</body>

</html>
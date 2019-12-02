<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aufgabe5</title>
    <?php
    function zufzahl($max, $anzahl, $stellen){
        echo "<table>";
        echo "<thead> <tr>
        <th>Zufallszahl</th>";
    for($j=1; $j<=$stellen; $j++){
            echo "<th> gerundet $j </th>";
        }
    echo "</tr> </thead> <tbody>";
        for($i=1; $i<$anzahl; $i++) {
            $zzahl = rand(1, $max);
            if ($zzahl > 1000)
                echo "<tr>";
            elseif ($zzahl > 10000) echo "<tr style='background-color: #6f42c1;'>";
            elseif ($zzahl > 100000) echo "<tr style='background-color: #0c5460'>";

            /*$gerundet2 = abschneiden($zzahl, 2);
            $gerundet3 = abschneiden($zzahl, 3);
            echo $zzahl, $gerundet2, $gerundet3."<br>";
            */
            echo "<td>$zzahl</td>";

            for ($j = 1; $j <= $stellen; $j++) {
                echo "<td>" . abschneiden($zzahl, $j) . "</td>";
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
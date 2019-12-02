<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <title>Aufgabe 6</title>
    <?php
        require_once "./mockdataarray.php";
    ?>
</head>
<body>
<div class="container">
    <h1>Teilnehmerinnen</h1>
    <?php
    /*  die print_r()-Funktion ist nur zur Kontrolle, ob das $members-Array
        befüllt ist. Kommentieren Sie diese Anweisung aus.
        Das Auslesen des $members-Array erfolgt dann unten in der Tabelle

    print_r($members);
    */
    /*
        in diesem php-Tag könnten Sie stattdessen prüfen, ob das $_GET-Array
        oder das $_POST-Array befüllt ist
        falls $_GET-Array, dann Formular mit den passenden Werten
        falls $_POST-Array, dann das Array ändern und in die Datei schreiben
        In die Datei schreiben:
            $datei = fopen("./mockdataarray.php", "r+");
            $output = '<?php $members='.var_export($members, true).'; ?>';
            fwrite($datei, $output);
            fclose($datei);
    */

    require_once('mockdataarray.php');
    function simpleTable($Vorname, $Nachname, $EMail, $id){

            echo "<tr> <td>$Vorname</td> <td>$Nachname</td> <td>$EMail</td><td><a href='id=$id'>edit</a></td>";

    }

/*echo $members[1][1];

    $memberValues=implode(" ", $members[1]);
    echo $memberValues;
*/
    ?>

    <table class="table table-striped table-responsive">
        <thead>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>E-Mail</th>
        <th>Edit</th>
        </thead>
        <tbody>

<?php
$vorname='';
$nachname='';
$email='';
$id=0;
$editMode=false;
/*einzelne Zeilen der mockuparray.php Datei ausgeben: */



if(!$editMode){
for($j=0; $j<50; $j++){
    for ($i=0;$i<1; $i++){
    simpleTable($members[$j][$i], $members[$j][$i+1], $members[$j][$i+2],count($members[$j][$i]));

    }    $id=$j;
}
}
elseif(isset($_POST['submit'])){
    if(isset($_POST['vorname'])){
        $vorname=$_POST['vorname'];
    }
    if (isset($_POST['nachname'])){
        $nachname=$_POST['nachname'];
    }
    if(isset($_POST['email'])){
        $email=$_POST['email'];
    }
}
printf('Vorname: %s <br> Nachname:%s <br> E-Mail: %s', htmlspecialchars($vorname, ENT_QUOTES), htmlspecialchars($nachname, ENT_QUOTES), htmlspecialchars($email, ENT_QUOTES))


?>
        <!-- hier die einzelnen Zeilen einfügen
             jede Zeile ist ein Array aus dem 2-dimensionalen
             $members-Array
             -->

        </tbody>
    </table>
</div>
<div class="form-group">
<form class="" action="./Aufgabe6/aufgabe6.php" method="post" id="1000">
    <label>Vorname: </label> <input type="text" name="vorname" value= <?php echo htmlspecialchars($members[$id][0]) ?>><br>
    <label>Nachname: </label> <input type="text" name="nachname" value=<?php echo htmlspecialchars($members[$id][1]) ?>><br>
    <label>E-Mail: </label><input type="email" name="email" value=<?php echo htmlspecialchars($members[$id][2]) ?>><br>
    <input type="submit" name='submit' value="speichern" />
    <input type="submit" name='cancel' value="abbrechen" />
</form>
</div>
</body>
</html>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Uebung 9</title>
    <style>
        footer, header{
            background-color: darkgray;
            color: white;
            width: 100%;
            height: 80px;
            text-align: center;
            font-size: 1.2em;
            font-weight: bold;
        }
        footer{
            position: absolute;
            bottom: 0;
        }

        footer>a, footer>a:visited, footer>a:hover, footer>a:link{
            color: white;
            text-decoration: none;
        }
        @media screen and max-width: 768 px{
        #mitte{
        display:none;
        }}
    </style>
    <?php require_once 'player.php'; ?>;
</head>

<footer>
    <a href="http://webtech.f4.htw-berlin.de/~s0558599/Webtech1920/">
        Name: Laura Hartstein
        Matrikelnummer: s0558599
    </a>
</footer>
<body>
<div class="container-fluid">
    <?php
    if($_GET){
        $id=$_GET['id'];
    }
    echo <header>
    <h1></h1>
    </header>

    ?>
    <script>
        function wuerfel() {
        let wurf = Math.floor(Math.random()*6)+1;
        document.getElementById('wuerfel').innerHTML=wurf;
        }
    </script>
    <header>
        <h1>
            Ein Spiel
        </h1>
    </header>
    <div id="main" class="row">
        <div id="links" class="col-sm-12 col-md-3">
            <h1>Auswahl Spielerin</h1>
            <ul>
                <?php
                for($i=0; $i<count($player);$i++){
                    echo '<li><a href="index.php?id='.$i.'">'.$player[$i].["name"].'('.$player[$i]["moves"].')></a></li>';
                }
                ?>
            </ul>
        </div>
        <div id="mitte" class="col-md-2">
            <h3>oder</h3>
        </div>
        <div id="rechts" class="col-sm-12 col-md-7">
            <h3>neue Spielerin anlegen</h3>
        </div>
    </div>

</div>
</body>
</html>
//viewport classes xs, sm, md, lg, xl
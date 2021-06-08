<?php
?>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <div class="container">
            <p>Ruiter: <?php echo $Ruiter["Ruiters"]; ?></p>
            <p>Paard: <?php echo $Ruiter["Paardnaam"]; ?></p>
            <p>Geplande tijd: <?php echo $Ruiter["PlanTijd"]; ?></p>

            <br>

        <a class= "link" href="<?=URL?>empty/gebruikeredit/<?=$Ruiter["id"];?>">Bewerk deze gebruiker</a>
        <br>
        <br>
        <a class= "link" href="<?=URL?>empty/gebruikerdelete/<?=$Ruiter["id"];?>">Verwijder deze gebruiker</a>
        <br>
        <br>
    </div>
</body>
</html>
<?php
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="container">
		<h2>Gebruikers</h2>
	<?php 
       for($i=0; $i<count($result); $i++){
    ?>	
	<form name="Gebruiker" action="<?=URL?>empty/gebruiker/<?=$result[$i]["Ruiters"] ?>" method="POST">
        <p>Gebruiker: <?php echo $result[$i]["Ruiters"]; ?></p>

       	<button>Ga naar deze gebruiker</button>

       	<br>
       	<br>
        
    </form>
    <?php
    	}
	?>

	<a class= "link" href="<?=URL?>empty/gebruikeradd ?>">Voeg een gebruiker toe </a>
	<br>
    <br>



	</div>
</body>
</html>
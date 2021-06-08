<?php
	echo "test";
	var_dump($RuiterData);
?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class= "container">
		<form>
			<label for= "v1" class= "l1">Ruiter:</label>
		        <input type="text" name="v1" placeholder="Vul in." value="<?php echo $RuiterData['Ruiters']; ?>"required>

		        <br>

		        <label for= "v2" class= "l2">Paard:</label>
		        <input type="text" name="v2" placeholder="Vul in." value="<?php echo $RuiterData['Paardnaam']; ?>" required>

		        <br>

		        <label for= "v3" class= "l3">Tijd:</label>
		        <input type="time" name="v3" placeholder="Vul in." value="<?php echo $RuiterData['PlanTijd']; ?>" required>

		        <br>

		        <button>Bewerk gebruiker</button>
		</form>
	</div>
</body>
</html>
<?php
?>
<div class="container">
	<form name="gebruikeradd" method="post" action="">
		<label for= "v1" class= "l1">Ruiter:</label>
	        <input type="text" name="v1" placeholder="Vul in." required>

	        <?php echo "<br>" ?>

	        <label for= "v2" class= "l2">Paard:</label>
	        <input type="text" name="v2" placeholder="Vul in." required>

	        <?php echo "<br>" ?>

	        <label for= "v3" class= "l3">Tijd:</label>
	        <input type="time" name="v3" placeholder="Vul in." required>

	        <?php echo "<br>" ?>

	        <button>Voeg gebruiker toe</button>
	</form>
	
	<br>

	<a class="link" href="<?=URL?>empty/index">Terug naar home page</a>

	<br>
	<br>
</div>
<?php
	function checkConnection(){
	    try{ 
    		$conn = openDatabaseConnection(); 
	       	$stmt = $conn->prepare("SHOW TABLES");
       		$stmt->execute();
       		$stmt->fetchAll();
       		
	    }catch(Exception $e){
			return false;
	    }

	    return true;
	}

function GetHorses(){
   try {
       $conn=openDatabaseConnection();
   
       $stmt = $conn->prepare("SELECT * FROM paarden");

       $stmt->execute();

       $result = $stmt->fetchAll();

   }
   catch(PDOException $e){
       echo "Connection failed: " . $e->getMessage();
   }
   $conn = null;
   return $result;
}

function GetGebruiker($data){

    $conn=openDatabaseConnection();

    $stmt = $conn->prepare("SELECT * FROM paarden WHERE Ruiters = '$data[gebruiker]'");

    $stmt->execute();

    $result = $stmt->fetch();

    $conn = null;

    return $result;

}

function AddGebruiker($data){
    $conn=openDatabaseConnection();

    $stmt = $conn->prepare("INSERT INTO `paarden` (`id`, `Ruiters`, `Paardnaam`, `PlanTijd`) VALUES (NULL, '$data[Ruiter]', '$data[Paard]', '$data[Tijd]');");

    $stmt->execute();

    $conn = null;
}

function DeleteGebruiker($id){
    $conn=openDatabaseConnection();

    $stmt = $conn->prepare("DELETE FROM `paarden` WHERE `paarden`.`id` = $id");

    $stmt->execute();

    $conn = null;

}

function GetGebruikerId($id){
    $conn=openDatabaseConnection();

    $stmt = $conn->prepare("SELECT * FROM paarden WHERE id = $id");

    $stmt->execute();

    $result = $stmt->fetch();

    $conn = null;

    return $result;
}

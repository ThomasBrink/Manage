<?php
require(ROOT . "model/EmptyModel.php");


function index()
{
	$connection = checkConnection();

	$result = GetHorses();

    render('empty/index', array("result" => $result));
}

function gebruiker($Ruiter){
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$data = array(
			"gebruiker" => $Ruiter
		);

		$Ruiter = GetGebruiker($data);
	}

	render('empty/gebruiker', array("Ruiter" => $Ruiter));
}

function gebruikeradd(){
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$v1 = $_POST["v1"];
        $v2 = $_POST["v2"];
        $v3 = $_POST["v3"];

        $data = array(
        	"Ruiter" => $v1,
        	"Paard" => $v2,
        	"Tijd" => $v3

    	);

    	AddGebruiker($data);
	}

	render('empty/gebruikeradd');
}

function gebruikerdelete($id){
	DeleteGebruiker($id);

	render('empty/gebruikerdelete');
}

function gebruikeredit($id){

	$RuiterData = GetGebruikerId($id);

	render('empty/gebruikeredit', array("RuiterData" => $RuiterData));
}


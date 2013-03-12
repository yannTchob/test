<?php
include("vues/v_menu.php");

if(!isset($_REQUEST['action'])){
	$_REQUEST['action'] = '';
}
$action = $_REQUEST['action'];
switch($action){
    case '':{
		$lesProjets=$pdo-> getLesProjets();
                include("vues/v_listeProjets.php");
		break;
	}
    case 'enDetail':{
		$lesProjets=$pdo-> getLesProjetsEnDetail();
                include("vues/v_listeProjetsEnDetail.php");
		break;
	}   
     
}
?>

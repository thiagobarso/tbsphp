<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php 
if(isset($_POST['submit'])){
	
	$menu_name = $_POST["menu_name"];
	$position = (int) $_POST["position"];
	$visible = (int) $_POST["visible"];
	
	$menu_name = mysqli_real_escape_string($connection, $menu_name); 
	
	$query = "INSERT INTO subjects (";
	$query .= " menu_name,position,visible";
	$query .= ") VALUES (";
	$query .= " '{$menu_name}',{$position},{$visible}";
	$query .= ")";
	
}else{
	redirect_to("new_subject.php");
}
?>

<?php
	if(isset($connection)){mysqli_close($connection);} 
?>
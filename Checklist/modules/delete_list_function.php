<?php
require '../function.php';

if (isset($_POST))
{
	deleteList($_POST['ID']);
}
//delete list functie
function deleteList($id)
{
	$conn = openDatabaseConnection();
	$query = $conn->prepare("DELETE FROM `list` WHERE id=:id");
	$query->execute([':id'=>$id]);
	$conn = NULL;
	header('location:../index.php');
}

?>
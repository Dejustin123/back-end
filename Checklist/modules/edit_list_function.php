<?php
require '../function.php';



if (isset($_POST))
{
    editlist($_POST);
}
//edit list function
function editlist($input)
{
	$conn = openDatabaseConnection();
	$query = $conn->prepare('UPDATE `list` SET name = :name WHERE `list` . id=:id');
	$query->bindparam(':id',$input['id']);
	$query->bindParam(':name',$input['name']);
	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
?>
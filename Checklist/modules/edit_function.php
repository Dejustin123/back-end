<?php
include "../module-header.php";
require '../function.php';



if (isset($_POST))
{
    editCheck($_POST);
}
//edit taak function
function editCheck($input)
{
	$input['ID'] = intval($input['ID']);
	$conn = openDatabaseConnection();
	$query = $conn->prepare('UPDATE `checklist` SET ID = :id,Name = :Name,Description = :Description,Status = :Status,date = :date,Time = :Time WHERE `checklist`.ID=:id');
	$query->bindParam(':id',                  $input['ID']);
	$query->bindParam(':Name',                $input['Name']);
	$query->bindParam(':Description',         $input['Description']);
	$query->bindParam(':Status',         	  $input['Status']);
	$query->bindParam(':date',         	      $input['date']);
	$query->bindParam(':Time',         	      $input['Time']);

	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
?>
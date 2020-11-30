<?php include "../module-header.php";?>
<?php
require '../function.php';

// create function
if (isset($_POST))
{
	CreateCheck();
}
//create check function
function createCheck()
{
	$conn = openDatabaseConnection();
	$query = $conn->prepare('INSERT INTO `checklist` (`ID`, `Name`, `Description`, `Status`,`date`,`Time`,`list_id`)
							VALUES
								 (NULL,
								 "'.$_POST['Name'].'",
								 "'.$_POST['Description'].'",
								 "'.$_POST['Status'].'",
								 "'.$_POST['date'].'",
								 "'.$_POST['Time'].'",
								 "'.$_POST['list_id'].'"
								 )'
							);
	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
?>
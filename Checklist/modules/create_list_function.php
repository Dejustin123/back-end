<?php include "../module-header.php";?>
<?php
require '../function.php';

if (isset($_POST))
{
	createList();
	// var_dump($_POST);
}
//create list function
function createList()
{
	$conn = openDatabaseConnection();
	$query = $conn->prepare(
		'INSERT INTO `list` (`id`, `name`)
							VALUES
								 (
									NULL,
								 "'.$_POST['Name'].'"
								 )'
							);
	$query->execute();
	$conn = NULL;
	header('location:../index.php');
}
?>
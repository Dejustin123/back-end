<?php include "../module-header.php";?>
<?php
require '../function.php';

if (isset($_POST))
{
	deleteCheck($_POST['ID']);
}
//delete specific check function
function deleteCheck($id)
{
	$conn = openDatabaseConnection();
	$query = $conn->prepare("DELETE FROM `checklist` WHERE ID=:id");
	$query->execute([':id'=>$id]);
	$conn = NULL;
	header('location:../index.php');
}

?>
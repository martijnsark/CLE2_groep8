<?php
/** @var $db mysqli */
require_once('includes/connection.php');

$id = mysqli_escape_string($db, $_GET['id']);

//require_once('includes/connection.php');

$query = "DELETE FROM `personal_details` WHERE id = '$id'";

$result = mysqli_query($db, $query)
or die('Error ' . mysqli_error($db) . ' with query ' . $query);

mysqli_close($db);

header('Location: test-personal-details.php');
exit;
?>
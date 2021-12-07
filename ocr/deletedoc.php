<?php
// Start the session
ob_start();
session_start();
include_once 'connexionadmin.php';
?>
<?php

$sql = "DELETE FROM ocr WHERE idsave='" . $_GET["idsave"] . "'";
if (mysqli_query($conn, $sql)) {
header('Location: home.php');
} else {
echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>


<?php
include 'conn.php';

$id = $_GET['id'];

$sql = "DELETE FROM category WHERE cat_id = $id";

if (mysqli_query($conn, $sql)) {
    header("Location: category.php");
    exit;
} else {
    echo "Delete Failed!";
}
?>

<?php 
include 'conn.php';

$id = $_GET['id']; 

// Corrected SELECT query
$sql = "SELECT * FROM category WHERE cat_id = $id";   
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name = $_POST['category_name'];

    // Corrected UPDATE query
    $update = "UPDATE category SET category_name='$name' WHERE cat_id = $id";

    if (mysqli_query($conn, $update)) {
        header("Location: category.php");
        exit;
    }
}
?>
<form method="POST">
    <h2>Edit Category</h2>
    <input type="text" name="category_name" value="<?= $row['category_name']; ?>" required>
    <button type="submit" name="update">Update</button>
</form>

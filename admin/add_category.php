<?php
include 'conn.php';

if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['category_name']);

    $sql = "INSERT INTO category (category_name) VALUES ('$name')";
    mysqli_query($conn, $sql);

    header("Location: category.php");
    exit;
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Add Category</title>
</head>

<body>

    <h2>Add New Category</h2>
    <form method="POST">
        <input type="text" name="category_name" placeholder="Enter Category Name" required>
        <button type="submit" name="submit">Add Category</button>
    </form>

</body>

</html>
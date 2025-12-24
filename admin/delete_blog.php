<?php
include 'conn.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid Blog ID");
}

$id = $_GET['id'];

// Fetch image name
$q = mysqli_query($conn, "SELECT image FROM blogs WHERE blog_id = $id");
$row = mysqli_fetch_assoc($q);
$image = $row['image'];

// Delete blog record
$sql = "DELETE FROM blogs WHERE blog_id = $id";
$run = mysqli_query($conn, $sql);

if ($run) {

    // delete image from uploads/ folder
    if (!empty($image) && file_exists("uploads/" . $image)) {
        unlink("uploads/" . $image);
    }

    echo "<script>
            alert('Blog deleted successfully');
            window.location.href='view_blog.php';
          </script>";
} else {
    echo "<script>
            alert('Failed to delete!');
            window.location.href='blog_list.php';
          </script>";
}

<?php
include 'conn.php';
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Invalid Blog ID");
}

$id = $_GET['id'];

// Fetch blog details
$sql = "SELECT * FROM blogs WHERE blog_id = $id";
$result = mysqli_query($conn, $sql);
$blog = mysqli_fetch_assoc($result);

if (!$blog) {
    die("Blog not found!");
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Blog</title>
</head>

<body>

    <h2>Edit Blog</h2>

    <form method="POST" enctype="multipart/form-data">

        <label>Title</label><br>
        <input type="text" name="title" value="<?php echo $blog['title']; ?>"><br><br>

        <label>Category</label><br>
        <input type="text" name="category" value="<?php echo $blog['category']; ?>"><br><br>

        <label>Author</label><br>
        <input type="text" name="author" value="<?php echo $blog['author']; ?>"><br><br>

        <label>Status</label><br>
        <select name="status">
            <option value="1" <?php echo ($blog['status'] == "1") ? "selected" : ""; ?>>Published</option>
            <option value="0" <?php echo ($blog['status'] == "0") ? "selected" : ""; ?>>Draft</option>
        </select><br><br>

        <label>Description</label><br>
        <textarea name="description" rows="6"><?php echo $blog['description']; ?></textarea><br><br>

        <label>Current Image:</label><br>
        <img src="uploads/<?php echo $blog['image']; ?>" width="120"><br><br>

        <label>Change Image (optional):</label><br>
        <input type="file" name="image"><br><br>

        <input type="submit" name="update" value="Update Blog">

    </form>

</body>

</html>

<?php
// Update the blog
if (isset($_POST['update'])) {

    $title = $_POST['title'];
    $category = $_POST['category'];
    $author = $_POST['author'];
    $status = $_POST['status'];
    $description = $_POST['description'];

    $oldImage = $blog['image'];

    // Check if new image uploaded
    if (!empty($_FILES['image']['name'])) {

        $newImage = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];

        move_uploaded_file($tmp, "uploads/" . $newImage);

        // delete old image
        if (file_exists("uploads/" . $oldImage)) {
            unlink("uploads/" . $oldImage);
        }

        $imageToSave = $newImage;
    } else {
        $imageToSave = $oldImage;
    }

    // Update query
    $update = "UPDATE blogs 
               SET title='$title',
                   description='$description',
                   category='$category',
                   author='$author',
                   status='$status',
                   image='$imageToSave'
               WHERE blog_id = $id";

    if (mysqli_query($conn, $update)) {
        echo "<script>
                alert('Blog updated successfully');
                window.location.href='view_blog.php';
              </script>";
    } else {
        echo "<script>alert('Update failed!');</script>";
    }
}
?>
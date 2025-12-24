<?php include 'header.php';
include 'links.php';
include 'conn.php';

$sql = "SELECT * from category";
$check = mysqli_query($conn, $sql);

if (mysqli_num_rows($check) > 0) {
    $data = mysqli_fetch_all($check, MYSQLI_ASSOC);
} else {
    $data = [];
}

if (isset($_POST['addblog'])) {

    // Escape special characters to prevent SQL errors
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);

    // File upload
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $destination = 'uploads/' . $filename;

    move_uploaded_file($tempname, $destination);

    // Insert safe query
    $sql2 = "INSERT INTO blogs (title, description, image, category, author, status, date)
         VALUES ('$title', '$description', '$filename', '$category', '$author', '$status', '$date')";

    $check2 = mysqli_query($conn, $sql2);

    if ($check2) {
        echo "<script>
                alert('Blog created successfully!');
                window.location.href = 'view_blog.php';
              </script>";
    } else {
        echo "<script>
                alert('Blog not created! Something went wrong.');
                window.location.href = 'add_blog.php';
              </script>";
    }
}


?>


<main class="app-main">

    <div class="app-content-header">
        <div class="container-fluid">
            <h3 class="mb-0">Create Blog</h3>
        </div>
    </div>

    <div class="container mt-4">

        <a href="./view_blog.php" class="btn btn-primary mb-3">
            View All Blogs
        </a>

        <div class="blog-form card shadow p-4">

            <form method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter blog title" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select name="category" class="form-select" required>
                        <option value="">Select Category</option>

                        <?php foreach ($data as $val) { ?>
                            <option value="<?= $val['category_name']; ?>">
                                <?= $val['category_name']; ?>
                            </option>
                        <?php } ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" placeholder="Author name" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-select" required>
                        <option value="draft">Draft</option>
                        <option value="published">Published</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Publish Date</label>
                    <input type="date" name="date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Blog Image</label>
                    <input type="file" class="form-control" name="image" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="4" placeholder="Enter description"></textarea required>
                </div>

                <button type="submit" name="addblog" class="btn btn-success w-100">
                    Create Blog
                </button>

            </form>
        </div>
    </div>

</main>
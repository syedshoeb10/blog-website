<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    include 'header.php';
    include 'links.php';
    include 'conn.php';
    ?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Blog List</title>
        <style>
            .top-btn {
                float: right;
                margin: 10px;
                padding: 8px 15px;
                background: green;
                color: white;
                text-decoration: none;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 60px;
            }

            th,
            td {
                padding: 10px;
                border: 1px solid #ddd;
            }

            th {
                background: #f4f4f4;
            }
        </style>
    </head>

    <body>

        <?php
        $sql = "SELECT * FROM blogs";
        $result = mysqli_query($conn, $sql);
        ?>

        <a href="./add_blog.php" class="top-btn">Add New Blog</a>

        <h2>Blogs List</h2>

        <table>
            <tr>
                <th>ID</th>
                <th>Blog Name</th>
                <th>Category</th>
                <th>Author</th>
                <th>Status</th>
                <th>Publish</th>
                <th>Date</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>

            </tr>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?php echo $row['blog_id']; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['category']; ?></td>
                        <td><?php echo $row['author']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo ($row['status'] == 1 ? "Published" : "Draft"); ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td><?php echo substr($row['description'], 0, 50) . "..."; ?></td>
                        <td>
                            <img src="uploads/<?php echo $row['image']; ?>" alt="Blog Image" width="80">
                        </td>

                        <td>
                            <a href="edit_blog.php?id=<?php echo $row['blog_id']; ?>">Edit</a> |
                            <a href="delete_blog.php?id=<?php echo $row['blog_id']; ?>"
                                onclick="return confirm('Delete this blog?')">Delete</a>
                        </td>

                    </tr>
            <?php
                }
            } else {
                echo "<tr><td colspan='10' style='text-align:center;'>No blogs found</td></tr>";
            }
            ?>



        </table>

    </body>

    </html>



</body>

</html>
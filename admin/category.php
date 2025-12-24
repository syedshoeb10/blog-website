<?php
include 'header.php';
include 'links.php';
include 'conn.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Category List</title>
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
    $sql = "SELECT * FROM category";
    $result = mysqli_query($conn, $sql);
    ?>

    <a href="./add_category.php" class="top-btn">Add New Category</a>

    <h2>Category List</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Category Name</th>
            <th>Action</th>
        </tr>

        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?= $row['cat_id']; ?></td>
                <td><?= $row['category_name']; ?></td>
                <td>
                    <a href="./edit_category.php?id=<?= $row['cat_id']; ?>">Edit</a> |
                    <a href="./delete_category.php?id=<?= $row['cat_id']; ?>" onclick="return confirm('Delete this category?')">Delete</a>
                </td>
            </tr>
        <?php } ?>


    </table>

</body>

</html>
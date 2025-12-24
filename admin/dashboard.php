
<?php
include 'conn.php';
include 'header.php';
include 'links.php';

?>

<main class="app-main">

    <div class="app-content-header">
        <div class="container-fluid">
            <h3 class="mb-0">Dashboard</h3>
        </div>
    </div>

    <div class="app-content">
        <div class="container-fluid">

            <div class="row flex-row row d-flex justify-content-between flex-nowrap">

                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-primary">
                        <div class="inner">
                            <?php
                            $sql = "SELECT * FROM blogs";        // correct variable name
                            $totalblogs = mysqli_query($conn, $sql);
                            ?>
                            <h3><?php echo mysqli_num_rows($totalblogs); ?></h3>
                            <p>Total Blogs</p>
                        </div>
                        <svg class="small-box-icon"></svg>
                        <a href="./view_blog.php" class="small-box-footer">More info</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-warning">
                         <div class="inner">
                            <?php
                            $sql = "SELECT * FROM category";        // correct variable name
                            $totalcategory = mysqli_query($conn, $sql);
                            ?>
                            <h3><?php echo mysqli_num_rows($totalcategory); ?></h3>
                            <p>Total Category</p>
                        </div>
                        <a href="./category.php" class="small-box-footer">More info</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-success">
                        <div class="inner">
                            <?php
                            $sql = "SELECT * FROM users";        // correct variable name
                            $totalusers = mysqli_query($conn, $sql);
                            ?>
                            <h3><?php echo mysqli_num_rows($totalusers); ?></h3>
                            <p>Total Users</p>
                        </div>
                        <a href="#" class="small-box-footer">More info</a>
                    </div>
                </div>

                <div class="col-lg-3 col-6">
                    <div class="small-box text-bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Cancelled</p>
                        </div>
                        <a href="#" class="small-box-footer">More info</a>
                    </div>
                </div>

            </div>


        </div>
    </div>

</main>



</div>
<!--end::Row-->
</div>
<!--end::Container-->
</div>
<!--end::App Content Header-->
<!--begin::App Content-->


<?php include 'footer.php'; ?>
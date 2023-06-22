<?php
include('./admin_inc/admin_head.php');
include('./admin_inc/admin_nav.php');

?>

<div id="layoutSidenav">

    <?php
    include('./admin_inc/admin_side.php');
    ?>

    <div id="layoutSidenav_content">
        <main class="p-5">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <table class="table table-bordered table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Categories</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>

                            <?php
                            $categoriesSql = "SELECT * FROM `categories`";
                            $categories = mysqli_query($con, $categoriesSql);
                            while ($row = mysqli_fetch_assoc($categories)) {


                                $cat_id = $row['cat_id'];
                                $cat_name = $row['cat_name'];
                            ?>
                                <!-- code... -->

                                <tbody>
                                    <tr>
                                        <td><?= $cat_id ?></td>
                                        <td><?= $cat_name ?></td>
                                        <td><a href="categories.php?edit=<?= $cat_id ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-pen-to-square"></i></a></td>
                                        <td><a href="categories.php?del=<?= $cat_id ?>" class="btn btn-sm btn-dark"><i class="fa-solid fa-trash-can"></i></a></td>
                                    </tr>

                                <?php } ?>

                                </tbody>
                                <?php
                                if (isset($_GET['del'])) {
                                    $del = $_GET['del'];
                                    $delCatSql = "DELETE FROM `categories` WHERE `cat_id`='$cat_id'";
                                    $delCat = mysqli_query($con, $delCatSql);
                                    header("Location:categories.php");
                                }
                                ?>
                        </table>

                    </div><!-- left -->


                    <div class="col-md-6 text-center">
                        <h3>Add New categories</h3>
                        <?php
                        if (isset($_POST['Add_btn'])) {
                            $cat_name = $_POST['cat_name'];
                            $addCatSql = "INSERT INTO `categories`( `cat_name`) VALUES ('$cat_name')";
                            $addCat = mysqli_query($con, $addCatSql);
                            header("Location:categories.php");
                        }


                        ?>

                        <form action="" method="post">
                            <input type="text" name="cat_name" class="form-control mb-3">
                            <button type="submit" name="Add_btn" class="btn btn-primary ">Add Categories</button>
                        </form>
                        <hr>
                        
                        <?php
                        if (isset($_GET['edit'])) {
                            $edit_id = $_GET['edit'];
                        ?>
                            <form action="" method="post">
                                <h3>Update categories</h3>
                                <?php
                                $categoriesSql = "SELECT * FROM `categories` WHERE `cat_id`='$edit_id' ";
                                $categories = mysqli_query($con, $categoriesSql);
                                while ($row = mysqli_fetch_assoc($categories)) {
                                    $cat_id = $row['cat_id'];
                                    $cat_name = $row['cat_name'];
                                ?>
                                    <input type="text" name="cat_name" value="<?= $cat_name ?>" class="form-control mb-3">

                                <?php } ?>

                                <?php
                                if (isset($_POST['Update_btn'])) {
                                    $cat_name = $_POST['cat_name'];
                                    $UpdateCatSql = "UPDATE `categories` SET `cat_name`='$cat_name' WHERE `cat_id`='$edit_id'";
                                    $UpdateCat = mysqli_query($con, $UpdateCatSql);
                                    header("Location:categories.php");
                                }


                                ?>

                                <button type="submit" name="Update_btn" class="btn btn-danger ">Update Categories</button>

                            </form>


                        <?php     } ?>



                    </div><!-- right -->


                </div><!-- row -->

            </div><!-- container -->

        </main>
        <?php
        include('./admin_inc/admin_footer.php');
        ?>
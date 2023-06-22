<?php
include('./admin_inc/admin_head.php');
include('./admin_inc/admin_nav.php');

?>

<div id="layoutSidenav">

    <?php
    include('./admin_inc/admin_side.php');
    ?>

    <div id="layoutSidenav_content">
        <main class="container mt-3">
            <h2 class="text-center">All Posts</h2>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Categories</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <?php

                $postsSql = " SELECT * FROM `post` ";
                $posts =  mysqli_query($con, $postsSql);

                while ($row =  mysqli_fetch_assoc($posts)) {
                    $post_id = $row['post_id'];
                    $category_id = $row['category_id'];
                    $title = $row['title'];
                    $auther = $row['auther'];
                    $publish_date = $row['publish_date'];
                    $image = $row['image'];
                    // $content = $row['content'];
                    $content = substr($row['content'], 0, 100);

                ?>
                    <!-- code... -->

                    <tbody>
                        <tr>
                            <td><?= $post_id ?></td>
                            <td><a href="../details.php?pid=<?= $post_id ?>"><?= $title ?></a></td>
                            <td><?= $category_id ?></td>
                            <td><img src="../images/<?= $image ?>" height="65" alt=""> </td>
                            <td><a href="posts.php?edit=<?= $post_id ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="posts.php?del=<?= $post_id ?>" class="btn btn-sm btn-dark"><i class="fa-solid fa-trash-can"></i></a></td>
                        </tr>

                    <?php } ?>

                    </tbody>
                    <?php
                    if (isset($_GET['del'])) {
                        $del = $_GET['del'];
                        $delpostSql = "DELETE FROM `post` WHERE `post_id`='$post_id'";
                        $delpost = mysqli_query($con, $delpostSql);
                        header("Location:posts.php");
                    }
                    ?>
            </table>
            <hr>
            <?php
            if (isset($_GET['edit'])) {
                $edit_id = $_GET['edit'];
            ?>
                <form action="" method="post" enctype="multipart/form-data">
                    <h3>Update Posts</h3>
                    <?php
                    $categoriesSql = "SELECT * FROM `post` WHERE `post_id`='$edit_id' ";
                    $categories = mysqli_query($con, $categoriesSql);
                    while ($row = mysqli_fetch_assoc($categories)) {;
                        $title = $row['title'];
                        $image = $row['image'];
                        $publish_date = $row['publish_date'];
                        $auther = $row['auther'];
                        $content = $row['content'];
                    ?>
                        <label for="2">title</label>
                        <input type="text" name="title" value="<?= $title ?>" class="form-control mb-3">
                        <label for="3">image</label>
                        <input type="file" name="image" value="<?= $image ?>" class="form-control mb-3">
                        <label for="4">auther</label>
                        <label for="3">Publish_Date</label>
                        <input type="date" value="<?= $publish_date ?>" name="publish_date" class="form-control mb-3" id="3">
                        <input type="text" name="auther" value="<?= $auther ?>" class="form-control mb-3">
                        <label for="5">content</label>
                        <textarea name="content" value="" rows="5" class="form-control mb-3"><?= $content ?></textarea>
                    <?php } ?>

                    <?php
                    if (isset($_POST['Update_btn'])) {
                        $title = $_POST['title'];
                        $image_name = $_FILES['image']['name'];
                        $image_tmp = $_FILES['image']['tmp_name'];
                        move_uploaded_file($image_tmp, "../images/$image_name");
                        $publish_date = $_POST['publish_date'];
                        $auther = $_POST['auther'];
                        $content = $_POST['content'];

                        $UpdateCatSql = "UPDATE `post` SET `image`='$image_name', `publish_date`='$publish_date',`title`='$title',`auther`='$auther',`content`='$content' WHERE`post_id`='$edit_id'";

                        $UpdateCat = mysqli_query($con, $UpdateCatSql);
                        header("Location:posts.php");
                    }
                    ?>
                    <button type="submit" name="Update_btn" class="btn btn-danger ">Update posts</button>
                </form>

            <?php }   ?>
        </main>
        <?php
        include('./admin_inc/admin_footer.php');
        ?>
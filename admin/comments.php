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
            <h2 class="text-center">All Comments</h2>
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Content</th>
                        <th>name</th>
                        <th>Status</th>
                        <th>Comment_date</th>
                        <th>Approved</th>
                        <th>Unpproved</th>
                    </tr>
                </thead>

               
                    <!-- code... -->

                    <tbody>

                         <?php

                $commentSql = " SELECT * FROM `comment` ";
                $comment =  mysqli_query($con, $commentSql);

                while ($row =  mysqli_fetch_assoc($comment)) {
                    $comment_id=$row['comment_id'];
                    $post_id = $row['post_id'];
                    $name = $row['name'];
                    $content = $row['content'];
                    $comment_date = $row['comment_date'];
                    $status = $row['status'];


                ?>
                        <tr>
                            <td><?=$comment_id?></td>
                            <td><a href="../details.php?pid=<?= $comment_id ?>"><?= $content ?></a></td>
                            <td><?=$name?></td>
                            <td ><span class="badge bg-secondary"><?=$status?></span></td>
                            <td ><span class="badge bg-secondary"><?=$comment_date?></td>
                            <td><a href="comments.php?approve=<?= $comment_id ?>" class="btn btn-sm btn-danger">Approved</a></td>
                            <td><a href="comments.php?unapprove=<?= $comment_id ?>" class="btn btn-sm btn-dark">Unpproved</a></td>
                        </tr>

                    <?php } ?>

                    </tbody>
                    <?php
                    if (isset($_GET['approve'])) {
                        $approved_id = $_GET['approve'];

                        $ApprovedSql = "UPDATE `comment` SET `status`='approved' WHERE `comment_id` = '$approved_id' ";
                        $Approved = mysqli_query($con, $ApprovedSql);
                        // header("Location:comments.php");
                    }
                   
                    if (isset($_GET['unapprove'])) {
                        $unapproved_id = $_GET['unapprove'];

                        $UnpprovedSql = "UPDATE `comment` SET `status`='Unapproved' WHERE `comment_id` = '$unapproved_id' ";
                        $Unpproved = mysqli_query($con, $UnpprovedSql);
                        // header("Location:comments.php");
                    }
                    ?>
            </table>
            <hr>
           
        </main>
        <?php
        include('./admin_inc/admin_footer.php');
        ?>
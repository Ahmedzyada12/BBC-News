<?php
include('./inc/navheader.php');
?>
<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <?php

                $pid = $_GET['pid'];
                $postsSql = " SELECT * FROM `post` WHERE `post_id` = '$pid' ";
                $posts =  mysqli_query($con, $postsSql);

                while ($row =  mysqli_fetch_assoc($posts)) {
                    $post_id = $row['post_id'];
                    $category_id = $row['category_id'];
                    $title = $row['title'];
                    $author = $row['auther'];
                    $publish_date = $row['publish_date'];
                    $image = $row['image'];
                    $content = $row['content'];
                    // $content = substr($row['content'] ,0,100) ;
                ?>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"><?= $title ?></h1>
                        <!-- Post meta content-->
                        <div class="text-muted fst-italic mb-2">Posted on <?= $publish_date ?> by <?= $author ?> </div>
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4"><img class="img-fluid rounded" src="images/<?= $image ?>" alt="..." /></figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <p class="fs-5 mb-4"><?= $content ?></p>

                    </section>
                <?php
                }  //while
                ?>
            </article>
            <!-- Comments section-->
            <section class="mb-5">
                <div class="card bg-light">
                    <div class="card-body">

                        <?php
                        if (isset($_POST['Add_comment'])) {
                            $pid = $_GET['pid'];
                            $name = $_POST['name'];
                            $content = $_POST['content'];

                            $addcommentSql = "INSERT INTO `comment`( `post_id`, `name`, `content`, `comment_date`, `status`) VALUES ('$pid ',' $name ','$content',now(),'approved')";

                            $comment = mysqli_query($con, $addcommentSql);
                            header("Location:details.php?pid=$post_id");
                        }

                        ?>

                        <form class="mb-4 text-center" method="post">
                            <input type="text" name="name" class="form-control mb-3" placeholder="Your name" id="">
                            <textarea class="form-control" name="content" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                            <button type="submit" name="Add_comment" class="btn btn-outline-primary mt-2"> Add comment</button>
                        </form>

                        <?php
                               $pid=$_GET['pid'];
                                $addcommentSql = "SELECT * FROM `comment` WHERE `post_id`='$pid' And `status`='approved' ";

                                $comment = mysqli_query($con, $addcommentSql);
                                while ($row = mysqli_fetch_assoc($comment)) {

                                    $post_id = $row['post_id'];
                                    $name = $row['name'];
                                    $content = $row['content'];
                                    $comment_date = $row['comment_date'];
                                    $status = $row['status'];
                                    
                               ?>

                        <div class="d-flex">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold"><?=$name ?></div>
                                <div class="fw-bold">
                                    <h6><?=$comment_date ?></h6>
                                </div>
                                <?=$content ?>
                            </div>
                        </div>

                 <?php } ?>

                    </div>
                </div>
            </section>
        </div>
        <!-- Side widgets-->
        <?php
        include('./inc/side.php');
        ?>
    </div>
</div>
<!-- Footer-->
<?php
include('./inc/footer.php');
?>
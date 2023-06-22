<div class="col-lg-8">
                   
                    <div class="row">
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
                            $content = substr($row['content'] ,0,100) ;
                        ?>
                        <div class="col-md-6">
                            <!-- Blog post-->
                            <div class="card shadow  mb-4">
                             <a href="details.php?pid=<?= $post_id?>"><img class="card-img-top" src="images/<?=$image?>" alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted"><?=$publish_date?></div>
                                    <h2 class="card-title h4"><?=$title?></h2>
                                    <p class="card-text"><?=$content?>.</p>
                                    <a class="btn btn-dark" href="details.php?pid=<?= $post_id?>">Read more →</a>
                                </div>
                            </div>
                            </div> <!-- col-md-6 -->

                            <?php
                        }  //while
                        ?>
                    </div> <!-- row -->
                   
                </div> <!-- col-lg-8 -->
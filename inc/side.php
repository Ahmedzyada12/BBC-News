<div class="col-lg-4">
    <!-- Search widget-->
    <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
            <form action="search_posts.php" method="post">
            <div class="input-group">
                <input class="form-control" name="keywords" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
            </div>
        </form>
        </div>
    </div>
    <!-- Categories widget-->
    <div class="card mb-4">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-unstyled mb-0">
                        <?php
                        $categoriesSql = " SELECT * FROM `categories` ";
                        $categories =  mysqli_query($con, $categoriesSql);

                        while ($row =  mysqli_fetch_assoc($categories)) {
                            $cat_id = $row['cat_id'];
                            $cat_name = $row['cat_name'];
                        ?>

                            <li><a href="cats.php?cid=<?=$cat_id?>"><?=$cat_name?></a></li>
                        <?php
                        }  //while
                        ?>
                       

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <!-- Side widget-->
    <div class="card mb-4">
        <div class="card-header">Side Widget</div>
        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
    </div>
</div>
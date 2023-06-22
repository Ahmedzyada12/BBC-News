<?php 
  ob_start();
    require_once('data.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BBC News</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
            <div class="container">
                <a class="navbar-brand" href="index.php"> BBC News </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php
                        $categoriesSql = " SELECT * FROM `categories` ";
                        $categories =  mysqli_query($con, $categoriesSql);

                        while ($row =  mysqli_fetch_assoc($categories)) {
                            $cat_id = $row['cat_id'];
                            $cat_name = $row['cat_name'];
                        ?>
                        
                        <li class="nav-item"><a class="nav-link" href="cats.php?cid=<?=$cat_id?>"><?=$cat_name?></a></li>
                       
                        <?php
                        }  //while
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
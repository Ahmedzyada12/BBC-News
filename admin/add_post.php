<?php
include('./admin_inc/admin_head.php');
include('./admin_inc/admin_nav.php');

?>

<div id="layoutSidenav">

  <?php
  include('./admin_inc/admin_side.php');
  ?>

  <div id="layoutSidenav_content">
    <h2 class="text-center">Add Posts</h2>
    <main class="container py-3">

      <?php
          if (isset($_POST['Add_btn'])) {

            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            $auther = $_POST['auther'];
            $image_name = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp, "../images/$image_name");
            $content = $_POST['content'];

            $addpostSql = "INSERT INTO `post`( `category_id`, `title`, `auther`, `publish_date`,`image`,`content`) 
                              VALUES ('$category_id','$title','$auther',now(),'$image_name','$content')";
            $addCat = mysqli_query($con, $addpostSql);
            header("Location:posts.php");
          }
          ?>

      <form action="" method="post" enctype="multipart/form-data">
        <select name="category_id" id="" class="form-control form-select mb-3">
              <option value="">Category</option>
              <?php
              $categoriesSql = "SELECT * FROM `categories`";
              $categories = mysqli_query($con, $categoriesSql);
              while ($row = mysqli_fetch_assoc($categories)) {
                $cat_id = $row['cat_id'];
                $cat_name = $row['cat_name'];
              ?>
                <option value="<?= $cat_id ?>"><?= $cat_name ?></option>
              <?php } ?>

            </select>
            <input type="text" name="title" placeholder="title" class="form-control mb-3">
            <input type="text" name="auther" placeholder="auther" class="form-control mb-3">
            <input type="file" name="image" class="form-control mb-3">
            <textarea name="content" placeholder="content" class="form-control mb-3" rows="5"></textarea>

            <button type="submit" name="Add_btn" class="btn btn-primary ">Add Categories</button>
      </form>

    </main>

    <?php
    include('./admin_inc/admin_footer.php');
    ?>
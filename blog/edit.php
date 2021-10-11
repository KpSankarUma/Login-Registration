<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    $id=$_GET['id'];
    include('config.php');
    $sq="select * from dashboard where id='$id'";
    $ex=mysqli_query($conn,$sq);
    $data=mysqli_fetch_array($ex);

    $file='fileUpload/'.$data['file'];
  ?>
  <a href="welcome.php" style="text-decoration: none;" class="btn btn-default">Back To Blog Page</a>
  <div class="container">
    <h2>Update Blog</h2>
    <form action="update.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <input type="text" name="id" value="<?php echo $data['id']?>" hidden>
        <label>Title:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $data['Title'] ?>" required>
      </div>
      <div class="form-group">
        <label>Description:</label>
        <input type="text" class="form-control" id="desc" name="desc" value="<?php echo $data['Description'] ?>" required>
      </div>
      <div class="form-group">
        <label>Upload Image:</label>
        <input type="file" class="form-control" id="img" name="file[]" multiple required>
        <img src="<?php echo $file ?>" height="75" width="75">
      </div>
      <div class="form-group">
        <label>Blog Url:</label>
        <input type="text" class="form-control" id="blog" name="blog" value="<?php echo $data['blog_url()']?>" required>
      </div>
      <input type="submit" name="submit" class="btn btn-primary" value="Update"><br>
    </form>
  </div>
</body>
</html>

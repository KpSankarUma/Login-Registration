<?php  
    $title=$_POST['title'];
    $desc=$_POST['desc'];
    $file=$_FILES['file'];
    $blog=$_POST['blog'];

    $x=implode("*", $_FILES['file']['name']);
    if (isset($_POST['submit'])) {
      include('config.php');
      $sql="INSERT INTO `dashboard`(`Title`,`Description`, `file`, `blog_url()`) VALUES ('$title','$desc','$x','$blog')";
      $ex=mysqli_query($conn,$sql);
      
      $fCount=count($_FILES['file']['name']);
      for ($i=0; $i < $fCount; $i++) {
          move_uploaded_file($_FILES['file']['tmp_name'][$i],'fileUpload/'.$_FILES['file']['name'][$i]);
        }
      include('welcome.php');
      }  
?>
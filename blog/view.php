<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php  
		$con = mysqli_connect("localhost","root","","login_register");
		$sq='select * from dashboard';
		$ex=mysqli_query($con,$sq);

		echo "<a href='addblog.php' class='btn btn-primary'>Add New Blog</a><br><br>";
		echo "<table border=2>";
		echo "<tr><th>Title</th><th>Description</th><th>Files</th><th>Blog_url()</th><th>Operation</th>";

		while($data=mysqli_fetch_array($ex)) {
			echo "<tr>";
			echo "<td>".$data['Title']."</td>";
			echo "<td>".$data['Description']."</td>";
			$profile=$data['file'];
			echo "<td>";
			$y=explode('*',$profile);
			for ($i=0; $i <count($y) ; $i++) { 
				$filename='fileUpload/'.$y[$i];
				echo "&nbsp <img src='$filename'height='50px'width='50px'>&nbsp&nbsp";
			}
				echo "</td>";
				echo "<td>".$data['blog_url()']."</td>";
				echo "<td>&nbsp<a href='edit.php?id=".$data['id']."' class='btn btn-primary'>Edit</a>&nbsp<a href='delete.php?id=".$data['id']." class='btn btn-danger'>Delete</a></td>";
				echo "</tr>";

			}
		echo "</table>";

?>

<html>
	<head>
		<title>File upload</title>
		</head>
	<body>
		<form method='post' action='./index.php'>
			<h1>File Input</h1>
				<p>Enter File <input type="file" name="doc"></p>
				<input type="submit" value="enter">
			</form>
		</body>
	</html>
<?php
	if(isset($_FILES['doc'])){
      $errors= array();
      $file_name = $_FILES['doc']['name'];
      $file_size =$_FILES['doc']['size'];
      $file_tmp =$_FILES['doc']['tmp_name'];
      $file_type=$_FILES['doc']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['doc']['name'])));
      
      $extensions= array("txt","pdf","docx");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      }
      
      if($file_size > 2097152){
         $errors[]='File size must be excately 2 MB';
      }
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,"images/".$file_name);
         echo "Success";
      }else{
         print_r($errors);
      }
   }
?>

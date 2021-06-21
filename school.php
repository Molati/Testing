<!--PABALLO MOLATI 1818416-->
<!DOCTYPE html>
<head>
<meta charset="uft-8"> 
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">
<title> page </title>

 
</head>
<body>





<?php

$cc=date('H:i:sA');

echo "time :".$cc;
  
$n=".i love red ";
$nn="color.";
 $names=$n . $nn;
 

 $names = str_replace('.',' ',$names); 
 	

echo "example  :  ".$names;
?>
$m_id = 2;
	 $pic =$_POST['picture']; 
	 
	 if (isset($_POST['upload'])){
	 $filename = $_FILES["uploadfile"]["name"];
	 $tempname = $_FILES["uploadfile"]["tmp_name"];
	 $folder = "image/".$filename;
	 
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "skhafthini";
	 
	 $aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
	 
	//insert picture
    $sql = "INSERT INTO meals (meal_picture) where meal_id = $m_id values ('$filename')";	
	 //execcute
	 mysqli_query($avar,$sql);
	 
	 if (move_upload_file($tempname, $folder))
	 { echo "<h1>Image is uploaded....</h1>";}
	 else
	  { echo "<h1>Image NOT uploaded....</h1>";} 





</body>
</html>
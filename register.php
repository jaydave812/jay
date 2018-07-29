<?php
$servername="localhost";
$username="root";
$password="";
$dbname="registrationform";

try{
$conn=Mysqli_connect($servername,$username,$password,$dbname);
echo("successful connection");
}

catch(Mysqli_Sql_Exception $ex)
{
echo("error in connection");
}
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$register_query="INSERT INTO `form`(`fname`, `phone`, `address`, `email`) VALUES ('$fname','$phone','$address','$email')";

try{
$register_result=Mysqli_query($conn,$register_query);

if($register_result)
{
if(Mysqli_affected_rows($conn)>0)
{
echo("registration successful");
}
else
{
echo("error in registration");
}
}
}
catch(Exception $ex)
{
echo("error".$ex->getMessage());
}
}
if($_POST['submit'] == 'submit')

  {

  //make the allowed extensions

  $goodExtensions = array(

  '.doc',

  '.docx',

  ); 

  $error='';

  //set the current directory where you wanna upload the doc/docx files

  $uploaddir = './ ';

  $name = $_FILES['filename']['name'];//get the name of the file that will be uploaded

  $min_filesize=10;//set up a minimum file size(a doc/docx can't be lower then 10 bytes)

  $stem=substr($name,0,strpos($name,'.'));

  //take the file extension

  $extension = substr($name, strpos($name,'.'), strlen($name)-1);

  //verify if the file extension is doc or docx

   if(!in_array($extension,$goodExtensions))

     $error.='Extension not allowed<br>';

echo "<span> </span>"; //verify if the file size of the file being uploaded is greater then 1

   if(filesize($_FILES['filename']['tmp_name']) < $min_filesize)

     $error.='File size too small<br>'."\n";

  $uploadfile = $uploaddir . $stem.$extension;

$filename=$stem.$extension;

if ($error=='')

{

//upload the file to

if (move_uploaded_file($_FILES['filename']['tmp_name'], $uploadfile)) {

echo "File Uploaded. Thank You.";
}

}

else echo $error;

}

?>



<html>
<head>
<meta charset="utf-8">
<title>Registeration Form</title>
</head>
<body>

<form action="" method="post">
		<table align="center">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="fname"
			placeholder="enter your first name">
			</td>
		</tr>
		<tr>
			<td>phone:</td>
			<td><input type="text" name="phone"
			placeholder="enter your phone No">
			</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="address"
			placeholder="enter your address">
			</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td><input type="email" name="email"
			placeholder="example@example.com">
			</td>
		</tr>
		
		<tr>

		<td align="left">File:</td>

		<td><input accept="doc/docx" name="filename" size="40" type="file" /></td>

		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Register">
			</td>
		</tr>
	</form>
	
</body>
</html>

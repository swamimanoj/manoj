<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("manoj",$conn);
?>

<?php
$name=$_GET['name'];
$email=$_GET['email'];
$comment=$_GET['comments'];

$qury=mysql_query("insert into comments values('$name','$email','$comment')");

if(!$qury)
    echo mysql_error();
	else
	echo "Successfully inserted";
?>
<!DOKTYPE html>
<html>
<head>
<title>My contact form</title>
</head>
<body>
<?php
echo $name;
echo ' <br/>';
echo $email;
echo ' <br/>';
echo $comment;
?>
</body>
</html>
<?php 
$c = oci_connect("B689037", "sykj*512", "//selab.hongik.ac.kr/orcl");

$query =  "INSERT INTO tourist (ID,pwd,phone,birth,hope_p,hope_t)
VALUES ('".$_GET['id']."' ,'".$_GET['pw']."' ,'".$_GET['phone']."' ,'".$_GET['birth']."' ,'".$_GET['hope_p']."' ,'".$_GET['hope_t']."')";
$s = oci_parse($c, $query);

$SNAME = $_GET['id'];

print 'Now you can enter by ID=  '.$SNAME.'     PW=   '.$_GET['pw'];

$SNAME = 'Blake';  
oci_bind_by_name($s, 'Blake', $SNAME); 
oci_execute($s);
oci_close($c);
?>

<!DOCTYPE html>

<html>

<head>

<title>Welcome to our new member!</title>

</head>

<body>
<p></p>
<p></p>
         <a href="http://software.hongik.ac.kr/a_team/a_team4/login.php">return_ to main page</a>

</body>

</html>


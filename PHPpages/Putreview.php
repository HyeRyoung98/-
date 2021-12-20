
<?php
if ($_GET['place']=='Seongsan Ilchulbong Tuff Cone')
{
$A=1;
}

else if ($_GET['place']=='TeddyBearMuseum')
{
$A=2;
}

else if ($_GET['place']=='Yongyeon Valley')
{
$A=3;
}

else if ($_GET['place']=='DoryeonTangerineForest')
{
$A=4;
}



$c = oci_connect("B689037", "sykj*512", "//selab.hongik.ac.kr/orcl");

$query =  "INSERT INTO review (num,ID,text,star,time)
VALUES ('".$A."' ,'".$_GET['ID']."' ,'".$_GET['text']."' ,'".$_GET['star']."' ,'".$_GET['time']."')";
$s = oci_parse($c, $query);

$SNAME = $_GET['id'];

print 'Successfully upload!';

$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);
oci_close($c);
?>

<!DOCTYPE html>

<html>

<head>

<title>ADMIN PAGE</title>

</head>

<body>
<p></p>
<p></p>
         <a href="http://software.hongik.ac.kr/a_team/a_team4/login.php">return_ to main page</a>

</body>

</html>






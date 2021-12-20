<!DOCTYPE html> 
<head> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>seasons</title> 
<style>
.mytitle {
background-color : skyblue;
color : white ;
text-align : center;
padding : 10px;
margin-bottom : 20px;
}
.warp{
text-align : center;
margin : auto;
width : 210px;
}


table {
border-top: 1px solid #444444;
    border-collapse: collapse;
border-color:skyblue;
}

th, td {

border-bottom: 1px solid #444444;
border-color : skyblue;
padding: 30px;
color : gray;
}


</style>
</head>


<body>
<div class = "mytitle">
<h1>
<?php
echo $_GET['id'].' <font size="3em" color = "gray">in</font>'. $_GET['pw'];
?>
</h1>

</div>

 

<?php
        

function youlike($myeid, $s)
{

  print '<table>';
  while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
    print '<tr>';
    foreach ($row as $item) {
      print '<td>'.($item?htmlentities($item):'&nbsp;').'</td>';
    }
    print '</tr>';
  }
  print '</table>';
}


function price($myeid, $s)
{
  print '<table>';
  while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
    print '<tr>';
    foreach ($row  as $item) {
      print '<td>'.($item?htmlentities($item):'&nbsp;').'</td>';
    }
    print '</tr>';
  }
  print '</table>';
}


$c = oci_connect("B689037", "sykj*512", "//selab.hongik.ac.kr/orcl");


$query = "select attraction.name, inf.address, inf.inform, inf.tel
from attraction,inf
where attraction.category='".$_GET['id']."'
and attraction.num = inf.num
and attraction.stat='".$_GET['pw']."'";

$s = oci_parse($c, $query);

oci_execute($s);
youlike($SNAME, $s);
?>

<div class = "warp">
<?php

print '<p><font color = "skyblue">PRICE</font></p>';
$query = "select price1.age, price1.price
from attraction,inf, price1
where attraction.category='".$_GET['id']."'
and attraction.stat='".$_GET['pw']."'
and inf.num=attraction.num
and inf.address=price1.address";


$s = oci_parse($c, $query);

$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);
price($SNAME, $s);




$query = "select  price2.age, price2.price
from attraction,inf, price2
where attraction.category='".$_GET['id']."'
and attraction.stat='".$_GET['pw']."'
and attraction.num=inf.num
and price2.address=inf.address";

$s = oci_parse($c, $query);

$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);
price($SNAME, $s);

$query = "select  price3.age, price3.price
from attraction,inf, price3
where attraction.category='".$_GET['id']."'
and attraction.stat='".$_GET['pw']."'
and attraction.num=inf.num
and price3.address=inf.address";

$s = oci_parse($c, $query);

$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);
price($SNAME, $s);

$query = "select  price4.age, price4.price
from attraction,inf, price4
where attraction.category='".$_GET['id']."'
and attraction.stat='".$_GET['pw']."'
and attraction.num=inf.num
and price4.address=inf.address";

$s = oci_parse($c, $query);

$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);
price($SNAME, $s);



$query = "select  seasons_attraction.month,seasons_attraction.temperature, seasons_attraction.advice, seasons_attraction.recommend
from attraction, seasons_attraction
where attraction.category='".$_GET['id']."'
and attraction.stat='".$_GET['pw']."'
and attraction.num=seasons_attraction.num";

$s = oci_parse($c, $query);

$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);
price($SNAME, $s);


oci_close($c);


?>
</div>

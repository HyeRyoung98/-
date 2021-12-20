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
widith : 300px;
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
echo $_GET['season'];
?>
</h1>
<h5>We recommend you...</h5>
</div>
<?php


function seasons($myeid, $s) {
  print '<table>';
  while ($row = oci_fetch_array($s, OCI_RETURN_NULLS+OCI_ASSOC)) {
   print '<tr>'; 
$c = oci_connect("B689037", "sykj*512", "//selab.hongik.ac.kr/orcl");
    foreach ($row as $item) 
{ oci_close($c);
      print '<td>'.($item?htmlentities($item):'&nbsp;').'</td>';
    }
    print '</tr>';
  }
  print '</table>';
}


$c = oci_connect("B689037", "sykj*512", "//selab.hongik.ac.kr/orcl");

$query = "select seasons.month, attraction.name, inf.address, inf.inform, inf.tel
from attraction, S_A, inf, seasons
where seasons.season = '" .$_GET['season']. "' 
and seasons.month=S_A.month
and S_A.num = attraction.num
and S_A.recommend = 1
and attraction.num = inf.num
order by month";

$s = oci_parse($c, $query);
$SNAME = 'Blake';
oci_bind_by_name($s, 'Blake', $SNAME);
oci_execute($s);
seasons($SNAME, $s);

oci_close($c); 
?>

</body> 

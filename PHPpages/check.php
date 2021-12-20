
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
echo $_GET['name'];
?>
</h1>

</div>




<?php

function A($myeid, $s)
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


$c = oci_connect("B689037", "sykj*512", "//selab.hongik.ac.kr/orcl"); 

$query = "select attraction.name, inf.address, inf.inform, inf.tel, attraction.category, attraction.stat
from attraction, inf 
where attraction.name = '".$_GET['name']."' 
and attraction.num = inf.num "; 

$s = oci_parse($c, $query);


$SNAME = $_GET['name']; 
oci_bind_by_name($s, 'Blake', $SNAME); 
oci_execute($s); 
A($SNAME, $s);

oci_close($c);

?> 

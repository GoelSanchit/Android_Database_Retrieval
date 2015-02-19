<?php
$objConnect = mysql_connect("Host_Name","database_name","password");
$objDB = mysql_select_db("database_name");
$strSQL = "SELECT * FROM emp_info WHERE 1 ORDER BY TAG_ID DESC ";
$objQuery = mysql_query($strSQL);
$intNumField = mysql_num_fields($objQuery);
$resultArray = array();
while($obResult = mysql_fetch_array($objQuery))
{
$arrCol = array();
for($i=0;$i<$intNumField;$i++)
{
$arrCol[mysql_field_name($objQuery,$i)] = $obResult[$i];
}
array_push($resultArray,$arrCol);
 
}
 
mysql_close($objConnect);
echo json_encode($resultArray);
?>

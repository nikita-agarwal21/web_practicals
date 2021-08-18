<?php
error_reporting(0);
$states =
array('Mississippi','Alabama','Texas','Massachusetts','Kansas'); $stateList = array();
$arrlength = count($states);
// ends with xas
for ( $x = 0; $x < $arrlength; $x++ )
if ( strcmp(strrchr($states[$x],'xas'),'xas') == 0 )
array_push($stateList,$states[$x]);
// Starts with K, ends with s
for ( $x = 0; $x < $arrlength; $x++ )
{
$newstr = strtoupper($states[$x]);
$revStr = strrev($newstr);
if ( strcmp($newstr[0],"K") == 0 && strcmp($revStr[0],"S") == 0 )
array_push($stateList,$states[$x]);
}
// Starts with M ends with s
for ( $x = 0; $x < $arrlength; $x++ )
{
$newStr = $states[$x];
$revStr = strrev($states[$x]);
if ( strcmp($newStr[0],"M") == 0 && strcmp($revStr[0],"s") == 0 )
array_push($stateList,$states[$x]);
}
// Ends with a
for ( $x = 0; $x < $arrlength; $x++ )
{
$revStr = strrev($states[$x]);
if ( strcmp($revStr[0],"a") == 0 )
array_push($stateList,$states[$x])
;
}
for ( $x = 0; $x < count($stateList); $x++ )
echo $stateList[$x]."\r\n";
?>

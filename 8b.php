<?php 
// Matrix transpose 
error_reporting(0); 
$a = array(); 
$b = array(); 
$keyboard = fopen("php://stdin","r"); 
print ("No of rows : "); 
$rows = fgets($keyboard,80); 
print ("No of cols : "); 
$cols = fgets($keyboard,80); 
print 'rows : '.$rows."\r\n"; 
print 'cols : '.$cols."\r\n"; 
print 'Enter the elements of matrix'."\r\n"; 
for ( $i = 1; $i <= $rows; $i++ ) 
{ 
print 'Enter elements of '.$i.' row'."\r\n"; 
for ( $j = 1; $j <= $cols; $j++ ) { 
$n = fgets($keyboard,80);
$a[$i][$j] = (int)($n); 
} 
} 
// Find the transpose 
for ( $i = 1; $i <= $rows; $i++ ) 
for ( $j = 1; $j <= $cols; $j++ ) 
$b[$j][$i] = $a[$i][$j]; 
print 'matrix elements : '."\r\n"; 
for ( $i = 1; $i <= $rows; $i++ ) 
{ 
$row_data = ""; 
for ( $j = 1; $j <= $cols; $j++ ) 
$row_data = $row_data.$a[$i][$j].' '; 
print $row_data; 
print "\r\n"; 
} 
print 'transposed matrix elements : '."\r\n"; 
for ( $i = 1; $i <= $cols; $i++ ) 
{ 
$row_data = ""; 
for ( $j = 1; $j <= $rows; $j++ ) 
$row_data = $row_data.$b[$i][$j].' '; 
print $row_data; 
print "\r\n"; 
} 
?> 

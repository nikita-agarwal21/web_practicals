<?php 
//addition of matrices
error_reporting(0); 
$a = array(); 
$b = array(); 
$c = array(); 
$keyboard = fopen("php://stdin","r"); 
print ("No of rows : "); 
$rows = fgets($keyboard,80); 
print ("No of cols : "); 
$cols = fgets($keyboard,80); 
print 'rows : '.$rows."\r\n"; 
print 'cols : '.$cols."\r\n"; 
print 'Enter the elements of first matrix'."\r\n"; 
for ( $i = 1; $i <= $rows; $i++ ) 
{ 
print 'Enter elements of '.$i.' row'."\r\n"; 
for ( $j = 1; $j <= $cols; $j++ ) { 
$n = fgets($keyboard,80); 
$a[$i][$j] = (int)($n); 
} 
} 
print 'Enter the elements of second matrix'."\r\n"; 
for ( $i = 1; $i <= $rows; $i++ ) 
{ 
print 'Enter elements of '.$i.' row'."\r\n"; 
for ( $j = 1; $j <= $cols; $j++ ) { 
$n = fgets($keyboard,80); 
$b[$i][$j] = (int)($n); 
} 
} 
// Add the matrices 
for ( $i = 1; $i <= $rows; $i++ ) 
for ( $j = 1; $j <= $cols; $j++ ) 
$c[$i][$j] = $a[$i][$j] + $b[$i][$j]; 
print 'first matrix elements : '."\r\n"; 
for ( $i = 1; $i <= $rows; $i++ ) 
{ 
$row_data = ""; 
for ( $j = 1; $j <= $cols; $j++ ) 
$row_data = $row_data.$a[$i][$j].' '; 
print $row_data; 
print "\r\n"; 
} 
print 'second matrix elements : '."\r\n"; 
for ( $i = 1; $i <= $rows; $i++ ) 
{ 
$row_data = ""; 
for ( $j = 1; $j <= $cols; $j++ ) 
$row_data = $row_data.$b[$i][$j].' '; 
print $row_data; 
print "\r\n"; 
} 
print 'final matrix elements : '."\r\n"; 
for ( $i = 1; $i <= $rows; $i++ ) 
{ 
$row_data = ""; 
for ( $j = 1; $j <= $cols; $j++ ) 
$row_data = $row_data.$c[$i][$j].' '; 
print $row_data; 
print "\r\n"; 
} 

<?php 
// m x n n x k 
//multiplication of matrix
error_reporting(0); 
$a = array(); 
$b = array(); 
$c = array(); 
$keyboard = fopen("php://stdin","r"); 
// read the dimensions of first matrix 
print ("No of rows of first matrix : "); 
$m = fgets($keyboard,80); 
print ("No of cols of first matrix : 
"); $n = fgets($keyboard,80); 
// read the dimensions of second matrix 
print ("No of rows of second matrix : "); 
$p = fgets($keyboard,80); 
print ("No of cols of second matrix : "); 
$q = fgets($keyboard,80); 
if ( $n != $p ) 
{ 
echo 'Multiplication not possible ...'."\r\n"; 
exit(0); 
} 
print 'Enter the elements of first matrix'."\r\n"; 
for ( $i = 1; $i <= $m; $i++ ) 
{ 
print 'Enter elements of '.$i.' row'."\r\n"; 
for ( $j = 1; $j <= $n; $j++ ) { 
$x = fgets($keyboard,80); 
$a[$i][$j] = (int)($x); 
} 
} 
print 'Enter the elements of second matrix'."\r\n"; 
for ( $i = 1; $i <= $p; $i++ ) 
{ 
print 'Enter elements of '.$i.' row'."\r\n"; 
for ( $j = 1; $j <= $q; $j++ ) { 
$x = fgets($keyboard,80); 
$b[$i][$j] = (int)($x); 
} 
} 
// Initializing elements of result matrix to 0 
for ( $i = 1; $i <= $m; $i++ ) 
for ( $j = 1; $j <= $q; $j++ ) 
$c[$i][$j] = 0; 
// Multiplying matrices a and b and 
for ( $i = 1; $i <= $m; $i++ ) 
for ( $j = 1; $j <= $q; $j++ ) 
for ( $k = 1; $k <= $n; $k++) 
$c[$i][$j] += $a[$i][$k] * $b[$k][$j]; 
// print first matrix 
print 'first matrix elements : '."\r\n"; 
for ( $i = 1; $i <= $m; $i++ ) 
{ 
$row_data = ""; 
for ( $j = 1; $j <= $n; $j++ ) 
$row_data = $row_data.$a[$i][$j].' '; 
print $row_data; 
print "\r\n"; 
} 
// print second matrix 
print 'second matrix elements : '."\r\n"; 
for ( $i = 1; $i <= $p; $i++ ) 
{ 
$row_data = ""; 
for ( $j = 1; $j <= $q; $j++ ) 
$row_data = $row_data.$b[$i][$j].' '; 
print $row_data; 
print "\r\n"; 
} 
// print result matrix 
print 'final matrix elements : '."\r\n"; 
for ( $i = 1; $i <= $m; $i++ ) 
{ 
$row_data = ""; 
for ( $j = 1; $j <= $q; $j++ ) 
$row_data = $row_data.$c[$i][$j].' '; 
print $row_data; 
print "\r\n"; 
} 



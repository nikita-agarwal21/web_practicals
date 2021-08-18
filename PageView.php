<!DOCTYPE html >
<head >
<title>My website</title>
</head>
<body style='background-color: cyan; text-align: center'>
<?php
$handle = fopen("Counter.txt", "r");
if(!$handle){
echo "could not open the file" ;
}
else
{
$counter = (int)fread($handle,20) ;
fclose($handle) ;
$counter++ ;
echo "<br><br><br><h1> You are visitor no : ". $counter."</h1>" ;

$handle = fopen("Counter.txt", "w" ) ;
fwrite($handle,$counter) ;
fclose($handle) ;
}
?>
</body>
</html >
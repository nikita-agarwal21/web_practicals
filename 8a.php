<?php 
if ( isset($_POST['operator'])) 
{ 
$operand1 = $_POST['operand1']; 
$operand2 = $_POST['operand2']; 
$operator = $_POST['operator']; 
switch ( $operator ) 
{ 
case '+' : 
$result = $operand1 + $operand2; 
break; 
case '-' : 
$result = $operand1 - $operand2; 
break; 
case 'x' : 
$result = $operand1 * $operand2; 
break; 
case '/' : 
$result = $operand1 / $operand2; 
break; 
} 
} 
else 
{ 
$operand1 = ''; 
$operand2 = ''; 
$result = ''; 
} 
$_POST['operator'] = ''; 
?> 
<html> 
<head> 
</head> 
<body style="text-align : center"> 
<form method="post" action=""> 
<br> 
<h1 style="color: red">Calculator</h1> 
<br> 
Operand 1: <input name="operand1" value="<?php echo $operand1; ?>"> 
<br> 
<br> 
Operand 2: <input name="operand2" value="<?php echo $operand2; ?>"> 
<br> 
<br> 
Operator : 
<input type="submit" name="operator" value="+"> 
<input type="submit" name="operator" value="-"> 
<input type="submit" name="operator" value="x"> 
<input type="submit" name="operator" value="/"> 
<br> 
<br> 
Result : <input name="result" value="<?php echo $result; ?>"> <br> 
</form> 
</body> 
</html> 

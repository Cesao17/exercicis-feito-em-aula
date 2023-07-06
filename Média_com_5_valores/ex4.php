<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
 $v1 = isset($_POST['val1'])?$_POST['val1']:"Valor 1 não informado";
 $v2 = isset($_POST['val2'])?$_POST['val2']:"Valor 2 não informado";
 $v3 = isset($_POST['val3'])?$_POST['val3']:"Valor 3 não informado";
 $v4 = isset($_POST['val4'])?$_POST['val4']:"Valor 4 não informado";
 $v5 = isset($_POST['val5'])?$_POST['val5']:"Valor 5 não informado";

 $med = ($v1 + $v2 + $v3 + $v4 + $v5)/5;

 echo "A média calculada é: $med";

?>
</body>
</html>

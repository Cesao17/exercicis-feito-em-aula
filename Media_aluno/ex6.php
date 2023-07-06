<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
 $v1 = isset($_POST['val2'])?$_POST['val2']:"Valor 1 não informado";
 $v2 = isset($_POST['val3'])?$_POST['val3']:"Valor 2 não informado";
 $v3 = isset($_POST['val4'])?$_POST['val4']:"Valor 3 não informado";
 $v4 = isset($_POST['nome'])?$_POST['nome']:"Valor 3 não informado";
 
 $med = ($v1 + $v2 + $v3)/3;
 
 
 echo "A media do aluno é: $med";
echo "<br>";

exit;
if ($med >= 60)
echo "aprovado";
else 
if ($med >=50 && <=59)
echo "em prova";
else
echo "reprovado";

?>
</body>
</html>

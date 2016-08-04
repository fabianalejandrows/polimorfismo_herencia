<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>

<?php

class Operacion
{


public function sumar($dato1,$dato2)
{
$resultado=$dato1+$dato2;
$this->resultado=$resultado;
}




public function restar($dato1,$dato2)
{
$resultado2=$dato1-$dato2;
$this->resultado2=$resultado2;
}



public function imprimir($operacion)
{
	$this->operacion=$operacion;

	if ($this->operacion=="Suma")
	{
	echo "Resultado Suma es $this->resultado";
	}
	
	if ($this->operacion=="Resta")
	{
	echo "Resultado Resta es $this->resultado2";
	}
	
}



}


$final=new Operacion();
$final->sumar($dato1=10,$dato2=20);
$final->restar($dato1=20,$dato2=10);
$final->imprimir($_POST["operacion"]);


//$nuevo->operar($_POST["v1"],$_POST["v2"]);

?>
</body>
</html>

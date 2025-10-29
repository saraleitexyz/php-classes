<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Echo y print</title>
</head>
<body>
<p><?php echo "Este texto se mostrará en la página web." ?></p>
<p><?= "Este texto se mostrará en la página web." ?></p>
<p><?php print("Este texto se mostrará en la página web.") ?></p>
</body>
</html>

<!-- Las que vamos a utilizar son echo cuando lo hagamos dentro de un bloque 
 de instrucciones y < ?= cuando sólo vayamos a mostrar el valor de una variable 
 dentro de un fragmento HTML -->
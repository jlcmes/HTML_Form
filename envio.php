<html>
<body>

Hola <?php echo $_GET["nombre"]; ?> !<br>

Tu correo es <?php echo $_GET["correo"]; ?>

Has enviado el siguiente mensaje: <p> <?php echo $_GET["mensaje"]; ?> </p>

Tu respuesta a si deseas recibir respuesta:  <?php echo $_GET["envioEmail"]; ?> 
</body>
</html>

<!--
Autor: Yamil Lopez
Creación: 28.7.2019
Última modificación: 01.08.2019
-->

<pre>
<?php
$servername='localhost';
$dbname='postulantes';
$password=NULL;
$username='root';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully"; 
  
    $sql = "SELECT * FROM Datos_personales";
	$stmt=$conn->query($sql);
	$postulante=$stmt->fetch(PDO::FETCH_ASSOC);
	while ($postulante=$stmt->fetch(PDO::FETCH_ASSOC))
   	    print_r($postulante);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

?>

<form action="formulario-v1.html">
    <input type="submit" name="volver" value="Volver">
</form>

</pre>


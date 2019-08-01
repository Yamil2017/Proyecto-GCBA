
<!--
Autor: Yamil Lopez
Creación: 29.7.2019
Última modificación: 01.08.2019
-->

<?php

$servername='localhost';
$dbname='postulantes';
$password=NULL;
$username='root';
//echo $_POST['delete'];
$filtro=$_POST['delete'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    $sql = "DELETE FROM Datos_personales WHERE `Datos_personales`.`dni`='$filtro'";
	$conn->exec($sql);	
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
$conn=null;

header("location:formulario-v1.html");
?>
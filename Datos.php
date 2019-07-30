<pre>
$_POST:
<?php
//include_once "pdo.php";
//print_r($_POST);

//DICCIONARIO DE VARIABLES
$actividad=$_POST['actividad'];
$apellido=$_POST['apellido'];
$areaPuesto=$_POST['areaPuesto'];
$calle=$_POST['calle'];
$casaEstudio=$_POST['casaEstudio'];
$ciudad=$_POST['ciudad'];
$dbname = "postulantes";
$descripcionPuesto=$_POST['descripcionPuesto'];
$dni=$_POST['dni'];
$empresa=$_POST['empresa'];
$especialidad=$_POST['especialidad'];
$estado_civil=$_POST['estado_civil'];
$estudioDesde=$_POST['estudioDesde'];
$estudioHasta=$_POST['estudioHasta'];
$experienciaDesde=$_POST['experienciaDesde'];
$experienciaHasta=$_POST['experienciaHasta'];
$fijo=$_POST['fijo'];
$idioma=$_POST['idioma'];
$movil=$_POST['movil'];
$nivelPuesto=$_POST['nivelPuesto'];
$nivelEstudio=$_POST['nivelEstudio'];
$nivelEscrito=$_POST['nivelEscrito'];
$nivelOral=$_POST['nivelOral'];
$nombres=$_POST['nombres'];
$objetivo=$_POST['objetivo'];
$pais=$_POST['pais'];
$paisEmpresa=$_POST['paisEmpresa'];
$password = "";
$personal=$_POST['personal'];
$provincia=$_POST['provincia'];
$puesto=$_POST['puesto'];
$referencia=$_POST['referencia'];
$servername = "localhost";
$sexo=$_POST['sexo'];
$username = "root";
//FIN DICCIONARIO DE VARIABLES

//Data insertion
try {
	
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO Datos_personales (nombres,apellido,sexo,estado_civil,dni) 
    VALUES ('$nombres','$apellido','$sexo','$estado_civil','$dni')";
    $conn->exec($sql);
	$lastId=$conn->lastInsertId();
    echo $lastId;

    $sql = "INSERT INTO Telefono (fijo,movil,datos_personales_id) VALUES ('$fijo','$movil','$lastId')";
    $conn->exec($sql);
    
    $sql = "INSERT INTO Direccion (pais,provincia,ciudad,calle,datos_personales_id) 
    VALUES ('$pais','$provincia','$ciudad','$calle','$lastId')";
    $conn->exec($sql);

    $sql = "INSERT INTO Experiencia_laboral (empresa,actividad_empresa,pais,puesto,nivel,area_puesto,personas_cargo,descripcion,
    desde,hasta,persona_referencia,datos_personales_id) VALUES ('$empresa','$actividad','$paisEmpresa','$puesto','$nivelPuesto',
    '$areaPuesto','$personal','$descripcionPuesto','$experienciaDesde','$experienciaHasta','$referencia','$lastId')";
    $conn->exec($sql);
       
    echo "New record created successfully\n\n";
    echo $conn->lastInsertId();
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>
</pre>

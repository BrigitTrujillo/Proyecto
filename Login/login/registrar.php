<?PHP
$hostname="localhost";
$database="usuarios";
$username="root";
$password="";
$json=array();
	if(isset($_GET["names"])&&($_GET["user"]) && isset($_GET["pwd"])){
		$names=$_GET['nombres']
		$user=$_GET['user'];
		$pwd=$_GET['pwd'];
		
		$conexion=mysqli_connect($hostname,$username,$password,$database);
		
		$consulta="INSERT INTO usuarios(nombres, user, pwd) VALUES ('{$nombres}','{$user}' , '{$pwd}')";
		$resultado=mysqli_query($conexion,$consulta);

       
		if($consulta){
		   $consulta="SELECT * FROM usuarios  WHERE nombres='{$nombres}'";
		   $resultado=mysqli_query($conexion,$consulta);

			if($reg=mysqli_fetch_array($resultado)){
				$json['datos'][]=$reg;
			}
			mysqli_close($conexion);
			echo json_encode($json);
		}



		else{
			$results["nombres"]='';
			$results["user"]='';
			$results["pwd"]='';
			$json['datos'][]=$results;
			echo json_encode($json);
		}
		
	}
	else{   
		    $results["nombres"]='';
		   	$results["user"]='';
			$results["pwd"]='';
			$json['datos'][]=$results;
			echo json_encode($json);
		}
?>
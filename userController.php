<?php 
	include_once "config.php";
	include_once "connectionController.php";

	if (isset($_POST['action'])) {
		$userController = new UserController();
		switch($_POST['action']) {
			case 'store':
				$nombre = strip_tags($_POST['nombre']);
				$nPerrito = strip_tags($_POST['nPerrito']);
				$raza = strip_tags($_POST['raza']);
				$email = strip_tags($_POST['email']);
				
				echo "cae en store";
				//$userController->store($nombre,$nPerrito,$raza,$email);
			break;
			case 'update':
				$nombre = strip_tags($_POST['nombre']);
				$nPerrito = strip_tags($_POST['nPerrito']);
				$raza = strip_tags($_POST['raza']);
				$email = strip_tags($_POST['email']);
				$id = strip_tags($_POST['id']);
				echo "update";
				//$userController->update($nombre,$nPerrito,$raza,$email,$id);
			break;
		}
	}

	class UserController
	{

		function get()
		{ 
			$sconn = connect();
			if(!$sconn->connect_error){

				$query = "select * from adopciones";
				$prepared_query = $sconn->prepare($query);
				$prepared_query->execute();

				$results = $prepared_query->get_result();
				$res = $results->fetch_all(MYSQLI_ASSOC);

				return $res;
			}else{
				return array();
			}
		}

		function store($nombre,$nPerrito,$raza,$email){
			$conn = connect();
			if (!$conn->connect_error){
				if($nombre!="" && $nPerrito!="" && $raza!="" && $email!=""){
					$query = "insert into adopciones (nombre,nPerrito,raza,email) values (?,?,?,?)";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('ssss',$nombre,$nPerrito,$raza,$email);
				
					if($prepared_query->execute()){
						$_SESSION['message'] = "Registro creado exitosamente";
						$_SESSION['status'] = "Success";
						echo "bien";
						header("Location: ".$_SERVER['HTTP_REFERER']);
					}else{
						$_SESSION['message'] = "El registro no se pudo completar";
						$_SESSION['status'] = "error";
						header("Location: ".$_SERVER['HTTP_REFERER']);
						echo "mal";
					}
				} else {
					$_SESSION['message'] = "Verifique su informacion";
					$_SESSION['status'] = "error";		
					header("Location: ".$_SERVER['HTTP_REFERER']);
				}
			} else {
				$_SESSION['message'] = "Problemas con la conexion del servidor";
				$_SESSION['status'] = "error";
				header("Location: ".$_SERVER['HTTP_REFERER']);
			}
		}

		function update($nombre,$nPerrito,$raza,$email,$id){
			$conn = connect();
			if (!$conn->connect_error){
				if($nombre!="" && $nPerrito!="" && $raza!="" && $email!="" && $id!=""){
					$query = "update adopciones set nombre = ?, nPerrito = ?, raza = ?, email = ? where id = ? ";
					$prepared_query = $conn->prepare($query);
					$prepared_query->bind_param('ssssi',$nombre,$nPerrito,$raza,$email,$id);
					
					if($prepared_query->execute()){
						$_SESSION['message'] = "Registro Actualizado exitosamente";
						$_SESSION['status'] = "Success";
						echo "bien";
						header("Location: ".$_SERVER['HTTP_REFERER']);
					}else{
						$_SESSION['message'] = "El proceso no se pudo completar";
						$_SESSION['status'] = "error";
						header("Location: ".$_SERVER['HTTP_REFERER']);
						echo "mal";
					}
					
				} else {
					$_SESSION['message'] = "Verifique su informacion";
					$_SESSION['status'] = "error";		
					header("Location: ".$_SERVER['HTTP_REFERER']);
				}
			} else {
				$_SESSION['message'] = "Problemas con la conexion del servidor";
				$_SESSION['status'] = "error";
				header("Location: ".$_SERVER['HTTP_REFERER']);
			}
		}
		

	}


 ?>
<?php 
	
	include_once "connectionController.php";

	class UserController
	{

		function get()
		{
			$conn = connect();
			if(!$conn->connect_error){

				$query = "select * from users";
				$prepared_query = $sconn->prepare($query);
				$prepared_query->execute();

				$results = $prepared_query->get_result();
				$users = $results->fetch_all(MYSQLI_ASSOC);

				return $users;
			}else{
				return array();
			}
		}

		function store($name,$last,$email,$pass){
			$conn = connect();
			if (!$conn->connect_error){
				if($name!="" && $last!="" && $email!="" && $pass!=""){
					$query = "insert into users (name,lastname,email,password) values (?,?,?,?)";
				$prepared_query = $conn->prepare($query);
				$prepared_query->bind_param('ssss',$name,$last,$email,$pass);
				if($prepared_query->execute()){
					$_SESSION['message'] = "Registro creado exitosamente";
					$_SESSION['status'] = "Success";
					header("Location: ".$_SERVER['HTTP_REFERER']);
				}else{
					$_SESSION['message'] = "El registro no se pudo completar";
					$_SESSION['status'] = "error";
					header("Location: ".$_SERVER['HTTP_REFERER']);
				}
			}else{
				$_SESSION['message'] = "Verifique su información";
					$_SESSION['status'] = "error";
					header("Location: ".$_SERVER['HTTP_REFERER']);
			}
		}else{
			$_SESSION['message'] = "Problemas con la conexión al servidor";
					$_SESSION['status'] = "error";
					header("Location: ".$_SERVER['HTTP_REFERER']);
		}
		}

	}


 ?>
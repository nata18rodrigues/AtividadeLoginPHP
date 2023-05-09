<?php
$local = '127.0.0.1:3306';
$user = 'root';
$pwd = 'root';
$db = 'loja';

$con= new mysqli($local, $user, $pwd, $db);

if($con->connect_error){
    echo $con->connect_error;
}


?>
<!DOCTYPE html>
<html>

<head>
	<title>conexao</title>
	<meta charset="utf-8">
	<script type="text/javascript">
		function loginsuccessfully() {
			setTimeout("window.location='index.php'", 1000)
		}
		function loginfailed() {
			setTimeout("window.location='login.php'", 1000);
		}
	</script>
</head>

<body>

	<?php
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	

	$sql = "SELECT * FROM usuario WHERE email = '{$email}' and senha = '{$senha}'";
    $result = $con->query($sql);
	$dados = $result->fetch_assoc();
	// var_dump($dados);
	
	if ($dados > 0) {
		$url = str_replace("/userauthentication.php","", $_SERVER["REQUEST_URI"]);

		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['senha'] = $senha;
		$_SESSION['nome'] = $dados['nome'];
		$_SESSION['url'] = $url;


		echo "<center>Você foi autenticado com sucesso! Aguarde um instante.</center>";
		echo "<script>loginsuccessfully()</script>";
	} else {
		echo "<center>E-mail ou senha invalidos!Aguarde um instante para tentar novamente.</center>";
		echo "<script>loginfailed()</script>";
	}


	?>
</body>

</html>
<?php

include_once 'conn.php';

function inserir_funcionario($func) 
{
	global $conn; 

	
	$values = "('".$func['nome']."', '" .$func['cargo']."', '".$func['email']."')";

	
	$sql = "INSERT INTO funcionarios_tb (nome, cargo, email) VALUES $values";

	
	$result = mysqli_query($conn, $sql);

	
	if (mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=cadok');
	}
	else
	{
		header('location:index.php?msg=caderro');
	}

}

function select_funcionario()
{

	global $conn; 
	
	
	$sql = "SELECT * FROM funcionarios_tb"; 

	
	$result = mysqli_query($conn, $sql);

	
	if (mysqli_affected_rows($conn) > 0)
	{

		
		$info = '';

		$info .= '<table class="table table-hover table-sm">';
		$info .= 	'<tr>';
		$info .= 		'<th>Cadastro #</th>';
		$info .= 		'<th>Funcionario</th>';
		$info .= 		'<th>Cargo</th>';
		$info .= 		'<th>E-mail</th>';
		$info .= 		'<th>Ações</th>';
		$info .= 	'</tr>';

		
		while ($func = mysqli_fetch_assoc($result)) 
		{ 
			
			$info .= '<tr>'; 
			foreach ($func as $key => $value) 
			{ 
				
			
				if ($key == 'id_funcionario') 
				{ 
					$id_funcionario = $value;
				}
				
				$info .= "<td>". $value . "</td>";
			}

			$info .= '<td>';
			$info .= 	'<a href="editar.php?id_funcionario='.$id_funcionario.'" class="btn btn-warning">Editar</a>  ';
			$info .= 	'<a href="deletar.php?id_funcionario='.$id_funcionario.'" class="btn btn-danger" onclick="return confirm(\'Tem certeza que deseja excluir este Funcionario?\')">Deletar</a>' ;
			$info .= '</td>';

			$info .= '</tr>'; 
		}
		$info .= '</table>';

		return $info; 

	}
	else 
	{
		return '<h3>Não há funcionários cadastrados</h3>'; 
	}

}


function cadastrar_user($user)
{

	global $conn;

	$values = "('" .$user['username'] ."', " .
			   "'" .$user['password'] ."', " .
			   "'" .$user['email']    ."') ";

	$sql = "INSERT INTO usuario_tb (username, password, email) VALUES $values";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:login.php?msg=newuser');
	}
	else
	{
		header('location:login.php?msg=usererro');
	}

}

function deletar_funcionario($id_funcionario)
{
	global $conn;

	$sql = "DELETE FROM funcionarios_tb WHERE id_funcionario = $id_funcionario";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=delok');
	}
	else
	{
		header('location:index.php?msg=delerro');
	}

}

function buscar_funcionario($id_funcionario)
{
	global $conn;

	$sql = "SELECT * FROM funcionarios_tb WHERE id_funcionario = $id_funcionario";

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		$funcionario = mysqli_fetch_assoc($result);
	}
	else
	{
		$funcionario = '';
	}

	return $funcionario;
}

function editar_funcionario($edt)
{
	global $conn;

	$values = "nome = '"   .$edt['nome']  . "', " .
			  "cargo = '"  .$edt['cargo'] . "', " .
			  "email = '"  .$edt['email'] . "' ";

	$sql = "UPDATE funcionarios_tb SET $values WHERE id_funcionario = " . $edt['id_funcionario'];

	$result = mysqli_query($conn, $sql);

	if(mysqli_affected_rows($conn) > 0)
	{
		header('location:index.php?msg=edtok');
	}
	else
	{
		header('location:index.php?msg=edterro');
	}

}

?>
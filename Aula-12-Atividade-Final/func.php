<?php

include_once 'DAO.php';

// função para verificar se form de cadastro está em branco dos funcinarios:
    function verificar_cad()
    {
        // se algum campo estiver em branco:
        if(empty($_POST['nome']) || empty($_POST['cargo']) ||empty($_POST['email']))
        {
            // mostra na tela, msg de erro:
            echo '<h3 class="alert alert-warning">Por favor, preencha todos os campos</h3>';
        }
        else 
        {
            // armazena em um array associativo os valores recebidos via post
            $func['nome']  = $_POST['nome'];
            $func['cargo'] = $_POST['cargo'];
            $func['email'] = $_POST['email'];
    
            // chamamos a função que irá TENTAR incluir a seríe na tabela 'funcionario' do BD:
            // o parâmetro enviado é o array associativo criado:
            inserir_funcionario($func);
        }
    }

function verificar_cad_user()
{
	// veficar se algum campos está em banco no cadastro do usuario:
	if(empty($_POST['username']) || 
	   empty($_POST['password']) || 
	   empty($_POST['email']))
	{
		echo '<h3 class="alert alert-warning">Por favor, preencha todos os campos</h3>';
	}
	else
	{
		$user['username'] = $_POST['username'];
		$user['password'] = $_POST['password'];
		$user['email']	  = $_POST['email'];

		//chamar função da DAO responsavel por cadastra um novo usuário
		cadastrar_user($user);

	}
}

function exibir_funcionarios()
{
	echo select_funcionario();
}

function verificar_msg()
{

	if(!empty($_GET['msg']))
	{
		$msg = $_GET['msg'];

		switch ($msg) 
		{
			case 'cadok':
				$texto = "Funcionário(a) cadastrado com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'caderro':
				$texto = "Erro ao cadastrar funcionário(a). Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'newuser':
				$texto = "Usuário(a) cadastrado com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'usererro':
				$texto = "Erro ao cadastrar usuário(a). Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'delok':
				$texto = "Funcionário(a) excluído com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'delerro':
				$texto = "Erro ao excluir funcionário(a). Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;

			case 'edtok':
				$texto = "Funcionário(a) editado com sucesso!";
				$classe = "alert alert-success";
				break;

			case 'edterro':
				$texto = "Erro ao editar funcionário(a). Por favor, tente novamente.";
				$classe = "alert alert-danger";
				break;
			
			case 'errobusca': 
				$texto = "ATENÇÃO: não foi possível encontrar o funcionario(a) especificado. <br> 
				Por favor, tente novamente.";
				$classe = "alert alert-warning";
                break;

            case 'empty': 
                $texto = "ATENÇÃO: preencha todos os dados do para logar no sistema";
                $classe = "alert alert-warning";
				break;
				
            case 'invalid': 
                $texto = "ATENÇÃO: username ou password inválidos! tente novamente";
                $classe = "alert alert-warning";
                break;              
               

			default:
				$texto = '';
				$classe = '';
				break;
		}// fim switch

		echo '<h3 class="'.$classe.'">'.$texto.'</h3>';


	}

}


?>
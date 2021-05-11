<?php

session_start();
require("../../database/conexao.php");
switch($_POST["acao"]){

    case "login":

        //Receber os campos de formulários
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        //montar o sql select na tabela tbl_administrador
        $sqlSelect = "SELECT * FROM tbl_administrador WHERE usuario = '$usuario'";
        $resultado = mysqli_query($conexao, $sqlSelect) or die(mysqli_error($conexao));
        $usuario = mysqli_fetch_array($resultado);

        //verificar se o usuario existe e se a senha está correta
        if($usuario["senha"] == $senha){
            $mensagem = "Usuário logado";
            //se estiver correta, salvar o id e o nome do usuario na sessão
            $_SESSION["id"] = $id;
            $_SESSION["usuario"] = $usuario;

            //redirecionar para a tela de listagem de produtos
            header("location: ../../produtos/index.php?mensagem=$mensagem");
        }else{
            $mensagem = "usuário não logado";
            header("location: ../../produtos/index.php?mensagem=$mensagem");
        }

    break;

         case "logout":
         //implementar o logout

            if(isset($_SESSION['id'])){
                session_destroy();
                
                header("location:../../produtos/index.php");

                break;
            }
    
        }

?>
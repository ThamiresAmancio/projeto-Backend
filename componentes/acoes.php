<?php

session_start();
require("../database/conexao.php");
switch($_POST["acao"]){

    case "login":

        //Receber os campos de formulários
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        //montar o sql select na tabela tbl_administrador
        $sqlSelect = "SELECT * FROM tbl_adminitrador WHERE usuario = '$usuario' and senha '$senha';";
        $resultado = mysqli_query($conexao, $sqlSelect);
        $usuario["senha"] = mysqli_fetch_array($resultado);

        //verificar se o usuario existe e se a senha está correta
        if($usuario["senha"] == $senha){
            $mensagem = "Usuário logado";
        }else{
            $mensagem = "usuário não logado";
        }
            //se estiver correta, salvar o id e o nome do usuario na sessão
            $_SESSION["id"] = $id;
            $_SESSION["nome"] = $nome;

            //redirecionar para a tela de listagem de produtos
            header("location: http://localhost/web-backend/icatalogo-parte1/produtos/index.php?mensagem=$mensagem");

    break;

         case "logout":
         //implementar o logout

            if(isset($_SESSION['id'])){
                session_destroy();
                
                header("location: http://localhost/web-backend/icatalogo-parte1/produtos/index.php");

                break;
            }
    
        }

?>
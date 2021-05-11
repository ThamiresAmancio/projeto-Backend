<?php

session_start();
require("../../database/conexao.php");


function validarCampos()
    {
        $erros = [];
        if(isset($_POST["usuario"]) && $_POST["usuario"] == ""){
            $erros = " O campo usuário é obrigatório";
        }
        if(isset($_POST["senha"]) && $_POST["senha"] == ""){
            $erros = " O campo senha é obrigatório";
        }

        return $erros;
    }

switch($_POST["acao"]){


    case "login":

        $erros = ValidarCampos();
            if(count($erros) > 0){
                $_SESSION["mensagem"] = $erros;
            }

        //Receber os campos de formulários
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        //montar o sql select na tabela tbl_administrador
        $sqlSelect = "SELECT * FROM tbl_administrador WHERE usuario = '$usuario'";
        $resultado = mysqli_query($conexao, $sqlSelect) or die(mysqli_error($conexao));
        $usuario = mysqli_fetch_array($resultado);

        //verificar se o usuario existe e se a senha está correta
        if(!$usuario || password_verify($senha,$usuario["senha"])){
            $erros[] = "Usuário e/ou senha inválidos";

            $_SESSION["erros"] = $erros;
        }else{
            //se estiver correta, salvar o id e o nome do usuario na sessão
            $_SESSION["usuarioId"] = $usuario["id"];
            $_SESSION["usuarioNome"] = $usuario["nome"];

            $_SESSION["mensagem"] = "Bem vindo ," . $usuario["nome"];
        }

        header("location: ../../produtos/index.php?");


    break;

         case "logout":
         //implementar o logout
                session_destroy();
                
                header("location:../../produtos/index.php");

                break;
    
        }

?>
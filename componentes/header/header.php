session_start();
<link rel="stylesheet" href="/web-backend/icatalogo-parte1/componentes/header/header.css">
<header class="header">
    <figure>
        <img src="/web-backend/icatalogo-parte1/imgs/logo.png">
    </figure>
    <input type="search" placeholder="Pesquisar" />
    <nav>
    <?php
    
    if(!isset($_SESSION["id"])){
    ?>
        <ul>
            <a id="menu-admin"> Administrar </a>
        </ul>
    <?php
    }else{
    ?>
        <ul>
            <form action="/web-backend/icatalogo-parte1/componentes/header/acoes.php" method="POST">
                <input type="hidden" name="acao" value="logout"/>
                <?php
                    echo("Seja Bem Vindo " . $_SESSION["nome"]);
                ?>
                <button>Logout</button>
            </form>
        </ul>
    <?php
    }
    ?>

    </nav>
    <div id="container-login" class="container-login">

    <h1>fazer login</h1>
    <form method="POST" action="/web-backend/icatalogo-parte1/componentes/header/acoes.php">
        <input type="hidden" name="acao" value="login">
        <input type="text" name="usuario" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <button>Entrar</button>
    </form>

    </div>
</header>


<script lang="javascript">
    document.querySelector("#menu-admin").addEventListener("click",toggleLogin);
        function toggleLogin(){
            let containerLogin = document.querySelector("#container-login");

            if(containerLogin.style.opacity == 0){
                containerLogin.style.opacity = 1;
                containerLogin.style.height = "200px";

            }else{
                containerLogin.style.opacity = 0;
                containerLogin.style.height = "0px";

            }
        }
</script>
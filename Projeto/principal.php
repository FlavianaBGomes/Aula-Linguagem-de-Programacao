<?php
      require_once("cabecalho.php"); //outra função parecida é o require
      //require_once vai verificar se aquele conteúdo já foi incluído
      //include
        echo "<h2> Usuário: ".$_SESSION['usuario']." </h2>";
?>
      <p><a href="sair.php">Sair</a></p>
<?php
require_once("rodape.php");
?>

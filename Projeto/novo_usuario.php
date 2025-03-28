<?php
    require_once("conexao.php");
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        try{
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);
            $stmt = $pdo->prepare("INSERT INTO usuarios(nome, email, senha) VALUES (?, ?, ?)");
            if ($stmt ->execute([$nome, $email, $senha])){
                header("location: index.php?cadastro=true");
            } else{
                echo "<p>Erro ao inserir o usuário</p>";
            }
        } catch (Exception $e) {
            echo "Erro ao inserir usuário". $e->getMessage();
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Controle de Estoque</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Sistema de Controle de Estoque</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<form method="post">
                        
                        <div class="mb-3">
                            <label for="nome" class="form-label">Informe o nome</label>
                            <input type="text" id="nome" name="nome" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="nome" class="form-label">Informe o e-mail</label>
                            <input type="email" id="nome" name="nome" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="senha" class="form-label">Informe a senha</label>
                            <input type="password" id="senha" name="senha" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            

</body>
</html>
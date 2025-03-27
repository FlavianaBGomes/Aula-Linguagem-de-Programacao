<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1> Hoje é </h1>
        <?php
        //este é um comentário
        #este é um comentário
        
            echo date("d/m/Y");
        ?>
        <p>
            <?php
            $nome = "Flaviana";
            echo "O nome é: $nome"; //se uso aspas duplas será exibido o nome da variavel
            ?>
        <p>
        <p>
            <?php
            echo 'O nome é: $nome'; //não mostra o conteudo da variável
            ?>
        <p>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
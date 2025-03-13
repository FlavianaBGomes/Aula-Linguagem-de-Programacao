<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            try {
            $valores = $_POST["valor"]; //a variável post é também um array
            var_dump($valores);

      } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
      }
    }
?>
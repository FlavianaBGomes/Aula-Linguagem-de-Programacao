<?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
            try {
            $valores = $_POST["valor"]; //a variável post é também um array
            var_dump($valores);


            $array1 = [0, 1, 2, 3];
            $array2 = array("uva", "maçã", "banana");
            $array3 = [
                  "uva" => 3,
                  "maçã" => 4,
                  "banana" => 5
            ];
      } catch (Exception $e) {
            echo "Erro: " . $e->getMessage();
      }
    }
?>
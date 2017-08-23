<?php 
    if (!isset($argv[1]) || !isset($argv[2])) { 
         echo 'Dígite corretamente o nome do livro e o tipo de usuario(professor ou aluno)' . PHP_EOL;
         exit;
    }
        
    $name = $argv[1];
    $user = $argv[2];

    switch ($user) {
        case 'professor':
            echo 'Recibo:' . PHP_EOL . 'Livro emprestado --> '. $name . 
                  PHP_EOL . 'Voce tem 10 dias para devolver o livro' . PHP_EOL;
            break;
        case 'aluno':
            echo 'Recibo:' . PHP_EOL . 'Livro emprestado --> '. $name .
                  PHP_EOL . 'Voce tem 3 dias para devolver o livro' . PHP_EOL;
            break;
        default:
            echo 'Usuário invalido' . PHP_EOL;
            break;
        }
?>
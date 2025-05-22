<?php
    if (isset($_POST['nome']) && isset($_POST['tell']) && isset($_POST['email']) && isset($_POST['senha'])){
        $nome = $_POST['nome'];
        $tell = $_POST['tell'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        echo "$nome <br> $tell <br> $email <br> $senha"; 
    }
?>
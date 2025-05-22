<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>projeto 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div id="box">
            <?php
            $con = mysqli_connect("localhost", "root", "", "bancodados");
            $sel = mysqli_query($con, "SELECT * FROM dados");
            
            while ($arranjo = mysqli_fetch_array($sel)){
                echo $arranjo['nome'] ."<br>";
                echo $arranjo['CPF'] ."<br>";
                echo $arranjo['endereço'] ."<br>";
                echo $arranjo['telefone'] ."<br>"."<br>";
            };
            ?>    
        </div>
    </section>  
</body>
</html>
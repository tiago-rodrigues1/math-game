<?php 
    $userResponse = "";
    if(isset($_POST["response"])) {
        $userResponse = $_POST["response"]; 
    }
    
    $result = "";
    if(isset($_POST["result"])) {
        $result = $_POST["result"]; 
    }
    
    $pathImage = "";
    $message = "";

    if ($userResponse == $result) {
        $pathImage = "./images/win-img.svg";
        $message = "Parabéns! Você acertou!";
    } else {
        $pathImage = "./images/fail-img.svg";
        $message = "Não foi dessa vez!";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>

    <link rel="stylesheet" href="styles/globals.css">
    <link rel="stylesheet" href="styles/result.css">
</head>
<body>
    <div class="container">
        <div class="result">
            <img src="<?php echo $pathImage; ?>" alt="">
            <h1><?php echo $message; ?></h1>
        </div>

        <button>Jogar novamente</button>
    </div>
</body>
</html>
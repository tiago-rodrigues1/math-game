<?php
    include "./classes/Operation.php";

    $number1 = rand(1, 99);
    $number2 = rand(1, 99);

    if (isset($_GET["op"])) {
        $operation = new Operation($_GET["op"]);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Game</title>

    <link rel="stylesheet" href="styles/globals.css">
    <link rel="stylesheet" href="styles/match.css">
</head>

<body>
    <header>
        <h1>Math Game</h1>
        <h4 id="game-mode">Modo de jogo: <?php echo $operation->name; ?></h4>
    </header>
    <main>
        <form method="post" action="result.php?op=<?php echo $operation->opCode; ?>">
            <div class="operation-container">
                <span>
                    <?php echo $number1; ?>
                </span>
                <span>
                    <?php echo $operation->sign ?>
                </span>
                <span>
                    <?php echo $number2; ?>
                </span>
            </div>

            <div class="response-container">
                <input type="text" placeholder="Sua resposta" name="response" require>
                <input type="hidden" name="result" value="<?php echo $operation->getResult($number1, $number2); ?>">
                <button type="submit">Submeter</button>
            </div>
        </form>
    </main>
</body>
</html>
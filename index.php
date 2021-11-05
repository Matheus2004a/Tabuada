<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada - Estruturas de Repetição em PHP</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <form action="tabuada.php" method="post" class="form-calculator">
        <h2>Calculando tabuada de um número</h2>
        <div class="form-floating mb-3">
            <input type="text" name="numEsc" class="form-control" id="floatingInput" placeholder="name@example.com" autofocus>
            <label for="floatingInput">Escolha um número qualquer:</label>
        </div>
        <div class="form-floating">
            <input type="text" name="numMax" class="form-control" id="floatingText" placeholder="Password">
            <label for="floatingText">Até que número você quer contar?</label>
        </div>
        <span>
            <button type="submit" class="btn btn-success">Calcular</button>
            <button type="reset" class="btn btn-danger">Limpar</button>
        </span>

        <?php
        include "tabuada.php";
        if (empty($numEsc)) {
            echo $_SESSION['msg-erro'];
            unset ($_SESSION['msg-erro']);
        }
        ?>
    </form>
</body>

</html>
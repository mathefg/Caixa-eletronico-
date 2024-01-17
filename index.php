<!DOCTYPE html>
<html lang="pt-be">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $saque=$_REQUEST['saque'] ?? 0;
    ?>
    <main>
        <h1>Digite o valor que deseja sacar</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="request">
        <label for="saque">Valor R$</label>
        <input type="number" name="saque" id="saque" value="<?=$saque?>">
        <input type="submit" value="Sacar">
    </form>
    </main>
    <?php 
    //floor:serve igualmete ao int 
    //%= serve para quando for colocar a variavel igual a ela mesma, então coloca o operador e o igual 
    //EX: $resto = $resto % 100 é igual a $resto %= 100
    
    $resto = $saque;
    $cem = floor($resto / 100);
    $resto %= 100;
    $cin = floor($resto / 50);
    $resto %= 50;
    $vin = floor($resto / 20);
    $resto %= 20;
    $dez = floor($resto / 10);
    $resto %= 10;
    $cinco = floor($resto / 5);
    $resto %= 5;
    $dois = floor($resto / 2);
    $resto %= 2;
    $um = floor($resto / 1);
    $resto %= 1;
    ?>
    <section>
        <h2>Saque de R$ <?=$saque?> realizado </h2>
        <p>O caixa eletronico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota">x<?=$cem?></li>
            <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota">x<?=$cin?></li>
            <li><img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota">x<?=$vin?></li>
            <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota">x<?=$dez?></li>
            <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota">x<?=$cinco?></li>
            <li><img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota">x<?=$dois?></li>
            <li><img src="imagens/1-real.jpg" alt="Nota de 1" class="nota">x<?=$um?></li>
        </ul>
    </section>
</body>
</html>
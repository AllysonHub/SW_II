<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <title>Processamento</title>
</head>
<body>
    <?php 

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $ano_atual = date('Y');
        $ano_nasc = $ano_atual - $idade;

    ?>

    <p>O Nome é: <?php echo $nome; ?> </p>
    <p>O Email é: <?php echo $email; ?> </p>
    <p>A Idade é: <?php echo $idade; ?> </p>
    <p>O seu ano de nascimento é: <?php echo $ano_nasc; ?> </p>

    <?php 
        if ($idade < 18) {
            echo "<p class='azul'> Você é Menor de Idade</p>";
        }else{
            echo "<p class='vermelho'> Você é Maior de Idade</p>";
        }

        echo "<p>LISTA DE CLIENTES</p>";
        echo "<ul>";
        // Laço de rep
        for ($i=1; $i <= $idade; $i++) { 
            echo "<li>Cliente $i </li>";
        }
        echo "</ul>";
    
    ?>

    <table style="width:100%">
        <tr>
            <th>Clientes</th>
            <th>Idades</th>
            <th>Cidades</th>
        </tr>
        <tr>
            <td>Robertu</td>
            <td>18</td>
            <td>Australia</td>
        </tr>
        <tr>
            <td>Marchelo Virgonili</td>
            <td>22</td>
            <td>Italia</td>
        </tr>
        <tr>
            <td>Zezinho</td>
            <td>77</td>
            <td>Pamoinha da serra</td>
        </tr>
    </table>

</body>
</html>
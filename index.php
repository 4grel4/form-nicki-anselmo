<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario NickiHand </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main id="container">


        <form class="container-form" action="inseririnfos.php" method="POST">
            <h1 class="tituloForm">Formulário</h1>
            <h2 class="subtitulo">Vai ser Barbz sim !!</h2>

            <span>Nome: </span>
            <input type="text" id="inputForm" name="cxnome" class="cxnome" placeholder="Digite seu nome" required> 
            <br>


            <span>Cidade: </span>
            <input type="text" id="inputForm" name="cxcidade" class="cxcidade" placeholder="Digite sua cidade" required>
            <br>


            <span>Idade: </span>
            <input type="number" id="inputForm" name="cxidade" class="cxidade" placeholder="Digite sua idade" required>
            <br>


            <span>Artista: </span>
            <input type="text" id="inputForm" name="cxartista" class="cxartista" placeholder="Artista preferido" required>
            <br>


            <span>Gênero: </span>
            <input type="text" id="inputForm" name="cxgenero" class="cxgenero" placeholder="Gênero de música preferido"
                required> <br>


            <span>CEP: </span>
            <input type="text" id="inputForm" name="cxcep" class="cxcep" placeholder="Seu CEP" required> <br>

            
            <span>Cor: </span>
            <input type="text" id="inputForm" name="cxcor" class="cxcor" placeholder="Cor preferida" required> <br>



            <button class="botaoEnvi" value="Gravar">Enviar</button>


        </form>

    </main>

</body>

</html>
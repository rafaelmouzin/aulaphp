<!DOCTYPE html>
<html lang="pt-BR" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET e POST</title>
</head>
<body>
    <h1>Formulário com GET</h1>
    <p>OS formulários que utilizam GET apresentam seu conteúdo
        enviado na barra de endereço do navegador. <br>
        Todo form sem o atributo <b>method</b> é do tipo GET. <br>
        Os dados são enviados para o arquivo do atributo <b>action</b>
    </p>
    <form action="recebe-get.php" method="GET">
        <!-- LABEL contém o texto de instrução do campo, o atributo for 
    aponta para o id de um INPUT-->
        <label for="nome">Digite seu nome: </label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade"><br>

        <label for="altura">Digite sua altura:</label>
        <input type="number" name="altura" id="altura" step="0.1"><br>

        <label for="Genero">Escolha seu gênero:</label>
        <select name="genero" id="genero">
            <option value="">-- Escolha --</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
            <option value="O">Outro</option>
        </select><br>

        <button type="reset">Limpar</button> &nbsp;
        <button type="submit">ENVIAR</button>
    </form>

    <hr><hr>

    <h1>Formulário com POST</h1>
    <p>OS formulários que utilizam POST OCULTAM seu conteúdo
        enviado do usuário comum, aparecento apenas na depuração. <br>
        
        Os dados são enviados para um arquivo do atributo.<b>action</b>
    </p>
    <form action="recebe-post.php" method="POST">
        <!-- LABEL contém o texto de instrução do campo, o atributo for 
    aponta para o id de um INPUT-->
        <label for="nome">Digite seu nome: </label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade"><br>

        <label for="altura">Digite sua altura:</label>
        <input type="number" name="altura" id="altura" step="0.1"><br>

        <label for="Genero">Escolha seu gênero:</label>
        <select name="genero" id="genero">
            <option value="">-- Escolha --</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
            <option value="O">Outro</option>
        </select><br>

        <button type="reset">Limpar</button> &nbsp;
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>
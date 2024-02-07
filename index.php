<!DOCTYPE html>
<html lang="pt">
<head>
    <!-- Codigo by ClevCodes link channel https://www.youtube.com/@clevcodes-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Links para arquivos css-->
    <link rel="stylesheet" href="styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'/>
    <title>Upload de imagem</title>
</head>
<body>
    
    <section class="conteudo">

        <header>
            <h1>Preview e Upload de Imagem</h1>
        </header>

        <form action="#" method="post" enctype="multipart/form-data">
            <div class="imagem">
                <img/>
            </div>
    
            <div class="linhas">
                <label for="demo"><i class="bx bx-camera"></i> <span>Selecione imagem</span></label>
                <input type="file" name="imagem" id="demo" hidden>
            </div>
    
            <div class="linhas">
                <button type="submit"><i class="bx bx-cloud-upload"></i> <span>Enviar imagem</span></button>
            </div>
        </form>
    </section>

    <script src="scripts/script.js"></script>
</body>
</html>
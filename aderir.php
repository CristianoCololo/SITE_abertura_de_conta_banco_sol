<?php
    if (isset($_POST["article"])) {
        $articles_posted = $_POST["article"];
    }else{
        $articles_posted = "identificacao";
    }
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aderir::<?php echo $articles_posted ?></title>
    <link rel="stylesheet" href="css/fontes.css">
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php
        $article_names = array('identificacao','documentacao','adicional','conclusao');
        
        switch ($articles_posted) {
            case $article_names[0]:
                $header_info = "Para iniciar o processo de abertura de conta online, precisamos que insira alguns dados de identificacao.";
                break;
            case $article_names[1]:
                $header_info = "Coloque os dados sobre o seu documento de identificacao";
                break;
            case $article_names[2]:
                $header_info = "Falta pouco, preencha alguns dados adicionais para terminar";
                break;
            case $article_names[3]:
                $header_info = "Feito. Seus dados estao em ordem, clique em 'Feito' para confirmar";
                break;
            default:
            $header_info = "OCORREU UM ERRO, POR FAVOR CONTACTE O DESENVOLVEDOR";
                break;
        }
    ?>

    <header>
        <h1>BANCO SOL</h1>
        <span id="subtitulo"> Abertura de Conta no Banco Sol Online</span>
        <span><?php echo $header_info; ?></span>
        <div class="progress">
            <ul>
                <li <?php echo (($articles_posted == $article_names[0]) ?  "class=\"enable\"" : "") ?>>Indetificao</li>
                <li <?php echo (($articles_posted == $article_names[1]) ?  "class=\"enable\"" : "") ?>>Documentos</li>
                <li <?php echo (($articles_posted == $article_names[2]) ?  "class=\"enable\"" : "") ?>>Dados Adicionais</li>
                <li <?php echo (($articles_posted == $article_names[3]) ?  "class=\"enable\"" : "") ?>>Concluindo</li>
            </ul>
        </div>
    </header>

    <main>
        <?php
            if ($articles_posted == $article_names[0]): // ------------------------------------------------- //
        ?>
            <article class="identificacao">
                <div class="form">
                    <div class="input_username_div">
                        <label>NOME DE USUARIO</label>
                        <input type="name" id="username">
                    </div>
                    <div class="input_email_div">
                        <label>EMAIL</label>
                        <input type="email" id="email">
                    </div>
                    <div class="input_password_div">
                        <label>PASSWORD </label>
                        <input type="password" maxlength="6" id="password">
                    </div>
                    <div class="input_confirm_password_div">
                        <label>CONFIRMAR PASSWORD</label>
                        <input type="password" maxlength="6" minlength="4" id="confirmed_password">
                    </div>
                </div>
                <div class="buttons">
                    <button id="voltar">Voltar</button>
                    <button id="avancar">Avançar</button>
                </div>
            </article>
        <?php
            endif;

            if ($articles_posted == $article_names[1]): // ----------------------------------------------------//
        ?>
            <article class="documentacao">
                <div class="form">
                    <div class="input_foto_div">
                        <label>Foto de Perfil (Opcional)</label>
                        <input type="file" id="foto_perfil">
                    </div>
                    <div class="input_bi_frente_div">
                        <label>Numero de Bilhete de identidade</label>
                        <input type="text" id="numero_bi">
                    </div>
                </div>
                <div class="buttons">
                    <button id="voltar">Voltar</button>
                    <button id="avancar">Avançar</button>
                </div>
            </article>
        <?php
            endif;

        if ($articles_posted == $article_names[2]) :
        ?>
            <article class="adicional">
                <div class="form">
                    <div class="input_data_nascimento_div">
                        <label>Data de nascimento</label>
                        <input type="date" id="data_nascimento">
                    </div>
                    <div class="input_genero_div">
                        <label>Genero</label>
                        <select name="genero_choice" id="genero_choice" >
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="input_provincia_div">
                        <label>Provincia</label>
                        <select name="provincias" id="provincias">
                            <?php
                                $provincias = array("Bengo","Benguela","Bié","Cabinda","Cuando Cubango","Cuanza Norte","Cuanza Sul","Cunene","Huambo","Huíla","Luanda","Lunda Norte","Lunda Sul","Malanje","Moxico","Namibe","Uíge","Zaire");
                                for ($i = 0; $i < 18; $i++) : ?>
                                <option value="<?php echo $provincias[$i]?>"><?php echo $provincias[$i]?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                <div class="buttons">
                    <button id="voltar">Voltar</button>
                    <button id="avancar">Avançar</button>
                </div>
            </article>

        <?php
        endif;
        if ($articles_posted == $article_names[3]) :
        ?>

            <article class="concluido">
                <div class="form">
                    <img src="img/done.png" alt="Done">
                    <p>Cadastro concluido</p>
                </div>
                <div class="buttons">
                    <button id="feito">Feito</button>
                    <button id="descartar">Descartar</button>
                </div>
            </article>

        <?php
        endif;

        ?>
    </main>

    
<script src="js/<?php echo $articles_posted ?>_article_controller.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/fontes.css">
    <link rel="stylesheet" href="css/destyle.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    switch ($_POST['article']) {
        case 'indetificacao':
            $header_info = "Para iniciar o processo de abertura de conta online, precisamos que insira alguns dados de indetificacao.";        
            break;
        case "documentos":
            $header_info = "Precisamos de imagens claras e nitidas do seu bilhete para continuar";        
            break;
        case "adicionais":
            $header_info = "Falta pouco, preencha alguns dados adicionais para terminar";
            break;
        case "concluindo":
            $header_info = "Feito. Sua Conta foi criada com sucesso, clique em 'Feito. para continuar";
            break;
        default:
            
            break;
    }
?>
    <header>
        <h1>BANCO SOL</h1>
        <span id="subtitulo"> Abertura de Conta no Banco Sol Online</span>
        <span><?php echo $header_info; ?></span>
        <div class="progress">
            <ul>
                <li>Indetificao</li>
                <li>Documentos</li>
                <li>Dados Adicionais</li>
                <li>Concluindo</li>
            </ul>
        </div>
    </header>

    <main>

        <?php
            if ($_POST["article"] == "indetificacao") :
        ?>
            <article class="indetificao">
                <div class="form">
                    <div class="input_username_div">
                        <label>NOME DE USUARIO</label>
                        <input type="name" required>
                    </div>
                    <div class="input_email_div">
                        <label>EMAIL</label>
                        <input type="email" required>
                    </div>
                    <div class="input_password_div">
                        <label>PASSWORD </label>
                        <input type="password" inputmode="numeric" pattern="[0-9]*" maxlength="4" required>
                    </div>
                    <div class="input_confirm_password_div">
                        <label>CONFIRMAR PASSWORD</label>
                        <input type="password" inputmode="numeric" pattern="[0-9]*" maxlength="4" required>
                    </div>
                </div>
                <div class="buttons">
                    
                    <form action="index.php" method="post">
                        <button>Voltar</button>
                    </form>
                    
                    <form action="aderir.php" method="post">
                        <input type="hidden" name="article" value="documentos">
                        <button>Avançar</button>
                    </form>
                </div>
            </article>

        <?php 
            endif;//
            if ($_POST["article"] == "documentos"):
        ?>
            <article class="documentos">
                <div class="form">
                    <div class="input_foto_div">
                        <label>Escolha uma foto de Perfil (Opcional)</label>
                        <input type="file" id="foto_perfil">
                    </div>
                    <div class="input_bi_frente_div">
                        <label>Carrege a foto do seu bilhete - frente</label>
                        <input type="file" id="bi_frente">
                    </div>
                    <div class="input_bi_verso_div">
                        <label>Carrege a foto do seu bilhete - verso</label>
                        <input type="file" id="bi_verso">
                    </div>
                </div>
                <div class="buttons">
                    <form action="aderir.php" method="post">
                        <input type="hidden" name="article" value="indetificacao">
                        <button>Voltar</button>
                    </form>
                    <form action="aderir.php" method="post">
                        <button>Avançar</button>
                    </form>
                    
                </div>
            </article>
        
        <?php 
            endif;
            if ($_POST["article"] == "adicionais") :
        ?>

        <article class="adicionais">
            <div class="form">
                <div class="input_data_nascimento_div">
                    <label>Data de nascimento</label>
                    <input type="date" id="data_nascimento">
                </div>
                <div class="input_genero_div">
                    <label>Genero:</label><br>
                    <input type="radio" id="m" name="m">
                    <label>Masculino</label><br>
                    <input type="radio" id="f" name="f">
                    <label>Feminino</label><br>
                </div>
                <div class="input_provincia_div">
                    <label>Provincia</label>
                    <se1lect name="provincias" id="provincias">
                        <option>Luanda</option>
                        <option>Malanje</option>
                        <option>Bengo</option>
                        <option>Benguela</option>
                        <option>Cabinda</option>
                        <option>Cunene</option>
                        <option>Cuando Cubango</option>
                        <option>Muxico</option>
                        <option>Huila</option>
                        <option>Zaire</option>
                        <option>Kuanza Sul</option>
                        <option>Kuanza Norte</option>
                        <option>Namibe</option>
                        <option>Huambo</option>
                        <option>Lunda Norte</option>
                        <option>Lunda Sul</option>
                        <option>Uige</option>
                        <option>Bie</option>
                    </se1lect>
                </div>
            </div>
            <div class="buttons">
                <button>Voltar</button>
                <button>Avançar</button>
            </div>
        </article>

        <?php 
            endif;
            if ($_POST["article"] == "conclusao") :
        ?>

        <article class="conclusao">

        </article>

        <?php 
            endif;
          
        ?>

        
    </main>



</body>

</html>
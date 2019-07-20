<?php
if (isset($_POST['config'])) {

    require_once '../assets/php/modules/uploadImage.php';

    $imagem = array(
        'arquivo' => $_FILES['photo'],
        'nome' => 'logo',
        'destino' => '../assets/img/',
        'extensoes' => array('jpg', 'png', 'jpeg', 'gif')
    );

    $upload = new UploadImage($imagem);
    $save = $upload->salvar();
    if($save){
        $setConfig = array(
            "HOST_DB" => $_POST['proj_host'],
            "NAME_DB" => $_POST['proj_banco'],
            "PASS_DB" => $_POST['proj_pass'],
            "USER_DB" => $_POST['proj_user'],
            
            #Project
            "PROJECT_NAME" => $_POST['proj_name'],
            "PROJECT_FOTO" => explode('../', $save)[1],
        );

        $final = "";
        foreach($setConfig as $key => $value){
            $final .= $key .'='. $value . PHP_EOL;
        }

        safefilerewrite('../config.ini', $final);

    }else{
        print_r($upload->error);
    }
}

function safefilerewrite($fileName, $dataToSave){
    if ($fp = fopen($fileName, 'w')) {
        $startTime = microtime(TRUE);
        do {
            $canWrite = flock($fp, LOCK_EX);
            // If lock not obtained sleep for 0 - 100 milliseconds, to avoid collision and CPU load
            if (!$canWrite) usleep(round(rand(0, 100) * 1000));
        } while ((!$canWrite) and ((microtime(TRUE) - $startTime) < 5));

        //file was locked so now we can store information
        if ($canWrite) {
            fwrite($fp, $dataToSave);
            flock($fp, LOCK_UN);
        }
        fclose($fp);
    }
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Setup</title>

    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div class="main">

        <div class="container">
            <h2>Configurar Projeto</h2>
            <form action="setup.php" method="POST" id="signup-form" class="signup-form" enctype="multipart/form-data">
                <h3>
                    Projeto
                </h3>
                <fieldset>
                    <div class="form-row">
                        <div class="form-file">
                            <input type="file" class="inputfile" name="photo" id="your_picture" onchange="readURL(this);" data-multiple-caption="{count} files selected" multiple />
                            <label for="your_picture">
                                <figure>
                                    <img src="images/your-picture.png" alt="" class="your_picture_image">
                                </figure>
                                <span class="file-button">Escolher Logo Projeto</span>
                            </label>
                        </div>
                        <div class="form-group-flex">
                            <div class="form-group">
                                <input type="text" name="proj_name" id="first_name" placeholder="Nome Projeto" />
                            </div>
                        </div>
                    </div>
                </fieldset>

                <h3>
                    Banco de Dados
                </h3>
                <fieldset>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <input type="text" name="proj_host" placeholder="Host" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="proj_pass" placeholder="Senha" />
                        </div>
                    </div>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <input type="text" name="proj_user" placeholder="Usuário" />

                        </div>
                        <div class="form-input">
                            <input type="text" name="proj_porta" placeholder="Porta" />

                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="proj_banco" placeholder="Nome Banco" />
                    </div>
                </fieldset>
                <!-- <h3>
                    Address
                </h3>
                <fieldset>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <input type="text" name="street_name" id="street_name" placeholder="Street Name" />
                        </div>
                        <div class="form-input">
                            <input type="text" name="street_number" id="street_number" placeholder="Street Number" />
                        </div>
                    </div>
                    <div class="form-row form-input-flex">
                        <div class="form-input">
                            <input type="text" name="city" id="city" placeholder="City" />
                        </div>
                        <div class="form-input">
                            <select name="country" id="country">
                                <option value="">Country</option>
                                <option value="Viet Nam">Viet Nam</option>
                                <option value="USA">USA</option>
                            </select>
                            <span class="select-icon"><i class="zmdi zmdi-caret-down"></i></span>
                        </div>
                    </div>
                </fieldset> -->
                <input type="hidden" name="config">
            </form>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
<html>
    <head>
        <title>Upload provisório</title>
    </head>
    <body>
        <form action="#" method="POST" enctype="multipart/form-data">
            <input type="file" name="fileUpload">
            <input type="submit" value="Enviar">
        </form>
        <?php
        $dir = 'uploads/';
        $files = scandir($dir, 1);

        echo "<ul>";
        foreach ($files as $file):
            if (strlen($file) > 5) {
                echo "<li><a href=\"uploads/{$file}\" target=\"_blank\">{$file}</a></li>";
            }
        endforeach;
        echo "</ul>";
        ?>
    </body>
</html>

<?php
if (isset($_FILES['fileUpload'])) {
    date_default_timezone_set("Brazil/East");

    $ext = strtolower(substr($_FILES['fileUpload']['name'], -4)); //Pegando extensão do arquivo
    $new_name = md5(date("Y-m-d H:i:s")) . $ext; //Definindo um novo nome para o arquivo
    $dir = 'uploads/';

    if (move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir . $new_name)) {
        echo "Arquivo enviado com sucesso!";
    } else {
        echo "Erro ao enviar o arquivo!";
    }
}
?>
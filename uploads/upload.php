<?php

$photos = $_FILES['photos'];
$path = 'uploadss/img/';

if (!is_dir($path)) {
    mkdir('uploads/img/');
    mkdir($path);
}

for ($i = 0; $i < count($photos['name']); $i++) 
{
  $j = $i + 1;
  if (move_uploaded_file($photos['tmp_name'][$i], $path . $photos['name'][$i] ))
        echo "Sucesso ao mover arquivo {$j} <hr>";
    else
        echo "Erro ao mover arquivo {$j} <hr>";
}
?>
<html>
    <body>
        <a href="forms.html">voltar</a>
    </body>
</html>
<?php
    echo "Leitura de arquivos";
    echo "<br><br>";
    //echo readfile("alunosImp.csv");
$arquivo = fopen('<input type="file" class="btn btn-primary" name="userfile" />', "r") or die("Não consegui abrir o arquivo, deu erro");

while(!feof($arquivo)) {
    $linha = fgets($arquivo);
    echo $linha;
    echo "<br>";
}
        echo "Final do Arquivo";
    
    fclose($arquivo);
?>
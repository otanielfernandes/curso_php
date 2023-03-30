<?php
/*
fopen()
fclose()
fwrite()
!feof()
fgets()
filesize
*/
    //Criando uma variável para mostrar onde encontra-se o arquivo:
        $arquivo = "arquivo.txt";

    //Criando uma variável para abrir o arquivo:
        $arquivoAberto = fopen($arquivo, 'r'); 


    //Criando o conteudo:
        $conteudo = "Conteúdo de teste\r\n";
        $tamanhoArquivo = filesize($arquivo);

    //Usando o fwrite para inserir o conteudo:  
        // fwrite($arquivoAberto, $conteudo);

    while(!feof($arquivoAberto)):
            $linha = fgets($arquivoAberto, $tamanhoArquivo);
            echo $linha."<br/>";
    endwhile;

    //Fechando o arquivo aberto:

        fclose($arquivoAberto);
?>
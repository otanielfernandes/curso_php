<?php
    //Trabalahndo com funções de datas:

    //Mostra o dia em formato numérico (apenas dois digitos):
    echo date('d')."<hr/>";

    //Mostra o dia da semana (em apenas 3 letras):
    echo date('D')."<hr/>";

    //Mostra o mês em formato numérico (em apenas 2 digitos):
        echo date('m')."<hr/>";

    //Mostra o mês em forma alfabética (em apenas 3 letras):
        echo date('M')."<hr/>";

    //Mostra o apenas os dois últimos digitos do ano:
        echo date('y')."<hr/>";

    //Mostra os digitos todos referidos ao ano:
        echo date('Y')."<hr/>";


    //Exibindo a data completa:
        echo date('D')."/".date('M')."/".date('Y')."<hr/>";

    //Ou podemos exibir da forma seguinte:

        echo date('d-m-Y')."<hr/>";

    //Outra forma:
        echo date('M, d')."<sup>th</sup> ".date('Y')."<hr/>";

    //Mostrando todos os caracteres do dia da semana:

    echo date('l')."<hr/>";

    //Data com o horário:
    
    date_default_timezone_set('Africa/Luanda');
    echo date('d-m-Y  H:i:s')."<hr/>";

    //Caso tivermos uma coluna de data no banco de dados:
    $date = date('Y-m-d');  //Date
    echo $date."<br/>";

    //Caso tivermos duas colunas, uma de data e outra de horário:
    $datetime = date('Y-m-d H:i:s');
    echo $datetime."<hr/>";

    //Retorna os segundos que já se passaram desde 1970 até hoje
    echo time()."<hr/>";

    //mktime:
    $data_pagamento = mktime(14, 30, 00, 15, 02, 2023);
    echo date('d/m/y - H:i', $data_pagamento)."<hr/>";

    //Normalmente ass datas no banco de dados aparecdem em formato string:
        $data = "2023-02-14 13:50";
    //Precisa-se formatar essa data do formato string para time:
        $data_formatada = strtotime($data);

        echo date('d-m-Y H:i', $data_formatada);
?>



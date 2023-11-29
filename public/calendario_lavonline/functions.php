<?php 

function prevMonth($time)
{

    return date('Y-m-d', strtotime("-1 month", $time)); // pega o mes que eu coloco na funcao e volta 1 

}

function nextMonth($time)
{

    return date('Y-m-d', strtotime("+1 month", $time)); // pega o mes que eu coloco na funcao e avanca 1

}

function getMonth()
{

    $monthtime = strtotime(date("Y-m-1")); // organiza e comeca do dia primeiro para depois colocar nas funcoes acima

    if(isset($_GET["month"]))
    {
        extract(date_parse_from_format("Y-m-d", $_GET["month"]));

        $monthtime = strtotime("{$year}-{$month}-1"); // salva o mes atual do proximo e anterior na url para avancar ou voltar
    }

    return $monthtime;

}


?>
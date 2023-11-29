
<link rel="stylesheet" href="/calendario_lavonline/style_calendar.css"> 

@php

require_once("../public/calendario_lavonline/functions.php");

$monthTime = getMonth();

echo "<h1>".date('F Y', $monthTime)."</h1>";

@endphp


<table>
    <thead>
        <tr>
            <th>do</th>
            <th>se</th>
            <th>te</th>
            <th>qa</th>
            <th>qi</th>
            <th>se</th>
            <th>sa</th>
        </tr>
    </thead>

<form method="POSt" action="{{ route('mark.day') }}" >

@csrf

<input type="hidden" name="id_washing" value="{{ $id_washing }}">

@php
$startDate = strtotime("last sunday", $monthTime);

$day = date('d');

echo "<tbody>";

for($i = 0; $i < 6; $i++){ //linha, dias da semana seg, quar, quin etc

    echo "<tr>";

    for($j = 0; $j < 7; $j++){ // colunas dias do mes, 1 ,2 ,3 ,4

        if(date('Y-m', $startDate) != date('Y-m', $monthTime)){
            echo "<td><input name='day' class='other-month' type='submit' value=". date('j', $startDate) ."></td>";
        } else if($day == date('j', $startDate)){
            echo "<td><input name='day' class='day' type='submit' value=". date('j', $startDate) ."></td>";
        } else {
            echo "<td><input name='day' type='submit' value=". date('j', $startDate) ."></td>";
        }
       
        
        echo "</td>";

        $startDate = strtotime("+1 day", $startDate);

    }

    echo "</tr>";

}
    
       
echo "</tbody>";
echo "</table>";

@endphp

</form>


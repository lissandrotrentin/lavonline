 <?php

require_once("functions.php");

echo " <link rel=\"stylesheet\" href=\"style_calendar.css\"> ";

$monthTime = getMonth();

echo  '
<header>
    <a href="?month=' .prevMonth($monthTime). '">anterior</a>
    <h1>'.date('F Y', $monthTime).'</h1>
    <a href="?month=' .nextMonth($monthTime). '">proximo</a>
</header> ';

echo "
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
";

$startDate = strtotime("last sunday", $monthTime);

echo "<tbody>";

for($i = 0; $i < 6; $i++){ //linha, dias da semana seg, quar, quin etc

    echo "<tr>";

    for($j = 0; $j < 7; $j++){ // colunas dias do mes, 1 ,2 ,3 ,4

        if(date('Y-m', $startDate) != date('Y-m', $monthTime)){
            echo "<td class='other-month'>";
        } else{
            echo "<td>";
        }
       
        echo date('j', $startDate);
        echo "</td>";

        $startDate = strtotime("+1 day", $startDate);

    }

    echo "</tr>";

}
    
       
echo "</tbody>";
echo "</table>";





?>
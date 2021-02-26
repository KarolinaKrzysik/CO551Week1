<html>
<body>
<?php 
    $hourlyrate = 5.75;
    $hoursperweek = 40;
    $taxRate = 0.22;
    $gross = $hourlyrate * $hoursperweek;
    $netWage = $gross * (1 - $taxRate);
    echo $netWage;
?>
</body>
</html>
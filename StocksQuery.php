<?php

include('/Applications/MAMP/htdocs/02Stocks/Stocks.php');



$file = fopen("./data/TopStocks.csv", "r");
$count = 0;
$row = fgetcsv($file);

while (!feof($file)) {
    $row = fgetcsv($file);
    $rank = $row[0];
    $symbol = $row[1];
    $companyName = $row[2];
    $quant = $row[3];
    $saAuthors = $row[4];
    $wallStreet = $row[5];
    $marketCap = (float) $row[6];
    $marketCapInBillion = (float) $row[6] / 1_000_000_000;

    $aStock = new Stock($rank, $symbol, $companyName, $quant, $saAuthors, $wallStreet, $marketCap, $marketCapInBillion);

    print_r($aStock);

}

print_r("Chounoune, rudgino");

?>
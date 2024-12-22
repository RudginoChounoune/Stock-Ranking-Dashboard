<?php
include('function.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="format.css">
    <link rel="stylesheet" href="format-custom.css">
</head>

<body>
    <h2>Stock Rankings <span class="developer">Developer Rudgino Chounoune</span></h2>

    <form method="get" action="">
        <label>ranking:</label>
        <input class="number" type="number" name="ranking" value="<?= isset($_GET['ranking']) ? $_GET['ranking'] : 15; ?>" />
        <input type="submit" value="query" />
    </form>

    <p>
        <ol>
            <li> Highlight companies with a market cap greater or equal to 40 billion dollars</li>
            <li> Highlight companies with a market cap less than or equal to 15 billion dollars</li>
        </ol>
    </p>

    <br />

    <table>
        <thead>
            <tr>
                <th>rank</th>
                <th>symbol</th>
                <th>company</th>
                <th>quant</th>
                <th>sa authors</th>
                <th>wall street</th>
                <th>market cap in billions</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $file = fopen("./data/TopStocks.csv", "r");
            $count = 0;
            $row = fgetcsv($file);

            $inputRanking = isset($_GET['ranking']) ? $_GET['ranking'] : 15;

            while (!feof($file)) {
                $row = fgetcsv($file);
                $rank = $row[0];
                $symbol = $row[1];
                $companyName = $row[2];
                $quant = $row[3];
                $saAuthors = $row[4];
                $wallStreet = $row[5];
                $marketCap = $row[6];

                $highLightClass = '';

                if ($rank <= $inputRanking) {
                    $marketCapValue = money_in_billions($marketCap);

                    if ($marketCapValue >= 40) {
                        $highLightClass = 'high-light-green';
                    } elseif ($marketCapValue <= 0.15) {
                        $highLightClass = 'high-light-red';
                    }
                    ?>
                                            <tr class="<?= $highLightClass ?>">
                                                <td><?= $rank ?></td>
                                                <td><?= $symbol ?></td>
                                                <td><?= $companyName ?></td>
                                                <td class="number"><?= qpa($quant) ?></td>
                                                <td class="number"><?= qpa($saAuthors) ?></td>
                                                <td class="number"><?= qpa($wallStreet) ?></td>
                                                <td class="number"><?= $marketCapValue ?></td>
                                            </tr>
                                            <?php
                                            $count++;
                }
                if ($count >= $inputRanking) {
                    break;
                }
            }

            fclose($file);
            ?>
        </tbody>
    </table>
</body>

</html>

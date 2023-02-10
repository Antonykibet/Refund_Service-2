<?php

include 'storeData.php';

if ($_GET['country'] == "USA") {
    $storesInfo = $usStores;
} elseif ($_GET['country'] == "UK") {
    $storesInfo = $ukStores;
} else {
    $storesInfo = $canadaStores;
}
?>

<head>
    <link rel="stylesheet" href="../styles/storeInfo.css">
</head>
<body>
    <div id="container">
        <div>
            <?php
                if ($_GET['name'] == 'Victorias Secret') {
                    echo "Victoria's Secret";
                } elseif ($_GET['name'] == 'Macys') {
                    echo "Macy's";
                } else {
                    echo $_GET['name'];
                }
            ?>
        </div>
        <div id="weHaveRefunds">We have - refunds for this store</div>
        <div id="theMinimumAmountIs">
            <?php echo "The minimum amount is $" . $storesInfo[$_GET['name']][0] . " to submit"?>
        </div>
        <div id="limitContainer">
            <div>
                <div>
                    <?php echo "$ " . $storesInfo[$_GET['name']][1]?>
                </div>
                <div id="purchase">PURCHASE LIMIT</div>
            </div>
            <div>
                <div>
                    <?php echo $storesInfo[$_GET['name']][2]?>
                </div>
                <div id="item">ITEM LIMIT</div>
            </div>
            <div>
                <div>
                    <?php echo $storesInfo[$_GET['name']][3]?>
                </div>
                <div id="order">ORDER LIMIT (PER PERSON)</div>
            </div>
            <div>
                <div>
                    <?php echo $storesInfo[$_GET['name']][4]?>
                </div>
                <div id="refund">REFUND TIMEFRAME</div>
            </div>
        </div>
    </div>
</body>
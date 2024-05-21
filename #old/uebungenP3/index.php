<?php
// require_once 'Depot.php';#
// require_once 'Stock.php';#

spl_autoload_register(function ($class) {
    include $class . '.php';
});

$microsoft = new Stock(1, 'MSFT', 240.0);
$apple = new Stock(2, 'AAPL', 304.0);
$paypal = new Stock(3, 'PYPL', 102.0);
$nvidia = new Stock(4, 'NVDA', 756.0);



$data = [
    'balance' => 3000.00,
    'iban' => 'AT123456789',
    'owner' => 'Lukas Ludwig',
    'stocks' => [
        ['label' => 'MSFT', 'price' => 240.0, 'amount' => 10],
        ['label' => 'AAPL', 'price' => 304.0, 'amount' => 5],
        ['label' => 'PYPL', 'price' => 102.0, 'amount' => 2],
        ['label' => 'NVDA', 'price' => 756.0, 'amount' => 1],
    ]
];

$my_depot = Depot::fromArray($data);
var_dump($my_depot);


$depot = new Depot([], 1000.0, 'AT123456789', 'Lucia Ludwig');

$depot->deposit(4000.00);


$depot->buyStocks($microsoft, 10);
$depot->buyStocks($apple, 5);
$depot->buyStocks($paypal, 2);
$depot->buyStocks($nvidia, 1);


include 'header.php';
?>
<!-- Hier kommt die Tabelle -->

<main style="padding: 0;">

    <table>
        <tr>
            <th>Label</th>
            <th>Price/Piece</th>
            <th>Amount</th>
            <th>Value</th>
        </tr>
        <?php foreach ($depot->getStock() as $stock) : ?>
            <tr>
                <td><?= $stock->label ?></td>
                <td><?= $stock->price ?></td>
                <td><?= $stock->amount ?></td>
                <td><?= $stock->price + $stock->amount ?></td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td>Balance</td>
            <td></td>
            <td></td>
            <td><?php $depot->balance ?></td>
        </tr>
    </table>
</main>

<?php include 'footer.php'; ?>
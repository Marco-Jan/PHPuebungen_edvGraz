<?php

declare(strict_types=1);




class Depot
{

    public function __construct(
        private array $stocks = [],
        public float $balance = 0.0,
        public string $iban = '',
        public string $owner = '',
    ) {
    }

    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }
    public function getStock()
    {
        return $this->stocks;
    }
    public function buyStocks(object $stock, int $amount): void
    {
        $price = $stock->price * $amount;
        if ($this->balance >= $price) {
            $this->balance -= $price;
            $stock->amount += $amount;
            $this->stocks[$stock->label] = $stock;
        }
    }

    public function sellStock(string $label, int $amount)
    {
        $stock = $this->stocks[$label];
        if (!isset($stock)) {
            return;
        }
        if ($stock->amount >= $amount) {
            $stock->amount -= $amount;
            $this->balance += $stock->price * $amount;
        }
    }

    public static function fromArray(array $data): Depot
    {
        $stocks = isset($data['stocks']) ? $data['stocks'] : [];
        $balance = isset($data['balance']) ? $data['balance'] : 0.0;
        $iban = isset($data['iban']) ? $data['iban'] : '';
        $owner = isset($data['owner']) ? $data['owner'] : '';

        return new Depot($stocks, $balance, $iban, $owner);
    }
}

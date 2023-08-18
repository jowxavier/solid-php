<?php

interface FreightInterface
{
    public function calculate(int $value): int;
}

class Pac implements FreightInterface
{
    private int $tax = 5;

    public function calculate(int $value): int
    {
        return $value * $this->tax;
    }
}

class Sedex implements FreightInterface
{
    private int $tax = 10;

    public function calculate(int $value): int
    {
        return $value * $this->tax;
    }
}

class Free implements FreightInterface
{
    public function calculate(int $value): int
    {
        return $value;
    }
}

class Freight 
{
    private $freight;

    public function __construct(FreightInterface $freightInterface)
    {
        $this->freight = $freightInterface;
    }

    public function message(int $value): string
    {
        return "<h3>O Valor total é <b>{$this->freight->calculate($value)}</b></h3>";
    }
}

$pac = new Pac;
$sedex = new Sedex;
$free = new Free;

$freightPac = new Freight($pac);
$freightSedex = new Freight($sedex);
$freightFree = new Freight($free);
echo $freightPac->message(10);
echo $freightSedex->message(20);
echo $freightFree->message(0);


<?php

class Freight 
{
    public function calculate(string $name, int $value): string
    {
        if ($name == 'PAC') {
            $calculate = $value * 5;
            return "<h3>O Valor total é <b>{$calculate}</b></h3>";
        } else if ($name == 'SEDEX') {
            $calculate = $value * 10;
            return "<h3>O Valor total é <b>{$calculate}</b></h3>";
        }
    }
}

$freight = new Freight;
echo $freight->calculate('PAC', 10);
echo $freight->calculate('SEDEX', 20);



